<form action="<? echo $_SERVER['PHP_SELF'];?>" method="POST">
	<iNPUT type="checkbox" name="opcion[0]" value="1">
	<iNPUT type="checkbox" name="opcion[1]" value="2">
	<INPUT type="submit" value="Enviar">
</form>
<?
if ($_POST)
	echo $_POST['opcion'][0]."-".$_POST['opcion'][1];
?>