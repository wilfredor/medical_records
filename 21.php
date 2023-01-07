<TITULO>An&#225;lisis Fotogr&#225;fico:</TITULO><br class="esp"><br class="esp">
<a name="foto"></a>

<table style="width: 750px;" border="0"
 cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
<?
	for ($i = 1; $i <= 23; $i++)
	{ 

		if (($i == 1)||($i==4)||($i == 11)||($i==14)||($i==7)||($i==10)||($i==17))
			echo "</tr><tr>";
		if (($i == 1)||($i==4)||($i==11)||($i==25)||($i==18)||($i==21))
			echo "</tr><tr><td><TITULO>".seccion_foto($i).":</TITULO></td></tr><tr>";

		inputimage($_FILES['21foto'.$i],$f['21foto'.$i],$i);
	}
?>
</tr>
  </tbody>
</table>
<br class="esp">
<br class="esp">

<? include ("menuboton.php"); ?>
</table>


</form>
