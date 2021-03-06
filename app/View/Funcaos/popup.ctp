<div class="popup">
    <table>
        <tr>
            <td><h2><?php echo __('Adicionar Função ao Candidato');?></h2></td>
            <td><a href="#" onclick=refreshandclose()>Fechar</a></td>
        </tr>
   </table>
  <?php echo $this->Form->create('Funcao');?>
        <fieldset><legend><a href="#" onclick=shownew() id="legend">Nova Fun&ccedil;&atilde;o</a></legend>
	 <span id="addnew" style="display: inline-block">
	 <?php
		echo $this->Form->input('codigo', array('label' => 'Código'));
		echo $this->Form->input('nome', array('label' => 'Nome'));
		echo $this->Form->end(__('Enviar'));
	?>
	 <a href="#" onclick=hidenew()>Esconder</a>
	 </span>
	 <a href="#" onclick=shownew() id="showlink">Mostrar</a>
	 </fieldset>
	 <table cellpadding="0" cellspacing="0">
	 <tr>
		<th>Id</th>
		<th>C&oacute;digo</th>
		<th>Nome</th>
		<th></th>
	 </tr>
	 <?php
	 foreach ($funcaos as $funcao): ?>
	 <tr>
		<td><?php echo h($funcao['Funcao']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcao['Funcao']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($funcao['Funcao']['nome']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Add'), array('action' => 'addcandfunc', $funcao['Funcao']['id'],$candidato_id)); ?>
                </td>
	 </tr>
  <?php endforeach; ?>
	 </table>
</div>
<?php echo $this->Html->script(array('jquery'));?>
<script type="text/javascript">
//<!--
  function refreshandclose() {
	 opener.location.reload(true);
	 self.close();
  }
  $('#header').hide();
  $('#newfunc').hide();
  <?php if(!isset($retry)) echo '$("#addnew").slideUp(0);' ?>
  <?php if(isset($return)) echo 'window.onload=refreshandclose();' ?>
         
	$("#CandidatoFuncaoId").change(function(){
		if($(this).val()==0) {
			//selecting new institution
			$('#newfunc').slideDown(100);
		} else {
			//using existing
			$('#FuncaoNome').val('');
			$('#newinst').slideUp(100);
		}
	} );
  
  function shownew() {
	 $("#addnew").slideDown(500);
	 $("#showlink").hide();
	 $("#legend").attr('onclick','hidenew()');
  }
  
  function hidenew() {
	 $("#addnew").slideUp(500);
	 $("#showlink").show();
	 $("#legend").attr('onclick','shownew()');
  }
//--
</script>