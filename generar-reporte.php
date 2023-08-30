<?php	
session_start();
	require (__DIR__.'/vendor/autoload.php');
	use Spipu\Html2Pdf\Html2Pdf;
	$html = "";
	ob_start();
    include 'reporte.php';
    $html=ob_get_clean();
	$reporte = new HTML2PDF('P','A4','es');
	$reporte -> writeHTML($html);
	$reporte -> Output('ReporteResultados.pdf');
	$reporte -> clean();
?>

