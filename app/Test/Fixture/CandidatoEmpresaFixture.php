<?php
/**
 * CandidatoEmpresaFixture
 *
 */
class CandidatoEmpresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'candidato_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'funcao_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'datainicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'datafim' => array('type' => 'date', 'null' => false, 'default' => null),
		'remuneracao' => array('type' => 'float', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'candidato_id' => 1,
			'empresa_id' => 1,
			'funcao_id' => 1,
			'datainicio' => '2013-04-26',
			'datafim' => '2013-04-26',
			'remuneracao' => 1
		),
	);

}
