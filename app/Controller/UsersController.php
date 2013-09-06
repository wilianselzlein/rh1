<?php 
// app/Controller/UsersController.php
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login() {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
            $this->Session->write('user', $this->data['User']['username']);
        } else {
            $this->Session->setFlash(__('Faça o login para continuar'));           
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('O usuário foi salvo'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O usuário não pode ser salvo, tente novamente'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido!'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('O usuário foi salvo'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('O usuário não pode ser salvo, tente novamente'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuário inválido!'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Usuário deletado'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Usuário não pode ser deletado'));
        $this->redirect(array('action' => 'index'));
    }

}