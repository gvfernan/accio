<!DOCTYPE html>
<html lang="es">
<head>
  <title>Accio - analizar archivo</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width"/>
	 <link rel="icon" href="images/favicon2.ico" type="image/x-icon">
</head>
<body>
<div id="wrap">
	<header class="siteheader">
	<div class="logo">
		<a href="index.php"><img src="images/logocolores2.png" alt="Logo Accio"></a>
	</div>
	<div class="menu" id="main-menu">
		<nav class="navbar" id="navbar">
			<a href="javascript:void(0);" class="icon" onclick="rspnsv()">
				<i class="fa fa-bars"></i>
			</a>
			<a></a>
			<a href="acerca-de">Acerca de </a>
			<a href="ayuda">Ayuda </a>
			
		</nav>	
	</div>
  </header>

 <div class="container">
	<div class="cajita">
		<div class= "elegirarch">
			<img src="images/archivo_analizado2.png" alt="Archivo analizado">
			<br /><br />
			<div class="resul">
				<div class="acc"> <?php print ($_SESSION['accesibilidad']);?>%</div>
				<div class="ebilidad">de accesibilidad</div>
			</div>
			<div id="archtext" class="archtext" ><?php print ($_SESSION['fileName']);?></div>
		</div>
		<div class="subirarch">
		<div class="imgarch"><img src="images/descargar_resultados2.png" alt="Descargar resultados"></div>
		<form method="POST" action="generar-reporte" target="_blank">
		<input type="submit"  class ="descargarpdf" id="descargarpdf" name="descargarpdf" value="Descargar resultados">
		</form>
		</div>
		<div class="eval">
			<a href="index.php"><input type="button" name="uploadBtn" value="Subir otro" /></a>
		</div>
	</div>

	<div class="expl">
	<div class="titexpl">Resultados</div>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutafont']." alt=".$_SESSION['altfont'].">");?>
		<div class="fi2">
		<input type="checkbox" id="spoilerfont"></input>
			<label for="spoilerfont"><?php print ($_SESSION['mensajefont']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejofont']);?></div>
		</div>
		</div>	
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutasize']." alt=".$_SESSION['altsize'].">");?>
		<div class="fi2">
		<input type="checkbox" id="spoilersize"></input>
			<label for="spoilersize"><?php print ($_SESSION['mensajesize']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejosize']);?></div>	
		</div>	
		</div>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutacolor']." alt=".$_SESSION['altcolor'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilercolor"></input>
			<label for="spoilercolor"><?php print ($_SESSION['mensajecolor']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejocolor']);?></div>
		</div>	
		</div>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutaalign']." alt=".$_SESSION['altalign'].">");?>
		<div class="fi2">				
		<input type="checkbox" id="spoileralign"></input>
			<label for="spoileralign"><?php print ($_SESSION['mensajealign']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejoalign']);?></div>
		</div>	
		</div>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutaline']." alt=".$_SESSION['altline'].">");?>
		<div class="fi2">				
		<input type="checkbox" id="spoilerline"></input>
			<label for="spoilerline"><?php print ($_SESSION['mensajeline']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejoline']);?></div>
		</div>	
		</div>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutacolumna']." alt=".$_SESSION['altcolumna'].">");?>
		<div class="fi2">				
		<input type="checkbox" id="spoilercolumna"></input>
			<label for="spoilercolumna"><?php print ($_SESSION['mensajecolumna']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejocolumna']);?></div>
		</div>	
		</div><?php
		  if ($_SESSION['hayimagen'] <> 0) {?>	
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutaimg']." alt=".$_SESSION['altimg'].">");?>
		<div class="fi2">				  
		<input type="checkbox" id="spoilerimg"></input>
			<label for="spoilerimg"><?php print ($_SESSION['mensajeimg']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejoimg']);?></div>
		</div>	
		</div>	<?php }
		  if ($_SESSION['haytabla'] <>0) {?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutatabla']." alt=".$_SESSION['alttabla'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilertabla"></input>
			<label for="spoilertabla"><?php print ($_SESSION['mensajetabla']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejotabla']);?></div>
		</div>	
		</div><?php }
		  if ($_SESSION['haylink'] <> 0) {?>	
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutalink']." alt=".$_SESSION['altlink'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilerlink"></input>
			<label for="spoilerlink"><?php print ($_SESSION['mensajelink']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejolink']);?></div>
		</div>	
		</div><?php }?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutasangria']." alt=".$_SESSION['altsangria'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilersangria"></input>
			<label for="spoilersangria"><?php print ($_SESSION['mensajesangria']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejosangria']);?></div>
		</div>	
		</div><?php 
		if ($_SESSION['hayfontenc'] <> 0) {?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutafontenc']." alt=".$_SESSION['altfontenc'].">");?>
		<div class="fi2">				
		<input type="checkbox" id="spoilerfontenc"></input>
			<label for="spoilerfontenc"><?php print ($_SESSION['mensajefontenc']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejofontenc']);?></div>
		</div>	
		</div><?php }
		if ($_SESSION['haysizeenc'] <> 0){?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutasizeenc']." alt=".$_SESSION['altsizeenc'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilersizeenc"></input>	
			<label for="spoilersizeenc"><?php print ($_SESSION['mensajesizeenc']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejosizeenc']);?></div>
		</div>	
		</div><?php }
		if ($_SESSION['haycolorenc'] <> 0){?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutacolorenc']." alt=".$_SESSION['altcolorenc'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilercolorenc"></input>
			<label for="spoilercolorenc"><?php print ($_SESSION['mensajecolorenc']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejocolorenc']);?></div>
		</div>	
		</div><?php }
		if ($_SESSION['hayfontpie'] <> 0) {?>	
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutafontpie']." alt=".$_SESSION['altfontpie'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilerfontpie"></input>
			<label for="spoilerfontpie"><?php print ($_SESSION['mensajefontpie']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejofontpie']);?></div>
		</div>	
		</div><?php }
		if ($_SESSION['haysizepie'] <> 0){?>	
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutasizepie']." alt=".$_SESSION['altsizepie'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilersizepie"></input>
			<label for="spoilersizepie"><?php print ($_SESSION['mensajesizepie']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejosizepie']);?></div>
		</div>	
		</div><?php }
		if ($_SESSION['haycolorpie'] <> 0){?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutacolorpie']." alt=".$_SESSION['altcolorpie'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilercolorpie"></input>
			<label for="spoilercolorpie"><?php print ($_SESSION['mensajecolorpie']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejocolorpie']);?></div>
		</div>	
		</div><?php }?>
		<div class="fila">
		<?php print ("<img class=\"image\" src=".$_SESSION['rutanumpag']." alt=".$_SESSION['altnumpag'].">");?>
		<div class="fi2">		
		<input type="checkbox" id="spoilernumpag"></input>
			<label for="spoilernumpag"><?php print ($_SESSION['mensajenumpag']);?></label>
			<div class="spoiler"><?php print ($_SESSION['consejonumpag']);?></div>
		</div>	
		</div>			
	</div>
  </div>
 <?php  
  function deleteDirectory($dir) {
    if(!$dh = @opendir($dir)) return;
    while (false !== ($current = readdir($dh))) {
        if($current != '.' && $current != '..') {
            if (!@unlink($dir.'/'.$current)) 
                deleteDirectory($dir.'/'.$current);
        }       
    }
    closedir($dh);
  }
  deleteDirectory('uploaded_files');
?>
    <footer>
	<div class="divfooter"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licencia Creative Commons"  src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a></div>
	<div class="divfooter">
	<a href="https://validator.w3.org" target="_blank">HTML</a>&nbsp;y&nbsp; <a href="http://jigsaw.w3.org/css-validator/" target="_blank">CSS</a> &nbsp;validados por las herramientas de la W3C</div>
  </footer>
  </div>
</body>
</html>





