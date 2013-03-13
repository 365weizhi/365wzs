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
        if($this->view == 'index' || $this->view == 'add'){
        }
        else if(!$isLogin){
        	$this->redirect('/ajax/login');
        }
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $favors = $this->Favor->find('all');
		$this->set('favors', $favors);//$this->paginate());
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
 * 2. 商品没被分享过
 * 操作：
 * 1. 商品属性 并修改商品属性content_id、user_id、faver_count= 0
 * 2. 更新商品属性 update_time，修改商品description
 * 3. 添加到表favors，记录content_id、item_id、user_id
 * 5. 修改categories的son_count--
 * 6. 从cateogry_items中删除item
 * 
 * @return void
 */
    public function add($item_id) {
        if ($this->request->is('post')) {
	        $item = $this->Item->find("first", array(
	        	'conditions'=>array(
	        		'Item.id'=>$item_id,
	        	)
	        ));
	        if(!$item){
	        	$message = __('该商品不存在.');
	        }
	        else if($item['Item']['user_id'] != 0){
	        	$message = __('已分享该商品.');
	        }
	        else {
	         	$item['Item']['user_id'] = $this->uid;
          		$item['Item']['content_id'] = $_POST['content_id'];
          		$item['Item']['description'] = $_POST['description'];
          		$item['Item']['favor_count'] = 0;
          		$item['Item']['update_time'] = time();
          		$_item = $this->Item->save($item);
          		
          		// 添加喜欢的商品到自己的专刊中
          		$favor = Array();
          		$favor['Favor']['item_id'] = $item_id;
                $favor['Favor']['content_id'] = $_POST['content_id'];
                $favor['Favor']['user_id'] = $this->uid;
                $_favor = $this->Favor->save($favor);
                
                // 判断是否需要刷新专刊的封面
                $content = $this->Content->read(null, $favor['Favor']['content_id']);
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
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favor->save($this->request->data)) {
				$this->Session->setFlash(__('The favor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Favor->read(null, $id);
		}
		$users = $this->Favor->User->find('list');
		$items = $this->Favor->Item->find('list');
		$contents = $this->Favor->Content->find('list');
		$this->set(compact('users', 'items', 'contents'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Favor->id = $id;
		if (!$this->Favor->exists()) {
			throw new NotFoundException(__('Invalid favor'));
		}
		if ($this->Favor->delete()) {
			$this->Session->setFlash(__('Favor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
