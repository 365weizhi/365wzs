<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    public $uses = array('User', 'Profile', 'Registration','Content');
    
    public function test(){
    	$this->autoRender= false;
    }
    
    public function send($email, $username, $message){
    	$this->autoRender = false;
    	App::import('Vendor', 'JPhpMailer'); 
		$mail = new JPhpMailer;
		$mail->CharSet="UTF-8";
		$mail->IsSMTP();
//		$mail->HeaderLine($name, $value)
		$mail->Host = 'smtp.qq.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'billqiang@qq.com';
		$mail->Password = 'wen3101914';
		$mail->SetFrom('billqiang@qq.com', "365未知树");
		$mail->Subject = '365未知树 - 官方邮件';
		//$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
		$mail->MsgHTML($message);
		$mail->AddAddress($email, $username);
		$mail->Send();
		$this->Session->setFlash(__('This account has been created, please verify email.'));
//		$this->redirect("/");
    }
    
    function beforeFilter(){
    	$isLogin = $this->isLogin();
        if($this->view == 'view' || $this->view == "edit"){
	        if(!$isLogin){
	        	$this->redirect('/ajax/login');
	        }
        }
    }

    public function users(){
        $this->autoRender = false;
        //pr($this->Profile->find("all"));
        $this->User->recursive = -1;
        $users = $this->User->find("all", array(
            'fields'=>array(
                'User.id',
                'User.username'
            )
        ));
        echo json_encode($users);
    }

 /**
 * not Support user visit all users pages now
 * index method
 *
 * @return void
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
    }
 */

/**
 * logout method
 * @return void
 */
    public function logout(){
        if($this->Session->check('user_id')){
            $this->Session->delete('user_id');
        }
        if($this->Session->check('username')){
            $this->Session->delete("username");
        }
        $this->redirect("/");
    }
/**
 * login method
 *
 * @return void
 */
    public function login(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $userinfo = $this->User->find('first', array('conditions'=>array("username" => $username)));
            //pr($userinfo);
            if(isset($userinfo['User'])){
                if($userinfo['User']['password'] == $this->_md5($_POST['password'])){
                    $this->Session->write('user_id', $userinfo['User']['id']);
                    $this->Session->write('username', $username);
                    $this->redirect($_POST['redirect']);
                } else {
				    $this->Session->setFlash(__('Username & password not match.'));
                }
            }
            else {
				$this->Session->setFlash(__('Invalid User name.'));
            }
        } 
        $this->set("redirect", $this->referer("/"));
    }

/**
 * view personal page
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($user_id) {
		$user = $this->User->find("first", array(
			'conditions'=>array(
				'id'=>$user_id,
			)
		));
		$rt_obj = array();
		if (!$user) {
			$rt_obj['code'] = "failed";
			$rt_obj['msg'] = "用户不存在";
			echo json_encode($rt_obj);
			return ;
		}
		$sql = "SELECT SUM(	CASE WHEN (	user_id = $user_id ) THEN 1 ELSE 0 END ) count_1, SUM(	CASE WHEN (	follow_id = $user_id ) THEN 1 ELSE 0 END ) count_2 FROM 365wzs_follows";
		$nexus = $this->User->Follow->Query($sql);
		$this->set("nexus", $nexus[0][0]);
		$this->set('user', $user);
    }


/**
 * activate method
 * activate user in Registerations table
 * @return void
 */
    public function active($key){
        $account = $this->Registration->find('first', 
            array(
                'fields'=>array(
                    'Registration.username', 
                    'Registration.password',
                    'Registration.email',
                    'Registration.user_id'
                ),
                'conditions'=>array('activekey'=>$key)
            )
        );

        $userinfo = $this->User->find('first', 
            array(
                'conditions'=>array('username'=>$account['Registration']['username'])
            )
        );
        if(isset($userinfo['User'])){
            $this->Session->setFlash(__('Username exists, please register again.'));
        }else{
            $userinfo['User'] = $account['Registration'];
            if($new_user = $this->User->save($userinfo)){
            	// 增加一个默认专刊
                $content['Content']['name'] = "default";
                $content['Content']['user_id'] = $new_user['User']['id'];
                // 添加用户个人信息
                $profile['Profile']['user_id'] = $new_user['User']['id'];
                
                if($this->Content->save($content) && $this->Profile->save($profile)){
                    //$this->Session->setFlash(__('Create Default content successful.'));
                }
                $this->Session->write('user_id', $new_user['User']['id']);
                $this->Session->write('username', $new_user['User']['username']);
                $this->Session->setFlash(__('User account activate successful.'));
                $this->redirect('/');
            }
        }
        $this->redirect('login');
    }
    
/**
 * 修改密码
 * 前置条件：
 * 	1. 用户申请修改密码, post一个请求到服务器
 *  2. 服务器接收到请求, 返回一个key并发送一封邮件给用户
 * 操作：
 *  1. 用户通过邮件上的url点击来到reset函数里
 *  2. 用户凭借key拿回设置密码权限
 *  3. 用户修改密码并确认
 */
    public function reset($key = null, $email = null){
    	if($key == null && $email == null){	//key 为 null的时候, 用户通过邮箱获取验证链接
    		if($this->request->is("post")){
    			$user = $this->User->find("first", array(
    				'conditions'=>array(
    					'email'=>$_POST['email']
    				)
    			));
    			if($user){
					$home = "http://".$_SERVER['SERVER_NAME']."/365wzs";
					$user['User']['password'] = $this->_md5($user['User']['username']);
					if($this->User->save($user)){
		    			$message = $user['User']['username']."您好：".'<br>'.
								"密码取回服务, 请点击以下链接或者复制到浏览器访问：".
    							"$home/users/reset/".$user['User']['password']."/".$user['User']['email'].
    							"<br>365未知树  管理团队<br>";
						$this->send($user['User']['email'], $user['User']['username'], $message);
						$this->set("flag", true);
	    				$this->set("message", "邮件已发送, 请查验");
					}
					else {
						$this->set("flag", false);
	    				$this->set("message", "邮件发送失败, 稍后重试");
					}
    			}
    			else {
					$this->set("flag", false);
    				$this->set("message", "没有这个注册用户");
    			}
				$this->render("reset_message");
    		}
    		else {	// 非post请求则是输入验证邮箱
    			$this->render('reset_request');
    		}
    	}
    	else {	// key存在, 则判断是否正确
    		$user = $this->User->find("first", array(
    			'conditions'=>array(
    				'email'=>$email,
    				'password'=>$key
    			)
    		));
    		if($user){
	    		if($this->request->is("post")){
	    			if($_POST['password'] != $_POST['password2']){
	    				$this->set("message", "密码不一致");
	    				$this->render("reset_response");
	    			}
	    			else {
		    			$user['User']['password'] = $this->_md5($_POST['password2']);
		    			$this->User->save($user);
		    			$this->redirect("/users/login");
	    			}
	    		}
	    		else
	    			$this->set("flag", true);
    		}
    		else {
    			$this->set("flag", false);
    		}
    		$this->render("reset_response");
    	}
    }
    

/**
 * register method
 * register new users, by username & password & email
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
            $arr = $this->request->data;
            $arr['password'] = $this->_md5($arr['password']);
            $arr['activekey'] = $this->_md5($arr['password'].time());
            $user['Registration'] = $arr;

            // First check Registerations Table whether has register once
            $isExist = $this->Registration->find('first', 
                array('conditions'=>array('Registration.username'=>$_POST['username']))
            );
            if(isset($isExist['User'])){
                $this->Session->setFlash(__('You must confirm your email first'));
            }
            else {
                $userinfo = $this->User->find('first', 
                    array('conditions'=>array("username" => $_POST['username']))
                );
                if(isset($userinfo['User'])){
                    $this->Session->setFlash(__('This username exist, please type in another one.')); 
                }
                else{
                    // Save user in Registeration first and active it later
                    if ($obj = $this->Registration->save($user)) {
                    	$home = "http://".$_SERVER['SERVER_NAME']."/365wzs/";
                    	$url = $home."users/active/".$obj['Registration']['activekey'];
                    	$message="您好：".'<br>'."
								您的邮箱已经成功在 $home 上被登记为用户邮箱，".'<br>'."
								且用户名为：{$user['Registration']['username']}。".'<br>'."
								----------------------------------------------------------------------".'<br>'."
								欢迎您的加入, 请点击以下链接激活账号：<br><a href='$url'>$url</a>								
								".'<br>'."
								".'<br>'."
								365未知树  管理团队.".'<br>'."
								$home";
                    	$this->send($user['Registration']['email'], $user['Registration']['username'], $message);
                    	
                        $this->Session->setFlash(__('This account has been created, please verify email.'));		
                        $this->redirect("/");
			        } else {
				        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                    }
               }
            }
		}
	}

/**
 * Id is record in Session
 */
    public function edit() {
        // Must confirm user is login & only can modify user's own profile
        $rt_obj = array();
        $user = $this->User->find("first", array(
        	'conditions'=>array(
        		'id'=>$this->uid,
        	)
        ));
        
		if (!$user) {
			$rt_obj['code'] = "failed";
			$rt_obj['msg'] = "用户不存在呢~";
        	echo json_encode($rt_obj);
        	return ;
		}
        if ($this->request->is('post')) {
        	if($_FILES['pic_url']['name'] != ""){
				if ((($_FILES["pic_url"]["type"] == "image/gif")
						|| ($_FILES["pic_url"]["type"] == "image/jpeg")
						|| ($_FILES["pic_url"]["type"] == "image/png")
						|| ($_FILES["pic_url"]["type"] == "image/pjpeg")) 
						){
						// 后期添加大小限制
						//&& ($_FILES["pic_url"]["size"] < 20000)) {
					if ($_FILES["pic_url"]["error"] > 0) {
						$rt_obj['code'] = "failed1";
						$rt_obj['msg'] = "文件上传失败";
						echo json_encode($rt_obj);
						return ;
					}
					else {
						//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
						//echo "Type: " . $_FILES["file"]["type"] . "<br />";
						//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
						//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
						$dir = dirname(dirname(__FILE__)).DS."webroot".DS."static".DS."avatar";
						move_uploaded_file($_FILES["pic_url"]["tmp_name"], $dir.DS.md5($user['User']['username']).".jpg");
						
			        	$user['User']['pic_url'] = md5($user['User']['username']).".jpg";
					}
				}
				else {
					$rt_obj['code'] = "failed2";
					$rt_obj['msg'] = "文件格式错误";
					echo json_encode($rt_obj);
					return ;
				}
        	}
        	$user['User']['nickname'] = $_POST['nickname'];
        	$user['User']['password'] = $this->_md5($_POST['password']);
        	$user['User']['email'] = $_POST['email'];
        	$user['User']['description'] = $_POST['description'];
        	$user['User']['birthdate'] = $_POST['birthdate'];
        	$user['User']['gender'] = $_POST['gender'];
        	$user['User']['address'] = $_POST['address'];
        	
            if ($this->User->save($user)) {
				$this->Session->setFlash(__('修改成功了~'));
				$this->redirect(array('action' => 'view'));
			} else {
				$rt_obj['code'] = "false";
				$rt_obj['msg'] = "有错了~~等会再试试";
			}
		}
        $this->set("User", $user);
	}
	
	function _md5($password){
		return md5($password."365wzs");
	}
// Currently not supply user delete himself
/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
    }
 */
}
