<table cellpadding="0" cellspacing="0">
    <tr>
        <td><h2><?php echo __('Candidato por Função'); ?></h2></td>
        <!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
        <td>
            <div class="actions">
                <table>
                    <tr>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?></li></ul></td>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?></li></ul></td>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo Função'), array('controller' => 'funcaos', 'action' => 'add')); ?></li></ul></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<div class="candidatoFuncaos index">
	<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros3.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('candidato_id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcao_id', 'Função'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($candidatoFuncaos as $candidatoFuncao): ?>
	<tr>
		<td><?php echo h($candidatoFuncao['CandidatoFuncao']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidatoFuncao['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $candidatoFuncao['Candidato']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidatoFuncao['Funcao']['nome'], array('controller' => 'funcaos', 'action' => 'view', $candidatoFuncao['Funcao']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidatoFuncao['CandidatoFuncao']['id']), null, __('Tem certeza que deseja deletar # %s?', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
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

