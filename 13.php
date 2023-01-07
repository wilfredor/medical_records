<TITULO>LABIO:</TITULO><br class="esp">
<LABEL>Fruncir:</LABEL>
<SELECT class="l2" name="13funcir">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13funcir']) ?>
</SELECT>
<LABEL>Distender:</LABEL>
<SELECT class="l2" name="13distender">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13distender']) ?>
</SELECT>
<LABEL>Silbar:</LABEL>
<SELECT class="l2" name="13silbar">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13silbar']) ?>
</SELECT>
<LABEL>Vibrar:</LABEL>
<SELECT class="l2" name="13vibrar">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13vibrar']) ?>
</SELECT><br class="esp">
<TITULO>LENGUA:</TITULO><br class="esp">
<LABEL>Abajo:</LABEL>
<SELECT class="l2" name="13abajo">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13abajo']) ?>
</SELECT>
<LABEL>Vibrar:</LABEL>
<SELECT class="l2" name="13vibrar2">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13vibrar2']) ?>
</SELECT>
<LABEL>Acartuchar:</LABEL>
<SELECT class="l2" name="13acartuchar">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13acartuchar']) ?>
</SELECT>
<br class="esp">
<TITULO>MEJILLA:</TITULO>
<LABEL>Explosi&#243;n:</LABEL>
<SELECT class="l2" name="13explosion">
	<OPTION value="Bien">Bien</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['13explosion']) ?>
</SELECT><br class="esp">
<TITULO>FRENILLO:</TITULO>
<INPUT name="13frenillo" value="<? echo $f['13frenillo']; ?>" class="l2" size="90" maxlength="90"><br class="esp">
<TITULO>PALADAR BLANDO:</TITULO>
<LABEL>Tama&#241;o:</LABEL>
<INPUT name="13tamano" value="<? echo $f['13tamano']; ?>" class="l2" size="20" maxlength="20">
<LABEL>Movilidad:</LABEL>
<SELECT class="l2" name="13movilidad">
	<OPTION value="Bueno">Bueno</OPTION>
	<OPTION value="Escaso">Escaso</OPTION>
	<? select_opt($f['13movilidad']) ?>
</SELECT><br class="esp">
<TITULO>ARTICULACI&#211;N:</TITULO>
<INPUT type="checkbox" name="13articulacion[0]" value="1"<? if ($f['13articulacion'][0] == "1") 	echo " checked=\"true\"";?>><LABEL>P</LABEL>
<INPUT type="checkbox" name="13articulacion[1]" value="1"<? if ($f['13articulacion'][1] == "1") 	echo " checked=\"true\"";?>><LABEL>B</LABEL>
<INPUT type="checkbox" name="13articulacion[2]" value="1"<? if ($f['13articulacion'][2] == "1") 	echo " checked=\"true\"";?>><LABEL>M</LABEL>
<INPUT type="checkbox" name="13articulacion[3]" value="1"<? if ($f['13articulacion'][3] == "1") 	echo " checked=\"true\"";?>><LABEL>N</LABEL>
<INPUT type="checkbox" name="13articulacion[4]" value="1"<? if ($f['13articulacion'][4] == "1") 	echo " checked=\"true\"";?>><LABEL>&#209;</LABEL>
<INPUT type="checkbox" name="13articulacion[5]" value="1"<? if ($f['13articulacion'][5] == "1") 	echo " checked=\"true\"";?>><LABEL>D</LABEL>
<INPUT type="checkbox" name="13articulacion[6]" value="1"<? if ($f['13articulacion'][6] == "1") 	echo " checked=\"true\"";?>><LABEL>T</LABEL>
<INPUT type="checkbox" name="13articulacion[7]" value="1"<? if ($f['13articulacion'][7] == "1") 	echo " checked=\"true\"";?>><LABEL>L</LABEL>
<INPUT type="checkbox" name="13articulacion[8]" value="1"<? if ($f['13articulacion'][8] == "1") 	echo " checked=\"true\"";?>><LABEL>R</LABEL>
<INPUT type="checkbox" name="13articulacion[9]" value="1"<? if ($f['13articulacion'][9] == "1") 	echo " checked=\"true\"";?>><LABEL>RR</LABEL>
<INPUT type="checkbox" name="13articulacion[11]" value="1"<? if ($f['13articulacion'][11] == "1") 	echo " checked=\"true\"";?>><LABEL>F</LABEL><br class="esp">
<INPUT type="checkbox" name="13articulacion[12]" value="1"<? if ($f['13articulacion'][12] == "1") 	echo " checked=\"true\"";?>><LABEL>V</LABEL>
<INPUT type="checkbox" name="13articulacion[13]" value="1"<? if ($f['13articulacion'][13] == "1") 	echo " checked=\"true\"";?>><LABEL>S</LABEL>
<INPUT type="checkbox" name="13articulacion[14]" value="1"<? if ($f['13articulacion'][14] == "1") 	echo " checked=\"true\"";?>><LABEL>CH</LABEL>
<INPUT type="checkbox" name="13articulacion[15]" value="1"<? if ($f['13articulacion'][15] == "1") 	echo " checked=\"true\"";?>><LABEL>Y</LABEL>
<INPUT type="checkbox" name="13articulacion[16]" value="1"<? if ($f['13articulacion'][16] == "1") 	echo " checked=\"true\"";?>><LABEL>J</LABEL>
<INPUT type="checkbox" name="13articulacion[17]" value="1"<? if ($f['13articulacion'][17] == "1") 	echo " checked=\"true\"";?>><LABEL>G</LABEL>
<INPUT type="checkbox" name="13articulacion[18]" value="1"<? if ($f['13articulacion'][18] == "1") 	echo " checked=\"true\"";?>><LABEL>C</LABEL>
<INPUT type="checkbox" name="13articulacion[19]" value="1"<? if ($f['13articulacion'][19] == "1") 	echo " checked=\"true\"";?>><LABEL>K</LABEL>
<INPUT type="checkbox" name="13articulacion[20]" value="1"<? if ($f['13articulacion'][20] == "1") 	echo " checked=\"true\"";?>><LABEL>Q</LABEL>
<INPUT type="checkbox" name="13articulacion[21]" value="1"<? if ($f['13articulacion'][21] == "1") 	echo " checked=\"true\"";?>><LABEL>A</LABEL>
<INPUT type="checkbox" name="13articulacion[22]" value="1"<? if ($f['13articulacion'][22] == "1") 	echo " checked=\"true\"";?>><LABEL>E</LABEL>
<INPUT type="checkbox" name="13articulacion[23]" value="1"<? if ($f['13articulacion'][23] == "1") 	echo " checked=\"true\"";?>><LABEL>I</LABEL>
<INPUT type="checkbox" name="13articulacion[24]" value="1"<? if ($f['13articulacion'][24] == "1") 	echo " checked=\"true\"";?>><LABEL>O</LABEL>
<INPUT type="checkbox" name="13articulacion[25]" value="1"<? if ($f['13articulacion'][25] == "1") 	echo " checked=\"true\"";?>><LABEL>U</LABEL>
<INPUT type="checkbox" name="13articulacion[26]" value="1"<? if ($f['13articulacion'][26] == "1") 	echo " checked=\"true\"";?>><LABEL>Z</LABEL><br class="esp">