<?php
App::uses('AppModel', 'Model');
/**
 * TypeRequette Model
 *
 * @property Parcour $Parcour
 * @property Produit $Produit
 */
class TypeRequette extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'libelle';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Parcour' => array(
			'className' => 'Parcour',
			'foreignKey' => 'parcour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Produit' => array(
			'className' => 'Produit',
			'foreignKey' => 'produit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
