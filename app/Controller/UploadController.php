<?php 
/**
 * Controller for Taobao API
 */
App::import('Vendor', 'UploadHandler');


class UploadController extends AppController{
	public $autoRender = false;
	public function index(){
		$upload_handler = new UploadHandler();
	}
}
?>
