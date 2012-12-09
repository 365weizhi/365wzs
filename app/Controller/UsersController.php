<?php 
class UsersController extends AppController{
    public $uses = 'User';

    public function index()
    {

    }

    public function login(){
	pr($this->Session->read("username"));
	if(isset($_POST['User']['username']) && isset($_POST['User']['password'])){
	    $username = $_POST['User']['username'];
	    $userinfo = $this->User->find('first', array('conditions'=>array("username" => $username)));
	    if($userinfo['User']['password'] == md5($_POST['User']['password'])){
		$this->Session->write('user_id', $userinfo['User']['id']);	
		$this->Session->write('username', $userinfo['User']['username']);
	    }
	}	
    }

    public function register(){
	$rt_obj = array();
	if(isset($_POST['User']['username']) && isset($_POST['User']['password'])){
	    $username = $_POST['User']['username'];
	    $_POST['User']['password'] = md5($_POST['User']['password']);
	    
	    $userinfo = $this->User->find('count', array('conditions'=>array("username" => $username)));
	    if($userinfo >= 0){
		$rt_obj['rt_msg'] = 'already exist';
		$rt_obj['username'] = $username;
	    }	
	    else if($userinfo = $this->User->save($_POST)){
		$rt_obj['rt_msg'] = 'register success';
		$rt_obj['username'] = $username;
		$this->Session->write('user_id', $userinfo['User']['id']);	
		$this->Session->write('username', $userinfo['User']['username']);
	    }
	}	
    }

    public function logout(){
	if($this->Session->check('user_id'))
	{
	    $this->Session->delete('user_id');
	    $this->Session->delete('username');
	}
	$this->redirect('login');
    }
}
?>
