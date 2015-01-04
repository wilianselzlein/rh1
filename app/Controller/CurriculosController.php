<?php
App::uses('AppController', 'Controller');
/**
 * Curriculos Controller
 *
 * @property Curriculo $Curriculo
 */
class CurriculosController extends AppController {

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($candidato_id = null) {
                $procura = $this->Curriculo->find('first', array(
			'conditions' => array(
				$this->Curriculo->alias . '.candidato_id' => $candidato_id
			),
			//'recursive' => -1,
			'callbacks' => false
		));
                $curriculo_id = $procura['Curriculo']['id'];
            
                if (!$this->Curriculo->exists($curriculo_id)) {
                    $this->redirect(array('controller' => 'Curriculos', 'action' => 'add', $candidato_id));      
                }
		$options = array('conditions' => array('Curriculo.candidato_id = ' => $candidato_id));
		$this->set('curriculo', $this->Curriculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			$this->Curriculo->create();
			if ($this->Curriculo->save($this->request->data)) {
				$this->Session->setFlash(__('The curriculo has been saved'));
				$this->redirect(array('controller' => 'Curriculos', 'action' => 'view', $this->request->data['Curriculo']['candidato_id']));
			} else {
				$this->Session->setFlash(__('The curriculo could not be saved. Please, try again.'));
			}
		}
                $candidatos = $this->Curriculo->Candidato->find('list');
                $candidato_id = $id;
		$this->set(compact('candidatos', 'candidato_id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Curriculo->id = $id;
		if (!$this->Curriculo->exists()) {
			throw new NotFoundException(__('Invalid curriculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Curriculo->delete()) {
			$this->Session->setFlash(__('Curriculo deleted'));
			$this->redirect(array('controller' => 'Candidatos', 'action' => 'index'));
		}
		$this->Session->setFlash(__('Curriculo was not deleted'));
		$this->redirect(array('controller' => 'Candidatos', 'action' => 'index'));
	}
}