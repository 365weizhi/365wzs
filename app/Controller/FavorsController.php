<?php
App::uses('AppController', 'Controller');
/**
 * Favors Controller
 *
 * @property Favor $Favor
 */
class FavorsController extends AppController {
    public $uses = array('Favor', 'Content', 'Item');

    function beforeFilter(){
        if($this->view == 'add' && !$this->isLogin()){
            $this->redirect("/ajax/login");
        }
        parent::beforeFilter();
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
 *
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
 * add method
 * @param string $item_id
 * @return void
 */
    public function add($item_id) {
		$this->autoRender = false; 
        $item = $this->Item->find("first", array(
        	'conditions'=>array(
        		'Item.id'=>$item_id,
        	)
        ));
        
        $favor = $this->Favor->query("select count(*) as count from 365wzs_favors where item_id=$item_id and user_id={$this->uid}");
        if(!$item){
        	$message = __('该商品不存在.');
        } 
        else if($favor[0][0]['count'] > 0){
        	$message = __('已分享该商品.');
        }
        else {
          	if ($this->request->is('post')) {
          		// 添加喜欢的商品到自己的专刊中
                $favor['Favor'] = $this->request->data;
                $favor['Favor']['user_id'] = $this->uid;
                $favor_rlt = $this->Favor->save($favor);
	                // 判断是否需要刷新专刊的封面
                $content = $this->Content->read(null, $favor['Favor']['content_id']);
                if(empty($content['Content']['pic_url'])){
                	$content['Content']['pic_url'] = $item['Item']['pic_url'];
                	$this->Content->save($content);
                }
                
		    	if ($favor_rlt) {
                    $this->Item->query("update 365wzs_items set favor_count=favor_count+1 where id = $item_id");
                    $message = __('分享成功.');
			    } else {
			    	$message = __('分享失败,请稍后重试.');
                }
		    }
        }
        $this->Session->setFlash($message);
        $this->redirect("/");
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
