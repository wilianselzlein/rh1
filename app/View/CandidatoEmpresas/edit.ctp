<div class="candidatoEmpresas form">
<?php echo $this->Form->create('CandidatoEmpresa'); ?>
	<fieldset>
		<legend><?php echo __('Editar Candidato e Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('candidato_id');
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('funcao_id');
		echo $this->Form->input('datainicio', array('label' => 'Data Início', 'dateFormat' => 'DMY'));
		echo $this->Form->input('datafim', array('label' => 'Data Fim', 'dateFormat' => 'DMY'));
		echo $this->Form->input('remuneracao', array('label' => 'Remuneração'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('CandidatoEmpresa.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('CandidatoEmpresa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candidato Emp.'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('controller' => 'funcaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
