<?php
class MainController extends AppController{
    public $uses = 'Item';
    
    public function index(){
	$this->set("items", $this->Item->find("all"));
    }


}
?>
