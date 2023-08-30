<?php
//Va en upload
$allowedfileExtensions = array('xlsx', 'pptx', 'docx', 'doc', 'odt');
$mensaje[0]="<strong>Archivo incluido correctamente.</strong>";
$mensaje[1]='El archivo no se ha podido subir correctamente, intente nuevamente.<a href="javascript:history.back()">Volver</a>';
$mensaje[2]='El archivo no se ha podido subir correctamente.Formatos de archivos permitidos: ' . implode(',', $allowedfileExtensions).'<a href="javascript:history.back()">Volver</a>';
$mensaje[3]='El archivo no se ha podido subir correctamente. Por favor controle el siguiente error.';
$mensaje[4]='<strong>RESULTADOS DEL ANALISIS</strong>';

//Va en pocesamiento
$mensaje[5]='Se ha producido un error al intentar analizar el archivo';
$mensaje[6]='Fallo en generación de archivo xml';
$mensaje[7]='<em>Finalizado...</em>';
//Va en salida
$mensaje[8]="El tipo de fuente no es accesible";
$mensaje[9]="La fuente es accesible";
$mensaje[10]="El tamaño de fuente no es accesible";
$mensaje[11]="El tamaño de fuente es accesible";
$mensaje[12]="La alineacion no es accesible";
$mensaje[13]="La alineacion es accesible";
$mensaje[14]="El interlineado no es accesible";
$mensaje[15]="El interlineado es accesible";
$mensaje[16]="El color no es accesible";
$mensaje[17]="El color es accesible";
$mensaje[18]="La sangria no es accesible";
$mensaje[19]="La sangria es accesible";
$mensaje[20]="Su documento tiene columnas; no es accesible";
$mensaje[21]="Su documento no tiene columnas; es accesible";
$mensaje[22]="Las imagenes no tienen texto alternativo; no es accesible";
$mensaje[23]="Las imagenes tienen texto alternativo; es accesible";
$mensaje[24]="Su tabla no tiene encabezados; no es accesible";
$mensaje[25]="Su tabla tiene encabezados; es accesible";
$mensaje[26]="Sus hipervinculos no tienen texto asociado; no es accesible";
$mensaje[27]="Sus hipervinculos tienen texto asociado; es accesible";
//$mensaje[28]="Su documento es " .$accesibilidad . "% accesible";
//$mensaje[29]="Su documento es accesible";
$mensaje[30]="Su documento no tiene números de página o no están hechos correctamente; no es accesible";
$mensaje[31]="Su documento tiene números de página; es accesible";
$mensaje[32]="La fuente del pie de página no es accesible";
$mensaje[33]="La fuente del pie de página es accesible";
$mensaje[34]="El tamaño de fuente del pie de página no es accesible";
$mensaje[35]="El tamaño de fuente del pie de página es accesible";
$mensaje[36]="El color del pie de página no es accesible";
$mensaje[37]="El color del pie de página es accesible";
$mensaje[38]="La fuente del encabezado no es accesible";
$mensaje[39]="La fuente del encabezado es accesible";
$mensaje[40]="El tamaño de fuente del encabezado no es accesible";
$mensaje[41]="El tamaño de fuente del encabezado es accesible";
$mensaje[42]="El color del encabezado no es accesible";
$mensaje[43]="El color del encabezado es accesible";
$mensaje[44]="Consejo:<br />
-Si usted está utilizando Microsoft Word busque el listado de fuentes o presione (Ctrl+Mayús+F) y seleccione alguna del siguiente listado: Arial, Verdana, Calibri, Open Sans o Trebuchet Ms.<br />
-Si usted está utilizando LibreOffice Writer elija alguna de las siguientes fuentes del casillero de tipo de letra (ubicado en la barra superior): Arial, Verdana, Calibri, Open Sans o Trebuchet Ms.<br />
-Si usted está utilizando Google Docs deberá dirigirse a la tabla superior y buscar el casillero de Fuentes, eligiendo una de entre las siguientes: Arial, Verdana o Trebuchet Ms";
$mensaje[45]="Consejo:<br />
El tamaño de fuente mínimo para que sea accesible es de 12 puntos. <br />
-Si usted está utilizando Microsoft Word busque el casillero de tamaño de fuente o presione (Ctrl+Mayús+M) y seleccione a partir del número 12.<br />
-Si usted está utilizando LibreOffice Writer deberá dirigirse al casillero de tamaño de letra (ubicado en la barra superior a la hoja) y seleccionar del número 12 en adelante.<br />
-Si usted está utilizando Google Docs deberá dirigirse a la tabla superior, buscar el casillero de tamaño de la fuente y seleccionar a partir del número 12.<br />
";
$mensaje[46]="Consejo:<br />
-Si está utilizando Microsoft Word, cambie la alineación de texto hacia la izquierda presionando (Ctrl+Q) o buscando la opción en la barra superior de  Inicio.<br />
-Si está utilizando LibreOffice Writer, cambie la alineación de texto hacia la izquierda presionando (Ctrl+L) o buscando la opción en la barra superior.<br />
-Si está utilizando Google Docs, cambie la alineación presionando (Ctrl+Mayús+L).
";
$mensaje[47]="El interlineado recomendado es de 1,5. Para cambiarlo siga los siguientes pasos:<br />
Busque en la barra superior de su editor de texto, el símbolo del párrafo con una flecha hacia arriba y otra hacia abajo; y elija 1,5.
";
$mensaje[48]="Para quitarla:<br />
-En Microsoft Word y LibreOffice Writer busque en la barra superior la opción “Disminuir sangría” y presione hasta eliminarla por completo.<br />
-En Google Docs, presione (Ctrl+[) hasta eliminar la sangría por completo.
";
$mensaje[49]="Consejo:<br />
Para que los textos sean de lectura accesible deben tener solamente una columna. Si su archivo cuenta con más columnas, deberá eliminarlas de la siguiente manera:<br />
En Microsoft Word, LibreOffice Writer o Google Docs; Dirigirse a “Formato”, luego “Columnas” y elegir “Una”.
";
$mensaje[50]="Para que las imágenes, formas y gráficos sean accesibles deben contar con texto alternativo. Consejo:<br />
-En LibreOffice Writer agregue una imagen, forma o gráfico y haga click derecho. Seleccione “Propiedades” y “Opciones”. Escriba en la casilla “Alternativa (solo texto). <br />
-En Microsoft Word y Google Docs, seleccione una imagen, haga click derecho y pulse el botón “Texto alternativo”.<br />
-Los textos alternativos deben ser cortos y concisos en su descripción, piense cómo describiría la imagen que está viendo y agregue eso en pocas oraciones para una persona que no pueda verla. Precise formas, colores y cantidades, si es que esos datos son relevantes. <br />
Si no puede agregar  texto alternativo a las imágenes, formas y gráficos, es preferible eliminarlos, debido a que las personas con discapacidad visual que utilizan lectores de pantalla sólo escucharán “imagen”. <br />
";
$mensaje[51]="Consejo: <br />
En lugar de crear un hipervínculo con el texto “Haga clic aquí”, escriba el título completo de la página de destino.<br />
Seleccione el texto al que le agregará el hipervínculo y haga clic con el botón derecho, seleccionando:<br />
-En Microsoft Word: “Hipervínculo”.<br />
-En Microsoft Word puede agregar la opción de “Información en pantalla” para que aparezca al desplazar el cursor sobre el texto o las imágenes que incluyen un hipervínculo.<br />
-En Google Docs: “Enlace” (Ctrl+K).<br />
-En LibreOffice Writer: presione (Ctrl+Alt+K) o vaya a la barra “Insertar” y elija “Hiperenlace”.
";
$mensaje[52]="Las tablas deben tener encabezado para ser accesibles. Consejo para Microsoft Word: <br />
Coloque el cursor en cualquier lugar de una tabla.<br />
En la pestaña “Diseño” en “Herramientas de tabla”, en el grupo “Opciones de estilo de tabla”, seleccione la casilla “Fila de encabezado”.<br />
Escriba los encabezados de columna.";
$mensaje[53]="Consejo: <br />
El color de fuente accesible es #000000 / rgb(0, 0, 0); es decir, el color negro estándar.:<br />
Este color es el predeterminado tanto en Microsoft Word como en LibreOffice Writer y Google Docs. Si usted está utilizando otro dirígase al casillero de Color de letra/fuente y elija: “Negro, Texto 1” (Microsoft Word); “Negro” (LibreOffice Writer y Google Docs).
";
$mensaje[54]="El documento debe llevar números de página, ya sea en el encabezado o en el pie, realizados con la herramienta de Word (Insertar --> Número de página).";

?>

