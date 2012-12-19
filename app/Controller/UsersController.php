<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    public $uses = array('User', 'Registration','Content');

    function beforeFilter(){
        $username = $this->Session->read('username');
        $action = $this->params['action'];
        if($action == 'edit' || $action == 'view'){
            if($username == ''){
                $this->Session->setFlash(__('Please Login first.'));
                $this->redirect("/users/login");
            }
        } else if($action == 'register' && $username == ''){

        }
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
                if($userinfo['User']['password'] == md5($_POST['password'])){
                    $this->Session->write('user_id', $userinfo['User']['id']);
                    $this->Session->write('username', $username);
                    $this->redirect("/");
                } else {
				    $this->Session->setFlash(__('Username & password not match.'));
                }
            }
            else {
				$this->Session->setFlash(__('Invalid User name.'));
            }
        }
    }

/**
 * view personal page
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        $userinfo['User']['username'] = "test";
        $userinfo['User']['password'] = "test";
        $userinfo['User']['email'] = "test@test.com";

        $id = $this->User->save($userinfo);
        pr($id);

        $id = $this->Session->read("user_id");
		$this->User->id = $id;
        pr($this->User->read(null, $id));
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
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
                $content['Content']['name'] = "default";
                $content['Content']['user_id'] = $new_user['User']['id'];
                if($this->Content->save($content)){
                    $this->Session->setFlash(__('Create Default content successful.'));
                }
                $this->Session->setFlash(__('User account activate successful.'));
            }
        }
        $this->redirect('login');
    }

/**
 * register method
 * register new users, by username & password & email
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
            $arr = $this->request->data;
            $arr['password'] = md5($arr['password']);
            $arr['activekey'] = md5($arr['password'].time());
            $user['Registration'] = $arr;

            // First check Registerations Table whether has register once
            $userinfo_1 = $this->Registration->find('first', 
                array('conditions'=>array('Registration.username'=>$_POST['username']))
            );

            if(isset($useinfo['User'])){
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
                    if ($this->Registration->save($user)) {
                        $this->Session->setFlash(__('This account has been created, please verify email.'));
#				        $this->redirect(array('action' => 'index'));
			        } else {
				        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
                    }
               }
            }
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    // Id is record in Session
    public function edit($id = null) {
        // Must confirm user is login & only can modify user's own profile
        $id = ($this->Session->read("user_id"));
		$this->User->id = $id; 
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
        if ($this->request->is('post') || $this->request->is('put')) {
            $userinfo['User'] = $this->request->data;
            if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Edit has been saved'));
				$this->redirect(array('action' => 'view'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
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
