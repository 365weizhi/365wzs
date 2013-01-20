<?php
class SiteHelper extends AppHelper{  
	var $helpers = array('Session');	
	function isLogin(){
		if($this->Session->check("username") && $this->Session->check("user_id")){
			return true;
		}
		return false;
	}
	
	public function username(){
		if($this->isLogin())
			return $this->Session->read("username");
		else 
			return '';
	}
	
	public function user_id(){
		if($this->isLogin())
			return $this->Session->read("user_id");
		else 
			return 0;
	}
}
