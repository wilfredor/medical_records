<?
function writed ($d,$j,$k,$d2)
{
?>
<SELECT  class="l2" name="<? echo $d; ?>">
	<?
	for ($i = $k; $i <= $j; $i++)
		echo "	<OPTION value=\"$i\">$i</OPTION>";
	select_opt($d2)
	?>
</SELECT><LABEL>/</LABEL>
<?
}
function writefecha ($dia,$mes,$anio,$d,$m,$a)
{
	writed ($dia,31,1,$d);
	writed ($mes,12,1,$m);
	writed ($anio,date('Y')+1,1900,$a);
}
function select_opt($opt)
{
if (($opt) || (!($opt=="")))
	echo "<OPTION value=\"$opt\"  selected=\"selected\">$opt</OPTION>";
else
	echo "<OPTION value=\"\" selected=\"selected\">...</OPTION>"; 
}
function addinput($comp,$valor,$name,$label)
{
if ($comp)
	echo "<LABEL>$label:</LABEL><INPUT name=\"$name\" value=\"$valor\" class=\"l2\" size=\"30\" maxlength=\"30\">";
}
function inputimage($file,$hide,$i)
{
$dir = dirname(__FILE__)."/imagenes/";
if ((empty($file['name']))and (is_image($hide))) $file['name'] = $hide;
//if (!empty($hide)) $file['name'] = $hide;



if ($file['name']) {
$filename = $file['name'];
if (is_image($filename))
{
	if (!file_exists($dir.$filename))
		upload_image($file,$dir);
	define("THUMB_SIZE", "200");
	list($w, $h) = getimagesize($dir."/".$filename);
	$w_original = $w; $h_original = $h;
	if ($h>THUMB_SIZE) //Calcula la altura de la miniatura
		{$w = round($w*THUMB_SIZE/$h); $h = THUMB_SIZE;}
	if ($w>THUMB_SIZE) //Calcula el ancho de la miniatura
		{$h = round($h*THUMB_SIZE/$w); $w = THUMB_SIZE;}
	//if ((substr($filename, 0, 3)) == "th_")
		//write_thumb($filename, $dir,$h,$w); $images++;
	/* elseif (!file_exists("th_".$filename))
		create_thumb($filename,$dir,$h_original,$w_original,$h,$w); */
	
	echo "<td ><span id=\"foto$i\">\n<div class=\"shadow\" ><img onclick=\"popitup('imagenes/".$filename."',$h_original,$w_original)\" width=\"$w\" height=\"$h\" alt=\"$filename\" src=\"imagenes/".$filename."\" /><div class=\"topleft\"></div><div class=\"topright\"></div><div class=\"bottomleft\"></div><div class=\"bottomright\" ></div></div>\n<br class=\"clear\" /><LABEL>".label_foto($i).": </LABEL><a href=\"#foto\" class=\"icot\" onclick=\"cambiar_foto('foto$i','$i','$filename')\"><img alt=\"Cambiar\" border=\"0\" src=\"style/img/edit.png\" /></a><a  class=\"icot\" onclick=\"delfoto('foto$i','fotoh$i','$i')\" href=\"#foto\"><img src=\"style/img/delete.png\"  border=\"0\" alt=\"Eliminar\" /></a></span></td>";

	echo "<span  id=\"fotoh$i\"> <INPUT type=\"hidden\" name=\"21foto$i\" value=\"$filename\"></span>";
}
else
	echo "<tr><br class=\"esp\"><span class=\"error\">".label_foto($i)." de nombre \"$filename\" no es una imagen...</span><br class=\"esp\"></tr>";
} else
	echo "<td><LABEL>".label_foto($i).":</LABEL><INPUT name=\"21foto$i\" class=\"l2\" type=\"file\" ></td>";
}
function label_foto($i)
{
if ($i == 1) return "Frente";
elseif ($i==2)  return "Perfil";
elseif ($i==3)  return "Detalle";
elseif ($i==4)  return "Frente";
elseif ($i==5)  return "Perfil";
elseif ($i==6)  return "Lateral Derecho";
elseif ($i==7)  return "Lateral Izquierdo";
elseif ($i==8)  return "Detalle";
elseif ($i==9)  return "Aparatolog&#237;a inicial";
elseif ($i==10)  return "Aparatolog&#237;a intermedia";
elseif ($i==11)  return "Frente";
elseif ($i==12)  return "Perfil";
elseif ($i==13)  return "Lateral Derecho";
elseif ($i==14)  return "Lateral Izquierdo";
elseif ($i==15)  return "Cef&#225;lica Lateral";
elseif ($i==16)  return "Panor&#225;mica";
elseif ($i==17)  return "Detalle";
elseif ($i==18)  return "Frente";
elseif ($i==19)  return "Lateralidad Derecha";
elseif ($i==20)  return "Lateralidad Izquierda";
elseif ($i==21)  return "Frente";
elseif ($i==22)  return "Lateralidad Derecha";
elseif ($i==23)  return "Lateralidad Izquierda";

}

function seccion_foto($i)
{
if ($i == 1) return "21.1-Cara";
elseif ($i==4)  return "21.2-Intrabucal";
elseif ($i==11)  return "21.2.1-Conclusi&#243;n Intermitente";
elseif ($i==15)  return "21.3-Radiograf&#237;a";
elseif ($i==18)  return "21.4-Modelos de Estudio";
elseif ($i==21)  return "21.4.1-Conclusi&#243;n Intermitente";
}

function upload_image($image,$uploaddir)
{
	$uploadfile = $uploaddir . basename($image['name']);
	move_uploaded_file($image['tmp_name'], $uploadfile);
}
function is_image($image_name)
{
	$ext =explode('.', $image_name);
	$ext = strtolower ($ext[count($ext)-1]);
	if (($ext == "jpg")||($ext == "jepg")||($ext == "png"))
		return true;
	else
		return false;
}
/*
function is_png($image_name)
{
	$ext =explode('.', $image_name);
	$ext = strtolower ($ext[count($ext)-1]);
	if ($ext == "png")
		return true;
	else
		return false;
}
function create_thumb($filename,$dir,$h_original,$w_original,$h,$w)
{
	$is_png = is_png($filename); 
	$original = ($is_png)?imagecreatefrompng($dir."/".$filename):
					    imagecreatefromjpeg($dir."/".$filename); 
	$thumb = imagecreatetruecolor($w,$h);
	imagecopyresampled($thumb,$original,0,0,0,0,$w,$h,$w_original,$h_original);
	($is_png)?imagepng($thumb,$dir."/th_".$filename):
			 imagejpeg($thumb,$dir."/th_".$filename,90);
}
*/
function vacio($d,$num)
{
if (empty($d))
	return "NULL";
elseif ($num)
	return $d;
else
	return "'".$d."'";
}
function infoto($image_file,$image_hide)
{
	$aux = validate_foto($image_file,$image_hide);
	return (is_image($aux))?"'$aux'":"NULL";
}
function validate_foto($image_file,$image_hide)
{	
if (!empty($image_file))
	return $image_file;
//elseif(!empty($image_hide))
else
	return $image_hide;
}
function array_to_string($arreglo,$n)
{
$aux = "";
for ($i = 0; $i <= $n; $i++)
{
	if (!$arreglo[$i]) $aux .= "0";
	elseif ($arreglo[$i] == "") $aux .= "0";
	$aux .= $arreglo[$i].",";
}
return $aux;
}
?>