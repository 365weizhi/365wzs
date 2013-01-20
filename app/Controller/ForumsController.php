<?php
class ForumsController extends AppController{
    function beforeFilter(){
    	parent::beforeFilter();
    	
    }
    
    public function index(){
    	
    }
    
    public function add($group_id){
    	$isExist = $this->Forum->Group->find("count", array(
    		'conditions'=>array(
    			'Group.id'=>$group_id
    		)
    	));
    	if($isExist == 0){
    		$message = "该小组不存在";
    		$this->Session->setFlash($message);
    		$this->redirect(array('controller'=>'groups'));
    	}
    	if(isset($_POST['Forum'])){
    		if(empty($_POST['Forum']['title'])){
    			$message = "标题不能为空";
    		}
    		else if(empty($_POST['Forum']['content'])){
    			$message = "描述不能为空";
    		}
    		else {
    			$forum = $_POST;
    			$forum['Forum']['user_id'] = $this->uid;
    			$forum['Forum']['group_id'] = $group_id;
    			$forum['Forum']['create_time'] = date("Y-m-d h:i:s");
    			$forum['Forum']['update_time'] = date("Y-m-d h:i:s");
    			if($this->Forum->save($forum)){
    				$this->Forum->Group->query("update 365wzs_groups set forum_count=forum_count+1 where id = $group_id");
    				$message = "发布成功";
    			}
    			else {
    				$message = "发布失败,稍后重试";
    			}
    		}
    		$this->Session->setFlash($message);
    		$this->redirect(array('controller'=>'groups'));
    	}
    }
} 
?>