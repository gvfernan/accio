<?php
session_start();?>

<!DOCTYPE html>
<html>
<head>
  <title>Accio - analizar archivo</title>
   <link rel="icon" href="images/favicon2.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
  <script src="script.js"></script>
</head>
<?php
include('config.php');
include('etiquetas.php');
include('colores.php');
include('fuentes.php');
include('mensajes.php');

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Evaluar')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $_SESSION['fileName'] = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $_SESSION['fileName']);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $_SESSION['fileName']) . '.' . $fileExtension;
    
	
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      $dest_path = $uploadFileDir . $newFileName;
	  
	  
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message =$mensaje[0];
		$resultado='oks';
      }
      else 
      {
        $message = $mensaje[1];
      }
    }
    else
    {
      $message = $mensaje[2];
    }
  }
  else
  {
    $message = $mensaje[3];
    $message .= 'Error:' . $_FILES['uploadedFile']['error'].'<br><a href="javascript:history.back()">Volver</a>';
  }
}


include ('formatos.php');
//ACA IRIA EL CÓDIGO QUE CONTROLA ARCHIVO
$control = 0;
if (isset ($_POST["uploadBtn"])){
foreach ($formatos as $value){
	if ($value === $fileExtension) {
		$control=$control+1;
	}
	else{
	}
}
}
//print ($control);

if ($control===0){?>
	<script>location.href='index.php?err=1';</script>
/*
<?php
}


/*
$_SESSION['message'] = $message;
print($_SESSION['message'].'<br><br>');
if($resultado=='oks'){
	
print('<strong>Datos del archivo analizado</strong><br><br>');	
print('Nombre de archivo: '.$fileName.'<br>');
print('Tamaño de archivo: '.$fileSize.' KB<br>');
print('Formato de archivo: '.$fileExtension.'<br>');
print('<br><a href="javascript:history.back()">Analizar un nuevo archivo</a><br>');

print($mensaje[4]);
}*/

include('procesamiento.php');	
	
?>
