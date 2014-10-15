<?php
App::uses('AppModel', 'Model');
/**
 * Emplois Model
 *
 */
class Emplois extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'modified';

/**
 * Validation rules
 *
 * @var array
 */
/*
	public $validate = array(
		'code' => array(
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
	
	*/
    
    
    
    
 public function supprimer(){

        $this->savefield('fg_etat','S');
        return true;
    }
    
    
}