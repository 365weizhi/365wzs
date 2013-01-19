<?php
class ForumPostsController extends AppController{
    function beforeFilter(){
    
    }
    
    public function index(){
    	
    }
    
    public function add(){
    	$this->autoRender = false;
    	
    	$this->ForumPost->find("all");
    }
} 
?>