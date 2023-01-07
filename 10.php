<LABEL>Tipo:</LABEL>
<SELECT onchange="addizqder('10tipo2',this.value)" name="10tipo1" class="l2">
	<OPTION value="Bilateral">Bilateral</OPTION>
	<OPTION value="Unilateral">Unilateral</OPTION>
	<? select_opt($f['10tipo1']) ?>
</SELECT>
<SPAN id="10tipo2">
<? 
if ($f['10tipo1'] == "Unilateral")
{
echo "<SELECT name=\"10tipo2\" class=l2>".
			"<OPTION value=Izquierda>Izquierda</OPTION>".
			"<OPTION value=Derecha>Derecha</OPTION>";
			select_opt($f['10tipo2']);
echo "</SELECT>";
}
?>
</SPAN>
<LABEL>Preferencia: Comida:</LABEL>
<SELECT name="10comida" class="l2">
	<OPTION value="Blanda">Blanda</OPTION>
	<OPTION value="Dura">Dura</OPTION>
	<OPTION value="Toda">Toda</OPTION>
	<? select_opt($f['10comida']) ?>
</SELECT><br class="esp">