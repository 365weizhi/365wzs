<?php
class TestsController  extends AppController{
	public $autoRender = false;
	public function phpinfo(){
		echo phpinfo();
	}
	public function mongo(){
		try{
			$mongo = new Mongo(); //create a connection to MongoDB
			$databases = $mongo->listDBs(); //List all databases
			pr($databases);
			$mongo->close();
		} catch(MongoConnectionException $e) {
			die($e->getMessage());
		}
	}
	public function phpmyadmin(){
	}
}
?>