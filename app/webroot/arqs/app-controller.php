<?php
/**
 * Autor: Denilson Telaroli.
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

    var $components = array('Auth', 'Acl', 'Session');

    function beforeFilter() {
//        $this->Auth->allow('*');
        $this->Auth->userModel = 'Usuario';
        $this->Auth->fields = array('username' => 'login', 'password' => 'senha');
        $this->Auth->authorize = 'actions';
        $this->Auth->autoRedirect = true;
        $this->Auth->loginAction = array('controller' => 'usuarios', 'action' => 'login', 'admin' => true, 'plugin' => null);
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'home', 'admin' => true, 'plugin' => null);
        $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'home', 'admin' => false, 'plugin' => null);
        $this->Auth->loginError = "Usuário e/ou senha inválidos";
        $this->Auth->authError = "Área restrita. Por favor efetue login.";
        $this->Auth->actionPath = 'controllers/';
    }
}
