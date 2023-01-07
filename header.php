<table cellpadding="4" cellspacing="0" width="100%" >
  <tbody>
    <tr>
	<td >
<IMG  align="left" src="style/img/logo.png" width="353" height="67" align="left" border="0">
</td>
</tr>
</tbody>
</table>
<table height="51" cellpadding="4" cellspacing="4" align="center">
  <tbody>
    <tr>
      <td onclick="window.location='addhistoria.php'"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)"  ><IMG src="style/img/xedit.png" width="32" height="32" align="left" border="0">Nueva</td>
      <td  class="caja_boton"  onclick="window.location='showhistorias.php'"   onmouseover="boton_over(this);" onmouseout="boton_out(this)"  ><IMG src="style/img/package_editors.png" width="32" height="32" align="left" border="0">Historias</td>
      <td class="caja_boton"   onmouseover="boton_over(this);" onmouseout="boton_out(this)"  onclick="window.location='buscarhistorias.php'"   ><IMG src="style/img/xmag.png" width="32" height="32" align="left" border="0">Buscar</td>
<? if ($f['id_historia'])
{?>	  
      <td  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="window.location='controldiario.php?id_historia=<? echo $f['id_historia'] ?>'"  ><IMG src="style/img/date.png" width="32" height="32" align="left" border="0">Actividades</td>
<? } ?>	  
	  <td  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" onclick="window.open('backup.php','','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=320,height=240');"  ><img src="style/img/database.png" width="32" height="32" align="left" border="0" />Respaldo</td>
    </tr>
  </tbody>
</table>
</br></br>