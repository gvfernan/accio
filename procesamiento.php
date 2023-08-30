<head>
<script>
function mostrar(id) {
  obj = document.getElementById(id);
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
}
</script>
</head> 

<?php
//acá va la subida del archivo!!!****
$filearray = explode(".", $newFileName);
$filesinExtension = strtolower($filearray[0]);
$fileExtension = strtolower($filearray[1]);
$newfilecambioformato =$newFileName . '.zip';
//print($newfileName);

include('formatos.php');

$nombrearchivoviejo=$uploadPath.''.$newFileName;
$nombrearchivonuevo=$uploadPath.''.$newfilecambioformato;

//cambiar nombre del archivo a zip****
if (file_exists($nombrearchivonuevo)) {
	
}else{	

	if (rename ($nombrearchivoviejo,$nombrearchivonuevo)) {
		//echo "el nombre del fichero ha sido cambiado\n";
	} else {
		echo $mensaje[5];
	}

}

//descomprimir archivo****

$zip = new ZipArchive;
if ($zip->open($nombrearchivonuevo) === TRUE) {
    $path = getcwd(); // Path del directorio actual
    $zip->extractTo($uploadPath); // Extraemos el contenido en el directorio actual
    $zip->close();
    //echo 'ok';
} else {
    echo $mensaje[6];
}

//Inicializamos variables condicionales para que no dé error
$ficherofooter ="";
$ficherofootnotes ="";
$ficheroheader = "";
$ficherorels ="";

//Inicializamos accesibilidad completa del documento y demás variables de control
//TODAS LAS VARIABLES QUE SERÁN USADAS EN EL REPORTE TIENEN QUE PASARSE COMO SESSION
$_SESSION['accesibilidad'] = 0;
$font =0;
$size =0;
$align =0;
$line =0;
$color =0;
$sangria =0;
$columna =0;
$altimage =0;
$encColumnatabla =0;
$altlink =0;
$fontpie =0;
$colorpie =0;
$sizepie =0;
$fontenc =0;
$colorenc =0;
$sizeenc =0;
$numpag =0;
$_SESSION['haycolorenc'] =0;
$_SESSION['haysizeenc'] =0;
$_SESSION['hayfontenc'] =0;
$_SESSION['haycolorpie'] =0;
$_SESSION['haysizepie'] =0;
$_SESSION['hayfontpie'] =0;
$_SESSION['haylink'] =0;
$_SESSION['hayimagen'] =0;
$_SESSION['haytabla'] =0;


include ($archivo);
?>