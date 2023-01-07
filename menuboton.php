<strong><span class="error">
<?
if(!empty($error))
echo $error;
?>
</span></strong> 

<table cellpadding="3" cellspacing="8" height="47">
  <tbody>
    <tr>
	<td class="caja_boton" onmouseover="boton_over(this);" onmouseout="boton_out(this)"  onclick="document.forms[0].submit()" >
		<IMG src="style/img/filesave.png" width="22"  alt="Guardar" height="22" align="left" border="0">Guardar	</td>
	<td  onclick="window.location='index.php'"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" >
		<IMG src="style/img/fileclose.png" width="22" height="22" alt="Cancelar" align="left" border="0">Cancelar	</td>
	<td onclick="window.print();"  class="caja_boton"  onmouseover="boton_over(this);" onmouseout="boton_out(this)" >
		<IMG src="style/img/fileprint.png" width="22" height="22" alt="Imprimir" align="left" border="0">Imprimir	</td>
    </tr>
  </tbody>
</table>