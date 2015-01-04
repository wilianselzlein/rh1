<?php
App::uses('AppController', 'Controller');
App::import('Model', 'CandidatoFuncao');
/**
 * Funcaos Controller
 *
 * @property Funcao $Funcao
 */
class FuncaosController extends AppController {

	var $helpers = array('Xls');
	public $components = array('RequestHandler');

		public function addcandfunc($funcao_id=null, $candidato_id=null) {
			$model = new CandidatoFuncao();
			$model->create();
			$model->save(array('funcao_id'=>$funcao_id,'candidato_id'=>$candidato_id));
		}

		public function popup($id= null,$filter=null) {
		if ($this->request->is('post')) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->request->data)) {
				$this->Session->setFlash(__('Função salva'),'default',array('class'=>'success'));
				$this->addcandfunc($this->Funcao->getLastInsertID(), $id);
				$this->set('return',true);
			} else {
				$this->Session->setFlash(__('Função não pode ser salva.'));
				$this->set('retry',true);
			}
		}
		$this->set('candidato_id',$id);
			$this->Funcao->recursive = 0;
			$this->set('funcaos', $this->Funcao->Find('all'));
	}

	public function view_pdf($id = null) {
	    ini_set('memory_limit', '512M');
		//$this->Funcao->recursive = 1;
		$this->set('funcaos',$this->Funcao->find('all'));
		//$this->render('relatorio','relatorio');
	}

	function exporta() {
		$data = $this->Funcao->find('all');
		$this->set('models', $data);
	}

	public function relatorio($html = true){
		if ($html) {
			//$this->layout = false; 
			$this->set('funcaos', $this->Funcao->find('all'));
		} else {
			$this->Funcao->recursive = 1;
			$this->set('funcaos',$this->Funcao->find('all'));
			$this->render('relatorio','relatorio');
		}
	}
/**
 * index method
 *
 * @return void
 */
	public function index($todos = false) {
		$this->Filter->addFilters(
			array('filter1' => array('OR' => array(
						'Funcao.id' => array('operator' => 'LIKE'),
						'Funcao.nome' => array('operator' => 'LIKE'),
						'Funcao.codigo' => array('operator' => 'LIKE')
					)
				)
			)
		);
		$this->Filter->setPaginate('order', 'Funcao.nome ASC'); // optional
		$this->Filter->setPaginate('limit', 10); // optional
		$this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		
		$this->Funcao->recursive = 0;
		$this->set('todos', $todos);
		if (stripos($_SERVER['HTTP_REFERER'], $this->name) > 0)
		{
			if (! $todos)
				$this->set('funcaos', $this->paginate());
			else
				$this->set('funcaos', $this->Funcao->Find('all'));
		}
		else
			$this->set('funcaos', $this->paginate(array('id' => 0)));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Funcao->exists($id)) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		$options = array('conditions' => array('Funcao.' . $this->Funcao->primaryKey => $id));
		$this->set('funcao', $this->Funcao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Funcao->exists($id)) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Funcao->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Funcao.' . $this->Funcao->primaryKey => $id));
			$this->request->data = $this->Funcao->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Funcao->id = $id;
		if (!$this->Funcao->exists()) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Funcao->delete()) {
			$this->Session->setFlash(__('Funcao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Funcao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Funcao->recursive = 0;
		$this->set('funcaos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Funcao->exists($id)) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		$options = array('conditions' => array('Funcao.' . $this->Funcao->primaryKey => $id));
		$this->set('funcao', $this->Funcao->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Funcao->create();
			if ($this->Funcao->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.'));
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
		if (!$this->Funcao->exists($id)) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Funcao->save($this->request->data)) {
				$this->Session->setFlash(__('The funcao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The funcao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Funcao.' . $this->Funcao->primaryKey => $id));
			$this->request->data = $this->Funcao->find('first', $options);
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
		$this->Funcao->id = $id;
		if (!$this->Funcao->exists()) {
			throw new NotFoundException(__('Invalid funcao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Funcao->delete()) {
			$this->Session->setFlash(__('Funcao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Funcao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
