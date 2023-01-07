<TITULO>16.1-ARCADA SUPERIOR:</TITULO><br class="esp">
<LABEL>Suma Insicivo es:</LABEL>
<INPUT value="<? echo $f['16insicivo']; ?>" name="16insicivo" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16insidebe']; ?>" name="16insidebe" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16insidife']; ?>" name="16insidife" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Distancia Molar es:</LABEL>
<INPUT value="<? echo $f['16molar']; ?>" name="16molar" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16moldebe']; ?>" name="16moldebe" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16moldife']; ?>" name="16moldife" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Distancia Premolar es:</LABEL>
<INPUT value="<? echo $f['16premolar']; ?>" name="16premolar" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16predebe']; ?>" name="16predebe" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16predife']; ?>" name="16predife" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Longitud Anterior es:</LABEL>
<INPUT value="<? echo $f['16anterior']; ?>" name="16anterior" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16antdebe']; ?>" name="16antdebe" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16antdife']; ?>" name="16antdife" class="l2" size="20" maxlength="20"><br class="esp">
<TITULO>A-SENTIDO SAGITAL:</TITULO><br class="esp">
<TITULO>GRUPO ANTERIOR:</TITULO>
<SELECT name="16ganterior" class="l2">
	<OPTION value="Protrusi&#243;n">Protrusi&#243;n</OPTION>
	<OPTION value="Retrusi&#243;n">Retrusi&#243;n</OPTION>
	<? select_opt($f['16ganterior']) ?>
</SELECT>
<SELECT name="16maxalv" class="l2">
	<OPTION value="Maxilar">Maxilar</OPTION>
	<OPTION value="Alveolar">Alveolar</OPTION>
	<? select_opt($f['16maxalv']) ?>
</SELECT><br class="esp">
<TITULO>GRUPO POSTERIOR:</TITULO>
<LABEL>Migraci&#243;n Mesial-Distal:</LABEL>
<SELECT name="16migracion" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['16migracion']) ?>
</SELECT>
<SELECT name="16coroapi" class="l2">
	<OPTION value="Coronaria">Coronaria</OPTION>
	<OPTION value="Apical">Apical</OPTION>
	<? select_opt($f['16coroapi']) ?>
</SELECT><br class="esp">
<TITULO>B-SENTIDO TRANSVERSAL:</TITULO><br class="esp">
<LABEL>Compresi&#243;n:</LABEL>
<SELECT name="16asmetrica" class="l2">
	<OPTION value="Sim&#233;trica">Sim&#233;trica</OPTION>
	<OPTION value="Asim&#233;trica">Asim&#233;trica</OPTION>
	<? select_opt($f['16asmetrica']) ?>
</SELECT>
<SELECT name="16simetrica" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['16simetrica']) ?>
</SELECT>
<SELECT name="16simetrica2" class="l2">
	<OPTION value="Maxilar">Maxilar</OPTION>
	<OPTION value="Alveolar">Alveolar</OPTION>
	<? select_opt($f['16simetrica2']) ?>
</SELECT><br class="esp">
<LABEL>Expansi&#243;n:</LABEL>
<SELECT onchange="addinput(this.value,'16expansiona2','Si','Cual')"  class="l2" name="16expansion">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['16expansion']) ?>
</SELECT>
<SPAN id="16expansion2">
<? addinput($f['16expansion'] == "Si",$f['16expansiona2'],"16expansiona2","Cual"); ?>
</SPAN><br class="esp">
<TITULO>C-SENTIDO VERTICAL:</TITULO><br class="esp">
<TITULO>GRUPO ANTERIOR:</TITULO>
<SELECT name="16ganteriorc" class="l2">
	<OPTION value="Extraversi&#243;n">Extraversi&#243;n</OPTION>
	<OPTION value="Intraversi&#243;n">Intraversi&#243;n</OPTION>
	<? select_opt($f['16ganteriorc']) ?>
</SELECT><br class="esp">
<TITULO>GRUPO POSTERIOR:</TITULO>
<SELECT name="16gposterior" class="l2">
	<OPTION value="Extraversi&#243;n">Extraversi&#243;n</OPTION>
	<OPTION value="Intraversi&#243;n">Intraversi&#243;n</OPTION>
	<? select_opt($f['16gposterior']) ?>
</SELECT><br class="esp">
<TITULO>16.2-ARCADA INFERIOR:</TITULO><br class="esp">
<LABEL>Distancia Molar es:</LABEL>
<INPUT value="<? echo $f['16molar2']; ?>" name="16molar2" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16moldebe2']; ?>" name="16moldebe2" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16moldife2']; ?>" name="16moldife2" class="l2" size="20" maxlength="20"><br class="esp">
<LABEL>Distancia Premolar es:</LABEL>
<INPUT value="<? echo $f['16premolar2']; ?>" name="16premolar2" class="l2" size="20" maxlength="20">
<LABEL>Debe ser:</LABEL>
<INPUT value="<? echo $f['16predebe2']; ?>" name="16predebe2" class="l2" size="20" maxlength="20">
<LABEL>Diferencia:</LABEL>
<INPUT value="<? echo $f['16predife2']; ?>" name="16predife2" class="l2" size="20" maxlength="20"><br class="esp">
<TITULO>A-SENTIDO SAGITAL:</TITULO><br class="esp">
<TITULO>GRUPO ANTERIOR:</TITULO>
<SELECT name="16ganteriora2" class="l2">
	<OPTION value="Protrusi&#243;n">Protrusi&#243;n</OPTION>
	<OPTION value="Retrusi&#243;n">Retrusi&#243;n</OPTION>
	<? select_opt($f['16ganteriora2']) ?>
</SELECT>
<SELECT name="16maxalv2" class="l2">
	<OPTION value="Maxilar">Maxilar</OPTION>
	<OPTION value="Alveolar">Alveolar</OPTION>
	<? select_opt($f['16maxalv2']) ?>
</SELECT><br class="esp">
<TITULO>GRUPO POSTERIOR:</TITULO>
<LABEL>Migraci&#243;n Mesial-Distal:</LABEL>
<SELECT name="16migracion2" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['16migracion2']) ?>
</SELECT>
<SELECT name="16coroapi2" class="l2">
	<OPTION value="Coronaria">Coronaria</OPTION>
	<OPTION value="Apical">Apical</OPTION>
	<? select_opt($f['16coroapi2']) ?>
</SELECT><br class="esp">
<TITULO>B-SENTIDO TRANSVERSAL:</TITULO><br class="esp">
<LABEL>Compresi&#243;n:</LABEL>
<SELECT name="16asmetrica2" class="l2">
	<OPTION value="Sim&#233;trica">Sim&#233;trica</OPTION>
	<OPTION value="Asim&#233;trica">Asim&#233;trica</OPTION>
	<? select_opt($f['16asmetrica2']) ?>
</SELECT>
<SELECT name="16simetricab2" class="l2">
	<OPTION value="Si">Si</OPTION>
	<OPTION value="No">No</OPTION>
	<? select_opt($f['16simetricab2']) ?>
</SELECT>
<SELECT name="16simetrica22" class="l2">
	<OPTION value="Maxilar">Maxilar</OPTION>
	<OPTION value="Alveolar">Alveolar</OPTION>
	<? select_opt($f['16simetrica22']) ?>
</SELECT><br class="esp">
<LABEL>Expansi&#243;n:</LABEL>
<SELECT onchange="addinput(this.value,'16expansion22','Si','Cual')"  class="l2" name="16expansion2">
	<OPTION value="No">No</OPTION>
	<OPTION value="Si">Si</OPTION>
	<? select_opt($f['16expansion2']) ?>
</SELECT>
<SPAN id="16expansion22">
<? addinput($f['16expansion2'] == "Si",$f['16expansion22'],"16expansion22","Cual"); ?>
</SPAN><br class="esp">
<TITULO>C-SENTIDO VERTICAL:</TITULO><br class="esp">
<TITULO>GRUPO ANTERIOR:</TITULO>
<SELECT name="16ganterior2" class="l2">
	<OPTION value="Extraversi&#243;n">Extraversi&#243;n</OPTION>
	<OPTION value="Intraversi&#243;n">Intraversi&#243;n</OPTION>
	<? select_opt($f['16ganterior2']) ?>
</SELECT><br class="esp">
<TITULO>GRUPO POSTERIOR:</TITULO>
<SELECT name="16gposterior2" class="l2">
	<OPTION value="Extraversi&#243;n">Extraversi&#243;n</OPTION>
	<OPTION value="Intraversi&#243;n">Intraversi&#243;n</OPTION>
	<? select_opt($f['16gposterior2']) ?>
</SELECT><br class="esp">
<TITULO>A-PLANO SAGITAL:</TITULO>
<SELECT name="16planosagital" class="l2">
	<OPTION value="Neutro">Neutro</OPTION>
	<OPTION value="Disto">Disto</OPTION>
	<OPTION value="Mesio">Mesio</OPTION>
	<? select_opt($f['16planosagital']) ?>
</SELECT><br class="esp">
<TITULO>B-PLANO TRANSVERSAL:</TITULO>
<SELECT name="16planotransversal" class="l2">
	<OPTION value="Normal">Normal</OPTION>
	<OPTION value="Compresi&#243;n">Compresi&#243;n</OPTION>
	<OPTION value="Expansi&#243;n">Expansi&#243;n</OPTION>
	<? select_opt($f['16planotransversal']) ?>
</SELECT><br class="esp">
<TITULO>C-PLANO VERTICAL</TITULO>
<SELECT name="16planovertical" class="l2">
	<OPTION value="Mordida normal">Mordida normal</OPTION>
	<OPTION value="Sobre Mordida">Sobre Mordida</OPTION>
	<OPTION value="Mordida cubierta">Mordida cubierta</OPTION>
	<OPTION value="Mordida Vis a Vis">Mordida Vis a Vis</OPTION>
	<OPTION value="Mordida abierta">Mordida abierta</OPTION>
	<? select_opt($f['16planovertical']) ?>
</SELECT><br class="esp">
<TITULO>LATERALIDAD DERECHA:</TITULO><br class="esp">
<LABEL>Interferencia lado Balanceo:</LABEL>
<INPUT value="<? echo $f['16ladobalanceo']; ?>" name="16ladobalanceo" class="l2" size="76" maxlength="76"><br class="esp">
<LABEL>Interferencia Lado de Trabajo:</LABEL>
<INPUT value="<? echo $f['16ladotrabajo']; ?>" name="16ladotrabajo" class="l2" size="76" maxlength="76"><br class="esp">
<TITULO>LATERALIDAD IZQUIERDA:</TITULO><br class="esp">
<LABEL>Interferencia lado Balanceo:</LABEL>
<INPUT value="<? echo $f['16ladobalanceo2']; ?>" name="16ladobalanceo2" class="l2" size="76" maxlength="76"><br class="esp">
<LABEL>Interferencia Lado de Trabajo:</LABEL>
<INPUT value="<? echo $f['16ladotrabajo2']; ?>" name="16ladotrabajo2" class="l2" size="76" maxlength="76">