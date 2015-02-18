	<!-- Filtros Wilian: -->
	<?php include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
	<?php include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'chosen.html'; ?>
	<?php echo $this->Search->create(); ?>
	<div class="filter">
		<table border="0" width="100%">
			<tr>
				<td width="10%"><br><?php 
				    if (stripos($_SERVER['REQUEST_URI'], 'candidatos') > 0) { ?>
					<a href="#" onclick="showHideFiltros('fCreatedFiltros')">Cadastrados:</a>
					<div id="fCreatedFiltros" style="display:none">
					    <?php echo $this->Search->input('filter2', array('id' => 'data1'), array('id' => 'data2')); ?>
					</div>
				    <?php } else
					echo $this->Search->input('filter2', array('class' => 'select-box chzn-select'));
				?></td>
				<td width="10%"><br><?php
				    if (stripos($_SERVER['REQUEST_URI'], 'candidatos') > 0) { ?>
					<a href="#" onclick="showHideFiltros('fModifiedFiltros')">Alterados:</a>
					<div id="fModifiedFiltros" style="display:none">
					    <?php echo $this->Search->input('filter3', array('id' => 'data3'), array('id' => 'data4')); ?>
					</div>
				    <?php }
				    else
					echo $this->Search->input('filter3', array('class' => 'select-box chzn-select'));
				?></td>
				<?php if (stripos($_SERVER['REQUEST_URI'], 'candidatos') > 0) { ?>
				<td width="10%"><br><br>
				    <div>
					<?php echo $this->Search->input('filter4', array('class' => 'select-box chzn-select', 'style' => 'width: 110px')); ?>
				    </div>
				</td>   
				<?php } ?>
				<td><br>
				    <div>
				    <?php
					if (stripos($_SERVER['REQUEST_URI'], 'candidatos') > 0) echo 'Filtrar:';
					echo $this->Search->input('filter1', array('style' => 'border: 1px solid #aaa;')); ?>
				    </div>
				</td>
				<td width="10%"><?php echo $this->Search->end(__('Filtrar', true)); ?></td>
			</tr>
		</table>
	</div>
	<?php include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'chosenjs.html'; ?>
	<!-- Fim Filtros -->
