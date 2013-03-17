<?php
App::uses('AppController', 'Controller');
/**
 * Favors Controller
 *
 * @property Favor $Favor
 */
class FavorsController extends AppController {
    public $uses = array('Favor', 'Content', 'Item', 'Category');

    function beforeFilter(){
    	$isLogin = $this->isLogin();
        if($this->view == 'index' || $this->view == "delete"){
        }
        else if(!$isLogin){
        	$this->redirect('/ajax/login');
        }
    }

/**
 * view method
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		$this->set('favor', $this->Favor->read(null, $id));
	}

/**
 * 分享商品到用户的目录
 * 前置条件：
 * 1. 存在该商品
 * 2. 商品没被分享过，且只能分享一次
 * 操作：
 * 1. 商品属性 并修改商品属性content_id、user_id、faver_count= 0
 * 2. 更新商品属性 update_time，修改商品description
 * 3. 添加到表favors，记录item_id、user_id
 * 5. 修改categories的son_count--
 * 6. 从cateogry_items中删除item
 */
    public function add($item_id) {
        $item = $this->Item->find("first", array(
        	'conditions'=>array(
        		'Item.id'=>$item_id,
        	)
        ));
        if(!$item){
        	$message = __('该商品不存在.');
       		$this->Session->setFlash($message);
        	$this->redirect("/");
        }
        else if($item['Item']['user_id'] != 0){
        	$message = __('该商品已被分享.');
       		$this->Session->setFlash($message);
        	$this->redirect("/");
        }
        if ($this->request->is('post')) {
	         	$item['Item']['user_id'] = $this->uid;
          		$item['Item']['content_id'] = $_POST['content_id'];
          		$item['Item']['description'] = $_POST['description'];
          		$item['Item']['favor_count'] = 0;
          		$item['Item']['update_time'] = time();
          		$_item = $this->Item->save($item);
          		
          		// 添加喜欢的商品到自己的专刊中
          		$favor = Array();
          		$favor['Favor']['item_id'] = $item_id;
          		// 由于已经被分享的的商品只可以被赞，所以不需要content_id
                //$favor['Favor']['content_id'] = $_POST['content_id'];
                $favor['Favor']['user_id'] = $this->uid;
                $_favor = $this->Favor->save($favor);
                
                // 判断是否需要刷新专刊的封面
                $content = $this->Content->read(null, $_POST['content_id']);
                if(empty($content['Content']['pic_url'])){
                	$content['Content']['pic_url'] = $item['Item']['pic_url'];
                	$this->Content->save($content);
                }
                
		    	if ($_favor && $_item) {
                    $this->Category->query("update 365wzs_categories set son_count=son_count-1 where id = ".$_item['CategoryItem']['category_id']);
					$this->Item->CategoryItem->id = $item['CategoryItem']['id'];
                    $this->Item->CategoryItem->delete();
                    $message = __('分享成功.');
			    } else {
			    	$message = __('分享失败,请稍后重试.');
                }
	       		$this->Session->setFlash($message);
	        	$this->redirect("/");
        }
        else {
        	$this->set("contents", $this->Content->find("all", array(
        		'conditions'=>array(
        			'user_id'=>1
        		)
        	)));
        }
	}

/**
 * 用户修改分享的商品信息
 * 前置条件：
 * 1. 分享记录存在
 * 2. 商品是自己分享的
 * 操作：
 * 1. 修改商品的描述信息
 * 2. 修改商品所属的目录
 */
	public function edit($id = null) {
		$favor = $this->Favor->read(null, $id);
		$message = "";
		if (!$favor) {
			$message = "分享记录不存在";
			$this->redirect("/");
		}
		else if($favor['Favor']['user_id'] != $this->uid){
			$message = "该商品不是你分享的哦~";
			$this->redirect("/");
		}
		else {
			if ($this->request->is('post')) {
				$favor['Item']['description'] = $_POST['description'];
				$favor['Item']['content_id'] = $_POST['content_id'];
				if ($this->Favor->save($favor)) {
					$message = "修改成功";
					$this->redirect(array('action' => 'index'));
				} else {
					$message = "修改失败";
				}
				$this->Session->setFlash(__($message));
			} 
			else {
				$this->set("description", $favor['Item']['description']);
				$this->set("contents", $this->Content->find("all", array(
					'conditions'=>array(
						'user_id'=>$this->uid
					)
				)));
			}
		}
	}

/**
 *用户删除自己分享过的商品
 * 前置条件：
 * 1. 存在该商品
 * 2. 商品是用户自己分享的
 * 操作：
 * 1. 商品属性并修改商品属性content_id、user_id、faver_count = 0
 * 2. 更新商品属性 update_time，修改商品description
 * 3. 从favors删除记录
 * 5. 修改categories的son_count++
 * 6. 从cateogry_items中添加item
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			$message = "error";
		}
		$favor = $this->Favor->read(null, $id);
		if(!$favor){
			$message = "该分享记录不存在";
		}
		else if($favor['Favor']['user_id'] != $this->uid){
			$message = "这个商品不是您分享的哟~";
		}
		else {
			// 清理Item自带的属性
			$item = array();
			$item['Item'] = $favor['Item'];
			$item['Item']['content_id'] = 0;
			$item['Item']['user_id'] = 0;
			$item['Item']['favor_count'] = 0;
			$item['Item']['description'] = '';
			$item['Item']['update_time'] = '';
			$this->Item->save($item);
			
			$this->Favor->delete($favor['Favor']['id']);
			$this->Category->query("update 365wzs_categories set son_count=son_count+1 where id = 1");
			$categoryItem = array();
			$categoryItem['CategoryItem']['category_id'] = 1;
			$categoryItem['CategoryItem']['item_id'] = $item['Item']['id'];
			$this->Item->CategoryItem->save($categoryItem);
			$message = "删除成功";
		}
		$this->Session->setFlash(__($message));
		$this->redirect("/");
	}
}
