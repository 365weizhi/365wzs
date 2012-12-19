<?php 
/**
 * Controller for Taobao API
 */
App::import('Vendor', 'TopApi');

class TopController extends AppController{
	// No Model Import
	public $uses = array('Item', 'Cat', 'Content');
	// No Auto Render
	public $autoRender = false;
	// No Cache Query
	//public $cacheAction = false;
	
	
	public function __construct($request = null, $response = null) {
		parent::__construct();
	}
	
	public function search($keyword, $cid = 0, $area = ''){
		$api = new TopApi();
		$data['keyword'] = $keyword;
		$result = $api->searchItem($keyword, $cid, $area);
		$data['resq'] = $result->taobaoke_items->taobaoke_item;
		$data['total_result'] = $result->total_result;
		print_r($data['resq']);
		//$this->set('data', $data);
		/*
		 * On frontend
		 * Make sure that the url should ont contains "\/"
		 */
		//echo json_encode($data);
		/*
		 * We should make sure that we needn't use it in our backend system
		 */
		//return $data;
	}
	
	/**
	 * Return the list of category
	 * @return cid 
	 * @return is_parent False, if is not a parent
	 * @return name Name of category
	 */
	public function category($cid = 0){
		$api = new TopApi();
		$data['parent_cid'] = $cid;
		$data['resq'] = $api->getCats($cid)->item_cats;
		echo json_encode($data);
	}
	

    /**
     * Item Detail 
     * @param integer $item_id  
     * @return string $resp XML Format
     */
    function item($item_id){
    	$api = new TopApi();
    	$data['item_id'] = $item_id;
    	$data['resq'] = $api->getItemInfo($item_id);
    	echo json_encode($data);
    }
	
	
	/*
	 * ============== Saved Method Below ==================
	 */
	
	/**
	 * Save Category in our Database
	 * @param id "cid" in Taobao
	 * @param name Category name
	 */
	public function saveCategory(){
		$rt_obj = array();
		if(isset($_POST['cid']) && isset($_POST['name']) &&
			$this->Cat->save(
				array(
					'id'=>$_POST['cid'],
					'name'=>$_POST['name'],
				)
			)) {
			$rt_obj['MESSAGE'] = "Saved success";
		}
		else{
			$rt_obj['MESSAGE'] = "Columns not match";
		}
		echo json_encode($rt_obj);
	}
	
	/**
	 * Save Our website content
	 */
	public function saveContent(){
		$rt_obj = array();
		if(isset($_POST['cid']) && isset($_POST['name']) &&
			$this->Content->save(
				array(
					'id'=>$_POST['cid'],
					'name'=>$_POST['name'],
				)
			)){
			$rt_obj['MESSAGE'] = "Saved success";
		}
		else{
			$rt_obj['MESSAGE'] = "Columns not match";
		}
		echo json_encode($rt_obj);
	}
	
	/**
	 * Save Item in our database
	 * The thumb_id is selectable.
	 * All Post Data below
	 * @param id Item_Id in Database
	 * @param title 
	 * @param cat_id Category id in Taobao System
	 * @param click_count User Click Will be record while clicked
	 * @param click_url Click For Money
	 * @param pic_url,
	 * @param thumb_id Record the image url in thumb_table and should be initialize to be something
	 * 				   If thumb_id isset, then the image should be show as it is.
	 * @param price
	 * @param sellernick
	 * @param item_location
	 * @param commission_rate
	 * @param commission
	 * @param commission_num
	 * @param commission_volume
	 * @param volume in 30days
	 */
	public function saveItem(){
		$rt_obj = array();
		if(	isset($_POST['title']) && isset($_POST['cat_id']) && isset($_POST['content_id'])
			&& isset($_POST['click_url']) && isset($_POST['price'])	&& isset($_POST['nick']) && 
			$data = array(
				'title' => $_POST['title'],
				'num_iid' => $_POST['num_iid'],
				'cat_id' => $_POST['cat_id'],
				'content_id' => $_POST['content_id'],
				'click_url' => $_POST['click_url'],
				'shop_click_url' => $_POST['shop_click_url'],
			// Origin is pic_url, Change If we need resize
				'pic_url' => $_POST['pic_url'],
			//  'thumb_id' => '',
				'price' => $_POST['price'],
				'nick' => $_POST['nick'],
			// Below is about our profit
				'item_location' => $_POST['item_location'],
			// The empty robust are not test yet
				'commission_rate' => isset($_POST['commission_rate'])?$_POST['commission_rate']:'',
				'commission' => isset($_POST['commission'])?$_POST['commission']:'',
				'commission_num' => isset($_POST['commission_num'])?$_POST['commission_num']:'',
				'commission_volume' => isset($_POST['commission_volume'])?$_POST['commission_volume']:'',
			)){
			
			/**
			 * Here We should Resize the image from server before save.
			 */
			$this->Item->save($data);
			$rt_obj['MESSAGE'] = "Saved success";
		}
		else {
			$rt_obj['MESSAGE'] = "Columns not match";
		}
		
		echo json_encode($rt_obj);	
	}
}
?>
