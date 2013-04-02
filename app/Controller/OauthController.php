<?php
App::import('Vendor', 'OAuth');

/**
 * Oauth Controller
 * By Denglu
 */
class OauthController extends AppController {
	public $uses = array('User');
	public $autoRender = false;
    public function index(){
    	$auth = new oauth("sina");
    	echo $auth->authorize();
    }
    
    public function email(){
    	
    }
    
    /**
     * 新浪数据处理 
     * 前置条件：
     * 1. 是否已经登录
     * 操作：
     * 1. 判断用户uid是否在数据库存在
     * 	a. 用户存在 		=> 登陆
     *  b. 用户不存在 	=> 注册
     * 2. 返回用户数据, 保存session
     * 前期处理：
     * 1. 所有保存到mongodb
     * 2. 网站数据保存到mysql
     */
    public function sina(){
    	// 为了不循环调用接口，先判断用户是否已经登录
    	if($this->isLogin()){
    		// 暂时跳转到首页
    		$this->redirect("/users/view");
    	}
    	else {
	    	$auth = new oauth("sina");
	    	$userinfo = $auth->getUserInfo($_REQUEST['code']);
    		if($userinfo['code']){
	    		$user = $this->User->find('first', array(
	    			'conditions'=>array(
	    				'username'=>$userinfo['info']['idstr'],
	    			)
	    		));
	    		// 如果用户没注册过
	    		if($user){
	    			
	    		}
	    		else {
	    			$user = array();
	    			$user['User']['username'] = $userinfo['info']['idstr'];
	    			$user['User']['nickname'] = $userinfo['info']['screen_name'];
	    			$user['User']['description'] = $userinfo['info']['description'];
	    			$user['User']['address'] = $userinfo['info']['location'];
	    			$user['User']['password'] = $this->_md5($userinfo['info']['idstr']);
	    			$user['User']['gender'] = ($userinfo['info']['gender'] == "m")?'男':'女';
	    			$user['User']['pic_url'] = $userinfo['info']['avatar_large'];
	    			$user['User']['type'] = 2;
	    			// 清空第一条微博记录为创建时间
	    			$userinfo['info']['status'] = time();
	    			// 保存到mongodb
	    			// 前面保证了用户第一次注册，那后面就不判断了
					// 保存到本地MySQL数据库
					$user = $this->User->save($user);
					try{
						$connection = new Mongo();
						$userinfo['info']['id'] = $user['User']['id'];
				        $database   = $connection->selectDB('365wzs');
				        $collection = $database->selectCollection('users');
				        $collection->insert($userinfo['info']);
					} catch(MongoConnectionException $e) {
						die($e->getMessage());
					}
					//$this->Session->setFlash("注册成功");
					//$this->redirect('/oauth/email');
	    		}
	            $this->Session->write('user_id', $user['User']['id']);
	            $this->Session->write('username', $user['User']['nickname']);
	    	}
    	}
    }
    public function qq(){
    	
    }

	function _md5($password){
		return md5($password."365wzs");
	}
}