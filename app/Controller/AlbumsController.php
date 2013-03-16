<?php
App::uses('AppController', 'Controller');
/**
 * Cats Controller
 *
 * @property Cat $Cat
 * @property RequestHandlerComponent $RequestHandler
 */
class AlbumsController extends AppController {
	public $uses = array('ContentFavor');
	public function index() {
		//$this->autoRender = false;
		$contentfavors =  ($this->ContentFavor->find('all', array(
		 	'group' => 'content_id'
			//'fields'=>'DISTINCT ContentFavor.content_id, User.username, description, id, user_id',
		)));
		$this->set("contentfavors", $contentfavors);
	}
}
