<?php
class AjaxController extends AppController{
	public $uses = array("User");
	function beforeFilter(){
		
	}
	
	public function login(){
		$this->layout='ajax';
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
	}
	
}
?>
