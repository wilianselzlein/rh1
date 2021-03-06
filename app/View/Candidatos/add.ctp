<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosen.html'; ?>

<div class="candidatos form">
<?php echo $this->Form->create('Candidato', array('type' => 'file')); ?>
<?php echo $this->html->script("jquery", array('inline'=>false)); ?>
	<fieldset>
		<legend><?php echo __('Novo Candidato'); ?></legend>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" colspan="2">
			<?php echo $this->Form->input('nome', array('label' => 'Nome')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php $tipo = array('' => '', 'M' => 'Masculino', 'F' => 'Feminino');
			    echo $this->Form->input('sexo', array('label' => 'Sexo', 'type' => 'select', 'options' => $tipo, 'style' => 'width:100%;')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('cfp', array('label' => 'CPF')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('endereco', array('label' => 'Endereço')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('numero', array('label' => 'Número')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('bairro', array('label' => 'Bairro')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="40%">
			<?php echo $this->Form->input('cidade_id', array('class' => 'chzn-select', 'style' => 'width:98%;')); ?> 
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('cep', array('id' => 'cep', 'label' => 'CEP')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('fone', array('label' => 'Fone 1')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('fonecontato1', array('label' => 'Fone 2')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php $tipo = array('' => '', 'P' => 'Papel', 'E' => 'Email', 'A' => 'Ambos');
			    echo $this->Form->input('curriculo', array('type' => 'select', 'label' => 'Currículo', 'options' => $tipo, 'style' => 'width:100%;')); ?>    
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php  $tipo = array('' => '', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'AB');
			    echo $this->Form->input('categoriacnh', array('label' => 'Categoria CNH', 'options' => $tipo, 'style' => 'width:99%;'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php  $tipo = array('' => '', 'C' => 'Casado(a)', 'S' => 'Solteiro(a)', 'P' => 'Separado(a)', 'U' => 'União Estável');
			echo $this->Form->input('estadocivil', array('label' => 'Estado Civil', 'type' => 'select', 'options' => $tipo, 'style' => 'width:99%;')); ?>
		    </td>		    
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('grauinstrucao', array('label' => 'Grau de Instrução')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('datanascimento', array('label' => 'Data de Nascimento', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'))); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('naturalidade_id', array('label' => 'Naturalidade', 'class' => 'chzn-select', 'style' => 'width:98%;')); ?>
		    </td>		    
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('situacao', array('type' => 'select', 'label' => 'Situação', 'options' => array('A' => 'Ativo', 'I' => 'Inativo', 'P' => 'Pendente'), 'style' => 'width:100%;')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" colspan="3">
	    		<?php echo $this->Form->input('CandidatoFuncao.funcao_id', array('label' => 'Função', 'class' => 'chzn-select', 'multiple' => true)); ?>
		    </td>    
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" colspan="3">
			<?php echo $this->Form->input('obs', array('label' => 'Parecer Entrevista', 'style' => 'height: 50px;')); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" colspan="3">
		    Currículo
			<?php echo $this->Form->file('arq'); ?>
		    </td>
		</tr>
		</table>
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
		$("#funcao"+lastRow+" select").attr('name','data[CandidatoFuncao]['+lastRow+'][funcao_id]').attr('id','CandidatoFuncao'+lastRow+'FuncaoId');
		$("#funcao"+lastRow+" label").attr('for','CandidatoFuncao'+lastRow+'FuncaoId');
		//$("#funcao"+lastRow+" li").attr('id','CandidatoFuncaoFuncao'+lastRow+'Id_chzn_o_1');
		//$("#funcao"+lastRow+" div").find('CandidatoFuncaoFuncaoId_chzn').attr('style','width: 400px;');
	}

	function removeFuncao(x) {
		$("#funcao"+x).remove();
	}
</script>
<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'chosenjs.html'; ?>