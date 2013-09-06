<?php
/**
 * EmpresaFixture
 *
 */
class EmpresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'razaosocial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fantasia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'endereco' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => null),
		'bairro' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cidades_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'cep' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contato1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fonecontato1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'emailcontato1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'cp1250_bin', 'charset' => 'cp1250'),
		'contato2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fonecontato2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'emailcontato2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cnpj' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ie' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'obs' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'razaosocial' => 'Lorem ipsum dolor sit amet',
			'fantasia' => 'Lorem ipsum dolor sit amet',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'numero' => 1,
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cidades_id' => 1,
			'cep' => 'Lorem i',
			'fone' => 'Lorem ipsum dolor ',
			'email' => 'Lorem ipsum dolor sit amet',
			'contato1' => 'Lorem ipsum dolor sit amet',
			'fonecontato1' => 'Lorem ipsum dolor ',
			'emailcontato1' => 'Lorem ipsum dolor sit amet',
			'contato2' => 'Lorem ipsum dolor sit amet',
			'fonecontato2' => 'Lorem ipsum dolor ',
			'emailcontato2' => 'Lorem ipsum dolor sit amet',
			'cnpj' => 'Lorem ipsum dolor ',
			'ie' => 'Lorem ipsum dolor ',
			'obs' => 'Lorem ipsum dolor sit amet'
		),
	);

}
