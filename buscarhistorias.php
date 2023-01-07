<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sinamed 1.0</title>
	<script type="text/javascript" src="utils.js"></script>
	</script>
	<LINK REL="StyleSheet" HREF="style/style.css" TYPE="text/css" />
	<LINK REL="StyleSheet" HREF="style/styleapp.css" TYPE="text/css" />
  </head>
<body>
<div id="main">
<div class="border">
<? include('header.php'); 
include("connect.php");
include('functions.php');
?>
<FORM name="busqueda"  action="<? echo $_SERVER['PHP_SELF'];?>"  method="POST">
<TITULO>Buscar Historia por:</TITULO><br class="esp" />
&#160;&#160;&#160;&#160;<LABEL>Nombre del paciente:</LABEL>
<INPUT name="1nombre" value="<? echo $_POST['1nombre']; ?>" class="l2" size="87" maxlength="87"><br class="esp">
&#160;&#160;&#160;&#160;<LABEL>Fecha de Nacimiento:</LABEL>
<? writefecha ('1dia','1mes','1anio',$_POST['1dia'],$_POST['1mes'],$_POST['1anio']); ?>
<br class="esp" >
&#160;&#160;&#160;&#160;<div style="width: 70px;height:24px;padding: 2px;"   onclick="document.forms[0].submit()"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" >
		Buscar&#160;&#160;<img src="style/img/viewmag.png" width="16" height="16" />
	</div>
<br class="esp" />
</FORM>
<table style="text-align: left; width: 100%; height: 100%" border="0" cellpadding="2" cellspacing="2">
  <tbody>
<?
if (!empty($_GET['eliminar'])) exec_querry("DELETE FROM historia WHERE id_historia=".$_GET['eliminar']);
if ($_POST) {
$querry_search = "SELECT 1nombre,id_historia FROM historia WHERE 1nombre like ( '%".$_POST['1nombre']."%') OR (1dia like ( '%".$_POST['1dia']."%') and 1mes like( '%".$_POST['1mes']."%')  and 1anio like ( '%".$_POST['1anio']."%' ))";
if($result = return_querry_array($querry_search))
{
$clase = "caja_boton";
while($f = mysql_fetch_array($result))
{
$clase =  ($clase == "caja_boton")?"caja_boton_over":"caja_boton";
?>
    <tr>
      <td style="width: 22px;" class="<? echo $clase;?>" ><LABEL><? echo $f['id_historia']; ?></LABEL></td>
      <td height="27" style="width: 500px" class="<? echo $clase;?>"  ><LABEL><? 
			if (strlen($f['1nombre'])>30)
				echo substr($f['1nombre'],0,30)."...";
			else
				echo $f['1nombre']; ?></LABEL></td>
      <td style="width: 56px;"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="window.location='addhistoria.php?id_historia=<? echo $f['id_historia']; ?>';" ><img src="style/img/edit.png" width="16" height="16" />Editar</td>
      <td style="width: 56px;"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="eliminar('<? echo $f['1nombre']; ?>','<? echo $f['id_historia']; ?>');"><img src="style/img/delete.png" width="16" height="16" />Borrar</td>
    </tr>
<?
}
}
}

?>
  </tbody>
</table>
</body>



<? include ("footer.php");?>