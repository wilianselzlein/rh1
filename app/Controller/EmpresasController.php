<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 */
class EmpresasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($todos = false) {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
						'Empresa.id' => array('operator' => 'LIKE'),
						'Empresa.razaosocial' => array('operator' => 'LIKE'),
						'Empresa.fantasia' => array('operator' => 'LIKE'),
						'Empresa.endereco' => array('operator' => 'LIKE'),
						'Empresa.numero' => array('operator' => 'LIKE'),
						'Empresa.bairro' => array('operator' => 'LIKE'),
						'Empresa.cidade_id' => array('operator' => 'LIKE'),
						'Empresa.cep' => array('operator' => 'LIKE'),
						'Empresa.fone' => array('operator' => 'LIKE'),
						'Empresa.email' => array('operator' => 'LIKE'),
						'Empresa.contato1' => array('operator' => 'LIKE'),
						'Empresa.fonecontato1' => array('operator' => 'LIKE'),
						'Empresa.emailcontato1' => array('operator' => 'LIKE'),
						'Empresa.contato2' => array('operator' => 'LIKE'),
						'Empresa.fonecontato2' => array('operator' => 'LIKE'),
						'Empresa.emailcontato2' => array('operator' => 'LIKE'),
						'Empresa.cnpj' => array('operator' => 'LIKE'),
						'Empresa.ie' => array('operator' => 'LIKE'),
						'Empresa.obs ' => array('operator' => 'LIKE')
					)
				),
				'filter2' => array(
					'Empresa.cidade_id' => array(
						'select' => $this->Filter->select('Cidades:', $this->Empresa->Cidade->find('list'))
					)
				)	
			)		
		);
		$this->Filter->setPaginate('order', 'Empresa.razaosocial ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		
		$this->Empresa->recursive = 0;
		$this->set('todos', $todos);

		if (stripos($_SERVER['HTTP_REFERER'], $this->name) > 0) {
			if (! $todos)
				$this->set('empresas', $this->paginate());
			else
				$this->set('empresas', $this->Empresa->Find('all'));
		}
		else
			$this->set('empresas', $this->paginate(array('id' => 0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.'));
			}
		}
		$cidades = $this->Empresa->Cidade->find('list');
		$this->set(compact('cidades'));		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}
		$cidades = $this->Empresa->Cidade->find('list');
		$this->set(compact('cidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('Empresa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empresa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Empresa->recursive = 0;
		$this->set('Empresas', $this->paginate());
	}

	
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid Empresa'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('Empresa', $this->Empresa->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The Empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Empresa could not be saved. Please, try again.'));
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
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid Empresa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('The Empresa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Empresa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
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
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid Empresa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('Empresa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empresa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
