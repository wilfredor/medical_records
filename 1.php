<LABEL>Apellidos y Nombres:</LABEL>
<INPUT name="1nombre" value="<? echo $f['1nombre']; ?>" class="l2" size="87" maxlength="87"><br class="esp">
<LABEL>Sexo:</LABEL>
<SELECT  class="l2" name="1sexo">
	<OPTION value="Masculino">Masculino</OPTION>
	<OPTION value="Femenino">Femenino</OPTION>
	 <? select_opt($f['1sexo']) ?>
</SELECT>
<LABEL>Edad:</LABEL>
<INPUT name="1edad" class="l2"  value="<? echo $f['1edad']; ?>"  size="17" maxlength="17"><LABEL>(a&#241;os y meses)</LABEL>
<LABEL>Fecha de Nac:</LABEL>
<? writefecha ('1dia','1mes','1anio',$f['1dia'],$f['1mes'],$f['1anio']); ?><br class="esp">
<LABEL>Lugar de Nacimiento:</LABEL>
<INPUT name="1lnacimiento" value="<? echo $f['1lnacimiento']; ?>"  class="l2" size="50" maxlength="50">
<LABEL>Nacionalidad:</LABEL>
<INPUT name="1nacionalidad" value="<? echo $f['1nacionalidad']; ?>" class="l2" size="21" maxlength="21"><br class="esp">
<LABEL>Domicilio:</LABEL>
<INPUT name="1domicilio" value="<? echo $f['1domicilio']; ?>" class="l2" size="60" maxlength="60">
<LABEL>Tlf:</LABEL>
<INPUT name="1tlf" class="l2" value="<? echo $f['1tlf']; ?>" size="31" maxlength="31"><br class="esp">
<LABEL>Fecha de Consulta:</LABEL>
<? writefecha ('1diac','1mesc','1anioc',$f['1diac'],$f['1mesc'],$f['1anioc']); ?><br class="esp">
<? 
/*
if (empty($f['1cfecha']))
	{
	$cfecha = date("d-m-Y");
	$cfechah = date("Y-m-d");
	}
else
	{
	$cfechah = $f['1cfecha'];
	$d = explode("-", $cfechah);
	$cfecha = str_replace(" 00:00:00", "",$d[2] )."-".$d[1]."-".$d[0];
	}
echo $cfecha;
*/
?>
<INPUT type="hidden" name="1cfecha" value="<? echo $cfechah;?>" >
<LABEL>Motivo de Consulta:</LABEL>
<INPUT name="1mconsulta" class="l2" value="<? echo $f['1mconsulta']; ?>" size="58" maxlength="58"><br class="esp">
<LABEL>Referido por:</LABEL>
<INPUT name="1referido" class="l2" value="<? echo $f['1referido']; ?>" size="94" maxlength="94">