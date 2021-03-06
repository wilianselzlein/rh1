<div class="candidatoEmpresas view">
<h2><?php  echo __('Candidato e Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidatoEmpresa['CandidatoEmpresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Candidato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoEmpresa['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $candidatoEmpresa['Candidato']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoEmpresa['Empresa']['razaosocial'], array('controller' => 'empresas', 'action' => 'view', $candidatoEmpresa['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Função'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoEmpresa['Funcao']['nome'], array('controller' => 'funcaos', 'action' => 'view', $candidatoEmpresa['Funcao']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Início'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($candidatoEmpresa['CandidatoEmpresa']['datainicio'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Data Fim'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($candidatoEmpresa['CandidatoEmpresa']['datafim'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Remuneração'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($candidatoEmpresa['CandidatoEmpresa']['remuneracao'], true); ?> 
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Candidato Emp.'), array('action' => 'edit', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidato Emp.'), array('action' => 'delete', $candidatoEmpresa['CandidatoEmpresa']['id']), null, __('Tem certeza que desja deletar # %s?', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candidato Emp.'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato Emp.'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('controller' => 'funcaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
