<?php
App::uses('AppController', 'Controller');
/**
 * CandidatoEmpresas Controller
 *
 * @property CandidatoEmpresa $CandidatoEmpresa
 */
class CandidatoEmpresasController extends AppController {
/**
 * candidato method
 *
 * @return void
 */
	public function candidato($id = null, $bLayout = false) {
		if (! $bLayout) {
			$this->layout = false;
		}
		$this->set('_Layout', $bLayout);
		$options = array(
			//'fields' => array('Noticia.titulo', 'Noticia.resumo'),
			'conditions' => array('CandidatoEmpresa.candidato_id' => $id)
			//'order' => array('Noticia.created' => 'DESC'),
			//'limit' => 100
		);
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$candidatoEmpresa = $this->paginate('CandidatoEmpresa');
		// Envia os dados pra view
		$this->set('candidatoEmpresas', $candidatoEmpresa);
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
						'CandidatoEmpresa.id' => array('operator' => 'LIKE'),
						'CandidatoEmpresa.datainicio' => array('operator' => 'LIKE'),
						'CandidatoEmpresa.datafim' => array('operator' => 'LIKE'),
						'CandidatoEmpresa.remuneracao ' => array('operator' => 'LIKE'),
					)
				),
				'filter2' => array(
					'CandidatoEmpresa.candidato_id' => array(
						'select' => $this->Filter->select('Candidatos:', $this->CandidatoEmpresa->Candidato->find('list'))
					)
				),
				'filter3' => array(
					'CandidatoEmpresa.empresa_id' => array(
						'select' => $this->Filter->select('Empresas:', $this->CandidatoEmpresa->Empresa->find('list'))
					)
				)
			)
		);
		$this->Filter->setPaginate('order', 'CandidatoEmpresa.id ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		
		$this->CandidatoEmpresa->recursive = 0;
		if (stripos($_SERVER['HTTP_REFERER'], $this->name) > 0)
			$this->set('candidatoEmpresas', $this->paginate());
		else
			$this->set('candidatoEmpresas', $this->paginate(array('CandidatoEmpresa.id' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CandidatoEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid candidato empresa'));
		}
		$options = array('conditions' => array('CandidatoEmpresa.' . $this->CandidatoEmpresa->primaryKey => $id));
		$this->set('candidatoEmpresa', $this->CandidatoEmpresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CandidatoEmpresa->create();
			if ($this->CandidatoEmpresa->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato empresa could not be saved. Please, try again.'));
			}
		}
		$candidatos = $this->CandidatoEmpresa->Candidato->find('list');
		$empresas = $this->CandidatoEmpresa->Empresa->find('list');
		$funcaos = $this->CandidatoEmpresa->Funcao->find('list');
		$this->set(compact('candidatos', 'empresas', 'funcaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CandidatoEmpresa->exists($id)) {
			throw new NotFoundException(__('Invalid candidato empresa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CandidatoEmpresa->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CandidatoEmpresa.' . $this->CandidatoEmpresa->primaryKey => $id));
			$this->request->data = $this->CandidatoEmpresa->find('first', $options);
		}
		$candidatos = $this->CandidatoEmpresa->Candidato->find('list');
		$empresas = $this->CandidatoEmpresa->Empresa->find('list');
		$funcaos = $this->CandidatoEmpresa->Funcao->find('list');
		$this->set(compact('candidatos', 'empresas', 'funcaos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CandidatoEmpresa->id = $id;
		if (!$this->CandidatoEmpresa->exists()) {
			throw new NotFoundException(__('Invalid candidato empresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CandidatoEmpresa->delete()) {
			$this->Session->setFlash(__('Candidato empresa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidato empresa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
