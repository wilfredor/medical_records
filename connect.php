<?
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "123456";
$dbName = "sinamed";
function exec_querry($querry)
{
	global $dbHost, $dbUser, $dbPass,$dbName;
	$db = mysql_pconnect($dbHost, $dbUser, $dbPass);
	mysql_select_db($dbName, $db);
	mysql_query($querry, $db);
}
function return_querry($querry)
{
//echo $querry;
	return mysql_fetch_array(return_querry_array($querry));
}
function return_querry_array($querry)
{
	global $dbHost, $dbUser, $dbPass,$dbName;
	$db = mysql_pconnect($dbHost, $dbUser, $dbPass);
	mysql_select_db($dbName, $db);
	$result = mysql_query($querry, $db);
	return $result;
}
function paginar($actual, $total, $por_pagina, $enlace) {
  $total_paginas = ceil($total/$por_pagina);
  $anterior = $actual - 1;
  $posterior = $actual + 1;
  if ($actual>1)
    $texto = "<a  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\" href=\"$enlace$anterior\">&laquo;</a> ";
  else
    $texto = "<b   class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\">&laquo;</b> ";
  for ($i=1; $i<$actual; $i++)
    $texto .= "<a  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\" href=\"$enlace$i\">$i</a> ";
  $texto .= "<b  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\">$actual</b> ";
  for ($i=$actual+1; $i<=$total_paginas; $i++)
    $texto .= "<a  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\" href=\"$enlace$i\">$i</a> ";
  if ($actual<$total_paginas)
    $texto .= "<a  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\" href=\"$enlace$posterior\">&raquo;</a>";
  else
    $texto .= "<b  class=\"caja_boton\"  onmouseover=\"boton_over(this);\" onmouseout=\"boton_out(this)\">&raquo;</b>";
  return $texto;
}


?>