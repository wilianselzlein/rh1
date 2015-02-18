<div class="funcaos view">
<h2><?php  echo __('Funções'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcao['Funcao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($funcao['Funcao']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($funcao['Funcao']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Função'), array('action' => 'edit', $funcao['Funcao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Função'), array('action' => 'delete', $funcao['Funcao']['id']), null, __('Tem certeza que desja deletar # %s?', $funcao['Funcao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Funções'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Função'), array('action' => 'add')); ?> </li>
	</ul>
</div>
