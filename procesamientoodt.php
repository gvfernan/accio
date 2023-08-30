<?php
//Leer archivo xml****
//En ODT, el encabezado y el pie de página están también en el archivo de estilos
$ficherocontenido = file_get_contents($uploadPath.'/content.xml', true);
	if (file_exists($uploadPath.'/styles.xml')) {
	$ficherocss = file_get_contents($uploadPath.'/styles.xml', true);
	}
/*	if (file_exists($uploadPath.$carpeta.'/_rels/document.xml.rels')) {
	$ficherorels = file_get_contents($uploadPath.$carpeta.'/_rels/document.xml.rels', true);
	}
	if (file_exists($uploadPath.$carpeta.'/footer1.xml')) {
		$ficherofooter= file_get_contents($uploadPath.$carpeta.'/footer1.xml', true);
	}
	if (file_exists($uploadPath.$carpeta.'/footnotes.xml')) {
		$ficherofootnotes = file_get_contents($uploadPath.$carpeta.'/footnotes.xml', true);
	}
	if (file_exists($uploadPath.$carpeta.'/header1.xml')) {
		$ficheroheader = file_get_contents($uploadPath.$carpeta.'/header1.xml', true);
	}*/
$fecha=date('Ymd');

//guardado en base de datos****
$link = mysqli_connect($urlBD, $usBD, $passBD, $bd);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
 
$nombrearchivoviejo = mysqli_real_escape_string($link, $nombrearchivoviejo);
$ficherocontenido = mysqli_real_escape_string($link, $ficherocontenido);
$ficherocss = mysqli_real_escape_string($link, $ficherocss);
$ficherorels = mysqli_real_escape_string($link, $ficherorels);
$ficherofooter = mysqli_real_escape_string($link, $ficherofooter);
$ficherofootnotes = mysqli_real_escape_string($link, $ficherofootnotes);
$ficheroheader = mysqli_real_escape_string($link, $ficheroheader);
$fecha = mysqli_real_escape_string($link, $fecha);

$sql ="INSERT INTO archivo (nombre, contenido, css, relaciones, pie, notaspie, encabezado, fecha) VALUES ('$nombrearchivoviejo', '$ficherocontenido', '$ficherocss', '$ficherorels', '$ficherofooter', '$ficherofootnotes', '$ficheroheader', '$fecha')";

if(mysqli_query($link, $sql)){
   "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

//Acá debería buscar en la base de datos en lso campos $nombrearchivoviejo y $ficherocontenido y armar variable completa de texto****
$xmlstr=$nombrearchivoviejo." ".$ficherocontenido;

//$xmlstr=htmlentities($xmlstr);
$xmlstr=str_replace(">","></br>",$xmlstr);
$contenidoanalizar=explode('/>',$xmlstr);

$altimage = 1; //En este caso, vamos a establecer esta variable en 0 si encontramos la etiqueta que lo indica, ya que la sintaxis es diferente a la de word 


//ACA ARRANCA EL ANALISIS DE ARCHIVO CONTENT 
foreach($contenidoanalizar as $value2){
	
//Buscar etiqueta****

foreach($etiquetasodt as $value){
	//Busca la etiqueta en el renglón
	$buscar_etiqueda=strpos($value2,$value);

		if ($buscar_etiqueda === false) {
		//print("<br><strong>".$value." :</strong> NO existe en el documento<br>");	
	} 
	else{
		//Sacar el valor del atributo, siendo $bigatrr la línea de la etiqueta (se toman 60 caracteres previendo algunos nombres muy largos de fuentes);
		//$medatrr desde la primera comilla; y $atrr el atributo hasta la segunda comilla y por lo tanto el valor a comparar / evaluar.
		//$bigatrrrr es sólo de forma pasajera. El > generaba error en la salida y no lo necesitamos para la evaluación, así que lo quitamos y evitamos problemas.
		$bigatrrrr = substr($value2, $buscar_etiqueda, 60);
		//$bigatrr = str_replace(">", "", $bigatrrrr);
		$primcomilla = stripos($bigatrrrr, "\"");
		$medatrr = substr ($bigatrrrr, $primcomilla+1);
		$segcomilla = stripos($medatrr, "\"");
		$atrr = substr($medatrr, 0, $segcomilla-1);	

		//Evaluación de atributos
		//Fuente
		if ($value=== "font-name=" ) {
				if (in_array($atrr, $fuentes)){
				}
				else{
					$font=$font+1;
					}
		}
		//Tamaño de fuente
		elseif ($value === "fo:font-size=") {
			$atrrfinal = substr($atrr, 0, (stripos($atrr, "p")));
			if ($atrrfinal < 12){
			$size = $size +1;
			}
		}
			//Alineación
			elseif 	(($value === "fo:text-align=")) {
				$align = $align +1;
			}
				//Interlineado
				elseif ($value === "fo:line-height=") {
					$atrrfinal = substr($atrr, 0, (stripos($atrr, "%")));
					if ($atrrfinal <> 150){
					$line = $line +1;
					}		
				}				
					// Color de fuente
					elseif ($value === "fo:color=") {
						$atrrfinal = substr($atrr, (stripos($atrr, "#"))+1);
							if (in_array($atrrfinal, $colorneg)){
							}
							else{
								$color=$color+1;
							}
					}
						//Sangría.
						elseif (($value === "fo:margin-left=") and ($atrr<>"0in") ) {
							$sangria = $sangria +1;
						}
							//Columnas. 
							elseif ($value === "style:columns") {
								$columna = $columna +1;
							}

								//Imágenes. Texto alternativo.
								//Buscamos la etiqueta de imagen y de texto alternativo, y luego combinaremos ambos casos en el procesamiento final
								elseif ($value === "draw:image") {
									$_SESSION['hayimagen'] =1;
								}
								elseif ($value === "<svg:desc>") {
									$altimage = 0;
								}
									//Hipervínculos. Texto asociado.
									//Dentro de esta etiqueta hay que buscar "office:title" que es el atributo del texto aterasociado.
										/*elseif ($value === "text:a ") {
											$_SESSION['haylink'] = 1;
											if (stripos($bigatrrrr, "office:title") <> false) {
											$altlink = $altlink +1;
											}
										}*/
										
	//FIN EVALUACION ATRIBUTOS		
	}
}
}
//FIN ANALISIS DE ARCHIVO CONTENT
//Análisis archivo styles (para numeros de pagina y encabezado/pie de página)
if (file_exists($uploadPath.'/styles.xml')) {
$xmlstr=$nombrearchivoviejo." ".$ficherocss;
$xmlstr=str_replace(">","></br>",$xmlstr);
$contenidoanalizar=explode('/>',$xmlstr);
foreach($contenidoanalizar as $value2){
	
//Buscar etiqueta.
foreach($etiquetasodt as $value){
	$buscar_etiqueda=strpos($value2,$value);

		if ($buscar_etiqueda === false) {
		//print("<br><strong>".$value." :</strong> NO existe en el documento<br>");	
	} 
	else{
		//Sacar el valor del atributo, siendo $bigatrr la línea de la etiqueta (se toman 60 caracteres previendo algunos nombres muy largos de fuentes);
		//$medatrr desde la primera comilla; y $atrr el atributo hasta la segunda comilla y por lo tanto el valor a comparar / evaluar.
		//$bigatrrrr es sólo de forma pasajera. El > generaba error en la salida y no lo necesitamos para la evaluación, así que lo quitamos y evitamos problemas.
		$bigatrrrr = substr($value2, $buscar_etiqueda, 60);
		//$bigatrr = str_replace(">", "", $bigatrrrr);
		$primcomilla = stripos($bigatrrrr, "\"");
		$medatrr = substr ($bigatrrrr, $primcomilla+1);
		$segcomilla = stripos($medatrr, "\"");
		$atrr = substr($medatrr, 0, $segcomilla-1);		
		
		//Evaluación de atributos
		//Numero de pagina
		if ($value === "text:page-number"){
						$numpag = $numpag +1;	
		}

					
	}
}
}}	

include ('procesamientofinal.php');
?>