<article>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('id');} else {echo 'Id';} ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('candidato_id');} else {echo 'Candidato';}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('empresa_id');} else {echo 'Empresa';}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('funcao_id');} else {echo __('Função');}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('datainicio');} else {echo __('Data Início');}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('datafim');} else {echo 'Data Final';}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('remuneracao');} else {echo __('Remuneração');}  ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach($candidatoEmpresas AS $candidatoEmpresa): ?>
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
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidatoEmpresa['CandidatoEmpresa']['id']), null, __('Tem certeza que deseja deletar # %s?', $candidatoEmpresa['CandidatoEmpresa']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</article>
