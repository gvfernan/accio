<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm">
        <table>
			<tr>
				<td><img src="images/logocolores2.png" alt="Logo Accio" class="logo"></td>
				<td class="frase">validador de objetos digitales</td>
			</tr>
		</table>	
<div class="content">
Archivo analizado: <?php print ($_SESSION['fileName']);?><br>
Porcentaje de accesibilidad: <?php print ($_SESSION['accesibilidad']);?>%<br><br>
<table>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutafont'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajefont']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejofont']);?></td>
	</tr>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutasize'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajesize']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejosize']);?></td>
	</tr>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutacolor'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajecolor']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejocolor']);?></td>
	</tr>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutaalign'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajealign']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejoalign']);?></td>
	</tr>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutaline'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajeline']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejoline']);?></td>
	</tr>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutacolumna'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajecolumna']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejocolumna']);?></td>
	</tr><?php
	if ($_SESSION['hayimagen'] <> 0) {?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutaimg'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajeimg']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejoimg']);?></td>
	</tr><?php }
	if ($_SESSION['haytabla'] <>0) {?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutatabla'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajetabla']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejotabla']);?></td>
	</tr><?php }
	if ($_SESSION['haylink'] <> 0) {?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutalink'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajelink']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejolink']);?></td>
	</tr><?php }?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutasangria'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajesangria']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejosangria']);?></td>
	</tr><?php 
	if ($_SESSION['hayfontenc'] <> 0) {?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutafontenc'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajefontenc']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejofontenc']);?></td>
	</tr><?php }
	if ($_SESSION['haysizeenc'] <> 0){?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutasizeenc'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajesizeenc']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejosizeenc']);?></td>
	</tr><?php }
	if ($_SESSION['haycolorenc'] <> 0){?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutacolorenc'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajecolorenc']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejocolorenc']);?></td>
	</tr><?php }
	if ($_SESSION['hayfontpie'] <> 0) {?>
	<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutafontpie'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajefontpie']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejofontpie']);?></td>
	</tr><?php }
	if ($_SESSION['haysizepie'] <> 0){?>
	<tr>
		<td><?php print ("<img class=\"image\" src=".$_SESSION['rutasizepie'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajesizepie']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejosizepie']);?></td>
	</tr><?php }
	if ($_SESSION['haycolorpie'] <> 0){?>
		<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutacolorpie'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajecolorpie']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejocolorpie']);?></td>
	</tr><?php }?>
		<tr>
		<td class="tdi"><?php print ("<img class=\"image\" src=".$_SESSION['rutanumpag'].">");?></td>
		<td class="msj"><?php print ($_SESSION['mensajenumpag']);?></td>
	</tr>
	<tr>
		<td class="tdi"></td>
		<td class="consejo"><?php print ($_SESSION['consejonumpag']);?></td>
	</tr>

</table>
</div>
</page>

<style>
.logo{
	width: 230px;
	height: 45px;
	margin-left:20px;
}

.frase{
font-family:Poppins;
font-size: 16pt;
padding: 10px;
padding-left: 30px;
margin-right: 10px;

}

.content {
	margin-top: 40px;
	font-family: calibri;
	font-size: 14pt;
}

.tdi{
	width: 46px;
}

.image{
	width: 35px;
	height: 35px;
}

.msj{padding-top: 10px;
padding-left: 10px;
}

.consejo{
	font-size:12pt;
	padding-left: 10px;
}
</style>


