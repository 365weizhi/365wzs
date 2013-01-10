<?php
App::uses('AppController', 'Controller');
/**
 * Favors Controller
 *
 * @property Favor $Favor
 */
class SharesController extends AppController {
    public $uses = array('Favor');
    
    function beforeFilter(){
    	// All visitors could see	
    }

	public function index() {
        $shares = $this->Favor->find('all', array(
        	'order'=>array(
        		'Favor.id'=>'desc',
        	)
        ));
        $this->set("shares", $shares);
    }
    
    public function view($content_id){
    }
}
