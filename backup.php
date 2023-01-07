<?
if ($_GET)
{
// Nombre del archivo de con el cual queremos que se guarde la base de datos
$filename = "backup_sinamed.sql"; 
// Cabezeras para forzar al navegador a guardar el archivo
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Transfer-Encoding: binary");
header("Content-type: application/force-download");
header("Content-Disposition: attachment; filename=$filename");

$usuario="root";  // Usuario de la base de datos, un ejemplo podria ser 'root'
$passwd="123456";  // Contraseña asignada al usuario
$bd="sinamed";  // Nombre de la Base de Datos a exportar

// Funciones para exportar la base de datos
$executa = "mysqldump.exe -u $usuario --password=$passwd --opt $bd";
system($executa, $resultado);

// Comprobar si se a realizado bien, si no es asi, mostrará un mensaje de error
if ($resultado) echo "Error guardando la base de datos\n"; 
}
elseif ($_FILES)
{
$usuario="root";  // Usuario de la base de datos, un ejemplo podria ser 'root'
$passwd="123456";  // Contraseña asignada al usuario
$bd="sinamed";  // Nombre de la Base de Datos a exportar
$filename = "C:\\respaldo.sql";
//system("delete $filename");
if (move_uploaded_file($_FILES['file']['tmp_name'],$filename)) {echo '<br> -Archivo subido<br>';}else{print 'No se subio el archivo, hubo errores <br/>';};
$executa = "C:\\AppServ\\MySQL\\bin\\mysql.exe -u $usuario -p$passwd $bd < C:\\respaldo.sql";
system($executa, $resultado);

if ($resultado) echo "Error importando la base de datos"; else echo "-Base de datos restaurada"; 

}
else
{
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #006600;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body>
<img src="style/img/Label_database.jpg" width="300" height="66" />
<p><a href="backup.php?respaldo=1" target="_self" class="style1">Hacer Respaldo</a></p>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="<? echo $_SERVER['PHP_SELF'];?>"><span  class="style1 style1">Importar Base de Datos:<input type="file" name="file" /></span>
<input type="submit" value="Aceptar" />
    </form>
</ul>
<br/>
<span class="style1"><strong>Nota:</strong> Recuerde que este proceso puede tardar varios minutos...</span>
</body>
</html>
<?
}
?>