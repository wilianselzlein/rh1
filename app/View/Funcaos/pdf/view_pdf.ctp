<STYLE type="text/css">
 .tableTdContent{border: none;}
 #titles{font-weight: bolder;}
</STYLE>
<table>
	<tr>
		<td><h3>Relat&oacute;rio de Fun&ccedil;&otilde;es</h3></td>
	</tr>
	<tr>
		<td><b>Data:</b></td>
		<td ><?php echo date("F j, Y, g:i a"); ?></td>
	</tr>
	<tr>
		<td><b>N&uacute;mero de Registros:</b></td>
		<td style="text-align:left"><?php echo count($funcaos);?></td>
	</tr>
	<tr id="titles">
		<td>C&oacute;digo</td>
		<td>Nome</td>
	</tr> 
	<?php foreach($funcaos as $row):
		echo '<tr>';
		echo '<td class="tableTdContent">'.$row['Funcao']['codigo'].'</td>';
		echo '<td class="tableTdContent">'.$row['Funcao']['nome'].'</td>';
		echo '</tr>';
	endforeach;?>
</table>
<div class="actions">
<?php echo $this->Html->link(__('Exportar Xls'), array('controller' => 'Funcaos', 'action' => 'relatorio', 0)); ?>
</div>