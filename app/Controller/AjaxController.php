<?php
class AjaxController extends AppController{
	public $uses = array("User", "Content");
	public $layout = 'ajax';
	
	function beforeFilter(){
		$isLogin = $this->isLogin();
		if($this->view == "login"){
			
		}
		else if($isLogin == false){
			$this->redirect('/ajax/login');
		}
	}
	
	public function login(){
		if($this->request->is("post")){
			$this->autoRender = false;
			if(isset($_POST['username']) && isset($_POST['password'])){
	            $username = $_POST['username'];
	            $userinfo = $this->User->find('first', array('conditions'=>array("username" => $username)));
	            if(isset($userinfo['User'])){
	                if($userinfo['User']['password'] == md5($_POST['password'])){
	                    $this->Session->write('user_id', $userinfo['User']['id']);
	                    $this->Session->write('username', $username);
                        $this->redirect("/");
	                } else {
						$message = "notmatch";	                	
	                }
	            }
	            else {
	            	$message = "invalid_user";
	            }
	        }
	        echo $message;
		}
		$this->set("redirect", $this->referer("/"));
	}
	
	public function share($item_id){
        $contents = $this->Content->find('all',
            array(
                'conditions'=>array(
                    'user_id'=>$this->uid,
                )
            )
        );
        $this->set('item_id', $item_id);
    	$this->set('contents', $contents);
    	$this->render('share');
	}
	
	public function message($item_id){
		$user_id = $this->uid;
		$this->set(compact('user_id', 'item_id'));
	}
}
?>
