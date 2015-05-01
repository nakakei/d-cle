<?php
App::uses('AppModel', 'Model');
/**
 * FoodsFoodtag Model
 *
 * @property Food $Food
 * @property Foodtag $Foodtag
 */
class FoodsFoodtag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'food_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foodtag_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'deleted' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Food' => array(
			'className' => 'Food',
			'foreignKey' => 'food_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Foodtag' => array(
			'className' => 'Foodtag',
			'foreignKey' => 'foodtag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
