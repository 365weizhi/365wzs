<?php
class MainController extends AppController{
    public $uses = 'Item';
    
    public function index(){
//        $items = $this->Item->find("all", array(
//            'fields'=>array(
//                'Item.id',
//                'Item.item_location',
//                'Item.price',
//                'Item.title',
//                'Item.pic_url',
//            )
//        ));
//        pr($items);
    	$this->set("items", $this->Item->find("all"));
    }


}
?>
