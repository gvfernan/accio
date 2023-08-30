<?php
//Evaluación final de accesibilidad. Aquí se muestra la salida y el porcentaje de accesibilidad.
	if ($font <> 0) {
		$_SESSION['mensajefont']=$mensaje[8]."<b></b>";
		$_SESSION['consejofont']=$mensaje[44];
		$_SESSION['rutafont'] = "images/revisar.png";
	}		
	else{
		$_SESSION['mensajefont']=$mensaje[9];
		$_SESSION['consejofont']="";
		$_SESSION['rutafont'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +9;
	}
	
	if ($size<>0) {
		$_SESSION['mensajesize']=$mensaje[10]."<b></b>";
		$_SESSION['consejosize']=$mensaje[45];
		$_SESSION['rutasize'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajesize']=$mensaje[11];
		$_SESSION['consejosize']="";
		$_SESSION['rutasize'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +9;
	}
		
	if ($color <> 0) {
		$_SESSION['mensajecolor']=$mensaje[16]."<b></b>";
		$_SESSION['consejocolor']=$mensaje[53];
		$_SESSION['rutacolor'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajecolor']=$mensaje[17];
		$_SESSION['consejocolor']="";
		$_SESSION['rutacolor'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +9;
	}
	if ($align <> 0) {
		$_SESSION['mensajealign']=$mensaje[12]."<b></b>";
		$_SESSION['consejoalign']=$mensaje[46];
		$_SESSION['rutaalign'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajealign']=$mensaje[13];
		$_SESSION['consejoalign']="";
		$_SESSION['rutaalign'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +7;
	}
	if ($line <> 0) {
		$_SESSION['mensajeline']=$mensaje[14]."<b></b>";
		$_SESSION['consejoline']=$mensaje[47];
		$_SESSION['rutaline'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajeline']=$mensaje[15];
		$_SESSION['consejoline']="";
		$_SESSION['rutaline'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +7;
	}
	if ($columna <> 0) {
		$_SESSION['mensajecolumna']=$mensaje[20]."<b></b>";
		$_SESSION['consejocolumna']=$mensaje[49];
		$_SESSION['rutacolumna'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajecolumna']=$mensaje[21];
		$_SESSION['consejocolumna']="";
		$_SESSION['rutacolumna'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +9;
	}
	if ($_SESSION['hayimagen'] <> 0) {
		if ($altimage <> 0) {
			$_SESSION['mensajeimg']=$mensaje[22]."<b></b>";
			$_SESSION['consejoimg']=$mensaje[50];
			$_SESSION['rutaimg'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajeimg']=$mensaje[23];
			$_SESSION['consejoimg']="";
			$_SESSION['rutaimg'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
	}
	if ($_SESSION['haytabla'] <>0) {
	if ($encColumnatabla <> 0) {
			$_SESSION['mensajetabla']=$mensaje[24]."<b></b>";
			$_SESSION['consejotabla']=$mensaje[52];
			$_SESSION['rutatabla'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajetabla']=$mensaje[25];
			$_SESSION['consejotabla']="";
			$_SESSION['rutatabla'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
	}
	if ($_SESSION['haylink'] <> 0) {
		if ($altlink <> 0) {
			$_SESSION['mensajelink']=$mensaje[24]."<b></b>";
			$_SESSION['consejolink']=$mensaje[52];
			$_SESSION['rutalink'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajelink']=$mensaje[25];
			$_SESSION['consejolink']="";
			$_SESSION['rutalink'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
		}
	}
	else {
		$_SESSION['mensajelink']=$mensaje[25];
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
	}
	if ($sangria <> 0) {
		$_SESSION['mensajesangria']=$mensaje[18]."<b></b>";
		$_SESSION['consejosangria']=$mensaje[48];
		$_SESSION['rutasangria'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajesangria']=$mensaje[19];
		$_SESSION['consejosangria']="";
		$_SESSION['rutasangria'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +6;
	}
//Encabezados y pie de página. Se evalúa si hay configuraciones de fuente o no.
//Se suma punto de accesibilidad tanto si hay y es accesible como si directamente no hay.
	if ($_SESSION['hayfontenc'] <> 0) {
		if ($fontenc <> 0) {
			$_SESSION['mensajefontenc']=$mensaje[38]."<b></b>";
			$_SESSION['consejofontenc']=$mensaje[44];
			$_SESSION['rutafontenc'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajefontenc']=$mensaje[39];
			$_SESSION['consejofontenc']="";
			$_SESSION['rutafontenc'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
	if ($_SESSION['haysizeenc'] <> 0) {
		if ($sizeenc <> 0) {
			$_SESSION['mensajesizeenc']=$mensaje[40]."<b></b>";
			$_SESSION['consejosizeenc']=$mensaje[45];
			$_SESSION['rutasizeenc'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajesizeenc']=$mensaje[41];
			$_SESSION['consejosizeenc']="";
			$_SESSION['rutasizeenc'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
	if ($_SESSION['haycolorenc'] <> 0) {
		if ($colorenc <> 0) {
			$_SESSION['mensajecolorenc']=$mensaje[42]."<b></b>";
			$_SESSION['consejocolorenc']=$mensaje[53];
			$_SESSION['rutacolorenc'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajecolorenc']=$mensaje[43];
			$_SESSION['consejocolorenc']="";
			$_SESSION['rutacolorenc'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
	if ($_SESSION['hayfontpie'] <> 0) {
		if ($fontpie <> 0) {
			$_SESSION['mensajefontpie']=$mensaje[32]."<b></b>";
			$_SESSION['consejofontpie']=$mensaje[44];
			$_SESSION['rutafontpie'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajefontpie']=$mensaje[33];
			$_SESSION['consejofontpie']="";
			$_SESSION['rutafontpie'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
	if ($_SESSION['haysizepie'] <> 0) {
		if ($sizepie <> 0) {
			$_SESSION['mensajesizepie']=$mensaje[34]."<b></b>";
			$_SESSION['consejosizepie']=$mensaje[45];
			$_SESSION['rutasizepie'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajesizepie']=$mensaje[35];
			$_SESSION['consejosizepie']="";
			$_SESSION['rutasizepie'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
	if ($_SESSION['haycolorpie'] <> 0) {
		if ($colorpie <> 0) {
			$_SESSION['mensajecolorpie']=$mensaje[36]."<b></b>";
			$_SESSION['consejocolorpie']=$mensaje[53];
			$_SESSION['rutacolorpie'] = "images/revisar.png";
		}
		else{
			$_SESSION['mensajecolorpie']=$mensaje[37];
			$_SESSION['consejocolorpie']="";
			$_SESSION['rutacolorpie'] = "images/bien.png";
			$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
		}
	}
	else {
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +2;
	}
//Números de página. Acá es al revés, ya que así se previene el caso de que estén en encabezado, al pie o en ambos.
	if ($numpag == 0) {
		$_SESSION['mensajenumpag']=$mensaje[30]."<b></b>";
		$_SESSION['consejonumpag']=$mensaje[54];
		$_SESSION['rutanumpag'] = "images/revisar.png";
	}
	else{
		$_SESSION['mensajenumpag']=$mensaje[31];
		$_SESSION['consejonumpag']="";
		$_SESSION['rutanumpag'] = "images/bien.png";
		$_SESSION['accesibilidad'] = $_SESSION['accesibilidad'] +8;
	}

include_once('salida.php');

?>