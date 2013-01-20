<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property User $User
 * @property Item $Item
 */
class Group extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'UserGroup' => array(
			'className' => 'UserGroup',
			'foreignKey' => 'group_id',
		),
		'Forum' => array(
			'className' => 'Forum',
			'foreignKey' => 'group_id',
			//'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);
}

