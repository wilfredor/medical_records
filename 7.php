<LABEL>Color:</LABEL>
<INPUT name="7color" value="<? echo $f['7color']; ?>" class="l2" size="20" maxlength="20">
<LABEL>Saburral:</LABEL>
<SELECT class="l2" name="7seburral">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['7seburral']) ?>
</SELECT>
<LABEL>Edo. Patol&#243;gico:</LABEL>
<SELECT onchange="addinput(this.value,'7cual','Si','Cual')"  class="l2" name="7patologico">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['7patologico']) ?>
</SELECT>
<SPAN id="7cual">
<? addinput($f['7patologico'] == "Si",$f['7cual'],"7cual","Cual"); ?>
</SPAN><br class="esp">
<LABEL>Proliferaci&#243;n:</LABEL>
<SELECT onchange="addinput(this.value,'7tipo','Si','Tipo')"  class="l2" name="7proliferacion">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['7proliferacion']) ?>
</SELECT>
<SPAN id="7tipo">
<? addinput($f['7proliferacion'] == "Si",$f['7tipo'],"7tipo","Tipo"); ?>
</SPAN>
<LABEL>Forma:</LABEL>
<INPUT name="7forma" value="<? echo $f['7forma']; ?>" class="l2" size="15" maxlength="15">
<LABEL>Tama&#241;o:</LABEL>
<INPUT name="7tamano" value="<? echo $f['7tamano']; ?>" class="l2" size="15" maxlength="15"><br class="esp">
<LABEL>Fuerza:</LABEL>
<INPUT name="7fuerza" value="<? echo $f['7fuerza']; ?>" class="l2" size="20" maxlength="20">