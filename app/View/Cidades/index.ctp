<table cellpadding="0" cellspacing="0">
    <tr>
        <td><h2><?php echo __('Cidades'); ?></h2></td>
        <!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
        <td>
                <div class="actions">	
                <ul><li><?php echo $this->Html->link(__('Nova Cidade'), array('action' => 'add')); ?></ul></li>
            </div>
        </td>
    </tr>
</table>
<div class="cidades index">
    <?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($cidades as $cidade): ?>
	<tr>
		<td><?php echo h($cidade['Cidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($cidade['Cidade']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cidade['Cidade']['uf']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $cidade['Cidade']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cidade['Cidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cidade['Cidade']['id']), null, __('Tem certeza que desja deletar # %s?', $cidade['Cidade']['id'])); ?>
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