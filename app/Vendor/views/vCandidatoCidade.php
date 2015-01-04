<?php
App::uses('AppModel', 'Model');

class vCandidatoCidade extends AppModel {
	var $name = 'vcandidatoCidade';
	var $useTable = 'vcandidato_cidades';
	var $primaryKey = 'id';   // This is very important
	var $useDbConfig = 'default';
}
