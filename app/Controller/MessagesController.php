<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {
/**
 * beforeFilter
 * verify whether user is login
 */
    function beforeFilter(){
        if($this->Session->check("user_id") && $this->Session->check("username")){
            
        }else{
            $this->redirect("/users/login");
        }
    
    }

/**
 * notice function
 * for ajax & notice user whether has a message
 */
    public function notice(){
        $this->autoRender = false;
        $this->Message->recursive = -1;
        $messages = $this->Message->find('all', array(
            'conditions'=>array(
                'user_id'=>$this->Session->read("user_id")
            )
        ));
        echo json_encode($messages);
    }

    public function recieved($id){
        $this->autoRender = false;
        $this->Message->recursive = -1;

        $user_id = $this->Session->read('user_id');
        $sql = "update 365wzs_messages set status = 1 where id=$id and user_id=$user_id";
        $this->Message->query($sql);
        $rt_obj['code'] = 'success';
        echo json_encode($rt_obj);
    }

/**
 * view method
 * view detail message
 */
    public function view($id = null){
        $this->Message->id = $id;
        if(!$this->Message->exists()){
        
        }
        $this->set('message', $this->Message->read(null, $id));

    }
/**
 * index method
 *
 * @return void
 */
    public function index() {
        $user_id = $this->Session->read('user_id');
        $messages = $this->Message->find('all', array(
            'conditions'=>array(
                'user_id'=>$user_id
            )
        ));
		$this->set(compact('messages'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
	public function view($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}
 */


/**
 * add method
 *
 * @return void
 */
    public function add($item_id) {
        $user_id = $this->Session->read("user_id");
        if(!isset($item_id)){
            $this->Session->setFlash(__('Please select a item.'));
            $this->redirect("/");
        }
        else if ($this->request->is('post')) {
            $message['Message'] = $this->request->data;

            if($message['Message']['notice_user_id'] == ''){
                $this->Session->setFlash(__('Please select a noticed user.'));
            } else if($this->Message->save($message)){
                $this->Session->setFlash(__('Message saved.'));
                $this->redirect('/');
            } else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
            }
		}
		$this->set(compact('user_id', 'item_id'));
	}

/**
 * edit method
 * not support edit others' message
 */

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
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->set('message', $this->Message->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		}
		$users = $this->Message->User->find('list');
		$items = $this->Message->Item->find('list');
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
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Message->read(null, $id);
		}
		$users = $this->Message->User->find('list');
		$items = $this->Message->Item->find('list');
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
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Message deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Message was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
