<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Helper', 'View');
App::import('Model', 'Cidade');
App::import('Model', 'Candidato');
App::import('Model', 'Funcao');
App::import('Model', 'Empresa');
App::import('Model', 'CandidatoEmpresa');
App::import('Model', 'CandidatoFuncao');
App::import('Vendor', 'vCandidatoCidade', array('file' => 'views' . DS . 'vCandidatoCidade.php'));
App::import('Vendor', 'vCandidatoFuncao', array('file' => 'views' . DS . 'vCandidatoFuncao.php'));
App::import('Vendor', 'vEmpresaCandidato', array('file' => 'views' . DS . 'vEmpresaCandidato.php'));
App::import('Vendor', 'vEmpresaFuncao', array('file' => 'views' . DS . 'vEmpresaFuncao.php'));
App::import('Vendor', 'vSalario');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class MenuHelper extends Helper {

	public function _Cidades() {
		$model = new Cidade();  
		return $model->find('count');
	}
	public function _Candidatos() {
		$model = new Candidato();
		return $model->find('count');
	}
	public function _Funcaos() {
		$model = new Funcao();
		return $model->find('count');
	}
	public function _Empresas() {
		$model = new Empresa();
		return $model->find('count');
	}
	public function _CandidatosEmpresas() {
		$model = new CandidatoEmpresa();
		return $model->find('count');
	}
	public function _CandidatosFuncaos() {
	$model = new CandidatoFuncao();
		return $model->find('count');
	}
	public function GrafCandidatoPorCidade() {
		$model = new vCandidatoCidade();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('conta DESC')));
		$nome = "";
		foreach ($rows as $v) {
			$nome = $nome . "<set label='". $v['vcandidatoCidade']['nome'] ."' value='" . $v['vcandidatoCidade']['conta'] . "' />"; 
		}
		return $nome;
	}
	public function GrafCandidatoPorFuncao() {
		$model = new vCandidatoFuncao();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('conta DESC')));
		$nome = "";
		foreach ($rows as $v) {
			$nome = $nome . "<set label='". $v['vcandidatoFuncao']['nome'] ."' value='" . $v['vcandidatoFuncao']['conta'] . "' />"; 
		}
		return $nome;
	}
	public function GrafEmpresaCandidato() {
		$model = new vEmpresaCandidato();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('conta DESC')));
		$nome = "";
		foreach ($rows as $v) {
			$nome = $nome . "<set label='". $v['vempresacandidato']['nome'] ."' value='" . $v['vempresacandidato']['conta'] . "' />"; 
		}
		return $nome;
	}
	public function GrafEmpresaFuncao() {
		$model = new vEmpresaFuncao();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('conta DESC')));
		$nome = "";
		foreach ($rows as $v) {
			$nome = $nome . "<set label='". $v['vempresafuncao']['nome'] ."' value='" . $v['vempresafuncao']['conta'] . "' />"; 
		}
		return $nome;
	}
	public function GrafSalarios($campo = 'maior') {
		$model = new vSalario();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('nome')));
		$nome = "";
		foreach ($rows as $v) {
			$nome = $nome . "<set label='". $v['vsalario']['nome'] ."' value='" . $v['vsalario'][$campo] . "' />"; 
		}
		return $nome;
	}
	public function GrafSalariosHighcharts($campo = 'nome') {
		$model = new vSalario();
		$rows = $model->find('all', array('limit'=> 5, 'order'=>array('nome')));
		$nome = "";
		foreach ($rows as $v) {
			if ($campo == 'nome') 
				$nome = $nome . "'". $v['vsalario']['nome'] . "',"; 
			else
				$nome = $nome . $v['vsalario'][$campo] . ",";
		}
		return substr($nome,0,-1);
	}
}
