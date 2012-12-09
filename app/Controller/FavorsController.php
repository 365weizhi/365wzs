<?php

class FavorsController extends AppController {
    public $uses = 'Favor';
    public function index(){
	$this->set('data', $this->Favor->find('all'));
    }

    public function create(){
    }

    public function share($item_id){
	if(isset($_POST['Favor']['description'])){
	    $arr = array();
	    $arr['user_id'] = $this->Session->read("user_id");
	    $arr['item_id'] = $item_id;
	    $arr['descs'] = $_POST['Favor']['description'];
	    $this->Favor->save($arr);
	    pr($arr);
	}
    }

    
}

?>
