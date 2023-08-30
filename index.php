<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Accio - Accesibilidad de objetos digitales</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="images/favicon2.ico" type="image/x-icon">
  <script src="script.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170503010-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170503010-1');
</script>

  <meta name="viewport" content="width=device-width"/>
</head>
<body>
  <?php
   /*
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  */
?>
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
		<form method="POST" action="upload" enctype="multipart/form-data">
			<div class= "elegirarch">
				<img src="images/cargar_archivo2.png" alt="Subir archivo">
				<br /><br />
				<label for="uploadedFile" class="subir">
					Subir archivo
				</label>
				<input id="uploadedFile" name="uploadedFile" onchange='cambiar()' type="file" onclick="deshabilita()" style='display: none;' />
				<br>
			</div>
			<div class="subirarch">
			<div class="imgarch"><img src="images/descargar_resultados2.png" alt="Nombre de archivo"></div>
			<div id="info" class="info" > Sin archivo seleccionado</div>
			</div>
			<div class="eval">
				<input type="submit" id="uploadBtn" name="uploadBtn" value="Evaluar" disabled="disabled" />
			</div>
		</form><?php
		if(isset($_GET['err']) && $_GET['err'] == 1){ 
		echo "<div id=\"alert\" class=\"alert\"> Formato de archivo inválido </div>";
		}?>
	</div>
	<div class="expl">
	<div class="titexpl">Accesibilidad de objetos digitales</div>
	<p>ACCIO es una herramienta de accesibilidad para objetos digitales.</p>
	<p>Por medio de la validación es posible obtener un estado de los objetos digitales analizados estableciendo un porcentaje de accesibilidad y una serie de recomendaciones para alcanzar la mayor cantidad de características accesibles.</p>
	<p>En este momento ACCIO sólo valida recursos con extensión DOCX y ODT.</p>
	<p>Suba el archivo alojado en su computadora y haga clic en evaluar. ACCIO le devolverá los resultados de su validación al terminar el proceso.</p>
	<p>Para más información puede consultar las secciones "Acerca de" y "Ayuda" en el menú de la parte superior derecha.</p>

	</div>
  </div>
    </div>
  <footer>
	<div class="divfooter"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licencia Creative Commons"  src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a></div>
	<div class="divfooter">
	<a href="https://validator.w3.org" target="_blank">HTML</a>&nbsp;y&nbsp; <a href="http://jigsaw.w3.org/css-validator/" target="_blank">CSS</a> &nbsp;validados por las herramientas de la W3C</div>
  </footer>

</body>
</html>
