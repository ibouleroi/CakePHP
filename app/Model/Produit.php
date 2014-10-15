<?php
App::uses('AppModel', 'Model');
/**
 * Produit Model
 *
 * @property Produit $ParentProduit
 * @property DetteSnapshot $DetteSnapshot
 * @property Dette $Dette
 * @property Produit $ChildProduit
 * @property Requisition $Requisition
 * @property Souscription $Souscription
 * @property TypeRequette $TypeRequette
 */
class Produit extends AppModel {

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
		'ParentProduit' => array(
			'className' => 'Produit',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DetteSnapshot' => array(
			'className' => 'DetteSnapshot',
			'foreignKey' => 'produit_id',
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
		'Dette' => array(
			'className' => 'Dette',
			'foreignKey' => 'produit_id',
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
		'ChildProduit' => array(
			'className' => 'Produit',
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
		'Requisition' => array(
			'className' => 'Requisition',
			'foreignKey' => 'produit_id',
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
		'Souscription' => array(
			'className' => 'Souscription',
			'foreignKey' => 'produit_id',
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
		'TypeRequette' => array(
			'className' => 'TypeRequette',
			'foreignKey' => 'produit_id',
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
