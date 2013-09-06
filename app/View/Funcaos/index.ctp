<table cellpadding="0" cellspacing="0">
	<tr>
		<td><h2><?php echo __('Funções'); ?></h2></td>
		<!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
		<td>
			<div class="actions">
				<table>
					<tr>
						<td class="tableactions"><ul><li><?php echo $this->Html->link(__('Nova Função'), array('action' => 'add'));?></li></ul></td>
						<td class="tableactions"><ul><li><?php echo $this->Html->link(__('Listar Todos'), array('action' => 'index', true));?></li></ul></td>
					</tr>
				</table>
				<?php /*echo $this->Html->link(__('Relatório'), 'relatorio', array('class' => 'button', 'target' => '_blank'));
				echo $this->Html->link(__('Exportar Xls 1'), 'exporta', array('class' => 'button', 'target' => '_blank'));
				echo $this->Html->link(__('Exportar Xls 2'), array('controller' => 'Funcaos', 'action' => 'relatorio', 0));
				echo $this->Html->link(__('PDF'), array('action' => 'view_pdf', 'ext' => 'pdf')); */?>
			</div>
		</td>
	</tr>
</table>
<div class="funcaos index">
	<?php if (! $todos) include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php if (! $todos) echo $this->Paginator->sort('id'); else echo 'Id';?></th>
		<th><?php if (! $todos) echo $this->Paginator->sort('codigo', 'Código'); else echo 'Código'; ?></th>
		<th><?php if (! $todos) echo $this->Paginator->sort('nome'); else echo 'Nome'; ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($funcaos as $funcao): ?>
	<tr>
		<td><?php echo h($funcao['Funcao']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcao['Funcao']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($funcao['Funcao']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $funcao['Funcao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $funcao['Funcao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $funcao['Funcao']['id']), null, __('Tem certeza que deseja deletar # %s?', $funcao['Funcao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	if (! $todos)
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, iniciando no registro {:start}, finalizando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		if (! $todos) {
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
		}
	?>
	</div>
</div>