<?php
App::uses('AppController', 'Controller');
/**
 * Cats Controller
 *
 * @property Cat $Cat
 * @property RequestHandlerComponent $RequestHandler
 */
class ContentFavorsController extends AppController {

	public function index() {
		//$this->autoRender = false;
		$contentfavors =  ($this->ContentFavor->find('all', array(
		 	'group' => 'content_id'
			//'fields'=>'DISTINCT ContentFavor.content_id, User.username, description, id, user_id',
		)));
		$this->set("contentfavors", $contentfavors);
	}
	
	public function add($content_id){
    	$favor = $this->ContentFavor->query("select count(*) as count from 365wzs_content_favors where content_id=$content_id and user_id={$this->uid}");
    	if($favor[0][0]['count'] > 0){
			$this->Session->setFlash("您已分享过该专刊.");    		
    	}
    	else if($this->request->is("post")){
    		$description = $this->request->data['description'];
    		$this->ContentFavor->create();
    		$contentfavor['ContentFavor']['user_id'] =  $this->uid;
    		$contentfavor['ContentFavor']['description'] =  $description;
    		$contentfavor['ContentFavor']['content_id'] =  $content_id;
    		
    		$this->ContentFavor->Content->query("update 365wzs_contents set favor_count=favor_count+1 where id = $content_id");
			    	
    		if($this->ContentFavor->save($contentfavor)){
    			$this->Session->setFlash("成功分享该专刊."); 
    		}
    		else{
    			$this->Session->setFlash("分享专刊失败, 请稍后重试.");  
    		}
    	}
	}

}
