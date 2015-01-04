<div class="candidatos view">
<h2><?php  echo __('Candidato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['cpf']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Número'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>		
			<?php echo $this->Html->link($candidato['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $candidato['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone 1'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['fone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone 2'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['fonecontato1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CNH'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['cnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria CNH'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['categoriacnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['estadocivil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Nascimento'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($candidato['Candidato']['datanascimento'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Naturalidade'); ?></dt>
		<dd>
            <?php echo $this->Html->link($candidato['Naturalidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $candidato['Candidato']['naturalidade_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grau Instrução'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['grauinstrucao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parecer Entrevista'); ?></dt>
		<dd>
			<?php echo h($candidato['Candidato']['obs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Candidato'), array('action' => 'edit', $candidato['Candidato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidato'), array('action' => 'delete', $candidato['Candidato']['id']), null, __('Tem certeza que desja deletar # %s?', $candidato['Candidato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('action' => 'add')); ?> </li>
	</ul>
</div>
