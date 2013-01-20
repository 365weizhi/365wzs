<?php
class GroupsController extends AppController{
	public $uses = array("User", "Group");
	
	function beforeFilter(){
		parent::beforeFilter();
	}
	
	public function index(){
		
	}
	
	public function add(){
		$group = $this->request->data;
		$group['Group']['user_id'] = $this->uid;
		pr($group);
	}
}
?>
