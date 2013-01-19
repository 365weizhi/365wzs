<?php
class ForumsController extends AppController{
    function beforeFilter(){
    
    }
    
    public function index(){
    	
    }
    
    public function add(){
    	if(isset($_POST['Forum'])){
    		if(!empty($_POST['Forum']['title'])){
    			
    		}
    	}
    }
} 
?>