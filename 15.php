<LABEL>N&#250;mero de Dientes:</LABEL>
<INPUT value="<? echo $f['15dientes']; ?>"  name="15dientes" class="l2" onkeypress="return solonum(event)" size="2" maxlength="2">
<LABEL>Dentici&#243;n:</LABEL>
<SELECT class="l2" name="15denticion">
	<OPTION value="Primaria">Primaria</OPTION>
	<OPTION value="Mixta">Mixta</OPTION>
	<OPTION value="Permanente">Permanente</OPTION>
	<? select_opt($f['15denticion']) ?>
</SELECT><br class="esp">
<LABEL>Forma:</LABEL>
<SELECT  onchange="addinput(this.value,'15forma2','Anomalia','Especificar')" class="l2" name="15forma">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Anomalia">Anomal&#237;a</OPTION>
	<? select_opt($f['15forma']) ?>
</SELECT>
<SPAN id="15forma2"><? addinput($f['15forma'] == "Anomalia",$f['15forma2'],"15forma2","Especificar"); ?> </SPAN><br class="esp">
<LABEL>Tama&#241;o:</LABEL>
<SELECT  onchange="addinput(this.value,'15tamano2','Anomalia','Especificar')" class="l2" name="15tamano">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Anomalia">Anomalia</OPTION>
	<? select_opt($f['15tamano']) ?>
</SELECT>
<SPAN id="15tamano2"><? addinput($f['15tamano'] == "Anomalia",$f['15tamano2'],"15tamano2","Especificar"); ?> </SPAN><br class="esp">
<LABEL>Abrasi&#243;n:</LABEL>
<SELECT  onchange="addinput(this.value,'15abrasion2','Si','Describir')" class="l2" name="15abrasion">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15abrasion']) ?>
</SELECT>
<SPAN id="15abrasion2"><? addinput($f['15abrasion'] == "Si",$f['15abrasion2'],"15abrasion2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Descalcificaci&#243;n:</LABEL>
<SELECT  onchange="addinput(this.value,'15descalsificacion2','Si','Describir')" class="l2" name="15descalsificacion">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15descalsificacion']) ?>
</SELECT>
<SPAN id="15descalsificacion2"><? addinput($f['15descalsificacion'] == "Si",$f['15descalsificacion2'],"15descalsificacion2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Veteado:</LABEL>
<SELECT  onchange="addinput(this.value,'15vetado2','Si','Describir')" class="l2" name="15vetado">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15vetado']) ?>
</SELECT>
<SPAN id="15vetado2"><? addinput($f['15vetado'] == "Si",$f['15vetado2'],"15vetado2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Erosi&#243;n:</LABEL>
<SELECT  onchange="addinput(this.value,'15erosion2','Si','Describir')" class="l2" name="15erosion">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15erosion']) ?>
</SELECT>
<SPAN id="15erosion2"><? addinput($f['15erosion'] == "Si",$f['15erosion2'],"15erosion2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Caries:</LABEL>
<SELECT  onchange="addinput(this.value,'15caries2','Si','Describir')" class="l2" name="15caries">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15caries']) ?>
</SELECT>
<SPAN id="15caries2"><? addinput($f['15caries'] == "Si",$f['15caries2'],"15caries2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Supernumerarios:</LABEL>
<SELECT class="l2" name="15supernumerarios">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15supernumerarios']) ?>
</SELECT>
<LABEL>Agenesis:</LABEL>
<SELECT  onchange="addinput(this.value,'15agenesis2','Si','Describir')" class="l2" name="15agenesis">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15agenesis']) ?>
</SELECT>
<SPAN id="15agenesis2"><? addinput($f['15agenesis'] == "Si",$f['15agenesis2'],"15agenesis2","Describir"); ?> </SPAN><br class="esp">
<LABEL>Ausencia por:</LABEL>
<INPUT value="<? echo $f['15ausencia']; ?>"  name="15ausencia" class="l2" size="100" maxlength="100"><br class="esp">
<LABEL>Movimiento de lateralidad:</LABEL>
<SELECT class="l2" name="15lateralidad">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15lateralidad']) ?>
</SELECT>
<LABEL>Movimiento Borde a Borde:</LABEL>
<SELECT class="l2" name="15bordeaborde">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['15bordeaborde']) ?>
</SELECT><br class="esp">
<LABEL>Perfil:</LABEL>
<SELECT class="l2" name="15perfil">
	<OPTION value="C&#243;ncavo">C&#243;ncavo</OPTION>
	<OPTION value="Convexo">Convexo</OPTION>
	<OPTION value="Recto">Recto</OPTION>
	<? select_opt($f['15perfil']) ?>
</SELECT>
<LABEL>Arcada: Forma:</LABEL>
<SELECT  onchange="addarcadasup('15arcada2',this.value)" class="l2" name="15arcada">
	<OPTION value="Arcada Superior">Arcada Superior</OPTION>
	<OPTION value="Arcada Inferior">Arcada Inferior</OPTION>
	<? select_opt($f['15arcada']) ?>
</SELECT>
<SPAN id="15arcada2">
<?
if ($f['15arcada'] == "Arcada Superior")
 {
echo "<SELECT name=\"15arcada2\" class=\"l2\">".
			"<OPTION value=Triangular>Triangular</OPTION>".
			"<OPTION value=Trapezoidal>Trapezoidal</OPTION>".
			"<OPTION value=Ovoide>Ovoide</OPTION>".
			"<OPTION value=\"En U\">En U</OPTION>";
			select_opt($f['15arcada2']);
	echo	"</SELECT>";
}
?>
</SPAN><br class="esp">
<LABEL>L&#237;nea Media:</LABEL>
<SELECT  onchange="addizqderd('15lineamedia2',this.value.length,17)" class="l2" name="15lineamedia">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Desviada Superior">Desviada Superior</OPTION>
	<OPTION value="Desviada Inferior">Desviada Inferior</OPTION>
	<? select_opt($f['15lineamedia']) ?>
</SELECT>
<SPAN id="15lineamedia2"><? 

if (strlen($f['15lineamedia']) == 17)

echo "<SELECT name=\"15lineamedia2\" class=l2>".
			"<OPTION value=Izquierda>Izquierda</OPTION>".
			"<OPTION value=Derecha>Derecha</OPTION>";
			select_opt($f['15lineamedia2']);
echo "</SELECT>"; 

?> </SPAN>
<LABEL>Llave Molar:</LABEL>
<SELECT class="l2" name="15llavemolar">
	<OPTION value="Normo">Normo</OPTION>
	<OPTION value="Disto">Disto</OPTION>
	<OPTION value="Mesio">Mesio</OPTION>
	<OPTION value="No hay">No hay</OPTION>
	<? select_opt($f['15llavemolar']) ?>
</SELECT>
<LABEL>Llave Canina:</LABEL>
<SELECT class="l2" name="15llavecanina">
	<OPTION value="Normo">Normo</OPTION>
	<OPTION value="Disto">Disto</OPTION>
	<OPTION value="Mesio">Mesio</OPTION>
	<OPTION value="No hay">No hay</OPTION>
	<? select_opt($f['15llavecanina']) ?>
</SELECT><br class="esp">
<LABEL>Over Bite:</LABEL>
<INPUT value="<? echo $f['15overbite']; ?>"  name="15overbite" class="l2" onkeypress="return solonum(event)" size="5" maxlength="5">mm
<LABEL>Over jet:</LABEL>
<INPUT value="<? echo $f['15overjet']; ?>"  name="15overjet" class="l2" onkeypress="return solonum(event)" size="5" maxlength="5">mm