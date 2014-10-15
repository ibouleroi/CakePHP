<?php
App::uses('AppModel', 'Model');
/**
 * TypeOperation Model
 *
 * @property Operation $Operation
 */
class TypeOperation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'libelle';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'S' => array(
				'rule' => array('S'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'libelle' => array(
			'S' => array(
				'rule' => array('S'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fg_etat' => array(
			'S' => array(
				'rule' => array('S'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'type_operation_id',
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
