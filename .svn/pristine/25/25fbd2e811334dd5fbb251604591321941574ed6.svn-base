<article>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('id');} else {echo 'Id';} ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('candidato_id');} else {echo 'Candidato';}  ?></th>
		<th><?php if ($_Layout) {echo $this->Paginator->sort('funcao_id');} else {echo __('Função');}  ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach($candidatoFuncaos AS $candidatoFuncao): ?>
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
</article>
