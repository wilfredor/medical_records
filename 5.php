<LABEL>H&#225;bito de comida:</LABEL>
<SELECT name="5habito" class="l2">
	<OPTION value="R&#225;pido">R&#225;pido</OPTION>
	<OPTION value="Regular">Regular</OPTION>
	<OPTION value="Lento">Lento</OPTION>
	<? select_opt($f['5habito']) ?>
</SELECT>
<LABEL>Toma liquido mientras mastica:</LABEL>
<SELECT name="5tomaliquido" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['5tomaliquido']) ?>
</SELECT><br class="esp">
<LABEL>Durante el acto masticatorio el paciente trata de eliminar los residuos con la lengua:</LABEL>
<SELECT name="5residuos" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['5residuos']) ?>
</SELECT><br class="esp">
<LABEL>Succi&#243;n de chupete:</LABEL>
<SELECT name="5chupete" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['5chupete']) ?>
</SELECT>
<LABEL>Hasta que edad:</LABEL>
<INPUT name="5hasta1"  value="<? echo $f['5hasta1']; ?>" class="l2" size="30" maxlength="30">
<LABEL>Frecuencia:</LABEL>
<SELECT name="5frecuencia" class="l2">
	<OPTION value="Nocturno">Nocturno</OPTION>
	<OPTION value="Diurno">Diurno</OPTION>
	<OPTION value="Todo el d&#237;a">Todo el d&#237;a</OPTION>
	<? select_opt($f['5frecuencia']) ?>
</SELECT><br class="esp">
<LABEL>Si aun presiste el h&#225;bito, que medida se ha tomado para eliminarlo:</LABEL><br class="esp">
<INPUT name="5medida"  value="<? echo $f['5medida']; ?>" class="l2" size="105" maxlength="105"><br class="esp">
<LABEL>Succi&#243;n del dedo:</LABEL>
<SELECT name="5dedo" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['5dedo']) ?>
</SELECT>
<LABEL>Hasta que edad:</LABEL>
<INPUT name="5hasta2"  value="<? echo $f['5hasta2']; ?>" class="l2" size="30" maxlength="30">
<br class="esp">
<LABEL>Cual dedo:</LABEL>
<INPUT name="5dedomano"  value="<? echo $f['5dedomano']; ?>" class="l2" size="35" maxlength="35">
<LABEL>Frecuencia:</LABEL>
<SELECT name="5frecuenciadedo" class="l2">
	<OPTION value="Nocturno">Nocturno</OPTION>
	<OPTION value="Diurno">Diurno</OPTION>
	<OPTION value="Todo el d&#237;a">Todo el d&#237;a</OPTION>
	<? select_opt($f['5frecuenciadedo']) ?>
</SELECT>
<br class="esp">
<LABEL>Aun persiste el h&#225;bito, que medida se ha tomado para eliminarlo:</LABEL><br class="esp">
<INPUT name="5medida2"  value="<? echo $f['5medida2']; ?>" class="l2" size="105" maxlength="105"><br class="esp">
<LABEL>Otros h&#225;bitos:</LABEL>
<INPUT name="5otroshabitos"  value="<? echo $f['5otroshabitos']; ?>" class="l2" size="92" maxlength="92"><br class="esp">
<LABEL>Enuresis:</LABEL>
<SELECT name="5ennuresis" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['5ennuresis']) ?>
</SELECT><br class="esp">
<LABEL>Detalles:</LABEL>
<br class="esp">
<INPUT name="5detalles"  value="<? echo $f['5detalles']; ?>" class="l2" size="120" maxlength="120">
<br class="esp">
<TITULO>-ENFERMEDAD ACTUAL</TITULO><br class="esp">
<LABEL>Fecha de Comienzo:</LABEL>
<INPUT name="5fechac"  value="<? echo $f['5fechac']; ?>" class="l2" size="40" maxlength="40"><br class="esp">
<LABEL>Evoluci&#243;n:</LABEL>
<INPUT name="5evolucion"  value="<? echo $f['5evolucion']; ?>" class="l2" size="94" maxlength="94"><br class="esp">

<TITULO>-ESTADO ACTUAL</TITULO><br class="esp">
<LABEL>Examen General:</LABEL>
<INPUT name="5examen" value="<? echo $f['5examen']; ?>" class="l2" size="40" maxlength="40"><br class="esp">
<LABEL>Clasificaci&#243;n Biotipol&#243;gica:</LABEL>
<SELECT class="l2" name="5biotipologica" >
	<OPTION value="Normol&#237;neo" >Normol&#237;neo</OPTION>
	<OPTION value="Brevil&#237;neo" >Brevil&#237;neo</OPTION>
	<OPTION value="Longil&#237;neo" >Longil&#237;neo</OPTION>
	<? select_opt($f['5biotipologica']) ?>
</SELECT>
<LABEL>Estado de Nutrici&#243;n:</LABEL>
<SELECT name="5nutricion" class="l2">
	<OPTION value="Buena">Buena</OPTION>
	<OPTION value="Regular">Regular</OPTION>
	<OPTION value="Mala">Mala</OPTION>
	<? select_opt($f['5nutricion']) ?>
</SELECT>
<LABEL>Peso:</LABEL>
<INPUT name="5peso"  value="<? echo $f['5peso']; ?>" class="l2" size="10" maxlength="10">
<LABEL>Talla:</LABEL>
<INPUT name="5talla"  value="<? echo $f['5talla']; ?>" class="l2" size="10" maxlength="10"><br class="esp">
<TITULO>-PIEL</TITULO>
<br class="esp">
<LABEL>Aspecto:</LABEL>
<INPUT name="5aspecto"  value="<? echo $f['5aspecto']; ?>" class="l2" size="35" maxlength="35">
<LABEL>Color:</LABEL>
<INPUT name="5color"  value="<? echo $f['5color']; ?>" class="l2" size="35" maxlength="35">
<br class="esp">
<LABEL>Humedad:</LABEL>
<INPUT name="5humedad"  value="<? echo $f['5humedad']; ?>" class="l2" size="35" maxlength="35">
<LABEL>Anexos:</LABEL>
<INPUT name="5anexos"  value="<? echo $f['5anexos']; ?>" class="l2" size="35" maxlength="35">
<br class="esp">
<LABEL>Cabello:</LABEL>
<INPUT name="5cabello"  value="<? echo $f['5cabello']; ?>" class="l2" size="35" maxlength="35">
<LABEL>U&ntilde;as:</LABEL>
<INPUT name="5unas"  value="<? echo $f['5unas']; ?>" class="l2" size="35" maxlength="35">
<br class="esp">