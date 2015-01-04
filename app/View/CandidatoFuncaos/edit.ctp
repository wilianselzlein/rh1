<div class="candidatoFuncaos form">
<?php echo $this->Form->create('CandidatoFuncao'); ?>
	<fieldset>
		<legend><?php echo __('Editar Candidato por Função'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidato_id');
		echo $this->Form->input('funcao_id', array('label' => 'Função'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('CandidatoFuncao.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('CandidatoFuncao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candid. Função'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('controller' => 'funcaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
