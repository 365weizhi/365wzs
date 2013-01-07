<?php
class MainController extends AppController{
    public $uses = 'Item';
    
    function beforeFilter(){
    
    }
    
    public function index(){
		$items = $this->Item->find("all");
		$rt_obj = array();
		foreach($items as $item){
			$tmp['id'] = $item['Item']['id'];
			$tmp['pic_url'] = $item['Item']['pic_url'];
			$tmp['favor_count'] = $item['Item']['favor_count'];
			$tmp['like_count'] = $item['Item']['like_count'];
			
			if($tmp['favor_count'] > 0){
				$this->Item->Favor->User->recursive = -1;
				$tmp['user_id'] = $item['Favor'][0]['user_id'];
				$user = $this->Item->Favor->User->find('first', $tmp['user_id']);
				$tmp['username'] = $user['User']['username'];
			}
			$rt_obj[] = $tmp;
		}
    	$this->set("items", $rt_obj);
    }


}
?>
