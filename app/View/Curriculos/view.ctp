<div class="curriculos view">
<h2><?php  echo __('Currículo') ?></h2>
<h3>
    <?php echo $this->Html->link($curriculo['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $curriculo['Candidato']['id'])); ?>
</h3>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caminho'); ?></dt>
		<dd>
			<a href="/rh1/arqs/<?php echo basename($curriculo['Curriculo']['caminho']); ?>"><?php echo h($curriculo['Curriculo']['caminho']); ?></a>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
                        <a href="/rh1/arqs/<?php echo basename($curriculo['Curriculo']['caminho']); ?>"><?php echo h($curriculo['Curriculo']['nome']); ?></a>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tamanho'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['tamanho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adicionado'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Candidato'), array('controller' => 'candidatos', 'action' => 'edit', $curriculo['Curriculo']['candidato_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currículo'), array('action' => 'delete', $curriculo['Curriculo']['id']), null, __('Tem certeza que desja deletar # %s?', $curriculo['Curriculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Candidatos'), array('controller' => 'candidatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Currículo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
