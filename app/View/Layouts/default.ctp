<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Domper Consultoria e Sistemas');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic', 'stylesheet', array('media' => 'screen'));
		echo $this->Html->css('cake.generic.print', 'stylesheet', array('media' => 'print'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Javascript->link('jquery-1.4.2.min');
	?>
	<script type="text/javascript">
		function __loadMostra(){
		  var objLoader = document.getElementById("carregador_pai");
		  objLoader.style.display = "block";
		  objLoader.style.visibility = "visible";
		}
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<div align="right">
				<?php echo $this->Html->link(
						$this->Html->image('twitter.png', array('alt' => 'Twitter', 'border' => '0')),
						'http://www.twitter.com/DomperSistemas',
						array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link(
						$this->Html->image('facebook.png', array('alt' => 'Facebook', 'border' => '0')),
						'https://www.facebook.com/pages/Domper/467356406633154?ref=hl',
						array('target' => '_blank', 'escape' => false)
					);
				?>
				<?php echo $this->Html->link($cakeDescription, 'http://www.domper.com.br'); ?>
				</div>
			    <?php echo $this->element('menu');?>
			    <i><?php echo $this->Html->link('Logout', array('controller' => 'Users', 'action'=>'logout')); ?></i>
         		<?php //echo $this->Form->submit('Logout',array('class'=>'btn btn-large btn-success'));?>
			</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
		<div id="rodape" align="center">
			Copyright &copy; <?php echo date('Y');?> <a href="http://domper.com.br" style="color:#fff">Domper Consultoria e Sistemas Ltda</a>
		</div>
		<div id="carregador_pai" style="display: none; visibility: hidden;">
			<br/>
			<?php echo $this->Html->image('carregando.gif', array('alt' => 'Carregando...', 'border' => 0)); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
