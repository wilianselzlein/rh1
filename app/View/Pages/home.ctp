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
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
        $('#chart').highcharts({
            chart: {
                type: 'line',
                marginRight: 130,
                marginBottom: 50
            },
            title: {
                text: 'Média Salarial',
                x: -20 //center
            },
            subtitle: {
                text: 'www.domper.com.br',
                x: -20
            },
            xAxis: {
                categories: [<?php echo $this->Menu->GrafSalariosHighcharts(); //'Programador', 'Gerente', 'Teste'?>]
            },
            yAxis: {
                title: {
                    text: 'Profissões'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'R$'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Máximo',
                data: [<?php echo $this->Menu->GrafSalariosHighcharts('maior'); //7.0, 6.9, 9.5?>]
            }, {
                name: 'Média',
                data: [<?php echo $this->Menu->GrafSalariosHighcharts('media'); //7.0, 6.9, 9.5?>]
            }, {
                name: 'Mínimo',
                data: [<?php echo $this->Menu->GrafSalariosHighcharts('menor'); //7.0, 6.9, 9.5?>]
            }]
        });
    });

		</script>
<?php $cam = '/rh1'; //no linux se usa em branco ?>
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) -->
<div style="display:none;">
    <a href="javascript:void(window.open('http://187.54.165.153:5254/livezilla/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))">
        <img id="chat_button_image" src="http://187.54.165.153:5254/livezilla/image.php?id=04&amp;type=overlay" width="37" height="123" border="0" alt="LiveZilla Live Help">
    </a>
</div>
<!-- http://www.LiveZilla.net Chat Button Link Code -->
<!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) -->
<div id="livezilla_tracking" style="display:none">
</div>
<script type="text/javascript">
	var script = document.createElement("script");
	script.type="text/javascript";
	var src = "http://187.54.165.153:5254/livezilla/server.php?request=track&output=jcrpt&fbpos=12&fbml=0&fbmt=0&fbmr=0&fbmb=0&fbw=37&fbh=123&nse="+Math.random();
	setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
</script>
<noscript>
	<img src="http://187.54.165.153:5254/livezilla/server.php?request=track&amp;output=nojcrpt&amp;fbpos=12&amp;fbml=0&amp;fbmt=0&amp;fbmr=0&amp;fbmb=0&amp;fbw=37&amp;fbh=123" width="0" height="0" style="visibility:hidden;" alt="">
</noscript>
<!-- http://www.LiveZilla.net Tracking Code -->

<script src="<?php echo $cam; ?>/js/aba.js" type="text/javascript"></script>
<link href="<?php echo $cam; ?>/css/aba.css" type="text/css" rel="stylesheet">
<?php $valor = $this->Session->read('Auth.User');  //Retorna o array com o id, nome do usuário e password. ?>
<span class="notice success">Bem vindo(a) <?php echo $valor['username']; ?>! Você está logado no sistema. </span>

<h3><?php echo 'Registros cadastrados'; ?></h3>
<p><?php echo 'Registros cadastrados em cada programa:'; ?></p>
<ul>
        <li><strong><?php echo ClassRegistry::init('Cidade')->find('count'); ?></strong>&nbsp;Cidade(s);</li>
	<!-- <li><strong><?php //echo  $this->Menu->_Cidades(); ?></strong>&nbsp;Cidade(s);</li> -->
	<li><strong><?php echo $this->Menu->_Funcaos(); ?></strong>&nbsp;Função(ões);</li>
	<li><strong><?php echo $this->Menu->_Empresas(); ?></strong>&nbsp;Empresa(s);</li>
	<li><strong><?php echo $this->Menu->_Candidatos(); ?></strong>&nbsp;Candidato(s);</li>
	<li><strong><?php echo $this->Menu->_CandidatosEmpresas(); ?></strong>&nbsp;Candidato(s) & Empresas(s);</li>
	<li><strong><?php echo $this->Menu->_CandidatosFuncaos(); ?></strong>&nbsp;Candidato(s) & Função(ões);</li>
</ul>
<br/>
<div id="divFora">
	<div id="divDentro1"> 
		<div align="center">
			<br/>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Bar2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Bar2D.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Candidatos por Cidades' yAxisName='Quantidade' ><?php echo $this->Menu->GrafCandidatoPorCidade(); ?></chart>' quality='high' name='Bar2D' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'" />
			</object>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Line2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Column2D.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Candidatos por Função' yAxisName='Quantidade' ><?php echo $this->Menu->GrafCandidatoPorFuncao(); ?></chart>' quality='high' name='Line2D' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'" />
			</object>
		</div>
	</div>
	<div id="divDentro2">
		<br/>
		<div align="center">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Pie2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Pie2D.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Empresas e Funcionários' yAxisName='Quantidade' ><?php echo $this->Menu->GrafEmpresaCandidato(); ?></chart>' quality='high' name='Pie2D' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'" />
			</object>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Line2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Doughnut2D.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Empresas e Funções' yAxisName='Quantidade' lineColor='FCB541'><?php echo $this->Menu->GrafEmpresaFuncao(); ?></chart>' quality='high' name='Line2D' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'" />
			</object>
		</div>
	</div>
	<div id="divDentro3">
		<br/>
		<div align="center">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Line2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Line.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Maiores Salários' yAxisName='Valor em R$' lineColor='FCB541'><?php echo $this->Menu->GrafSalarios(); ?></chart>' quality='high' name='Line2D' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'" />
			</object>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="Line2D" >
				<embed src="<?php echo $cam; ?>/Fusion/Charts/Line.swf" width="49%" height="250" flashVars="&dataXML=
				<chart caption='Menores Salários' yAxisName='Horas' > <?php echo $this->Menu->GrafSalarios('menor'); ?> </chart>" quality="high" name="Line2D" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object>
		</div>
	</div>
	<div id="divDentro4">
		<br/>
		<script src="<?php echo $cam; ?>/js/highcharts/highcharts.js"></script>
		<script src="<?php echo $cam; ?>/js/highcharts/modules/exporting.js"></script>
		<div id="chart" style="min-width: 250px; height: 250px; margin: 10 auto"></div>
	</div>
	<?php /*
	<div id="divDentro5">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="300" height="300" id="MSCombiDY2D" >
			<embed src="<?php echo $cam; ?>/Fusion/Charts/MSLine.swf" width="500" height="250" flashVars="&dataXML=
			<chart caption='Comparativo Salarial (Maior e Menor)' formatNumberScale='0' formatNumber='0'> <categories><category label='Programador'/><category label='Teste'/></categories><dataset seriesName='Maior'><set value='10'/><set value='5'/></dataset><dataset seriesName='Menor'><set value='2' /><set value='1' /></dataset> </chart>" quality="high" name="MSCombiDY2D" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
		<br/>
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="300" height="300" id="MSCombiDY2D" >
			<embed src="<?php echo $cam; ?>/Fusion/Charts/MSArea.swf" width="500" height="250" flashVars="&dataXML=
			<chart caption='Comparativo Salarial (Maior e Media) ' formatNumberScale='0' formatNumber='0'
			 plotFillAlpha='50' numVDivLines='10' showAlternateVGridColor='1' AlternateVGridColor='e1f5ff' divLineColor='e1f5ff' vdivLineColor='e1f5ff' baseFontColor='666666' canvasBorderThickness='1' showPlotBorder='1' plotBorderThickness='0'>  <categories><category label='Programador'/><category label='Teste'/></categories><dataset seriesName='Maior' color='C8A1D1' plotBorderColor='C8A1D1'><set value='10'/><set value='5'/></dataset><dataset seriesName='Menor' color='B1D1DC' plotBorderColor='B1D1DC'><set value='2' /><set value='1' /></dataset> </chart>" quality="high" name="MSCombiDY2D" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object> --!>
	</div>
	*/ ?>
</div>
<br/>
<script>
	var aba = new JTabControl("divFora",500,300);
	aba.addTab("divDentro4", " <b><u> Média </u></b>");
	aba.addTab("divDentro3", " <b><u> Salários </u></b>");
	aba.addTab("divDentro1", " <b><u> Candidatos </u></b>");
	aba.addTab("divDentro2", " <b><u> Empresas </u></b>");
</script>
<img id="scream" src="<?php echo $cam; ?>/img/Logo.png" alt="Hint" width="220" height="277" style="display:none">
<canvas id="myCanvas" width="45" height="25">Your browser does not support the HTML5 canvas tag.</canvas>
<script>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var img=document.getElementById("scream");
ctx.drawImage(img,0, 0);
</script>