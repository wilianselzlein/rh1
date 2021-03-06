<div class="users index">
<h2><?php echo __('Users');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th><?php echo $this->Paginator->sort('id');?></th>
<th><?php echo $this->Paginator->sort('username', 'Usuário');?></th>
<th><?php echo $this->Paginator->sort('password', 'Senha');?></th>
<th><?php echo $this->Paginator->sort('created', 'Criado');?></th>
<th><?php echo $this->Paginator->sort('modified', 'Modificado');?></th>
<th class="actions"><?php echo __('Menu');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user): ?>
<tr>
<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
<td class="actions">
<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $user['User']['id'])); ?>
<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, iniciando no registro {:start}, finalizando em {:end}')
));
?>	</p>

<div class="paging">
<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>
</div>
<div class="actions">
<h3><?php echo __('Menu'); ?></h3>
<ul>
<li><?php echo $this->Html->link(__('Novo Usuário'), array('action' => 'add')); ?></li>
</ul>
</div>