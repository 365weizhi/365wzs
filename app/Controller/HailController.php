<?php
App::uses('AppController', 'Controller');

class HailController extends AppController {
	public $uses = array('Follow', 'Fan');
	
	public function index() {
		$this->autoRender = false;
		pr($this->Follow->find('all'));
	}
	
	/**
	 * 我关注的人
	 */
	public function follows(){
		/*
		$this->autoRender = false;
		$this->Follow->User->recursive = -1;
		$follows = $this->Follow->find('all');
		$rt_obj = array();
		$rt_obj['code'] = 0;
		foreach($follows as $follow){
			$rt_obj['data'][] = $follow['User'];
		}
		echo json_encode($rt_obj);
		*/
		echo "<meta charset='utf-8'>";
		$this->autoRender = false;
		//$this->Follow->user_id = $this->uid;
		$fans = $this->Follow->find('all', array(
			'conditions'=>array(
				'follow_id'=>$this->uid,
			)
		));
		pr($fans);
	}
	
	/**
	 * 我的粉丝
	 */
	public function fans(){
		$this->autoRender = false;
		echo "<meta charset='utf-8'>";
		//$this->Follow->user_id = $this->uid;
		$fans = $this->Fan->find('all', array(
			'conditions'=>array(
				'user_id'=>$this->uid,
			)
		));
		pr($fans);
	}
	
	public function remove($follow_id){
		$this->autoRender = false;
		
		$follow = $this->Follow->find("first", array(
			'conditions'=>array(
				'user_id'=>$this->uid,
				'follow_id'=>$follow_id,
			)
		));
		$rt_obj = array();
		
		if(!$follow){
			$rt_obj['code'] = 0;
			$rt_obj['message'] = "没有关注该好友";
		} else{
			$this->Follow->id = $follow['Follow']['id'];
			if($this->Follow->delete()){
				$rt_obj['code'] = 1;
				$rt_obj['message'] = "成功取消关注";
			}
			else{
				$rt_obj['code'] = 2;
				$rt_obj['message'] = "操作失败,稍后重试";
			}
		}
		echo json_encode($rt_obj);
	}
	
	public function add($follow_id) {
		$this->autoRender = false;
		$rt_obj = array();
		$arr['Follow']['user_id'] = $this->uid;
		$arr['Follow']['follow_id'] = $follow_id;
		$count = $this->Follow->find('count', array(
			'conditions'=>array(
				'user_id'=>$this->uid,
				'follow_id'=>$follow_id
			)
		));
		if($count > 0){
			$rt_obj['code'] = '0';
			$rt_obj['message'] = '已关注该好友';
		}
		else {
			if($this->Follow->save($arr)){
				$rt_obj['code'] = '1';
				$rt_obj['message'] = '成功关注好友';
			}
			else {
				$rt_obj['code'] = '2';
				$rt_obj['message'] = '关注失败，稍后重试';
			}
		}
		echo json_encode($rt_obj);
	}
}