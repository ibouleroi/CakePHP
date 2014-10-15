<?php
App::uses('AppModel', 'Model');
/**
 * TypeCourrier Model
 *
 * @property Courrier $Courrier
 */
class TypeCourrier extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'libelle';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Courrier' => array(
			'className' => 'Courrier',
			'foreignKey' => 'type_courrier_id',
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
