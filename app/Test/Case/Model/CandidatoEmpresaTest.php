<?php
App::uses('CandidatoEmpresa', 'Model');

/**
 * CandidatoEmpresa Test Case
 *
 */
class CandidatoEmpresaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidato_empresa',
		'app.candidato',
		'app.empresa',
		'app.funcao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CandidatoEmpresa = ClassRegistry::init('CandidatoEmpresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CandidatoEmpresa);

		parent::tearDown();
	}

}
