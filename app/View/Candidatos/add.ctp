<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosen.html'; ?>

<div class="candidatos form">
<?php echo $this->Form->create('Candidato'); ?>
	<fieldset>
		<legend><?php echo __('Novo Candidato'); ?></legend>
	<?php
		echo $this->Form->input('nome', array('label' => 'Nome'));
		echo $this->Form->input('endereco', array('label' => 'Endereço'));
		echo $this->Form->input('numero', array('label' => 'Número'));
		echo $this->Form->input('bairro', array('label' => 'Bairro'));
		echo $this->Form->input('cidade_id', array('class' => 'chzn-select'));
		echo $this->Form->input('cep', array('id' => 'cep', 'label' => 'CEP'));
		echo $this->Form->input('fone', array('label' => 'Fone 1'));
		echo $this->Form->input('fonecontato1', array('label' => 'Fone 2'));
		echo $this->Form->input('email', array('label' => 'E-Mail'));
		echo $this->Form->input('cnh', array('label' => 'CNH'));
		echo $this->Form->input('categoriacnh', array('label' => 'Categoria CNH'));
		echo $this->Form->input('estadocivil', array('label' => 'Estado Civil'));
		echo $this->Form->input('sexo', array('label' => 'Sexo'));
		echo $this->Form->input('datanascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' => date('Y')));
		echo $this->Form->input('naturalidade_id', array('label' => 'Naturalidade', 'class' => 'chzn-select'));
		echo $this->Form->input('grauinstrucao', array('label' => 'Grau de Instrução'));
		echo $this->Form->input('obs', array('label' => 'Parecer Entrevista'));
		echo $this->Form->input('CandidatoFuncao.funcao_id', array('label' => 'Função', 'class' => 'chzn-select'));
		?>
		<!--<table id="mytable" border="0" style="width: 200px" cellpadding="0" cellspacing="0">
			<tr id="funcao0" style="display:none;">
				<td><?php //echo $this->Form->input('unused.funcao_id', array('label' => 'Função', 'class' => 'chzn-select')); ?></td>
				<td><br/><?php //echo $this->Html->image('minus.png', array('alt' => 'Remover Função')) ?></td>
			</tr>
			<tr id="trAdd" >
				<td colspan="2">
					<?php //echo $this->Form->button('Adicionar Função',array('type'=>'button','title'=>'Adicionar Função','onclick'=>'addFuncao()'));?>
				</td>
			</tr>
		</table>-->
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('action' => 'index')); ?></li>
	</ul>
</div>
<script type='text/javascript'>
	var lastRow=0;
	
	function addFuncao() {
		lastRow++;
		$("#mytable tbody>tr:#funcao0").clone(true).attr('id','funcao'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		$("#funcao"+lastRow+" img").attr('onclick','removeFuncao('+lastRow+')');
		$("#funcao"+lastRow+" select").attr('name','data[CandidatoFuncao]['+lastRow+'][funcao_id]').attr('id','CandidatoFuncaoFuncaoId'+lastRow);
	}

	function removeFuncao(x) {
		$("#funcao"+x).remove();
	}
</script>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosenjs.html'; ?>