<?php
App::uses('AppModel', 'Model');
/**
 * Parcour Model
 *
 * @property type_requette $type_requette
 */
class Parcour extends AppModel {

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
		'type_requette' => array(
			'className' => 'type_requette',
			'foreignKey' => 'code',
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
