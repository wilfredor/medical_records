<LABEL>Parto:</LABEL>
<SELECT onchange="addinput(this.value,'3especificar','Otro','Especificar')"  class="l2" name="3parto">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Forceps">Forceps</OPTION>
	<OPTION value="Cesareas">Cesareas</OPTION>
	<OPTION value="Prematuro">Prematuro</OPTION>
	<OPTION value="Otro">Otro</OPTION>
	<? select_opt($f['3parto']) ?>
</SELECT>
<SPAN id="3especificar">
<? addinput($f['3parto'] == "Otro",$f['3especificar'],"3especificar","Especificar"); ?>
</SPAN>
<LABEL>Peso:</LABEL>
<INPUT name="3peso" class="l2" size="10" value="<? echo $f['3peso']; ?>" maxlength="10">
<LABEL>Talla:</LABEL>
<INPUT name="3talla" class="l2" size="10" value="<? echo $f['3talla']; ?>"  maxlength="10"><br class="esp">
<LABEL>Anomalias al nacer:</LABEL>
<INPUT name="3anomalias" class="l2" size="87" value="<? echo $f['3anomalias']; ?>"  maxlength="87"><br class="esp">
<LABEL>Alimentaci&#243;n:</LABEL>
<SELECT onchange="addinput(this.value,'3cuantotiempo',this.value,'Cuanto tiempo')"  class="l2" name="3alimentacion">
	<OPTION value="Materna">Materna</OPTION>
	<OPTION value="Comercial">Comercial</OPTION>
	<OPTION value="Comercial">Mixta</OPTION>
	<? select_opt($f['3alimentacion']) ?>
</SELECT>
<SPAN id="3cuantotiempo">
<? addinput($f['3alimentacion'] == "Comercial",$f['3cuantotiempo'],"3cuantotiempo","Cuanto tiempo"); ?>
</SPAN><br class="esp">
<LABEL>Alguna Dificultad en el Destete:</LABEL>
<SELECT onchange="addinput(this.value,'3cuales1','Si','Cuales')"  class="l2" name="3dificultad1">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['3dificultad1']) ?>
</SELECT>
<SPAN id="3cuales1">
<? addinput($f['3dificultad1'] == "Si",$f['3cuales1'],"3cuales1","Cuales"); ?>
</SPAN><br class="esp">
<LABEL>Alguna dificultad cuando se introdujeron alimentos s&#243;lidos:</LABEL>
<SELECT onchange="addinput(this.value,'3cuales2','Si','Cuales')"  class="l2" name="3dificultad2">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['3dificultad2']) ?>
</SELECT>
<SPAN id="3cuales2">
<? addinput($f['3dificultad2'] == "Si",$f['3cuales2'],"3cuales2","Cuales"); ?>
</SPAN><br class="esp">
<LABEL>A que edad utilizo la cucharilla y taza:</LABEL>
<INPUT name="3quedad" class="l2" size="18" value="<? echo $f['3quedad']; ?>" maxlength="18"><br class="esp">
<LABEL>Desarrollo de los primeros meses:</LABEL>
<INPUT name="3desarrollo" class="l2" size="74" value="<? echo $f['3desarrollo']; ?>" maxlength="74"><br class="esp">
<LABEL>Dentici&#243;n:</LABEL>
<SELECT name="3denticion" class="l2">
	<OPTION value="Precoz">Precoz</OPTION>
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Retardada">Retardada</OPTION>
	<? select_opt($f['3denticion']) ?>
</SELECT>
<br class="esp">
<LABEL>Algun accidente que afecto la salida de los dientes:</LABEL>
<INPUT name="3acciente" value="<? echo $f['3acciente']; ?>" class="l2" size="50" maxlength="50">
<br class="esp">
<LABEL>Historia del cuidado dental:</LABEL>
<INPUT name="3historiadental" value="<? echo $f['3historiadental']; ?>" class="l2" size="80" maxlength="80"><br class="esp">
<LABEL>Escolaridad:</LABEL>
<INPUT name="3escolaridad" value="<? echo $f['3escolaridad']; ?>" class="l2" size="20" maxlength="20">
<LABEL>Edad de ingreso:</LABEL>
<INPUT name="3edadingreso" value="<? echo $f['3edadingreso']; ?>" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Otras Actividades: Juegos:</LABEL>
<INPUT name="3juegos" value="<? echo $f['3juegos']; ?>" class="l2" size="20" maxlength="20">
<LABEL>Sue&#241;o:</LABEL>
<INPUT name="3suenos" value="<? echo $f['3suenos']; ?>" class="l2" size="20" maxlength="20"><br class="esp">