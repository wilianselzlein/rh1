<table cellpadding="0" cellspacing="0">
	<tr>
		<td><h2><?php echo __('Empresas'); ?></h2></td>
		<!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
		<td>
			<div class="actions">
				<table>
					<tr>
						<td class="tableactions"><ul><li><?php echo $this->Html->link(__('Nova Empresa'), array('action' => 'add'));?></li></ul></td>
						<td class="tableactions"><ul><li><?php echo $this->Html->link(__('Listar Todos'), array('action' => 'index', true));?></li></ul></td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<div class="empresas index">
	<?php if (! $todos) include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros2.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php if (! $todos) echo $this->Paginator->sort('id'); else echo 'Id';?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('razaosocial', 'Razão Social'); else echo 'Razão Social'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('fantasia', 'Fantasia'); else echo 'Fantasia'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('endereco', 'Endereço'); else echo 'Endereço'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('numero', 'Número'); else echo 'Número'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('bairro', 'Bairro'); else echo 'Bairro'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('cidades_id'); else echo 'Cidade'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('cep'); else echo 'CEP'; ?></th>
			<th><?php if (! $todos) echo $this->Paginator->sort('fone'); else echo 'Fone'; ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['id']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['razaosocial']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['fantasia']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['numero']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['bairro']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($empresa['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['id'])); ?> &nbsp;</td>
		<td><?php echo h($empresa['Empresa']['cep']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['fone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Tem certeza que desja deletar # %s?', $empresa['Empresa']['id'])); ?>
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