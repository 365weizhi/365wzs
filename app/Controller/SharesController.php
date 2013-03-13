<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'TopApi');
/**
 * Favors Controller
 *
 * @property Favor $Favor
 */
class SharesController extends AppController {
    public $uses = array('Favor', 'Item');
    
    function beforeFilter(){
    	// All visitors could see	
    }

/**
 * 用户手动分享商品
 * 前置条件：
 * 1. 用户不是淘宝客=》使用淘宝客api
 * 2. 用户是淘宝客=》 尝试使用http抓取网页图片等数据
 * 操作：
 * 1. 
 */
	public function index() {
    }
    
    public function add(){
    	
    }
    
    public function fetch($url){
    	$rt_obj = array();
    	$rt_obj['code'] = 'failed';
    	
		$api = new TopApi();
		$num_iid = $api->get_id($_POST['url']);
		if($num_iid == 0){
			// 如果用户是淘宝客或者找不到商品id
			// 尝试使用http抓取数据
		}
		else {
			$count = $this->Item->find("count",array(
				'conditions'=>array(
					'num_iid'=>$num_iid,
				)
			));
			if($count > 0){
				$rt_obj['code'] = "failed";
			}
			else {
				$resq = $api->fetch($num_iid);
				$resq['Item']['id'] = '';
				$resq['Item']['num_iid'] = $num_iid;
				if(!isset($resq['Item']['click_url']))
					$resq['Item']['click_url'] = $_POST['url'];
				$rt_obj['code'] = "success";
				$rt_obj['object'] = $resq['Item'];
			}
		}
		echo json_encode($rt_obj);
    }
    
    public function view($content_id){
    	
    }
}
