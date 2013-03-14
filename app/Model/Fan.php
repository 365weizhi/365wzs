<?php
App::uses('AppModel', 'Model');

class Fan extends AppModel {
	public $name = "Follow";
	
	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id',
			'dependent' => true,
			'conditions' => '',
			'fields' => 'id, username',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
