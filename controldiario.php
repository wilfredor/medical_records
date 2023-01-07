<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Sinamed 1.0</title>
<script type="text/javascript" src="utils.js"></script>
<LINK REL="StyleSheet" HREF="style/style.css" TYPE="text/css" />
<LINK REL="StyleSheet" HREF="style/styleapp.css" TYPE="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="main">
<div class="border">
<?
include('header.php'); 
include('connect.php');
include('functions.php');
if ($_GET['id_historia'])
	$f['id_historia'] = $_GET['id_historia'];
	
if (!empty($_GET['modificar']))
	{
		$f = return_querry("SELECT * FROM control WHERE id_control=".$_GET['modificar']);
		$f['modificar'] = $_GET['modificar'];
	}
if ($_POST) 
{
	$f = $_POST;
	$querry = "Select id_control as modificar from control WHERE 1dia =".vacio($f['1dia'],false)." AND 1mes=".vacio($f['1mes'],false)." AND 1anio=".vacio($f['1anio'],false)." AND hora=".vacio($f['hora'],false)." AND id_historia=".vacio($f['id_historia'],true);
	if (!empty($querry))
	{
		//echo $querry;
		$aux = return_querry($querry);
		$f['modificar'] = $aux['modificar'];
		//print_r($f['modificar']);
	}
}
//echo "modificar='".$f['modificar']."',id_historia'".$f['id_historia']."'";
if (!empty($_GET['eliminar'])) 
	$querry = "DELETE FROM control WHERE id_control=".$_GET['eliminar'];
elseif ((!empty($f['actividad']))&&(!empty($f['1dia']))&&(!empty($f['1mes']))&&(!empty($f['1anio']))&&(!empty($f['hora'])))
{ 
if (!empty($f['modificar']))
	$querry = "UPDATE control SET 1dia = ".vacio($f['1dia'],false).", 1mes = ".vacio($f['1mes'],false).", 1anio =".vacio($f['1anio'],false).", hora =".vacio($f['hora'],false).", actividad =".vacio($f['actividad'],false).", id_historia =".vacio($f['id_historia'],false)." WHERE id_control=".$f['modificar'];
else
	$querry = "INSERT INTO control (1dia,1mes,1anio,hora,actividad,id_historia) VALUES ('".$f['1dia']."','".$f['1mes']."','".$f['1anio']."','".$f['hora']."','".$f['actividad']."',".$f['id_historia'].")";
	
}
elseif(!empty($_POST))
{
?>
<br class="esp">
<span class="style1">Por favor, recuerde que es obligatorio escribir todos los datos</span> 
<br class="esp">
<?
}
if (!empty($querry))
	exec_querry($querry);
?>
<TITULO>Control de Actividades</TITULO>
<br class="esp">
<table style="text-align: left; width: 100%; height: 100%"
 border="0" cellpadding="2" cellspacing="2">
  <tbody>
<?
$pag = (!isset($f['pag']))?1:$f['pag'];
$querry = "SELECT COUNT(*) FROM control WHERE id_historia=".$f['id_historia'];
//echo $querry;
list($total) = return_querry($querry);
$tampag = 50;
$reg1 = ($pag-1) * $tampag;
$limit = " LIMIT $reg1, $tampag";
$querry = "SELECT * FROM control WHERE id_historia=".$f['id_historia']." ORDER BY id_control";
//echo $querry;
$result = return_querry_array($querry);
if ($result)
{
$clase = "caja_boton";
while($f2 = mysql_fetch_array($result))
{
$clase =  ($clase == "caja_boton")?"caja_boton_over":"caja_boton";
?>
    <tr>
      <td style="width: 22px;"  class="<? echo $clase;?>"><LABEL><? echo $f2['id_control']; ?></LABEL></td>
      <td height="27" style="width: 500px"  class="<? echo $clase; ?>"><LABEL><? 
	
	echo "[".$f2['1dia']."-".$f2['1mes']."-".$f2['1anio']."] ";
			if (strlen($f2['actividad'])>50)
				echo substr($f2['actividad'],0,50)."...";
			else
				echo $f2['actividad']; ?></LABEL></td>
      <td style="width: 56px;"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="window.location='controldiario.php?modificar=<? echo $f2['id_control']."&id_historia=".$f['id_historia']; ?>';" ><img src="style/img/edit.png" width="16" height="16" />Editar</td>
      <td style="width: 56px;"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="eliminara('<? echo $f2['actividad']; ?>','<? echo $f2['id_control']."&id_historia=".$f['id_historia']; ?>');"><img src="style/img/delete.png" width="16" height="16" />Borrar</td>
    </tr>
<?
}

}

?>
  </tbody>
</table>
<?
if ($total>1)
echo paginar($pag, $total, $tampag, "controldiario.php?id_historia=".$f['id_historia']."&pag=");
?>

<FORM name="control" method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
<LABEL>Fecha:</LABEL>
<? writefecha ('1dia','1mes','1anio',$f['1dia'],$f['1mes'],$f['1anio']); ?>
<LABEL>Hora:</LABEL>
<INPUT name="hora" value="<? echo $f['hora']; ?>" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Paciente:<? 
$querry = "SELECT 1nombre FROM historia WHERE id_historia=".$f['id_historia'];
//echo $querry;
$paciente = return_querry($querry); 
echo $paciente['1nombre']; 
?></LABEL>
<LABEL>Historia No.:<? echo $f['id_historia']; ?></LABEL>
<INPUT type="hidden" name="id_historia" value="<? echo $f['id_historia']; ?>" />
<br class="esp">
<LABEL>Actividad a realizar:</LABEL>
<br class="esp" />
<TEXTAREA name="actividad" cols="100" rows="3" ><? echo $f['actividad']; ?></TEXTAREA>
<br class="esp">

<table cellpadding="3" cellspacing="8" height="47">
  <tbody>
    <tr>
	<td class="caja_boton" onmouseover="boton_over(this);" onmouseout="boton_out(this)"  onclick="document.forms[0].submit()" >
		<IMG src="style/img/filesave.png" width="22"  alt="Guardar" height="22" align="left" border="0">Guardar
	</td>
	<td  onclick="window.location='index.php'"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" >
		<IMG src="style/img/fileclose.png" width="22" height="22" alt="Cancelar" align="left" border="0">Cancelar
	</td>
    </tr>
  </tbody>
</table>
</FORM>
<? 

include('footer.php'); ?>