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
	public function follows($uid){
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
		$this->autoRender = false;
		//$this->Follow->user_id = $this->uid;
		$follows = $this->Follow->find('all', array(
			'conditions'=>array(
				'follow_id'=>$uid,
			)
        ));
        $rt_obj = array();
        foreach($follows as $follow){
            $follow['Follow']['pic_url'] = $this->webroot."static/avatar/".$follow['User']['pic_url'];
            $follow['Follow']['username'] = $follow['User']['username'];
            $follow['Follow']['user_id'] = $follow['User']['id'];
            $rt_obj[] = $follow['Follow'];
        }
        echo json_encode($rt_obj);
	}
	
	/**
	 * 我的粉丝
	 */
	public function fans($user_id){
		$this->autoRender = false;
		//$this->Follow->user_id = $this->uid;
		$fans = $this->Fan->find('all', array(
			'conditions'=>array(
				'user_id'=>$user_id,
			)
        ));
        $rt_obj = array();
        foreach($fans as $fan){
            $fan['Fan']['pic_url'] = $this->webroot."static/avatar/".$fan['User']['pic_url'];
            $fan['Fan']['username'] = $fan['User']['username'];
            $fan['Fan']['user_id'] = $fan['User']['id'];
            $rt_obj[] = $fan['Fan'];
        }
        echo json_encode($rt_obj);
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
