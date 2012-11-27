<?php 
class PostsController extends AppController{
	public $name = "Posts";
	public $uses = array('Post', 'Item');
	
	public function index(){
		//$this->set("posts",$this->Post->find('all')); 
		//$data = 0;
		
		$this->set("posts", $this->Post->getAllPost());
	}
}
?>