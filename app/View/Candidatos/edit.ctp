<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="candidatos form">
<?php echo $this->Form->create('Candidato'); ?>
	<fieldset>
		<legend><?php echo __('Editar Candidato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome', array('label' => 'Nome'));
		echo $this->Form->input('endereco', array('label' => 'Endereço'));
		echo $this->Form->input('numero', array('label' => 'Número'));
		echo $this->Form->input('bairro', array('label' => 'Bairro'));
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('cep', array('id' => 'cep', 'label' => 'CEP'));
		echo $this->Form->input('fone', array('label' => 'Fone 1'));
		echo $this->Form->input('fonecontato1', array('label' => 'Fone 2'));
		echo $this->Form->input('email', array('label' => 'E-Mail'));
		echo $this->Form->input('cnh', array('label' => 'CNH'));
		echo $this->Form->input('categoriacnh', array('label' => 'Categoria CNH'));
		echo $this->Form->input('estadocivil', array('label' => 'Estado Civil'));
		echo $this->Form->input('sexo', array('label' => 'Sexo'));
		echo $this->Form->input('datanascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY'));
		echo $this->Form->input('naturalidade_id', array('label' => 'Naturalidade'));
		echo $this->Form->input('grauinstrucao', array('label' => 'Grau de Instrução'));
		echo $this->Form->input('obs', array('label' => 'Parecer Entrevista'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
	<h3>Fun&ccedil;&otilde;es</h3>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>
				<a href="#" onclick="window.open('<?php echo $this->Html->url(array('controller'=>'funcaos','action'=>'popup', $this->Form->value('Candidato.id'))); ?>',
				'popup','width=550,height=600,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0');
				return false">Adicionar Fun&ccedil;&atilde;o</a>
			</th>
			<th></th>
		</tr>
		<?php foreach ($candidatofuncaos as $a) { ?>
		<tr>
			 <td><?php echo $a['Funcao']['nome']; ?></td>
			 <td class="actions"><?php
				echo $this->Html->link(__('Detalhes'), array('controller'=>'CandidatoFuncaos', 'action' => 'view', $a['CandidatoFuncao']['id']));
				echo $this->Form->postLink(__('Deletar'), array('controller'=>'Candidatos', 'action' => 'deletefuncao', $a['CandidatoFuncao']['id']), null, __('Tem certeza que deseja deletar # %s?', $a['CandidatoFuncao']['id'])); ?>
			 </td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Candidato.id')), null, __('Tem certeza que desja deletar # %s?', $this->Form->value('Candidato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('action' => 'index')); ?></li>
	</ul>
</div>
