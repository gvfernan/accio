<?php
//Leer archivo xml****
$ficherocontenido = file_get_contents($uploadPath.$carpeta.'/document.xml', true);
	if (file_exists($uploadPath.$carpeta.'/styles.xml')) {
	$ficherocss = file_get_contents($uploadPath.$carpeta.'/styles.xml', true);
	}
	if (file_exists($uploadPath.$carpeta.'/_rels/document.xml.rels')) {
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
	}
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


//ACA ARRANCA EL ANALISIS DE ARCHIVO DOCUMENT 
foreach($contenidoanalizar as $value2){
	
//Buscar etiqueta****

foreach($etiquetasword as $value){
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
		$bigatrr = str_replace(">", "", $bigatrrrr);
		$primcomilla = stripos($bigatrr, "\"");
		$medatrr = substr ($bigatrr, $primcomilla+1);
		$segcomilla = stripos($medatrr, "\"");
		$atrr = substr($medatrr, 0, $segcomilla-1);	
		
		
		//Evaluación de atributos
		//Fuente
		if ($value=== "w:rFonts w:ascii=" )  {
				if (in_array($atrr, $fuentes)){
				}
				else{
					$font=$font+1;
					}
		}
		//Tamaño de fuente
		elseif (($value === "w:sz") and ($atrr < 24)){
			$size = $size +1;
		}
			//Alineación
			elseif 	(($value === "w:jc") and (($atrr <> "left") and ($atrr <> "start"))) {
				$align = $align +1;
			}
				//Interlineado
				elseif (($value === "w:line") and ($atrr <> 360)){
					$line = $line +1;
				}					
					// Color de fuente
					elseif ($value === "w:color w:val") {
						if (in_array($atrr, $colorneg)){
						}
						else{
							$color=$color+1;
						}
					}
						//Sangría. No debe estar presente.
						elseif (($value === "w:ind")) {
							$sangria = $sangria +1;
						}
							//Columnas. La etiqueta "cols" siempre figurará porque el documento tiene al menos una columna. 
							//Esta etiqueta en cambio sólo aparece si hay más de una.
							elseif ($value === "w:num") {
								$columna = $columna +1;
							}
								//Imágenes. Texto alternativo.
								//Dentro de esta etiqueta hay que buscar "descr" que es el atributo del texto alternativo.
								elseif ($value === "wp:docPr") {
									$_SESSION['hayimagen'] =1;
									if (stripos($bigatrr, "descr") <> false) {
									}
									else{
										$altimage = $altimage +1;
									}
								}
									//Tabla. Encabezados.
									elseif ($value === "w:tblLook") {
										$_SESSION['haytabla'] = 1;
									/*	if ((stripos($bigatrr, "w:firstRow") <> false) and ($atrr <> 1)) {
											$encFilatabla = $encFilatabla +1;
										}*/
										if ((stripos($bigatrr, "w:firstRow") <> false)) {
											$subfila = substr($bigatrr, strpos($bigatrr, "w:firstRow"), 60);
											$pricomilla = stripos($subfila, "\"");
											$medfila = substr ($subfila, $pricomilla+1);
											$secomilla = stripos($medfila, "\"");
											$encabColum = substr($medfila, 0, $secomilla);
												if ($encabColum <>1){
												$encColumnatabla = $encColumnatabla +1;
												}
										}
									}
										//Hipervínculos. Texto asociado.
										//Dentro de esta etiqueta hay que buscar "w:tooltip" que es el atributo del texto aterasociado.
										elseif ($value === "w:hyperlink ") {
											$_SESSION['haylink'] = 1;
											if (stripos($bigatrr, "w:tooltip") <> false) {
											$altlink = $altlink +1;
											}
										}	
									//FIN EVALUACION ATRIBUTOS		
	}
}


}
//FIN ANALISIS DE ARCHIVO DOCUMENTS


//Análisis archivo footer (para numeros de pagina y pie de página)
if (file_exists($uploadPath.$carpeta.'/footer1.xml')) {
$xmlstr=$nombrearchivoviejo." ".$ficherofooter;
$xmlstr=str_replace(">","></br>",$xmlstr);
$contenidoanalizar=explode('/>',$xmlstr);
foreach($contenidoanalizar as $value2){
	
//Buscar etiqueta.
foreach($etiquetasword as $value){
	$buscar_etiqueda=strpos($value2,$value);

		if ($buscar_etiqueda === false) {
		//print("<br><strong>".$value." :</strong> NO existe en el documento<br>");	
	} 
	else{
		//Sacar el valor del atributo, siendo $bigatrr la línea de la etiqueta (se toman 60 caracteres previendo algunos nombres muy largos de fuentes);
		//$medatrr desde la primera comilla; y $atrr el atributo hasta la segunda comilla y por lo tanto el valor a comparar / evaluar.
		//$bigatrrrr es sólo de forma pasajera. El > generaba error en la salida y no lo necesitamos para la evaluación, así que lo quitamos y evitamos problemas.
		$bigatrrrr = substr($value2, $buscar_etiqueda, 60);
		$bigatrr = str_replace(">", "", $bigatrrrr);
		$primcomilla = stripos($bigatrr, "\"");
		$medatrr = substr ($bigatrr, $primcomilla+1);
		$segcomilla = stripos($medatrr, "\"");
		$atrr = substr($medatrr, 0, $segcomilla);		
		//Evaluación de atributos
		//Fuente
		if ($value=== "w:rFonts w:ascii=" ) {
			$_SESSION['hayfontpie'] = $_SESSION['hayfontpie'] +1;
		}
		if (($value=== "w:rFonts w:ascii=" ) and ($atrr <> "Arial" and $atrr <> "Verdana" and $atrr <> "Calibri" and $atrr <> "Open Sans" and $atrr <> "Trebuchet Ms")) {
			$fontpie = $fontpie +1;
		}
			//Tamaño de fuente
			if ($value=== "w:sz" ) {
			$_SESSION['haysizepie'] = $_SESSION['haysizepie'] +1;
			}
			elseif (($value === "w:sz") and ($atrr < 24)){
			$sizepie = $sizepie +1;
			}			
				// Color de fuente
				if ($value=== "w:color w:val" ) {
				$_SESSION['haycolorpie'] = $_SESSION['haycolorpie'] +1;
				}
				elseif (($value === "w:color w:val") and ($atrr <> "000000")) {
				$colorpie = $colorpie +1;
				}
					//Numero de pagina
					//Dentro de esta etiqueta hay que buscar "Page Numbers".
					elseif ($value === "w:docPartGallery w:val="){
						if (stripos($bigatrr, "Page Numbers") <> false) {
						$numpag = $numpag +1;	
						}
					}
	}	
}
}
}
//FIN ANALISIS ARCHIVO FOOTER

//Análisis archivo header (para encabezado)
	if (file_exists($uploadPath.$carpeta.'/header1.xml')) {
$xmlstr=$nombrearchivoviejo." ".$ficheroheader;
$xmlstr=str_replace(">","></br>",$xmlstr);
$contenidoanalizar=explode('/>',$xmlstr);
foreach($contenidoanalizar as $value2){
	
//Buscar etiqueta.
foreach($etiquetasword as $value){
	$buscar_etiqueda=strpos($value2,$value);

		if ($buscar_etiqueda === false) {
		//print("<br><strong>".$value." :</strong> NO existe en el documento<br>");	
	} 
	else{
		//Sacar el valor del atributo, siendo $bigatrr la línea de la etiqueta (se toman 60 caracteres previendo algunos nombres muy largos de fuentes);
		//$medatrr desde la primera comilla; y $atrr el atributo hasta la segunda comilla y por lo tanto el valor a comparar / evaluar.
		//$bigatrrrr es sólo de forma pasajera. El > generaba error en la salida y no lo necesitamos para la evaluación, así que lo quitamos y evitamos problemas.
		$bigatrrrr = substr($value2, $buscar_etiqueda, 60);
		$bigatrr = str_replace(">", "", $bigatrrrr);
		$primcomilla = stripos($bigatrr, "\"");
		$medatrr = substr ($bigatrr, $primcomilla+1);
		$segcomilla = stripos($medatrr, "\"");
		$atrr = substr($medatrr, 0, $segcomilla-1);		
		//Evaluación de atributos
		//Fuente
		if ($value=== "w:rFonts w:ascii=" ) {
			$_SESSION['hayfontenc'] = $_SESSION['hayfontenc'] +1;
		}
		if (($value=== "w:rFonts w:ascii=" ) and ($atrr <> "Arial" and $atrr <> "Verdana" and $atrr <> "Calibri" and $atrr <> "Open Sans" and $atrr <> "Trebuchet Ms")) {
			$fontenc = $fontenc +1;
		}
			//Tamaño de fuente
			if ($value=== "w:sz" ) {
			$_SESSION['haysizeenc'] = $_SESSION['haysizeenc'] +1;
			}
			elseif (($value === "w:sz") and ($atrr < 24)){
			$sizeenc = $sizeenc +1;
			}			
				// Color de fuente
				if ($value=== "w:color w:val" ) {
				$_SESSION['haycolorenc'] = $_SESSION['haycolorenc'] +1;
				}
				elseif (($value === "w:color w:val") and ($atrr <> "000000")) {
				$colorenc = $colorenc +1;
				}
					//Numero de pagina
					//Dentro de esta etiqueta hay que buscar "Page Numbers".
					elseif ($value === "w:docPartGallery w:val="){
						if (stripos($bigatrr, "Page Numbers") <> false) {
							$numpag = $numpag +1;
						}
					}
	}	
}
}
	}
//FIN ANALISIS ARCHIVO HEADER
include ('procesamientofinal.php');

?>