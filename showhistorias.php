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
?>
<TITULO>Lista de Historias: Ordenar por:</TITULO>
<SELECT onchange="window.location='showhistorias.php?order='+this.value;"  class="l2" name="3parto">
	<OPTION value="1nombre">Nombre</OPTION>
	<OPTION value="id_historia">N&#250;mero de Historia</OPTION>
	<OPTION value="" selected="selected">...</OPTION>
</SELECT>
<table style="text-align: left; width: 100%; height: 100%"
 border="0" cellpadding="2" cellspacing="2">
  <tbody>
<?
$pag = (!isset($_REQUEST['pag']))?1:$_REQUEST['pag'];
list($total) = mysql_fetch_row(return_querry_array("SELECT COUNT(*) FROM historia"));
$tampag = 50;
$reg1 = ($pag-1) * $tampag;
$limit = " LIMIT $reg1, $tampag";

if (!empty($_GET['eliminar'])) exec_querry("DELETE FROM historia WHERE id_historia=".$_GET['eliminar']);
$order = "";
if (!empty($_GET['order'])) $order = " ORDER BY ".$_GET['order'];
if($result = return_querry_array("SELECT 1nombre,id_historia FROM historia".$order.$limit))
{
$clase = "caja_boton";
while($f = mysql_fetch_array($result))
{
$d = explode("-", $f['1cfecha']);
$clase =  ($clase == "caja_boton")?"caja_boton_over":"caja_boton";
?>
    <tr>
      <td style="width: 22px;"  class="<? echo $clase;?>"><LABEL>00<? echo $f['id_historia']; ?></LABEL></td>
      <td height="27" style="width: 500px"  class="<? echo $clase;?>"><LABEL><? 
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

?>
  </tbody>
</table>
<?
if ($total>1) 
echo paginar($pag, $total, $tampag, "showhistorias.php?pag="); 
?>
</body>



<? include ("footer.php");?>