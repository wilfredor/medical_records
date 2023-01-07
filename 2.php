<LABEL>Padre: Nombres y Apellidos:</LABEL>
<INPUT name="2pnombre" class="l2" value="<? echo $f['2pnombre']; ?>" size="80" maxlength="80"><br class="esp">
<LABEL>Edad:</LABEL>
<INPUT name="2pedad" class="l2" value="<? echo $f['2pedad']; ?>" size="20" maxlength="20">
<LABEL>Lugar de Nacimiento:</LABEL>
<INPUT name="2plnacimiento" value="<? echo $f['2plnacimiento']; ?>" class="l2" size="23" maxlength="23">
<LABEL>Nacionalidad:</LABEL>
<INPUT name="2pnacionalidad" value="<? echo $f['2pnacionalidad']; ?>" class="l2" size="18" maxlength="18"><br class="esp">
<LABEL>Biotipo:</LABEL>
<SELECT  class="l2" name="2pbiotipo">
	<OPTION value="Normol&#237;neo">Normol&#237;neo</OPTION>
	<OPTION value="Brevil&#237;neo">Brevil&#237;neo</OPTION>
	<OPTION value="Longil&#237;neo">Longil&#237;neo</OPTION>
	<? select_opt($f['2pbiotipo']) ?>
</SELECT>
<LABEL>Constituci&#243;n:</LABEL>
<SELECT  class="l2" name="2pconstitucion">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Delgado">Delgado</OPTION>
	<OPTION value="Grueso">Grueso</OPTION>
	<? select_opt($f['2pconstitucion']) ?>
</SELECT>
<LABEL>Oclusi&#243;n:</LABEL>
<INPUT name="2poclusion" value="<? echo $f['2poclusion']; ?>" class="l2" size="17" maxlength="17">
<LABEL>Ocupaci&#243;n:</LABEL>
<INPUT name="2pocupacion" value="<? echo $f['2pocupacion']; ?>" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Enfermedades que ha tenido:</LABEL>
<INPUT name="2penfermedades" value="<? echo $f['2penfermedades']; ?>" class="l2" size="41" maxlength="41">
<LABEL>Actualmente:</LABEL>
<INPUT name="2pactualmente" value="<? echo $f['2pactualmente']; ?>" class="l2" size="22" maxlength="22"><br class="esp">
<LABEL>Madre: Nombres y Apellidos:</LABEL>
<INPUT name="2mnombre" value="<? echo $f['2mnombre']; ?>" class="l2" size="80" maxlength="80"><br class="esp">
<LABEL>Edad:</LABEL>
<INPUT name="2medad" value="<? echo $f['2medad']; ?>" class="l2" size="20" maxlength="20">
<LABEL>Lugar de Nacimiento:</LABEL>
<INPUT name="2mlnacimiento" value="<? echo $f['2mlnacimiento']; ?>" class="l2" size="23" maxlength="23">
<LABEL>Nacionalidad:</LABEL>
<INPUT name="2mnacionalidad" value="<? echo $f['2mnacionalidad']; ?>" class="l2" size="18" maxlength="18"><br class="esp">
<LABEL>Biotipo:</LABEL>
<SELECT  class="l2" name="2mbiotipo">
	<OPTION value="Normol&#237;neo">Normol&#237;neo</OPTION>
	<OPTION value="Brevil&#237;neo">Brevil&#237;neo</OPTION>
	<OPTION value="Longil&#237;neo">Longil&#237;neo</OPTION>
	<? select_opt($f['2mbiotipo']) ?>
</SELECT>
<LABEL>Constituci&#243;n:</LABEL>
<SELECT  class="l2" name="2mconstitucion">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Delgado">Delgado</OPTION>
	<OPTION value="Grueso">Grueso</OPTION>
	<? select_opt($f['2mconstitucion']) ?>
</SELECT>
<LABEL>Oclusi&#243;n:</LABEL>
<INPUT name="2moclusion" value="<? echo $f['2moclusion']; ?>" class="l2" size="17" maxlength="17">
<LABEL>Ocupaci&#243;n:</LABEL>
<INPUT name="2mocupacion" value="<? echo $f['2mocupacion']; ?>" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Enfermedades que ha tenido:</LABEL>
<INPUT name="2menfermedades" value="<? echo $f['2menfermedades']; ?>" class="l2" size="41" maxlength="41">
<LABEL>Actualmente:</LABEL>
<INPUT name="2mactualmente" value="<? echo $f['2mactualmente']; ?>" class="l2" size="22" maxlength="22"><br class="esp">
<LABEL>N&#176; de Embarazos:</LABEL>
<INPUT name="2embarazos"  value="<? echo $f['2embarazos']; ?>" onkeypress="return solonum(event)" class="l2" size="2" maxlength="2">
<LABEL>Parto:</LABEL>
<LABEL>Normal:</LABEL>
<INPUT name="2parto" class="l2" value="<? echo $f['2parto']; ?>" size="10" maxlength="10">
<LABEL>Forcep:</LABEL>
<INPUT name="2forcepp" class="l2" value="<? echo $f['2forcepp']; ?>" size="10" maxlength="10">
<LABEL>Cesarea:</LABEL>
<INPUT name="2cesareap" class="l2" value="<? echo $f['2cesareap']; ?>" size="10" maxlength="10"><br class="esp">
<LABEL>Prematuro:</LABEL>
<INPUT name="2prematurop" class="l2" value="<? echo $f['2prematurop']; ?>" size="10" maxlength="10">
<LABEL>Otro:</LABEL>
<INPUT name="2especificar" class="l2" value="<? echo $f['2especificar']; ?>" size="10" maxlength="10">
<SPAN id="2especificar">
<? addinput($f['2parto'] == "Otro",$f['2especificar'],"2especificar","Especificar"); ?>
</SPAN><br class="esp">
<LABEL>Antecedentes de ambas ramas de otros familiares con respecto a la Oclusi&#243;n:</LABEL><br class="esp">
<INPUT name="2antecedentes" class="l2" value="<? echo $f['2antecedentes']; ?>"  size="106" maxlength="106"><br class="esp">