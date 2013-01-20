<?php
class ForumPostsController extends AppController{
    function beforeFilter(){
    
    }
    
    public function index(){
    	
    }
    
    public function add($forum_id){
	 	$forum = $this->ForumPost->Forum->find("first", array(
	 		'conditions'=>array(
	 			'Forum.id'=>$forum_id
	 		)
	 	));
	 	if(sizeof($forum) == 0){
	 		$message = "该话题不存在";
	 		$this->redirect(array('controller'=>'Forums/1'));
	 	}
	 	$this->set(compact("forum"));
//    	$this->ForumPost->find("all");
    }
} 
?>