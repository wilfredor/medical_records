<LABEL>Tipo:</LABEL>
<SELECT name="8tipo" class="l2">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Anterior">Anterior</OPTION>
	<OPTION value="Lateral">Lateral</OPTION>
	<OPTION value="Posterior">Posterior</OPTION>
	<? select_opt($f['8tipo']) ?>
</SELECT><br class="esp">
<LABEL>Posici&#243;n de la lengua en reposo:</LABEL>
<INPUT name="8lenguareposo" value="<? echo $f['8lenguareposo']; ?>" class="l2" size="74" maxlength="74"><br class="esp">
<LABEL>Posici&#243;n de la lengua al deglutir:</LABEL>
<INPUT name="8lenguadeglutir" value="<? echo $f['8lenguadeglutir']; ?>" class="l2" size="74" maxlength="74"><br class="esp">