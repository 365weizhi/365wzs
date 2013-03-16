<?php
App::uses('AppController', 'Controller');

class PipeController extends AppController{
    public $uses = array('Item', 'CategoryItem');
    public $autoRender = false;   

    /**
     * Later should mantain these methods in cache.
     */
    public function index($offset = 0, $limit = 32){
      //  $this->Item->recursive = -1;
        $items = $this->CategoryItem->find('all', array(
            'conditions'=>array(),
//            'order'=>array('rank'),
            // Should be confirm later which field are needed
            'fields'=>array(
                'Item.*',
            ),
            'limit'=>$limit,
            'offset'=>$offset
        ));
       $rt_obj = array();
       foreach($items as $item){
           $rt_obj[] = $item['Item'];
       }
       echo json_encode($rt_obj);
    }
}
?>
