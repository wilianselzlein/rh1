<?php
echo $this->Html->link('Inicial', array('onclick' => "__loadMostra();", 'controller' => 'pages', 'action' => 'display'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link('Cidades', array('controller' => 'cidades', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link(__('Funções'), array('controller' => 'funcaos', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link('Empresas', array('controller' => 'empresas', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link('Candidatos', array('controller' => 'candidatos', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link('Candidatos & Empresas', array('controller' => 'CandidatoEmpresas', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
echo $this->Html->link(__('Candidatos & Funções'), array('controller' => 'CandidatoFuncaos', 'action' => 'index'), array('onclick' =>"__loadMostra();",'escape' => false)) . ' | ';
?>
