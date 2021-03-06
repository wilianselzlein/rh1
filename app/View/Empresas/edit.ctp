<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="empresas form">
<?php echo $this->Form->create('Empresa'); ?>
	<fieldset>
		<legend><?php echo __('Editar Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('razaosocial', array('label' => 'Razão Social'));
		echo $this->Form->input('fantasia', array('label' => 'Fantasia'));
		echo $this->Form->input('endereco', array('label' => 'Endereço'));
		echo $this->Form->input('numero', array('label' => 'Número'));
		echo $this->Form->input('bairro', array('label' => 'Bairro'));
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('cep', array('label' => 'CEP' ,'id' => 'cep'));
		echo $this->Form->input('fone', array('label' => 'Fone'));
		echo $this->Form->input('email', array('label' => 'E-Mail'));
		echo $this->Form->input('contato1', array('label' => 'Contato 1'));
		echo $this->Form->input('fonecontato1', array('label' => 'Fone 1'));
		echo $this->Form->input('emailcontato1', array('label' => 'E-Mail'));
		echo $this->Form->input('contato2', array('label' => 'Contato 2'));
		echo $this->Form->input('fonecontato2', array('label' => 'Fone 2'));
		echo $this->Form->input('emailcontato2', array('label' => 'E-Mail'));
		echo $this->Form->input('cnpj', array('label' => 'CNPJ', 'id' => 'cnpj'));
		echo $this->Form->input('ie', array('label' => 'Inscrição Estadual'));
		echo $this->Form->input('obs', array('label' => 'Obs'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Empresa.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('Empresa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('action' => 'index')); ?></li>
	</ul>
</div>
