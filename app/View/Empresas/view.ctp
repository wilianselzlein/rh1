<div class="empresas view">
<h2><?php  echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razão Social'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['razaosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fantasia'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['fantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Número'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>		
			<?php echo $this->Html->link($empresa['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['fone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato 1'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['contato1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone 1'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['fonecontato1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emailcontato1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato 2'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['contato2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone 2'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['fonecontato2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-Mail 2'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emailcontato2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IE'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['ie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['obs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Tem certeza que desja deletar # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Empresa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
