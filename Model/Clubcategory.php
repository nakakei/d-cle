<?php
App::uses('AppModel', 'Model');
/**
 * Clubcategory Model
 *
 * @property Clubcategory $ParentClubcategory
 * @property Clubcategory $ChildClubcategory
 * @property Club $Club
 */
class Clubcategory extends AppModel {

/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'Tree',
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	/*
	public $belongsTo = array(
		'ParentClubcategory' => array(
			'className' => 'Clubcategory',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	*/

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ChildClubcategory' => array(
			'className' => 'Clubcategory',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'clubcategory_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
