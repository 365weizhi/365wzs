<?php
App::uses('AppController', 'Controller');
/**
 * Likes Controller
 *
 * @property Like $Like
 */
class LikesController extends AppController {
    public $uses = array('Like', 'Item');

    function beforeFilter(){
        if($this->Session->check("username") && $this->Session->check("user_id")){
        
        }else{
            $this->redirect("/users/login");
        }
    }


/**
 * index method
 *
 * @return void
 */
    public function index() {
        $like = $this->Like->find('all', array(
            'conditions'=>array(
                'User.id'=>$this->Session->read('user_id')
            )
        ));
        $this->set("likes", $like);
		#$this->Like->recursive = 0;
		#$this->set('likes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		$this->set('like', $this->Like->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
    public function add($id) {
        $user_id = $this->Session->read('user_id');
        $this->Item->recursive = -1;
        $this->Like->recursive = -1;

        // Add a item_id for add_view
        $item_id = $id;
        $this->Item->id = $item_id;
        $like = $this->Like->query("select count(*) as count from 365wzs_likes where item_id=$item_id and user_id=$user_id");
		//pr($like);
        if(!$this->Item->exists()){
            $this->Session->setFlash(__('Wanna Shared item not exists'));
            $this->redirect('/');
        }
        else if($like[0][0]['count'] > 0){
            // this judge for whether have shared this items
            $this->Session->setFlash(__('已经偷偷喜欢啦.'));
            $this->redirect("/");
        }
        else{
            if ($this->request->is('post')) {
                $this->Like->create();
                #pr($this->request->data);
                $like['Like'] = $this->request->data;
			    if ($this->Like->save($like)) {
				    $this->Session->setFlash(__('The like has been saved'));
                    // Add count for counting likes
                    $this->Item->query("update 365wzs_items set like_count=like_count+1 where id = $item_id");
				    $this->redirect("/");
			    } else {
				    $this->Session->setFlash(__('The like could not be saved. Please, try again.'));
                }
		    }
            $this->set(compact('item_id'));
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
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Like->save($this->request->data)) {
				$this->Session->setFlash(__('The like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The like could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Like->read(null, $id);
		}
		$users = $this->Like->User->find('list');
		$items = $this->Like->Item->find('list');
		$this->set(compact('users', 'items'));
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
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		if ($this->Like->delete()) {
			$this->Session->setFlash(__('Like deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Like was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Like->recursive = 0;
		$this->set('likes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		$this->set('like', $this->Like->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Like->create();
			if ($this->Like->save($this->request->data)) {
				$this->Session->setFlash(__('The like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The like could not be saved. Please, try again.'));
			}
		}
		$users = $this->Like->User->find('list');
		$items = $this->Like->Item->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Like->save($this->request->data)) {
				$this->Session->setFlash(__('The like has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The like could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Like->read(null, $id);
		}
		$users = $this->Like->User->find('list');
		$items = $this->Like->Item->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid like'));
		}
		if ($this->Like->delete()) {
			$this->Session->setFlash(__('Like deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Like was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
