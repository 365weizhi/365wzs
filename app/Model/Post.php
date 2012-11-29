<?php 
class Post extends Model{
	public $name = "Post";
	
	public function getAllPost(){
		return $this->find('all');
	}
}
?>