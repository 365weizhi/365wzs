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
		$isLogin = $this->isLogin();
		if($this->view == "chat"){
			
		}else if(!$isLogin){
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
 * add method
 * 添加消息
 * @return void
 */
    public function add($item_id) {
    	$this->autoRender = false;
    	
        $user_id = $this->Session->read("user_id");
        $rt_obj = array();
        $rt_obj['code'] = "fail";
        if(!isset($item_id)){
        	$rt_obj['message'] = "商品不存在.";
            //$this->redirect("/");
        }
        else if ($this->request->is('post')) {
            $message['Message'] = $this->request->data;
            if($message['Message']['notice_user_id'] == ''){
            	$rt_obj['message'] = "通知的用户不存在.";
            } else if($this->Message->save($message)){
            	$rt_obj['code'] = "success";
            	$rt_obj['message'] = "发送成功.";
            } else {
            	$rt_obj['message'] = "发送消息失败,等等再试试";
            }
		}
		echo json_encode($rt_obj);
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
	
	public function chat(){
		$this->layout = 'chat';
	}
}
