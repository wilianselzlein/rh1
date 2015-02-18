<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="candidatos form">
<?php echo $this->Form->create('Candidato', array('type' => 'file')); ?>
	<fieldset>
	    <legend><?php echo __('Editar Candidato'); ?></legend>
	    <h4 style="height:100px; position:absolute; top:11%; left:50%;"><?php echo __('Última alteração: '.$this->data['Candidato']['modified']); ?></h4>
	    
	<?php
		echo $this->Form->input('id'); ?>
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
			<?php echo $this->Form->input('CPF', array('label' => 'CPF')); ?>
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
		    Currículo
			<?php echo $this->Form->file('arq'); ?>
		    </td>
		</tr>
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" colspan="2">
			<?php echo $this->Form->input('obs', array('label' => 'Parecer Entrevista', 'style' => 'height: 50px;')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			</br>
			<div align="center">
			    <?php echo $this->Form->end(__('Enviar')); ?>
			</div>
		    </td>
		</tr>
		</table>
	</fieldset>
    	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>
				<h3>Fun&ccedil;&otilde;es</h3>			
			</th>
			<th>
			    <a href="#" onclick="window.open('<?php echo $this->Html->url(array('controller'=>'funcaos','action'=>'popup', $this->Form->value('Candidato.id'))); ?>',
				'popup','width=550,height=600,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0');
				return false">Adicionar Fun&ccedil;&atilde;o</a>
			</th>
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
