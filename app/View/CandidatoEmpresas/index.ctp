<table cellpadding="0" cellspacing="0">
    <tr>
        <td><h2><?php echo __('Candidato e Empresas'); ?></h2></td>
        <!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
        <td>
            <div class="actions">	
                <table>
                    <tr>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?></li></ul></td>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo Candidato'), array('controller' => 'candidatos', 'action' => 'add')); ?></li></ul></td>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Novo Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?></li></ul></td>
                        <td class="tableactions"><ul><li><?php echo $this->Html->link(__('Nova Função'), array('controller' => 'funcaos', 'action' => 'add')); ?></li></ul></td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<div class="candidatoEmpresas index">
	<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros3.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('candidato_id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('funcao_id', 'Função'); ?></th>
			<th><?php echo $this->Paginator->sort('datainicio', 'Data Início'); ?></th>
			<th><?php echo $this->Paginator->sort('datafim', 'Data Fim'); ?></th>
			<th><?php echo $this->Paginator->sort('remuneracao', 'Remuneração'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($candidatoEmpresas as $candidatoEmpresa): ?>
	<tr>
		<td><?php echo h($candidatoEmpresa['CandidatoEmpresa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($candidatoEmpresa['Candidato']['nome'], array('controller' => 'candidatos', 'action' => 'view', $candidatoEmpresa['Candidato']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidatoEmpresa['Empresa']['razaosocial'], array('controller' => 'empresas', 'action' => 'view', $candidatoEmpresa['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($candidatoEmpresa['Funcao']['nome'], array('controller' => 'funcaos', 'action' => 'view', $candidatoEmpresa['Funcao']['id'])); ?>
		</td>
		<td><?php echo $this->Locale->date($candidatoEmpresa['CandidatoEmpresa']['datainicio'], true); ?> &nbsp;</td>
		<td><?php echo $this->Locale->date($candidatoEmpresa['CandidatoEmpresa']['datafim'], true); ?> &nbsp;</td>
		<td><?php echo $this->Locale->currency($candidatoEmpresa['CandidatoEmpresa']['remuneracao'], true); ?> &nbsp;</td>
		<!-- <td><?php //echo h($candidatoEmpresa['CandidatoEmpresa']['remuneracao']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidatoEmpresa['CandidatoEmpresa']['id']), null, __('Tem certeza que desja deletar # %s?', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
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
