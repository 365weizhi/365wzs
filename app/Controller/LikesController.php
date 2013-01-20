<?php
App::uses('AppController', 'Controller');
/**
 * Likes Controller
 *
 * @property Like $Like
 */
class LikesController extends AppController {
    public $uses = array('Like', 'Item');

    function beforeFilter(){
    	$isLogin = $this->isLogin();
        if($isLogin){
        	
        }else{
            $this->redirect("/ajax/login");
        }
    }


/**
 * index method
 * 测试使用
 * @return void
 */
    public function index() {
        $like = $this->Like->find('all', array(
            'conditions'=>array(
                'User.id'=>$this->Session->read('user_id')
            )
        ));
        $this->set("likes", $like);
		#$this->Like->recursive = 0;
		#$this->set('likes', $this->paginate());
	}

/**
 * add method
 * ajax function.
 * return object
 * 			code
 * 			message
 * @return void
 */
    public function add($id) {
        $user_id = $this->uid;
        $this->Item->recursive = -1;
        $this->Like->recursive = -1;

        // Add a item_id for add_view
        $item_id = $id;
        $this->Item->id = $item_id;
        $like = $this->Like->query("select count(*) as count from 365wzs_likes where item_id=$item_id and user_id=$user_id");
		
        $rt_obj['code'] = 'fail';
        if(!$this->Item->exists()){
        	$message = "商品不存在.";
        }
        else if($like[0][0]['count'] > 0){
       		$message = "已分享该商品.";
        }
        else{
            $this->Like->create();
			$like['Like'] = $this->request->data;
			if ($this->Like->save($like)) {
                $this->Item->query("update 365wzs_items set like_count=like_count+1 where id = $item_id");
				$rt_obj['code'] = "success";
				$message = "成功啦";
			} else {
				$message = "好像有点问题哦，等下再试试";
            }
        }
        $this->Session->setFlash($message);

        $this->redirect("/");
	}

/**
 * delete method
 * 删除偷偷喜欢的商品
 * @param string $item_id
 */
	public function delete($item_id = null) {
		$this->Like->id = $item_id;
		$rt_obj = array();
		$rt_obj['code'] = "fail";
		if (!$this->Like->exists()) {
			$message = "商品不存在.";
		}
		if ($this->Like->delete()) {
			$this->Item->query("update 365wzs_items set like_count=like_count-1 where id = $item_id");
			$message = "删除成功.";
		}
		else {
			$message = "删除失败.";
		}
		$this->Session->setFlash($message);
		$this->redirect("/");
	}
}
