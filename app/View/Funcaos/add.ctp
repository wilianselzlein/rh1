<div class="funcaos form">
<?php echo $this->Form->create('Funcao'); ?>
	<fieldset>
		<legend><?php echo __('Novo Função'); ?></legend>
	<?php
		echo $this->Form->input('codigo', array('label' => 'Código'));
		echo $this->Form->input('nome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar'), array('onclick' => '__loadMostra(); submit();')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('action' => 'index')); ?></li>
	</ul>
</div>
