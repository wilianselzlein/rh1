<div class="funcaos form">
<?php echo $this->Form->create('Funcao'); ?>
	<fieldset>
		<legend><?php echo __('Editar Função'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo', array('label' => 'Código'));
		echo $this->Form->input('nome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Funcao.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('Funcao.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('action' => 'index')); ?></li>
	</ul>
</div>
