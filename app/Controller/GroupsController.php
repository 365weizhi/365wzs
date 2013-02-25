<?php
class GroupsController extends AppController{
	public $uses = array("User", "Group");
	
	function beforeFilter(){
		$isLogin = $this->isLogin();
		if($this->view == "index"){
			
		}else if(!$isLogin){
			$this->redirect("/users/login");			
		}
	}
	
	public function index(){
		$my_groups = $this->Group->UserGroup->find("all", array(
			'conditions'=>array(
				'UserGroup.user_id'=>$this->uid,
			)
		));
		$all_groups = $this->Group->find("all");
		$this->set(compact("all_groups","my_groups"));
	}
	
	public function add(){
		if($this->request->is("post")){
			// 判断小组是否存在
			$group = $this->request->data;
			$isExist = $this->Group->find('count', array(
				'conditions'=>array(
					'name'=>$group['Group']['name']
				)
			));
			if($isExist > 0){
				$message = "小组已存在.";
			}
			else {
				$group['Group']['user_id'] = $this->uid;
				$group['Group']['create_time'] = date("Y-m-d h:i:s");
				$group['Group']['membsers'] = 1;		//至少有组长在
				$new_group = $this->Group->save($group);
				// 往usergroup表添加一条数据
				$this->Group->UserGroup->create();
				$user_group['UserGroup']['user_id'] = $this->uid;
				$user_group['UserGroup']['group_id'] = $new_group['Group']['id'];
				$new_usergroup = $this->Group->UserGroup->save($user_group);
				// 缺少灾难恢复
				if($new_group && $new_usergroup){
					$message = "添加分组成功";
				}
				else {
					$message = "添加失败";
				}
			}
			$this->Session->setFlash($message);
			$this->redirect(array('action' => 'index'));
		}
	}

	public function view($group_id){
		$list = $this->Group->find("first", array(
			'conditions'=>array(
				'Group.id'=>$group_id
			)
		));
		// 这里需要通过优化SQL提高效率
		$counter = 0;
		$this->Group->User->recursive = -1;
		foreach($list['Forum'] as $forum){
			$user = $this->Group->User->read("username", $forum['user_id']);
			$list['Forum'][$counter]['username'] = $user["User"]['username'];
			$counter ++;
		}
		$this->set(compact("list"));
	}
	
	public function resign($group_id){
		$this->Group->recursive = -1;
		$group = $this->Group->find("first", array(
			'conditions'=>array(
				'Group.user_id'=>$group_id
			)
		));
		// 将该小组的拥有者设置为管理员
		$group['Group']['user_id'] = 0;
		$this->Group->save($group);
		
		$this->Group->UserGroup->find("first", array(
			'conditions'=>arra
		));
	}
	
	public function forum($forum_id){
		
	}
	
	public function delete(){
		
	}
	
	
}
?>
