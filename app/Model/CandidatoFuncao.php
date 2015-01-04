<?php
App::uses('AppModel', 'Model');
/**
 * CandidatoFuncao Model
 *
 * @property Candidato $Candidato
 * @property Funcao $Funcao
 */
class CandidatoFuncao extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'candidato_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'funcao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'candidato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Funcao' => array(
			'className' => 'Funcao',
			'foreignKey' => 'funcao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
