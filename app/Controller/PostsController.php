<?php

class PostsController extends AppController {
    public $uses = 'Post';
    public function index(){
	$this->set('data', $this->Post->find('all'));
    }

    public function create(){
    }

    public function share($item_id){
	if(isset($_POST['Post']['description'])){
   	    $arr = array();
	    $arr['user_id'] = $this->Session->read("user_id");
	    $arr['item_id'] = $item_id;
	    $arr['descs'] = $_POST['Post']['description'];
	    pr($Post);
	    $this->Post->save($arr);
	}
    }

    
}

?>
