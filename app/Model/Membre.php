<?php
App::uses('AppModel', 'Model');
/**
 * Membre Model
 *
 * @property Groupe $Groupe
 * @property User $User
 */
class Membre extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'groupe_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Groupe' => array(
			'className' => 'Groupe',
			'foreignKey' => 'groupe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
