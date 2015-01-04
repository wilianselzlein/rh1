<?php
App::uses('AppModel', 'Model');

class vSalario extends AppModel {
	var $name = 'vsalario';
	var $useTable = 'vsalarios';
	var $primaryKey = 'id';   // This is very important
	var $useDbConfig = 'default';
}
