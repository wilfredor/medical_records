<?
//$querry_delete = "DELETE FROM historia WHERE id_historia = $delete";
/*
if (vacio($f['2pnombre'],false) == "NULL")
  $querry_update_aux ="";
else
  $querry_update_aux = " AND 2pnombre =".vacio($f['2pnombre'],false);
*/
$error = "";
if ((empty($f['1nombre']))||(empty($f['1dia']))||(empty($f['1mes']))||(empty($f['1anio'])))
{
$error = "Error: Los campos Apellidos y Nombres y Fecha de Nacimiento son obligatorios para la identificaci&oacute;n de cada historia en la base de datos";
}
else
{
$querry = "Select id_historia from historia WHERE 1nombre =".vacio($f['1nombre'],false)." AND 1dia=".vacio($f['1dia'],false)." AND 1mes=".vacio($f['1mes'],false)." AND 1anio=".vacio($f['1anio'],false);
$aux = return_querry($querry);

if (!empty($aux['id_historia']))
{
$querry_update = "UPDATE historia SET 1nombre = ".vacio($f['1nombre'],false).", 1sexo = ".vacio($f['1sexo'],false).", 1edad = ".vacio($f['1edad'],false).", 16asmetrica = ".vacio($f['16asmetrica'],false).", 16asmetrica2 = ".vacio($f['16asmetrica2'],false).",1dia = ".vacio($f['1dia'],false).", 1mes = ".vacio($f['1mes'],false).", 1anio = ".vacio($f['1anio'],false).", 1diac = ".vacio($f['1diac'],false).", 1mesc = ".vacio($f['1mesc'],false).", 1anioc = ".vacio($f['1anioc'],false).", 1lnacimiento = ".vacio($f['1lnacimiento'],false).", 1nacionalidad = ".vacio($f['1nacionalidad'],false).", 1domicilio = ".vacio($f['1domicilio'],false).", 1tlf = ".vacio($f['1tlf'],false).", 1mconsulta = ".vacio($f['1mconsulta'],false).", 1referido = ".vacio($f['1referido'],false).", 2pnombre = ".vacio($f['2pnombre'],false).", 2pedad = ".vacio($f['2pedad'],false).", 2plnacimiento = ".vacio($f['2plnacimiento'],false).", 2pnacionalidad = ".vacio($f['2pnacionalidad'],false).", 2pbiotipo = ".vacio($f['2pbiotipo'],false).", 2pconstitucion = ".vacio($f['2pconstitucion'],false).",2forcepp = ".vacio($f['2forcepp'],true).",2cesareap = ".vacio($f['2cesareap'],true).",2prematurop = ".vacio($f['2prematurop'],true).", 2poclusion = ".vacio($f['2poclusion'],false).", 2pocupacion = ".vacio($f['2pocupacion'],false).", 2penfermedades = ".vacio($f['2penfermedades'],false).", 2pactualmente = ".vacio($f['2pactualmente'],false).", 2mnombre = ".vacio($f['2mnombre'],false).", 2medad = ".vacio($f['2medad'],false).", 2mlnacimiento = ".vacio($f['2mlnacimiento'],false).", 2mnacionalidad = ".vacio($f['2mnacionalidad'],false).", 2mbiotipo = ".vacio($f['2mbiotipo'],false).", 2mconstitucion = ".vacio($f['2mconstitucion'],false).", 2moclusion = ".vacio($f['2moclusion'],false).", 2mocupacion = ".vacio($f['2mocupacion'],false).", 2menfermedades = ".vacio($f['2menfermedades'],false).", 2mactualmente = ".vacio($f['2mactualmente'],false).", 2embarazos = ".vacio($f['2embarazos'],false).", 2parto = ".vacio($f['2parto'],false).", 2antecedentes = ".vacio($f['2antecedentes'],false).", 3parto = ".vacio($f['3parto'],false).", 3peso = ".vacio($f['3peso'],false).", 3talla = ".vacio($f['3talla'],false).", 3anomalias = ".vacio($f['3anomalias'],false).", 3alimentacion = ".vacio($f['3alimentacion'],false).", 3dificultad1 = ".vacio($f['3dificultad1'],false).", 3dificultad2 = ".vacio($f['3dificultad2'],false).", 3quedad = ".vacio($f['3quedad'],false).", 3desarrollo = ".vacio($f['3desarrollo'],false).", 3denticion = ".vacio($f['3denticion'],false).", 3acciente = ".vacio($f['3acciente'],false).", 3historiadental = ".vacio($f['3historiadental'],false).", 3escolaridad = ".vacio($f['3escolaridad'],false).", 3edadingreso = ".vacio($f['3edadingreso'],false).", 3juegos = ".vacio($f['3juegos'],false).", 3suenos = ".vacio($f['3suenos'],false).", 4generales = ".vacio($f['4generales'],false).", 4endocrinas = ".vacio($f['4endocrinas'],false).", 4nutricionales = ".vacio($f['4nutricionales'],false).", 4geneticas = ".vacio($f['4geneticas'],false).", 4quirurgicas = ".vacio($f['4quirurgicas'],false).", 4recibidas = ".vacio($f['4recibidas'],false).", 4otorrino = ".vacio($f['4otorrino'],false).", 4alergicas = ".vacio($f['4alergicas'],false).", 5habito = ".vacio($f['5habito'],false).", 5tomaliquido = ".vacio($f['5tomaliquido'],false).", 5residuos = ".vacio($f['5residuos'],false).", 5chupete = ".vacio($f['5chupete'],false).", 5hasta1 = ".vacio($f['5hasta1'],false).", 5frecuencia = ".vacio($f['5frecuencia'],false).", 5medida = ".vacio($f['5medida'],false).", 5dedo = ".vacio($f['5dedo'],false).", 5hasta2 = ".vacio($f['5hasta2'],false).", 5dedomano = ".vacio($f['5dedomano'],false).", 5frecuenciadedo = ".vacio($f['5frecuenciadedo'],false).", 5medida2 = ".vacio($f['5medida2'],false).", 5otroshabitos = ".vacio($f['5otroshabitos'],false).", 5ennuresis = ".vacio($f['5ennuresis'],false).", 5fechac = ".vacio($f['5fechac'],false).", 5evolucion = ".vacio($f['5evolucion'],false).", 5examen = ".vacio($f['5examen'],false).", 5biotipologica = ".vacio($f['5biotipologica'],false).", 5nutricion = ".vacio($f['5nutricion'],false).", 5peso = ".vacio($f['5peso'],false).", 5talla = ".vacio($f['5talla'],false).", 6aspecto = ".vacio($f['6aspecto'],false).", 6queilitis = ".vacio($f['6queilitis'],false).", 6impresion = ".vacio($f['6impresion'],false).", 6reposo = ".vacio($f['6reposo'],false).", 6aproxima = ".vacio($f['6aproxima'],false).", 6labiosup = ".vacio($f['6labiosup'],false).", 6muscularsup = ".vacio($f['6muscularsup'],false).", 6muscularinfe = ".vacio($f['6muscularinfe'],false).", 6pliegue = ".vacio($f['6pliegue'],false).", 7color = ".vacio($f['7color'],false).", 7seburral = ".vacio($f['7seburral'],false).", 7patologico = ".vacio($f['7patologico'],false).", 7proliferacion = ".vacio($f['7proliferacion'],false).", 7forma = ".vacio($f['7forma'],false).", 7tamano = ".vacio($f['7tamano'],false).", 7fuerza = ".vacio($f['7fuerza'],false).", 8tipo = ".vacio($f['8tipo'],false).", 8lenguareposo = ".vacio($f['8lenguareposo'],false).", 8lenguadeglutir = ".vacio($f['8lenguadeglutir'],false).", 9bucal = ".vacio($f['9bucal'],false).", 9nasal = ".vacio($f['9nasal'],false).", 9mixta = ".vacio($f['9mixta'],false).", 9biaxilar = ".vacio($f['9biaxilar'],false).", 9xifoide = ".vacio($f['9xifoide'],false).", 9abdominal = ".vacio($f['9abdominal'],false).", 10tipo1 = ".vacio($f['10tipo1'],false).", 10comida = ".vacio($f['10comida'],false).", 11musculos = ".vacio($f['11musculos'],false).", 11gration = ".vacio($f['11gration'],false).", 11subnasal = ".vacio($f['11subnasal'],false).", 12ATM = ".vacio($f['12ATM'],false).", 13funcir = ".vacio($f['13funcir'],false).", 13distender = ".vacio($f['13distender'],false).", 13silbar = ".vacio($f['13silbar'],false).", 13vibrar = ".vacio($f['13vibrar'],false).", 13abajo = ".vacio($f['13abajo'],false).", 13vibrar2 = ".vacio($f['13vibrar2'],false).", 13acartuchar = ".vacio($f['13acartuchar'],false).", 13explosion = ".vacio($f['13explosion'],false).", 13frenillo = ".vacio($f['13frenillo'],false).", 13tamano = ".vacio($f['13tamano'],false).", 13movilidad = ".vacio($f['13movilidad'],false).", 14oidoder = ".vacio($f['14oidoder'],false).", 14bordeaborde = ".vacio($f['14bordeaborde'],false).", 14oidoizq = ".vacio($f['14oidoizq'],false).", 14bordeaborde2 = ".vacio($f['14bordeaborde2'],false).", 15dientes = ".vacio($f['15dientes'],true).", 15denticion = ".vacio($f['15denticion'],false).", 15forma = ".vacio($f['15forma'],false).", 15tamano = ".vacio($f['15tamano'],false).", 15abrasion = ".vacio($f['15abrasion'],false).", 15descalsificacion = ".vacio($f['15descalsificacion'],false).", 15vetado = ".vacio($f['15vetado'],false).", 15erosion = ".vacio($f['15erosion'],false).", 15caries = ".vacio($f['15caries'],false).", 15supernumerarios = ".vacio($f['15supernumerarios'],false).", 15agenesis = ".vacio($f['15agenesis'],false).", 15ausencia = ".vacio($f['15ausencia'],false).", 15lateralidad = ".vacio($f['15lateralidad'],false).", 15bordeaborde = ".vacio($f['15bordeaborde'],false).", 15perfil = ".vacio($f['15perfil'],false).", 15arcada = ".vacio($f['15arcada'],false).", 15lineamedia = ".vacio($f['15lineamedia'],false).", 15llavemolar = ".vacio($f['15llavemolar'],false).", 15llavecanina = ".vacio($f['15llavecanina'],false).", 15overbite = ".vacio($f['15overbite'],true).", 15overjet = ".vacio($f['15overjet'],true).", 16insicivo = ".vacio($f['16insicivo'],false).", 16insidebe = ".vacio($f['16insidebe'],false).", 16insidife = ".vacio($f['16insidife'],false).", 16molar = ".vacio($f['16molar'],false).", 16moldebe = ".vacio($f['16moldebe'],false).", 16moldife = ".vacio($f['16moldife'],false).", 16premolar = ".vacio($f['16premolar'],false).", 16predebe = ".vacio($f['16predebe'],false).", 16predife = ".vacio($f['16predife'],false).", 16anterior = ".vacio($f['16anterior'],false).", 16antdebe = ".vacio($f['16antdebe'],false).", 16antdife = ".vacio($f['16antdife'],false).", 16ganterior = ".vacio($f['16ganterior'],false).", 16maxalv = ".vacio($f['16maxalv'],false).", 16migracion = ".vacio($f['16migracion'],false).", 16coroapi = ".vacio($f['16coroapi'],false).", 16simetrica = ".vacio($f['16simetrica'],false).", 16simetrica2 = ".vacio($f['16simetrica2'],false).", 16expansion = ".vacio($f['16expansion'],false).", 16ganteriorc = ".vacio($f['16ganteriorc'],false).", 16gposterior = ".vacio($f['16gposterior'],false).", 16molar2 = ".vacio($f['16molar2'],false).", 16moldebe2 = ".vacio($f['16moldebe2'],false).", 16moldife2 = ".vacio($f['16moldife2'],false).", 16premolar2 = ".vacio($f['16premolar2'],false).", 16predebe2 = ".vacio($f['16predebe2'],false).", 16predife2 = ".vacio($f['16predife2'],false).", 16ganteriora2 = ".vacio($f['16ganteriora2'],false).", 16maxalv2 = ".vacio($f['16maxalv2'],false).", 16migracion2 = ".vacio($f['16migracion2'],false).", 16coroapi2 = ".vacio($f['16coroapi2'],false).", 16simetricab2 = ".vacio($f['16simetricab2'],false).", 16simetrica22 = ".vacio($f['16simetrica22'],false).", 16expansion2 = ".vacio($f['16expansion2'],false).", 16ganterior2 = ".vacio($f['16ganterior2'],false).", 16gposterior2 = ".vacio($f['16gposterior2'],false).", 16planosagital = ".vacio($f['16planosagital'],false).", 16planotransversal = ".vacio($f['16planotransversal'],false).", 16planovertical = ".vacio($f['16planovertical'],false).", 16ladobalanceo = ".vacio($f['16ladobalanceo'],false).", 16ladotrabajo = ".vacio($f['16ladotrabajo'],false).", 16ladobalanceo2 = ".vacio($f['16ladobalanceo2'],false).", 16ladotrabajo2 = ".vacio($f['16ladotrabajo2'],false).", 17radiografico = ".vacio($f['17radiografico'],false).", 18diagnostico = ".vacio($f['18diagnostico'],false).", 19pronostico = ".vacio($f['19pronostico'],false).", 20etapas = ".vacio($f['20etapas'],false).", 20aparatologia = ".vacio($f['20aparatologia'],false).", 20control = ".vacio($f['20control'],false).", 21foto1 = ".infoto($_FILES['21foto1']['name'],$f['21foto1']).", 21foto2 = ".infoto($_FILES['21foto2']['name'],$f['21foto2']).", 21foto3 = ".infoto($_FILES['21foto3']['name'],$f['21foto3']).", 13articulacion = '".array_to_string(&$f['13articulacion'],26)."', 2especificar = ".vacio($f['2especificar'],false).", 3especificar = ".vacio($f['3especificar'],false).", 3cuales1 = ".vacio($f['3cuales1'],false).", 3cuales2 = ".vacio($f['3cuales2'],false).", 7cual = ".vacio($f['7cual'],false).", 7tipo = ".vacio($f['7tipo'],false).", 10tipo2 = ".vacio($f['10tipo2'],false).", 15forma2 = ".vacio($f['15forma2'],false).", 15tamano2 = ".vacio($f['15tamano2'],false).", 15abrasion2 = ".vacio($f['15abrasion2'],false).", 15descalsificacion2 = ".vacio($f['15descalsificacion2'],false).", 15vetado2 = ".vacio($f['15vetado2'],false).", 15erosion2 = ".vacio($f['15erosion2'],false).", 15caries2 = ".vacio($f['15caries2'],false).", 15agenesis2 = ".vacio($f['15agenesis2'],false).", 15arcada2 = ".vacio($f['15arcada2'],false).", 15lineamedia2 = ".vacio($f['15lineamedia2'],false).", 16expansiona2 = ".vacio($f['16expansiona2'],false).", 21foto4 = ".infoto($_FILES['21foto4']['name'],$f['21foto4']).",21foto5 = ".infoto($_FILES['21foto5']['name'],$f['21foto5']).",21foto6 = ".infoto($_FILES['21foto6']['name'],$f['21foto6']).",21foto7 = ".infoto($_FILES['21foto7']['name'],$f['21foto7']).",21foto8 = ".infoto($_FILES['21foto8']['name'],$f['21foto8']).",21foto9 = ".infoto($_FILES['21foto9']['name'],$f['21foto9']).",21foto10 = ".infoto($_FILES['21foto10']['name'],$f['21foto10']).",21foto11 = ".infoto($_FILES['21foto11']['name'],$f['21foto11']).",21foto12 = ".infoto($_FILES['21foto12']['name'],$f['21foto12']).",21foto13 = ".infoto($_FILES['21foto13']['name'],$f['21foto13']).",21foto14 = ".infoto($_FILES['21foto14']['name'],$f['21foto14']).",21foto15 = ".infoto($_FILES['21foto15']['name'],$f['21foto15']).",21foto16 = ".infoto($_FILES['21foto16']['name'],$f['21foto16']).",21foto17 = ".infoto($_FILES['21foto17']['name'],$f['21foto17']).",21foto18 = ".infoto($_FILES['21foto18']['name'],$f['21foto18']).",21foto19 = ".infoto($_FILES['21foto19']['name'],$f['21foto19']).",21foto20 = ".infoto($_FILES['21foto20']['name'],$f['21foto20']).",21foto21 = ".infoto($_FILES['21foto21']['name'],$f['21foto21']).",21foto22 = ".infoto($_FILES['21foto22']['name'],$f['21foto22']).",21foto23 = ".infoto($_FILES['21foto23']['name'],$f['21foto23']).", 16expansion22 = ".vacio($f['16expansion22'],false).", 4aparatologia = ".vacio($f['4aparatologia'],false).", 5detalles = ".vacio($f['5detalles'],false).", 9pernasal = ".vacio($f['9pernasal'],false).", 5aspecto = ".vacio($f['5aspecto'],false).", 5color = ".vacio($f['5color'],false).", 5humedad = ".vacio($f['5humedad'],false).", 5anexos = ".vacio($f['5anexos'],false).", 5cabello = ".vacio($f['5cabello'],false).", 5unas = ".vacio($f['5unas'],false).", 11bucal = ".vacio($f['11bucal'],false).", 20especifica = ".vacio($f['20especifica'],false)." WHERE id_historia=".$aux['id_historia'];
//echo $querry_update;
exec_querry($querry_update);

}else
{
	$querry_insert = "INSERT INTO historia (16asmetrica2,16asmetrica,1nombre,1sexo,1edad,1dia,1mes,1anio,1diac,1mesc,1anioc,1lnacimiento,1nacionalidad,1domicilio,1tlf,1mconsulta,1referido,2pnombre,2pedad,2plnacimiento,2pnacionalidad,2pbiotipo,2pconstitucion,2poclusion,2pocupacion,2penfermedades,2pactualmente,2mnombre,2medad,2mlnacimiento,2mnacionalidad,2mbiotipo,2mconstitucion,2moclusion,2mocupacion,2menfermedades,2mactualmente,2embarazos,2parto,2antecedentes,3parto,3peso,3talla,3anomalias,3alimentacion,3dificultad1,3dificultad2,3quedad,3desarrollo,3denticion,3acciente,3historiadental,3escolaridad,3edadingreso,3juegos,3suenos,4generales,4endocrinas,4nutricionales,4geneticas,4quirurgicas,4recibidas,4otorrino,4alergicas,5habito,5tomaliquido,5residuos,5chupete,5hasta1,5frecuencia,5medida,5dedo,5hasta2,5dedomano,5frecuenciadedo,5medida2,5otroshabitos,5ennuresis,5fechac,5evolucion,5examen,5biotipologica,5nutricion,5peso,5talla,6aspecto,6queilitis,6impresion,6reposo,6aproxima,6labiosup,6muscularsup,6muscularinfe,6pliegue,7color,7seburral,7patologico,7proliferacion,7forma,7tamano,7fuerza,8tipo,8lenguareposo,8lenguadeglutir,9bucal,9nasal,9mixta,9biaxilar,9xifoide,9abdominal,10tipo1,10comida,11musculos,11gration,11subnasal,12ATM,13funcir,13distender,13silbar,13vibrar,13abajo,13vibrar2,13acartuchar,13explosion,13frenillo,13tamano,13movilidad,14oidoder,14bordeaborde,14oidoizq,14bordeaborde2,15dientes,15denticion,15forma,15tamano,15abrasion,15descalsificacion,15vetado,15erosion,15caries,15supernumerarios,15agenesis,15ausencia,15lateralidad,15bordeaborde,15perfil,15arcada,15lineamedia,15llavemolar,15llavecanina,15overbite,15overjet,16insicivo,16insidebe,16insidife,16molar,16moldebe,16moldife,16premolar,16predebe,16predife,16anterior,16antdebe,16antdife,16ganterior,16maxalv,16migracion,16coroapi,16simetrica,16simetrica2,16expansion,16ganteriorc,16gposterior,16molar2,16moldebe2,16moldife2,16premolar2,16predebe2,16predife2,16ganteriora2,16maxalv2,16migracion2,16coroapi2,16simetricab2,16simetrica22,16expansion2,16ganterior2,16gposterior2,16planosagital,16planotransversal,16planovertical,16ladobalanceo,16ladotrabajo,16ladobalanceo2,16ladotrabajo2,17radiografico,18diagnostico,19pronostico,20etapas,20aparatologia,20control,21foto1,21foto2,21foto3,13articulacion,2especificar,3especificar,3cuales1,3cuales2,7cual,7tipo,10tipo2,15forma2,15tamano2,15abrasion2,15descalsificacion2,15vetado2,15erosion2,15caries2,15agenesis2,15arcada2,15lineamedia2,16expansiona2,16expansion22, 21foto4, 21foto5, 21foto6, 21foto7, 21foto8, 21foto9, 21foto10, 21foto11, 21foto12, 21foto13, 21foto14, 21foto15, 21foto16, 21foto17, 21foto18, 21foto19, 21foto20, 21foto21, 21foto22, 21foto23,2forcepp,2cesareap,2prematurop,4aparatologia,5detalles,9pernasal,5aspecto,5color,5humedad,5anexos,5cabello,5unas,11bucal,20especifica) VALUES (".vacio($f['16asmetrica2'],false).",".vacio($f['16asmetrica'],false).",".vacio($f['1nombre'],false).",".vacio($f['1sexo'],false).",".vacio($f['1edad'],false).",".vacio($f['1dia'],false).",".vacio($f['1mes'],false).",".vacio($f['1anio'],false).",".vacio($f['1diac'],false).",".vacio($f['1mesc'],false).",".vacio($f['1anioc'],false).",".vacio($f['1lnacimiento'],false).",".vacio($f['1nacionalidad'],false).",".vacio($f['1domicilio'],false).",".vacio($f['1tlf'],false).",".vacio($f['1mconsulta'],false).",".vacio($f['1referido'],false).",".vacio($f['2pnombre'],false).",".vacio($f['2pedad'],false).",".vacio($f['2plnacimiento'],false).",".vacio($f['2pnacionalidad'],false).",".vacio($f['2pbiotipo'],false).",".vacio($f['2pconstitucion'],false).",".vacio($f['2poclusion'],false).",".vacio($f['2pocupacion'],false).",".vacio($f['2penfermedades'],false).",".vacio($f['2pactualmente'],false).",".vacio($f['2mnombre'],false).",".vacio($f['2medad'],false).",".vacio($f['2mlnacimiento'],false).",".vacio($f['2mnacionalidad'],false).",".vacio($f['2mbiotipo'],false).",".vacio($f['2mconstitucion'],false).",".vacio($f['2moclusion'],false).",".vacio($f['2mocupacion'],false).",".vacio($f['2menfermedades'],false).",".vacio($f['2mactualmente'],false).",".vacio($f['2embarazos'],true).",".vacio($f['2parto'],false).",".vacio($f['2antecedentes'],false).",".vacio($f['3parto'],false).",".vacio($f['3peso'],false).",".vacio($f['3talla'],false).",".vacio($f['3anomalias'],false).",".vacio($f['3alimentacion'],false).",".vacio($f['3dificultad1'],false).",".vacio($f['3dificultad2'],false).",".vacio($f['3quedad'],false).",".vacio($f['3desarrollo'],false).",".vacio($f['3denticion'],false).",".vacio($f['3acciente'],false).",".vacio($f['3historiadental'],false).",".vacio($f['3escolaridad'],false).",".vacio($f['3edadingreso'],false).",".vacio($f['3juegos'],false).",".vacio($f['3suenos'],false).",".vacio($f['4generales'],false).",".vacio($f['4endocrinas'],false).",".vacio($f['4nutricionales'],false).",".vacio($f['4geneticas'],false).",".vacio($f['4quirurgicas'],false).",".vacio($f['4recibidas'],false).",".vacio($f['4otorrino'],false).",".vacio($f['4alergicas'],false).",".vacio($f['5habito'],false).",".vacio($f['5tomaliquido'],false).",".vacio($f['5residuos'],false).",".vacio($f['5chupete'],false).",".vacio($f['5hasta1'],false).",".vacio($f['5frecuencia'],false).",".vacio($f['5medida'],false).",".vacio($f['5dedo'],false).",".vacio($f['5hasta2'],false).",".vacio($f['5dedomano'],false).",".vacio($f['5frecuenciadedo'],false).",".vacio($f['5medida2'],false).",".vacio($f['5otroshabitos'],false).",".vacio($f['5ennuresis'],false).",".vacio($f['5fechac'],false).",".vacio($f['5evolucion'],false).",".vacio($f['5examen'],false).",".vacio($f['5biotipologica'],false).",".vacio($f['5nutricion'],false).",".vacio($f['5peso'],false).",".vacio($f['5talla'],false).",".vacio($f['6aspecto'],false).",".vacio($f['6queilitis'],false).",".vacio($f['6impresion'],false).",".vacio($f['6reposo'],false).",".vacio($f['6aproxima'],false).",".vacio($f['6labiosup'],false).",".vacio($f['6muscularsup'],false).",".vacio($f['6muscularinfe'],false).",".vacio($f['6pliegue'],false).",".vacio($f['7color'],false).",".vacio($f['7seburral'],false).",".vacio($f['7patologico'],false).",".vacio($f['7proliferacion'],false).",".vacio($f['7forma'],false).",".vacio($f['7tamano'],false).",".vacio($f['7fuerza'],false).",".vacio($f['8tipo'],false).",".vacio($f['8lenguareposo'],false).",".vacio($f['8lenguadeglutir'],false).",".vacio($f['9bucal'],false).",".vacio($f['9nasal'],false).",".vacio($f['9mixta'],false).",".vacio($f['9biaxilar'],false).",".vacio($f['9xifoide'],false).",".vacio($f['9abdominal'],false).",".vacio($f['10tipo1'],false).",".vacio($f['10comida'],false).",".vacio($f['11musculos'],false).",".vacio($f['11gration'],false).",".vacio($f['11subnasal'],false).",".vacio($f['12ATM'],false).",".vacio($f['13funcir'],false).",".vacio($f['13distender'],false).",".vacio($f['13silbar'],false).",".vacio($f['13vibrar'],false).",".vacio($f['13abajo'],false).",".vacio($f['13vibrar2'],false).",".vacio($f['13acartuchar'],false).",".vacio($f['13explosion'],false).",".vacio($f['13frenillo'],false).",".vacio($f['13tamano'],false).",".vacio($f['13movilidad'],false).",".vacio($f['14oidoder'],false).",".vacio($f['14bordeaborde'],false).",".vacio($f['14oidoizq'],false).",".vacio($f['14bordeaborde2'],false).",".vacio($f['15dientes'],true).",".vacio($f['15denticion'],false).",".vacio($f['15forma'],false).",".vacio($f['15tamano'],false).",".vacio($f['15abrasion'],false).",".vacio($f['15descalsificacion'],false).",".vacio($f['15vetado'],false).",".vacio($f['15erosion'],false).",".vacio($f['15caries'],false).",".vacio($f['15supernumerarios'],false).",".vacio($f['15agenesis'],false).",".vacio($f['15ausencia'],false).",".vacio($f['15lateralidad'],false).",".vacio($f['15bordeaborde'],false).",".vacio($f['15perfil'],false).",".vacio($f['15arcada'],false).",".vacio($f['15lineamedia'],false).",".vacio($f['15llavemolar'],false).",".vacio($f['15llavecanina'],false).",".vacio($f['15overbite'],true).",".vacio($f['15overjet'],true).",".vacio($f['16insicivo'],false).",".vacio($f['16insidebe'],false).",".vacio($f['16insidife'],false).",".vacio($f['16molar'],false).",".vacio($f['16moldebe'],false).",".vacio($f['16moldife'],false).",".vacio($f['16premolar'],false).",".vacio($f['16predebe'],false).",".vacio($f['16predife'],false).",".vacio($f['16anterior'],false).",".vacio($f['16antdebe'],false).",".vacio($f['16antdife'],false).",".vacio($f['16ganterior'],false).",".vacio($f['16maxalv'],false).",".vacio($f['16migracion'],false).",".vacio($f['16coroapi'],false).",".vacio($f['16simetrica'],false).",".vacio($f['16simetrica2'],false).",".vacio($f['16expansion'],false).",".vacio($f['16ganteriorc'],false).",".vacio($f['16gposterior'],false).",".vacio($f['16molar2'],false).",".vacio($f['16moldebe2'],false).",".vacio($f['16moldife2'],false).",".vacio($f['16premolar2'],false).",".vacio($f['16predebe2'],false).",".vacio($f['16predife2'],false).",".vacio($f['16ganteriora2'],false).",".vacio($f['16maxalv2'],false).",".vacio($f['16migracion2'],false).",".vacio($f['16coroapi2'],false).",".vacio($f['16simetricab2'],false).",".vacio($f['16simetrica22'],false).",".vacio($f['16expansion2'],false).",".vacio($f['16ganterior2'],false).",".vacio($f['16gposterior2'],false).",".vacio($f['16planosagital'],false).",".vacio($f['16planotransversal'],false).",".vacio($f['16planovertical'],false).",".vacio($f['16ladobalanceo'],false).",".vacio($f['16ladotrabajo'],false).",".vacio($f['16ladobalanceo2'],false).",".vacio($f['16ladotrabajo2'],false).",".vacio($f['17radiografico'],false).",".vacio($f['18diagnostico'],false).",".vacio($f['19pronostico'],false).",".vacio($f['20etapas'],false).",".vacio($f['20aparatologia'],false).",".vacio($f['20control'],false).",".infoto($_FILES['21foto1']['name'],$f['21foto1']).",".infoto($_FILES['21foto2']['name'],$f['21foto2']).",".infoto($_FILES['21foto3']['name'],$f['21foto3']).",'".array_to_string($f['13articulacion'],26)."',".vacio($f['2especificar'],false).",".vacio($f['3especificar'],false).",".vacio($f['3cuales1'],false).",".vacio($f['3cuales2'],false).",".vacio($f['7cual'],false).",".vacio($f['7tipo'],false).",".vacio($f['10tipo2'],false).",".vacio($f['15forma2'],false).",".vacio($f['15tamano2'],false).",".vacio($f['15abrasion2'],false).",".vacio($f['15descalsificacion2'],false).",".vacio($f['15vetado2'],false).",".vacio($f['15erosion2'],false).",".vacio($f['15caries2'],false).",".vacio($f['15agenesis2'],false).",".vacio($f['15arcada2'],false).",".vacio($f['15lineamedia2'],false).",".vacio($f['16expansiona2'],false).",".vacio($f['16expansion22'],false).",".infoto($_FILES['21foto4']['name'],$f['21foto4']).",".infoto($_FILES['21foto5']['name'],$f['21foto5']).",".infoto($_FILES['21foto6']['name'],$f['21foto6']).",".infoto($_FILES['21foto7']['name'],$f['21foto7']).",".infoto($_FILES['21foto8']['name'],$f['21foto8']).",".infoto($_FILES['21foto9']['name'],$f['21foto9']).",".infoto($_FILES['21foto10']['name'],$f['21foto10']).",".infoto($_FILES['21foto11']['name'],$f['21foto11']).",".infoto($_FILES['21foto12']['name'],$f['21foto12']).",".infoto($_FILES['21foto13']['name'],$f['21foto13']).",".infoto($_FILES['21foto14']['name'],$f['21foto14']).",".infoto($_FILES['21foto15']['name'],$f['21foto15']).",".infoto($_FILES['21foto16']['name'],$f['21foto16']).",".infoto($_FILES['21foto17']['name'],$f['21foto17']).",".infoto($_FILES['21foto18']['name'],$f['21foto18']).",".infoto($_FILES['21foto19']['name'],$f['21foto19']).",".infoto($_FILES['21foto20']['name'],$f['21foto20']).",".infoto($_FILES['21foto21']['name'],$f['21foto21']).",".infoto($_FILES['21foto22']['name'],$f['21foto22']).",".infoto($_FILES['21foto23']['name'],$f['21foto23']).",".vacio($f['2forcepp'],false).",".vacio($f['2cesareap'],false).",".vacio($f['2prematurop'],false).",".vacio($f['4aparatologia'],false).",".vacio($f['5detalles'],false).",".vacio($f['9pernasal'],false).",".vacio($f['5aspecto'],false).",".vacio($f['5color'],false).",".vacio($f['5humedad'],false).",".vacio($f['5anexos'],false).",".vacio($f['5cabello'],false).",".vacio($f['5unas'],false).",".vacio($f['11bucal'],false).",".vacio($f['20especifica'],false).")";
	//echo $querry_insert;
exec_querry($querry_insert);
//$f = return_querry("Select id_historia from historia WHERE 1nombre =".vacio($f['1nombre'],false).$querry_update_aux); 

}
}


?>