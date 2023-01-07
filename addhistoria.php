<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sinamed 1.0</title>
	<script type="text/javascript" src="utils.js"></script>
	<script src="shadow.js"></script>
	<script type="text/javascript">
		window.onload = function() {
			applyDropShadows("img.jsShadow","shadow");
		}
	</script>
	<LINK REL="StyleSheet" HREF="style/style.css" TYPE="text/css" />
	<LINK REL="StyleSheet" HREF="style/styleapp.css" TYPE="text/css" />
  </head>
  <body <?
if ($_POST)
	echo "onload=\"window.scrollTo('0','8000')\"";
?>>
<div id="main">
<div class="border">
<? 
include('connect.php');
include('functions.php');
if ($_GET['id_historia'])
	{
		$f['id_historia'] = $_GET['id_historia'];
		$f = return_querry("SELECT * FROM historia WHERE id_historia=".$_GET['id_historia']);
		$f['13articulacion'] = explode(",", $f['13articulacion']);
	}
if ($_POST) 
{
	$f = $_POST;
	include('dbprocess.php');
}
include('header.php');
 ?>
	<titulo>
			MINISTERIO DE SALUD
    			<br>
			DIRECCI&#211;N REGIONAL DE SALUD DEL
			<br>
			ESTADO NUEVA ESPARTA 
			<br>
			COORDINACI&#211;N ESTATAL DE SALUD BUCAL
			<br>
			SERVICIO DE ORTOPEDIA DENTO - FACIAL
			<br>
	</titulo>
	<FORM name="historia" enctype="multipart/form-data" action="<? echo $_SERVER['PHP_SELF'];?>"  method="POST">
		<DIV align="right"><? if (!empty($f['id_historia'])) echo "<titulo>Historia No. </titulo><LABEL>00".$f['id_historia']."</LABEL>"; ?></DIV>
	<DIV align="center"><titulo>HISTORIA CLINICA</titulo><br  class="esp"></DIV>
	<item>1-DATOS PERSONALES:</item>
		<DIV class="modulo"><? include('1.php'); ?></DIV>
	<item>2-ANTECEDENTES HEREDITARIOS Y PERSONALES:</item>
		<DIV class="modulo"><? include('2.php'); ?></DIV>
	<item>3-ANTECEDENTES PERSONALES: DESARROLLO DEL EMBARAZO:</item>
		<DIV class="modulo"><? include('3.php'); ?></DIV>
	<item>4-ENFERMEDADES DE LA NI&#209;EZ:</item>
		<DIV class="modulo"><? include('4.php'); ?></DIV>
	<item>5-HABITOS:</item>
		<DIV class="modulo"><? include('5.php'); ?></DIV>
	<item>6-LABIOS:</item>
		<DIV class="modulo"><? include('6.php'); ?></DIV>
	<item>7-LENGUA</item>
		<DIV class="modulo"><? include('7.php'); ?></DIV>
	<item>8-DEGLUCI&#211;N</item>
		<DIV class="modulo"><? include('8.php'); ?></DIV>
	<item>9-RESPIRACI&#211;N:</item>
		<DIV class="modulo"><? include('9.php'); ?></DIV>
	<item>10-MASTICACI&#211;N:</item>
		<DIV class="modulo"><? include('10.php'); ?></DIV>
	<item>11-MUSCULOS DE LA MASTICACI&#211;N:</item>
		<DIV class="modulo"><? include('11.php'); ?></DIV>
	<item>12-A.T.M:</item>
		<DIV class="modulo"><? include('12.php'); ?></DIV>
	<item>13-FONACI&#211;N:</item>
		<DIV class="modulo"><? include('13.php'); ?></DIV>
	<item>14-AUDICI&#211;N:</item>
		<DIV class="modulo"><? include('14.php'); ?></DIV>
	<item>15-APARATO DENTARIO:</item>
		<DIV class="modulo"><? include('15.php'); ?></DIV>
	<item>16-EXAMEN DE LOS MODELOS:</item>
		<DIV class="modulo"><? include('16.php'); ?></DIV>
	<item>17-EXAMEN RADIOGR&#193;FICO:</item>
		<DIV class="modulo"><? include('17.php'); ?></DIV>
	<item>18-DIAGNOSTICO:</item>
		<DIV class="modulo"><? include('18.php'); ?></DIV>
	<item>19-PRONOSTICO:</item>
		<DIV class="modulo"><? include('19.php'); ?></DIV>
	<item>20-TRATAMIENTO:</item>
		<DIV class="modulo"><? include('20.php'); ?></DIV>
	<item>21-ANEXO:</item>
		<DIV class="modulo"><? include('21.php'); ?></DIV>
	</FORM>
<? include ("footer.php");?>
