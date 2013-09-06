<div class="candidatoFuncaos view">
<h2><?php  echo __('Candidato por Função'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidatoFuncao['CandidatoFuncao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candidato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoFuncao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $candidatoFuncao['Candidato']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Função'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoFuncao['Funcao']['nome'], array('controller' => 'funcaos', 'action' => 'view', $candidatoFuncao['Funcao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Candid. Função'), array('action' => 'edit', $candidatoFuncao['CandidatoFuncao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candid. Função'), array('action' => 'delete', $candidatoFuncao['CandidatoFuncao']['id']), null, __('Tem certeza que desja deletar # %s?', $candidatoFuncao['CandidatoFuncao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candid. Funcão'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato Função'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('controller' => 'funcaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
