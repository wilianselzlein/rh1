<table cellpadding="0" cellspacing="0">
    <tr>
        <td><h2><?php echo __('Candidato'); ?></h2></td>
        <!--<td><div align="right"><h3><?php echo __('Menu'); ?></h3></div></td>-->
        <td>
            <div class="actions">
                <ul><li><?php echo $this->Html->link(__('Novo Candidato'), array('action' => 'add')); ?></li></ul>
            </div>
        </td>
    </tr>
</table>
<div class="candidatos index">
	<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros3.php';
	echo $this->html->script("jquery", array('inline'=>false)); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th>Fun&ccedil;&omacr;es</th>
            <th>Empresas</th>
            <th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
            <th><?php echo $this->Paginator->sort('endereco', 'Endereço'); ?></th>
            <th><?php echo $this->Paginator->sort('numero', 'Número'); ?></th>
            <th><?php echo $this->Paginator->sort('bairro', 'Bairro'); ?></th>
            <th><?php echo $this->Paginator->sort('cidade_id'); ?></th>
            <th><?php echo $this->Paginator->sort('cep', 'CEP'); ?></th>
            <th><?php echo $this->Paginator->sort('fone', 'Fone'); ?></th>
	    <th><?php echo $this->Paginator->sort('modified', 'Alterados'); ?></th>
	    <th><?php echo $this->Paginator->sort('created', 'Cadastrados'); ?></th>
            <th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($candidatos as $candidato): ?>
	<tr>
		<td><?php echo h($candidato['Candidato']['id']);?>&nbsp;</td>
		<td>
			<h6>
				<?php echo $this->Ajax->link('Fun', array('controller' => 'CandidatoFuncaos', 'action' => 'candidato', $candidato['Candidato']['id']), 
				array( 'update' => 'func' . $candidato['Candidato']['id'], 'indicator' => 'loadingF' . $candidato['Candidato']['id']));?>
				<a href="#" onclick="showHide('func<?php echo h($candidato['Candidato']['id']);?>')"><?php echo $this->Html->image('close.png', array('alt' => 'Esconder')); ?></a>
			</h6>
                        <?php echo $this->Html->image('load.gif', array('id' => 'loadingF' . h($candidato['Candidato']['id']), 'style'=> 'display:none')); ?>
		</td>
		<td>
			<h6>
				<?php echo $this->Ajax->link('Emp', array('controller' => 'CandidatoEmpresas', 'action' => 'candidato', $candidato['Candidato']['id']), 
				array( 'update' => 'emp' . $candidato['Candidato']['id'], 'indicator' => 'loadingE' . $candidato['Candidato']['id']	));?>
				<a href="#" onclick="showHide('emp<?php echo h($candidato['Candidato']['id']);?>')"><?php echo $this->Html->image('close.png', array('alt' => 'Esconder')); ?></a>
			</h6>
                        <?php echo $this->Html->image('load.gif', array('id' => 'loadingE' . h($candidato['Candidato']['id']), 'style'=> 'display:none')); ?>
			<p id="emp<?php echo h($candidato['Candidato']['id']);?>">
			</p>
		</td>
		<td><?php echo h($candidato['Candidato']['nome']); ?>&nbsp;</td>
		<td><?php echo h($candidato['Candidato']['endereco']); ?>&nbsp;
			<?php 
					if (! $candidato['Candidato']['endereco'] == '')
					echo $this->Html->link(
						$this->Html->image('world.png', array('alt' => 'Visualizar no Google Maps', 'border' => '0')),
						'https://maps.google.com/maps?q='.$candidato['Candidato']['endereco'].' '.$candidato['Candidato']['numero'].' '.$candidato['Candidato']['bairro'].','.$candidato['Cidade']['nome'].'&hl=pt',
						array('target' => '_blank', 'escape' => false)
					);
			?>			
		</td>
		<td><?php echo h($candidato['Candidato']['numero']); ?>&nbsp;</td>
		<td><?php echo h($candidato['Candidato']['bairro']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($candidato['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $candidato['Candidato']['cidade_id'])); ?></td>
		<td><?php echo h($candidato['Candidato']['cep']); ?>&nbsp;</td>
		<td><?php echo h($candidato['Candidato']['fone']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($candidato['Candidato']['modified']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($candidato['Candidato']['created']); ?>&nbsp;</td>
		<td class="actions">
                        <?php echo $this->Html->link(__('Currículo'), array('controller' => 'Curriculos', 'action' => 'view', $candidato['Candidato']['id'])); ?>
			<?php echo $this->Html->link(__('Funções'), array('controller' => 'CandidatoFuncaos', 'action' => 'candidato', $candidato['Candidato']['id'], true)); ?>
			<?php echo $this->Html->link(__('Empresas'), array('controller' => 'CandidatoEmpresas', 'action' => 'candidato', $candidato['Candidato']['id'], true)); ?>
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidato['Candidato']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidato['Candidato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidato['Candidato']['id']), null, __('Tem certeza que deseja deletar # %s?', $candidato['Candidato']['id'])); ?>
		</td>
        </tr>
	<tr>
		<td colspan="13" style="padding: 0px;">
			<div id="func<?php echo h($candidato['Candidato']['id']);?>" style="margin-bottom: 0px;"></div>
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

<script language="Javascript" type="text/javascript">
function showHide (ID) {
	if (document.getElementById(ID).style.display == "none") {
		document.getElementById(ID).style.display= "";
	}
	else {
		document.getElementById(ID).innerHTML = "";
	}
}
function showHideFiltros (ID) {
    if (document.getElementById(ID).style.display == "none") {
	document.getElementById(ID).style.display= "";
    }
    else {
	document.getElementById(ID).style.display= "none";
    }
}
</script>