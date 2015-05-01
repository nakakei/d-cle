<?php
App::uses('AppModel', 'Model');
/**
 * SnapsSnaptag Model
 *
 * @property Snap $Snap
 * @property Snaptag $Snaptag
 */
class SnapsSnaptag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'snap_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'snaptag_id' => array(
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
		'Snap' => array(
			'className' => 'Snap',
			'foreignKey' => 'snap_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Snaptag' => array(
			'className' => 'Snaptag',
			'foreignKey' => 'snaptag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
