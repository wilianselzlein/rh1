<?php
App::uses('CandidatoFuncao', 'Model');

/**
 * CandidatoFuncao Test Case
 *
 */
class CandidatoFuncaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidato_funcao',
		'app.candidato',
		'app.funcao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CandidatoFuncao = ClassRegistry::init('CandidatoFuncao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CandidatoFuncao);

		parent::tearDown();
	}

}
