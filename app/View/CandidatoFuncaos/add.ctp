<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosen.html'; ?>
<div class="candidatoFuncaos form">
<?php echo $this->Form->create('CandidatoFuncao'); ?>
	<fieldset>
		<legend><?php echo __('Novo Candidato por Função'); ?></legend>
		<?php 
			echo $this->Form->input('candidato_id', array('class' => 'chzn-select'));
			echo $this->Form->input('funcao_id', array('label' => 'Função', 'class' => 'chzn-select')); 
		?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Todos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('controller' => 'funcaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosenjs.html'; ?>