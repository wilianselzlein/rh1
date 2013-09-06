<div class="cidades form">
<?php echo $this->Form->create('Cidade'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		//echo $this->Form->input('uf');
		echo $this->Form->input('uf', array('options' => Configure::read('UF'),'empty' => 'UF:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Cidade.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('Cidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
