<?php
App::uses('AppController', 'Controller');
App::import('Model', 'CandidatoFuncao');
App::import('Model', 'Curriculo');
/**
 * Candidatos Controller
 *
 * @property Candidato $Candidato
 */

class CandidatosController extends AppController {

 /* index method
 *
 * @return void
 */
	public function index() {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
						'Candidato.id' => array('operator' => 'LIKE'),
						'Candidato.nome' => array('operator' => 'LIKE'),
						'Candidato.endereco' => array('operator' => 'LIKE'),
						'Candidato.numero' => array('operator' => 'LIKE'),
						'Candidato.bairro' => array('operator' => 'LIKE'),
						'Candidato.cidade_id' => array('operator' => 'LIKE'),
						'Candidato.cep' => array('operator' => 'LIKE'),
						'Candidato.fone' => array('operator' => 'LIKE'),
						'Candidato.email' => array('operator' => 'LIKE'),
						'Candidato.contato1' => array('operator' => 'LIKE'),
						'Candidato.fonecontato1' => array('operator' => 'LIKE'),
						'Candidato.emailcontato1' => array('operator' => 'LIKE'),
						'Candidato.contato2' => array('operator' => 'LIKE'),
						'Candidato.fonecontato2' => array('operator' => 'LIKE'),
						'Candidato.emailcontato2' => array('operator' => 'LIKE'),
						'Candidato.cpf' => array('operator' => 'LIKE'),
						'Candidato.rg' => array('operator' => 'LIKE'),
						'Candidato.ctps' => array('operator' => 'LIKE'),
						'Candidato.pis' => array('operator' => 'LIKE'),
						'Candidato.cnh' => array('operator' => 'LIKE'),
						'Candidato.categoriacnh' => array('operator' => 'LIKE'),
						'Candidato.vctocnh' => array('operator' => 'LIKE'),
						'Candidato.estadocivil' => array('operator' => 'LIKE'),
						'Candidato.sexo' => array('operator' => 'LIKE'),
						'Candidato.datanascimento' => array('operator' => 'LIKE'),
						'Candidato.naturalidade_id' => array('operator' => 'LIKE'),
						'Candidato.grauinstrucao' => array('operator' => 'LIKE'),
						'Candidato.obs' => array('operator' => 'LIKE')
					)
				),
				/*'filter2' => array(
					'Candidato.cidade_id' => array(
						'select' => $this->Filter->select('Cidades:', $this->Candidato->Cidade->find('list'))
					)
				)*/
				'filter2' => array(
					'Candidato.created' => array(
						'operator' => 'between',
						'between' => array( 'text' => __(' e ', true), 'date' => true))
				),
				'filter3' => array(
					'Candidato.modified' => array(
						'operator' => 'between',
						'between' => array('text' => __(' e ', true), 'date' => true))
				),
				'filter4' => array(
					'Candidato.situacao' => array(
						'select' => $this->Filter->select('Situação:', array('A' => 'Ativo', 'I' => 'Inativo', 'P' => 'Pendente'))
					)
				)
			)
		);
		$this->Filter->setPaginate('order', 'Candidato.nome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		
		$this->Candidato->recursive = 0;
		if (isset($_SERVER['HTTP_REFERER']) && (stripos($_SERVER['HTTP_REFERER'], $this->name) > 0))
			$this->set('candidatos', $this->paginate());
		else
			$this->set('candidatos', $this->paginate(array('id' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Candidato->exists($id)) {
			throw new NotFoundException(__('Invalid candidato'));
		}
		$options = array('conditions' => array('Candidato.' . $this->Candidato->primaryKey => $id));
		$this->set('candidato', $this->Candidato->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Candidato->create();
			//debug($this->request->data); die;
			if ($this->Candidato->save($this->request->data)) {		
				$arq = $this->request->data['Candidato']['arq'];
				$candidato_id = $this->Candidato->getLastInsertId(); 
				if ($arq != null) {
					$curriculo = new Curriculo();
					$savedata = array();
					$savedata['candidato_id'] = $this->Candidato->getLastInsertId();
					$savedata['arq'] = $arq;
					$curriculo->create();
					$curriculo->save($savedata);				
				}

				$model = new CandidatoFuncao();
				if ($this->request->data['CandidatoFuncao']['funcao_id'] != null) {
					for($index=0;$index < count($this->request->data['CandidatoFuncao']['funcao_id']); $index++) {
					$savedata = array();
					$savedata['candidato_id'] = $this->Candidato->getLastInsertId();
					$savedata['funcao_id'] = $this->request->data['CandidatoFuncao']['funcao_id'][$index];
					$model->create();
					$model->save($savedata);
					}
				}
				$this->Session->setFlash(__('Candidato ' . $this->request->data['Candidato']['nome'] . ' salvo. Id ' . $savedata['candidato_id']));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O candidato não pode ser salvo. Tente novamente.'));
			}
		}
		$cidades = $this->Candidato->Cidade->find('list');
		$naturalidades = $this->Candidato->Cidade->find('list');
		$funcaos = $this->Candidato->CandidatoFuncao->Funcao->find('list');
		$this->set(compact('cidades', 'naturalidades', 'funcaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Candidato->exists($id)) {
			throw new NotFoundException(__('Invalid candidato'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Candidato->save($this->request->data)) {
				$this->Session->setFlash(__('The candidato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Candidato.' . $this->Candidato->primaryKey => $id));
			$this->request->data = $this->Candidato->find('first', $options);
		}
		$cidades = $this->Candidato->Cidade->find('list');
		$naturalidades = $this->Candidato->Cidade->find('list');
		$candidatofuncaos = $this->Candidato->CandidatoFuncao->find('all', array('conditions' => array('Candidato.' . $this->Candidato->primaryKey => $id)));
		$this->set(compact('cidades', 'naturalidades', 'candidatofuncaos'));
	}

		public function deletefuncao($id = null) {
			$this->Candidato->CandidatoFuncao->id=$id;
			$this->Candidato->CandidatoFuncao->delete();
			$this->redirect($this->referer());
		}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Candidato->id = $id;
		if (!$this->Candidato->exists()) {
			throw new NotFoundException(__('Invalid candidato'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Candidato->delete()) {
			$this->Session->setFlash(__('Candidato deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidato was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Candidato->recursive = 0;
		$this->set('Candidatos', $this->paginate());
	}

	
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Candidato->exists($id)) {
			throw new NotFoundException(__('Invalid Candidato'));
		}
		$options = array('conditions' => array('Candidato.' . $this->Candidato->primaryKey => $id));
		$this->set('Candidato', $this->Candidato->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Candidato->create();
			if ($this->Candidato->save($this->request->data)) {
				$this->Session->setFlash(__('The Candidato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Candidato could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Candidato->exists($id)) {
			throw new NotFoundException(__('Invalid Candidato'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Candidato->save($this->request->data)) {
				$this->Session->setFlash(__('The Candidato has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Candidato could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Candidato.' . $this->Candidato->primaryKey => $id));
			$this->request->data = $this->Candidato->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Candidato->id = $id;
		if (!$this->Candidato->exists()) {
			throw new NotFoundException(__('Invalid Candidato'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Candidato->delete()) {
			$this->Session->setFlash(__('Candidato deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Candidato was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

