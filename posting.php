$1nombre = $_POST['1nombre'];
$1sexo = $_POST['1sexo']; 
$1edad = $_POST['
$1dia = $_POST['
$1mes = $_POST['
$1anio = $_POST['
$1lnacimiento = $_POST['
$1nacionalidad = $_POST['
$1domicilio = $_POST['
$1tlf = $_POST['
$1cfecha = $_POST['
$1mconsulta = $_POST['
$1referido = $_POST['
$2pnombre = $_POST['
$2pedad = $_POST['
$2plnacimiento = $_POST['
$2pnacionalidad = $_POST['
$2pbiotipo = $_POST['
$2pconstitucion = $_POST['
$2poclusion = $_POST['
$2pocupacion = $_POST['
$2penfermedades = $_POST['
$2pactualmente = $_POST['
$2mnombre = $_POST['
$2medad = $_POST['
$2mlnacimiento = $_POST['
$2mnacionalidad = $_POST['
$2mbiotipo = $_POST['
$2mconstitucion = $_POST['
$2moclusion = $_POST['
$2mocupacion = $_POST['
$2menfermedades = $_POST['
$2mactualmente = $_POST['
$2embarazos = $_POST['
$2parto = $_POST['
$2especificar = $_POST['
$2antecedentes = $_POST['
$3parto = $_POST['
$3especificar = $_POST['
$3peso = $_POST['
$3talla = $_POST['
$3anomalias = $_POST['
$3alimentacion = $_POST['
$3cuantotiempo = $_POST['
$3dificultad1 = $_POST['
$3cuales1 = $_POST['
$3dificultad2 = $_POST['
$3cuales2 = $_POST['
$3quedad = $_POST['
$3desarrollo = $_POST['
$3denticion = $_POST['
$3acciente = $_POST['
$3cual = $_POST['
$3historiadental = $_POST['
$3escolaridad = $_POST['
$3edadingreso = $_POST['
$3juegos = $_POST['
$3suenos = $_POST['
$4generales = $_POST['
$4endocrinas = $_POST['
$4nutricionales = $_POST['
$4geneticas = $_POST['
$4quirurgicas = $_POST['
$4recibidas = $_POST['
$4otorrino = $_POST['
$4alergicas = $_POST['
$5habito = $_POST['
$5tomaliquido = $_POST['
$5residuos = $_POST['
$5chupete = $_POST['
$5hasta1 = $_POST['
$5frecuencia = $_POST['
$5medida = $_POST['
$5dedo = $_POST['
$5hasta2 = $_POST['
$5mano = $_POST['
$5dedomano = $_POST['
$5frecuenciadedo = $_POST['
$5medida2 = $_POST['
$5otroshabitos = $_POST['
$5ennuresis enum('Si','No','') default NULL,
$5fechac varchar(40) default NULL,
$5evolucion varchar(94) default NULL,
$5examen varchar(40) default NULL,
$5biotipologica varchar(15) default NULL,
$5nutricion varchar(7) default NULL,
$5peso varchar(10) default NULL,
$5talla varchar(10) default NULL,
$6aspecto varchar(10) default NULL,
$6queilitis enum('Si','No','') default NULL,
$6impresion varchar(14) default NULL,
$6reposo varchar(13) default NULL,
$6aproxima enum('Si','No','') default NULL,
$6labiosup enum('Si','No','') default NULL,
$6muscularsup varchar(6) default NULL,
$6muscularinfe varchar(6) default NULL,
$6pliegue enum('Si','No','') default NULL,
$7color varchar(20) default NULL,
$7seburral enum('Si','No','') default NULL,
$7patologico enum('Si','No','') default NULL,
$7cual varchar(30) default NULL,
$7proliferacion enum('Si','No','') default NULL,
$7tipo varchar(30) default NULL,
$7forma varchar(15) default NULL,
$7tamano varchar(15) default NULL,
$7fuerza varchar(20) default NULL,
$8tipo varchar(9) default NULL,
$8lenguareposo varchar(74) default NULL,
$8lenguadeglutir varchar(74) default NULL,
$9bucal varchar(8) default NULL,
$9nasal varchar(8) default NULL,
$9mixta varchar(8) default NULL,
$9biaxilar varchar(24) default NULL,
$9xifoide varchar(24) default NULL,
$9abdominal varchar(24) default NULL,
$10tipo1 varchar(10) default NULL,
$10tipo2 varchar(30) default NULL,
$10comida varchar(6) default NULL,
$11musculos varchar(106) default NULL,
$11gration varchar(81) default NULL,
$11subnasal varchar(81) default NULL,
$12ATM varchar(106) default NULL,
$13funcir varchar(6) default NULL,
$13distender varchar(6) default NULL,
$13silbar varchar(6) default NULL,
$13vibrar varchar(6) default NULL,
$13abajo varchar(6) default NULL,
$13vibrar2 varchar(6) default NULL,
$13acartuchar varchar(6) default NULL,
$13explosion varchar(6) default NULL,
$13frenillo varchar(90) default NULL,
$13tamano varchar(20) default NULL,
$13movilidad varchar(6) default NULL,
$13articulacion varchar(54) default NULL,
$14oidoder varchar(1) default NULL,
$14bordeaborde varchar(1) default NULL,
$14oidoizq varchar(1) default NULL,
$14bordeaborde2 varchar(1) default NULL,
$15dientes tinyint(2) default NULL,
$15denticion varchar(10) default NULL,
$15forma varchar(8) default NULL,
$15forma2 varchar(30) default NULL,
$15tamano varchar(8) default NULL,
$15tamano2 varchar(30) default NULL,
$15abrasion enum('Si','No','') default NULL,
$15abrasion2 varchar(30) default NULL,
$15descalsificacion enum('Si','No','') default NULL,
$15descalsificacion2 varchar(30) default NULL,
$15vetado enum('Si','No','') default NULL,
$15vetado2 varchar(30) default NULL,
$15erosion enum('Si','No','') default NULL,
$15erosion2 varchar(30) default NULL,
$15caries enum('Si','No','') default NULL,
$15caries2 varchar(30) default NULL,
$15supernumerarios enum('Si','No','') default NULL,
$15agenesis enum('Si','No','') default NULL,
$15agenesis2 varchar(30) default NULL,
$15ausencia varchar(20) default NULL,
$15bordeaborde enum('Si','No','') default NULL,
$15perfil varchar(12) default NULL,
$15arcada varchar(17) default NULL,
$15arcada2 varchar(11) default NULL,
$15lineamedia varchar(17) default NULL,
$15lineamedia2 varchar(9) default NULL,
$15llavemolar varchar(6) default NULL,
$15llavecanina varchar(6) default NULL,
$15overbite tinyint(2) default NULL,
$15overjet tinyint(2) default NULL, 
$16insicivo varchar(20) default NULL,
$16insidebe varchar(20) default NULL,
$16insidife varchar(20) default NULL,
$16molar varchar(20) default NULL,
$16moldebe varchar(20) default NULL,
$16moldife varchar(20) default NULL,
$16premolar varchar(20) default NULL,
$16predebe varchar(20) default NULL,
$16predife varchar(20) default NULL,
$16anterior varchar(20) default NULL,
$16antdebe varchar(20) default NULL,
$16antdife varchar(20) default NULL,
$16ganterior varchar(15) default NULL,
$16maxalv varchar(8) default NULL,
$16migracion tinyint(2) default NULL,
$16coroapi varchar(9) default NULL,
$16simetrica tinyint(2) default NULL,
$16simetrica2 varchar(8) default NULL,
$16expansion enum('Si','No','') default NULL,
$16expansiona2 varchar(30) default NULL,
$16ganteriorc varchar(17) default NULL,
$16gposterior varchar(17) default NULL,
$16molar2 varchar(20) default NULL,
$16moldebe2 varchar(20) default NULL,
$16moldife2 varchar(20) default NULL,
$16premolar2 varchar(20) default NULL,
$16predebe2 varchar(20) default NULL,
$16predife2 varchar(20) default NULL,
$16ganteriora2 varchar(15) default NULL,
$16maxalv2 varchar(8) default NULL,
$16migracion2 enum('Si','No','') default NULL,
$16coroapi2 varchar(9) default NULL,
$16simetricab2 enum('Si','No','') default NULL,
$16simetrica22 varchar(8) default NULL,
$16expansion2 enum('Si','No','') default NULL,
$16expansion22 varchar(30) default NULL,
$16ganterior2 varchar(17) default NULL,
$16gposterior2 varchar(17) default NULL,
$16planosagital varchar(6) default NULL,
$16planotransversal varchar(15) default NULL,
$16planovertical varchar(17) default NULL,
$16ladobalanceo varchar(76) default NULL,
$16ladotrabajo varchar(76) default NULL,
$16ladobalanceo2 varchar(76) default NULL,
$16ladotrabajo2 varchar(76) default NULL,
$17radiografico varchar(106) default NULL,
$18diagnostico varchar(106) default NULL,
$19pronostico varchar(12) default NULL,
$20etapas varchar(100) default NULL,
$20aparatologia varchar(93) default NULL,
$20control varchar(100) default NULL,
$21foto1 varchar(255) default NULL,
$21foto2 varchar(255) default NULL,
$21foto3 varchar(255) default NULL,