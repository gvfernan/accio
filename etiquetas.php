<?php
//ETIQUETAS WORD
$etiquetasword[0]="w:rFonts w:ascii="; //Fuente
$etiquetasword[1]="w:sz"; //Tamaño de la fuente
$etiquetasword[2]="w:jc"; //Alineación
$etiquetasword[3]="w:line"; //Interlineado
$etiquetasword[4]="w:color w:val"; //Color de la fuente. Así lo separamos del color del fondo.
$etiquetasword[5]="w:ind"; //Sangría. Si no aparece, no hay, y es lo correcto. NOTA: MODIFICAR ESTO EN PROCEAMIENTO WORD
$etiquetasword[6]="w:num"; //Columna
$etiquetasword[7]="wp:docPr"; //Imagen o grafico: propiedades no visuales
$etiquetasword[10]="w:hyperlink "; //Hipervínculo
$etiquetasword[11]="w:docPartGallery w:val="; //Numero de pagina.
$etiquetasword[12]="w:tblLook"; //Encabezados de tabla
//ETIQUETAS ODT
$etiquetasodt[0]="font-name="; //Fuente
$etiquetasodt[1]="fo:color="; //Color de la fuente
$etiquetasodt[2]="fo:font-size="; //Tamaño de fuente
$etiquetasodt[3]="fo:text-align="; //Alineación. Si está a la izquierda, la etiqueta no aparece
$etiquetasodt[4]="fo:line-height="; //Interlineado. Si es 1, la etiqueta no aparece. Debe ser 150
$etiquetasodt[5]="fo:margin-left=";//Sangría. Debe ser "0in"
$etiquetasodt[6]="style:columns"; //Columna. Si está presente, hay más de una columna.
$etiquetasodt[7]="draw:image"; //Hay una imagen o gráfico
$etiquetasodt[8]="<svg:desc>";//Imagen o gráfico, texto alternativo. Si no está, no hay.
$etiquetasodt[9]="text:a ";//Hipervínculo. Si está presente, hay.
$etiquetasodt[10]="office:title";//Hipervínculo, texto alternativo. Si está presente, hay. (Dentro del hipervinculo)
$etiquetasodt[11]="text:page-number";//Número de página
$etiquetasodt[12]="style:header"; //Marca que hay encabezado
$etiquetasodt[13]="style:footer"; //Marca que hay pie de página
$etiquetasodt[14]="text:style-name"; //Marca que hay texto. De aquí obtendremos el estilo del pie y encabezado.
?>