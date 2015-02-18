<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosen.html'; ?>

<div class="curriculos form">
<?php echo $this->html->script("jquery", array('inline'=>false)); ?>
<?php echo $this->Form->create('Curriculo', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Novo Currículo'); ?></legend>
	<?php
                echo $this->Form->input('candidato_id', array('class' => 'chzn-select', 'style' => 'width:100%;', 'value' => $candidato_id));
	        echo $this->Form->file('arq');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?></li>
	</ul>
</div>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosenjs.html'; ?>