<?php
App::uses('AppController', 'Controller');
/**
 * CandidatoFuncaos Controller
 *
 * @property CandidatoFuncao $CandidatoFuncao
 */
class CandidatoFuncaosController extends AppController {
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
			'conditions' => array('CandidatoFuncao.candidato_id' => $id)
			//'order' => array('Noticia.created' => 'DESC'),
			//'limit' => 100
		);
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$candidatoFuncao = $this->paginate('CandidatoFuncao');
		// Envia os dados pra view
		$this->set('candidatoFuncaos', $candidatoFuncao);
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
						'CandidatoFuncao.id' => array('operator' => 'LIKE')
					)
				),
				'filter2' => array(
					'CandidatoFuncao.candidato_id' => array(
						'select' => $this->Filter->select('Candidatos:', $this->CandidatoFuncao->Candidato->find('list'))
					)
				),
				'filter3' => array(
					'CandidatoFuncao.funcao_id' => array(
						'select' => $this->Filter->select('Funções:', $this->CandidatoFuncao->Funcao->find('list'))
					)
				)
			)
		);
		$this->Filter->setPaginate('order', 'CandidatoFuncao.id ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		
		$this->CandidatoFuncao->recursive = 0;
		if (stripos($_SERVER['HTTP_REFERER'], $this->name) > 0)
			$this->set('candidatoFuncaos', $this->paginate());
		else
			$this->set('candidatoFuncaos', $this->paginate(array('CandidatoFuncao.id' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CandidatoFuncao->exists($id)) {
			throw new NotFoundException(__('Invalid candidato funcao'));
		}
		$options = array('conditions' => array('CandidatoFuncao.' . $this->CandidatoFuncao->primaryKey => $id));
		$this->set('candidatoFuncao', $this->CandidatoFuncao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CandidatoFuncao->create();
			if ($this->CandidatoFuncao->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato funcao could not be saved. Please, try again.'));
			}
		}
		$candidatos = $this->CandidatoFuncao->Candidato->find('list');
		$funcaos = $this->CandidatoFuncao->Funcao->find('list');
		$this->set(compact('candidatos', 'funcaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CandidatoFuncao->exists($id)) {
			throw new NotFoundException(__('Invalid candidato funcao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CandidatoFuncao->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato funcao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CandidatoFuncao.' . $this->CandidatoFuncao->primaryKey => $id));
			$this->request->data = $this->CandidatoFuncao->find('first', $options);
		}
		$candidatos = $this->CandidatoFuncao->Candidato->find('list');
		$funcaos = $this->CandidatoFuncao->Funcao->find('list');
		$this->set(compact('candidatos', 'funcaos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CandidatoFuncao->id = $id;
		if (!$this->CandidatoFuncao->exists()) {
			throw new NotFoundException(__('Invalid candidato funcao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CandidatoFuncao->delete()) {
			$this->Session->setFlash(__('Candidato funcao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidato funcao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
