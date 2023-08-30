<!DOCTYPE html>
<html lang="es">
<head>
  <title>Accio - Accesibilidad de objetos digitales</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="images/favicon2.ico" type="image/x-icon">
	<script src="script.js"></script>
	<meta name="viewport" content="width=device-width"/>
</head>
<body>
<div id="wrap">
	<header class="siteheader">
	<div class="logo">
		<a href="https://acciovalida.org/"><img src="images/logocolores2.png" alt="Logo Accio"></a>
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
 <div class="containerhelp">
<h2>1. Introducción</h2>

<p>La aparición de diversas herramientas tecnológicas utilizadas por los agentes involucrados en el proceso de enseñanza-aprendizaje para su apoyo en el dictado de clases y, la búsqueda y recuperación de información, la divulgación de la producción científica o la comunicación entre pares, han crecido en los últimos años, tanto en cantidad como en diversidad, pero hay un factor común que une a todas estas herramientas y recursos, y es la posibilidad de favorecer el acceso a la información y el conocimiento para todas las personas. </p>
<p>Es posible encontrar un creciente número de herramientas que permiten evaluar la accesibilidad de sitios web. Estas herramientas cumplen con cada una de las directrices y estándares establecidos por la W3C, pero no trabajan sobre los objetos digitales contenidos en herramientas como las plataformas educativas, aulas virtuales o repositorios institucionales, es aquí donde ACCIO pretende jugar un rol importante devolviendo pautas claras de accesibilidad para objetos digitales.</p>

<h2>2. ¿Qué significa ACCIO?</h2>
<p>La elección del nombre ACCIO hace referencia a la conjunción de los términos accesibilidad, input(entrada) y ouput (salida).</p>

<h2>3. ¿Por qué en el ámbito académico?</h2>
<p>La creación de esta herramienta nace de un trabajo que aborda la problemática latente respecto al material subido en aulas virtuales por parte de los docentes y la escasa aplicación de criterios de accesibilidad en el formato. Es por ello que surge la idea de crear una herramienta que medie en este proceso, es decir que docentes e investigadores, puedan someter su producción y materiales disponibles al análisis, evaluación y recomendación en base a parámetros de accesibilidad.</p>
 

<h2>4. Aplicación</h2>

<p>Esta herramienta no sólo es un validador, su objetivo es analizar y evaluar el formato del documento elegido y devolver resultados de dicha evaluación, como así también un porcentaje de accesibilidad bajo parámetros y ponderación previamente establecidos.
En este momento ACCIO valida sólo documentos con extensión DOCX y ODT. Se está trabajando en la incorporación de otros formatos.</p>


<h2>5. Salvedades sobre los formatos</h2>

<p>DOC: Esta herramienta no valida archivos *.doc. ya que se trata de un formato privativo. El docx también es un formato utilizado por la herramienta MS Word que, a diferencia del primero posee otras características, como por ejemplo la de ser un formato abierto. Es por esta razón que ACCIO no valida DOC. Si posee un archivo DOC recomendamos que se abra desde la herramienta ofimática utilizada más asiduamente y se guarde como *.docx u *.odt, luego ese archivo puede ser analizado por ACCIO.</p>

<p>ODT: En el formato *.odt no es posible especificar encabezados de tabla como criterio de evaluación.</p>

<h2>6. Parámetros evaluados por ACCIO para documentos con extensión docx y odt.</h2>
<ul>
	<li>Fuentes</li>
	<li>Tamaño para párrafo/encabezado</li>
	<li>Alineación de texto</li>
	<li>Espacio entre líneas</li>
	<li>Sangría</li>
	<li>Columnas</li>
	<li>Imágenes, formas y gráficos</li>
	<li>Hipervínculo</li>
	<li>Tablas (sólo en docx)</li>
	<li>Color</li>
	<li>Saltos de línea</li>
	<li>Números de página</li>
	<li>Encabezado/pie de página</li>
</ul>
<p>Los parámetros antes mencionados tienen una ponderación de relevancia fijada a través de porcentajes que se detallan a continuación:</p>
<ul>
	<li>Tipo de Fuente: 9%</li>
	<li>Tamaño de fuente: 9%</li>
	<li>Color de fuente: 9%</li>
	<li>Columnas: 9%</li>
	<li>Texto alternativo en Imágenes: 8%</li>
	<li>Encabezado de tablas: 8%</li>
	<li>Texto alternativo en Hipervínculos: 8%</li>
	<li>Alineación de párrafo: 7%</li>
	<li>Interlineado: 7%</li>
	<li>Sangría: 6%</li>
	<li>Encabezado de página: 6%</li>
	<li>Pie de página:	6%</li>
	<li>Número de página: 8%</li>
</ul>
<h2>¿Como interpretar el dato de porcentaje ofrecido por ACCIO?</h2>
<ul>
	<li>Hasta un <b>40%</b> su documento no es accesible.</li>
	<li>Entre <b>50% y 69%</b> su documento cumple con algunos parámetros de accesibilidad.</li>
	<li>A partir de un <b>70%</b> en adelante cumple la mayoría de los parámetros de accesibilidad.</li>
</ul>

<h2>7. ¿Quienes participan del proyecto ACCIO?</h2>
<ul>
	<li><p>Programa Discapacidad y Equiparación de Oportunidades dependiente de la  Subsecretaría de Bienestar de la Comunidad Universitaria de la Universidad Nacional de Mar del Plata.  </p>
	<p>Su accionar se inscribe en la perspectiva de conceptualizar que la Educación Superior es un derecho humano y un bien público social, considerando que las instituciones deben crecer en diversidad , flexibilidad y articulación, garantizando el acceso y la permanencia en condiciones equitativas y con calidad para promover el desarrollo personal para la formación universitaria de todos.</p>
	<p>Los aportes del Programa permitieron dar los primeros pasos del proyecto más allá de su estadío de investigación, consolidando ideas y materializando voluntades. </p></li>
	<li><p>Programa NEXOS: articulación y cooperación educativa, Experiencia piloto Integral de Accesibilidad Académica, dependiente de la Secretaría de Políticas Universitarias. 
	<p>Programa que convocó a la presentación de proyectos y líneas de trabajo integrales de accesibilidad académica destinadas a proveer la igualdad de oportunidades de los estudiantes con discapacidad mediante el fortalecimiento de estrategias de articulación educativa entre la escuela secundaria y la Universidad en lo referente a la temática de la discapacidad.</p>
	<p>La Universidad Nacional de Mar del Plata se presentó a la convocatoria realizada por este programa con un proyecto integrado por varias unidades académicas, ACCIO forma parte del proyecto desarrollado por la Facultad de Humanidades.</p>
	<p>La participación en este programa permitió que ACCIO cuente con 2(dos) becarios por un plazo de 6 meses y el aporte económico para realizar algunas tareas de programación y maquetación.</p> </li>
	<li><p><a href="http://proyectoaccio.org/" target="_blank">Equipo ACCIO</a></p></li>
</ul>
<h2>8. Licencia de ACCIO</h2>
<p>Condiciones de uso: cualquier uso que se haga de este software deberá incluir la siguiente referencia: «Proyecto ACCIO» – uso permitido bajo la licencia CC BY NC SA. Este software no puede utilizarse para fines comerciales. Si altera o transforma el presente software, o genera una obra derivada, deberá distribuir la obra generada bajo una licencia Creative Commons idéntica a ésta. Registro DNDA en trámite. 2020</p>
<p>Términos y condiciones de la licencia en <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.

<h2>9. Antecedentes</h2>
<ul>
<li>Hilera-González, J.R. y Campo-Montalvo, E. (2015). Guía para crear contenidos digitales accesibles: Documentos, presentaciones, vídeos, audios y páginas web (1ª ed.). Alcalá de Henares, España: Universidad de Alcalá.</li>
<li>Fernández, G.; Hernandez, A.; Simón, V.(2016). Directrices para la creación de documentos digitales accesibles en entornos de investigación, transferencia y difusión científica: el caso de la Red CDPD. UNIVERSITAS, No 24. <a href="http://dx.doi.org/10.20318/universitas.2016.3180" target="_blank">http://dx.doi.org/10.20318/universitas.2016.3180</a></li>
</ul>


<h2>10. Contacto</h2>
<ul>
	<li><a href="https://www.instagram.com/proyectoaccio/" target="_blank">Instagram</a></li>
	<li><a href="https://www.facebook.com/proyectoaccio/" target="_blank">Facebook</a></li>
	<li><a href="https://twitter.com/AccioProyecto" target="_blank">Twitter</a></li>
	<li><a href="http://proyectoaccio.org/" target="_blank">Web</a></li>
	<li><a href="mailto:contacto@proyectoaccio.org">Email</a></li>
</ul>


<h2>11. Aclaraciones</h2>
<p>Esta herramienta no evalúa el contenido ni la redacción del documento.</p>
<p>Esta herramienta no modifica el archivo subido ni lo reconstruye bajo los preceptos de la accesibilidad.</p>

 </div>
 <footer>
	<div class="divfooter"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licencia Creative Commons"  src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a></div>
	<div class="divfooter">
	<a href="https://validator.w3.org" target="_blank">HTML</a>&nbsp;y&nbsp; <a href="http://jigsaw.w3.org/css-validator/" target="_blank">CSS</a> &nbsp;validados por las herramientas de la W3C</div>
  </footer>
  </div>
</body>
</html>