<?php
class GroupsController extends AppController{
	public $uses = array("User", "Group", "Forum");
	
	function beforeFilter(){
		$isLogin = $this->isLogin();
		if($this->view == "index"){
			
		}else if(!$isLogin){
			$this->redirect("/users/login");			
		}
	}
	
	public function index(){
		$groups = $this->Group->find("all", array(
			'conditions'=>array(
				
			)
		));
		$this->set(compact("groups"));
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
				if($this->Group->save($group)){
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
	
	public function join($group_id){
		$this->autoRender = false;
		$group = $this->request->data;
		$isExist = $this->Group->find("count", array(
			'conditions'=>array(	
				'Group.id'=>$group_id
			)
		));
		$isIn = $this->Group->UserGroup->find('count', array(
			'conditions'=>array(
				'UserGroup.user_id'=>$this->uid,
				'UserGroup.group_id'=>$group_id
			)
		));
		if($isExist == 0){
			$message = "该组不存在";
		}
		else if($isIn > 0){
			$message = "已加入该组.";
		}
		else {
			$this->Group->UserGroup->create();
			$usergroup = array();
			$usergroup['user_id'] = $this->uid;
			$usergroup['group_id'] = $group_id;
			if($this->Group->UserGroup->save($usergroup)){
				$this->Group->query("update 365wzs_groups set members=members+1 where id = $group_id");
				$message = "成功加入该组";
			}
		}
		$this->Session->setFlash($message);
		$this->redirect("/Groups");
	}
	
	public function view($group_name){
		$list = $this->Group->find("first", array(
			'conditions'=>array(
				'name'=>$group_name
			)
		));
		$this->set(compact("list"));
	}
	
	public function delete(){
		
	}
}
?>
