<?php
App::uses('AppController', 'Controller');

class PipeController extends AppController{
    public $uses = array('Item');
    public $autoRender = false;   

    /**
     * Later should mantain these methods in cache.
     */
    public function index($offset, $limit = 10){
        $this->Item->recursive = -1;
        $items = $this->Item->find('all', array(
            'conditions'=>array(),
            'order'=>array('rank'),
            // Should be confirm later which field are needed
            'fileds'=>array(),
            'limit'=>$limit,
            'offset'=>$offset
        ));
        echo json_encode($items);
    }
    
    public function cover($content_id){
    	
    }
}
?>
