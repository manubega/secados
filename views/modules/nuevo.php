<?php 
session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
<div id = "prod1"><!-- DIVISION UNO -->

 <div class="subdiv"> <!-- DIVISION DOS -->
 
  <a href="principal.php?action=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
  <?php if ($_SESSION['root'] == 'si') { ?>

  		<a href="principal.php?action=tabla"><i class="fa fa-table" aria-hidden="true"></i></a> 
 <?php  
} 
   ?>	
<!-- FORMULARIO PARA INGRESAR NUEVA ORDEN DE PRODUCCIÒN -->

	<form method = "POST" id = "pro" onchange = "return validaProduccion()">
	<br>
	<br>
	 	
	<time datetime="fecha"><?php echo date("D d F H:i:s");?></time>
	<br>
	<br>
	<input type="text" name="numOrden" id="tres" value = "" placeholder=" No. de Orden" required=""><span class="error">*</span>
	<br>
	<br>
	<input type="text" name="clienteOrden" id = "uno" value="" placeholder=" Cliente" required=""><span class="error">*</span>
	<br>
	<br>
	<input type="number" name="cantidadOrden" id = "cantidadOrden" value="cantidadOrden" placeholder=" Cantidad" required=""><span class="error">*</span>
	
	<input type="text" name="colorOrden" id="colorOrden" value="" placeholder=" Color" required=""><span class = "error">*<label for="error"></label></span>
	<br>
	<br>
	CATEGORIA:
	<input type="radio" name="categoriaOrden" value = "CUERO" required>
	<label for="Cuero">Cuero</label>
	<input type="radio" name="categoriaOrden" value = "LADO" required>
	<label for="lado">Lado</label>
	<input type="radio" name="categoriaOrden"  value = "DELANTERO" required>
	<label for="delantero">Delantero</label>
	<input type="radio" name="categoriaOrden"  value = "REPROCESO" required>
	<label for="delantero">Reproceso</label><span class="error">*</span>
	<br>
	<br>
	PROCESO:
	<select required="" name="procesoOrden" >
		<option value="">Seleccione un proceso</option>
		<option value="ESC. Y DESV. BAUCE">1 - ESCURRIDO Y DESVENADO (BAUCE)</option>
		<option value="ESC. Y DESV.  POLETO">2 - ESCURRIDO Y DESVENADO (POLETO)</option>
		<option value="WET STRECH">3 - WET STRECH</option>
		<option value="VACIO MAQ. CARTIGLIANO">4 - VACIO (MAQ. CARTIGLIANO)</option>
		<option value="VACIO MAQ. IMPREGNACION">5 - VACIO IMPREGNACION</option>
		<option value="COLG. AEREO NEW TRADING">6 - COLGADO AEREO (NEW TRADING)</option>
		<option value="COLG. AEREO HUMEDO">7 - COLGADO AEREO (HUMEDO)</option>
		<option value="AFLOJADO MAQ. CART">8 - AFLOJADO (MAQ. CARTIGLIANO)</option>
		<option value="TOGGLEN">9 - TOGGLEN</option>
		<option value="PULIDO">10 - PULIDO</option>
		<option value="PULIDO CON ACABADO">11 - PULIDO C/ ACABADO</option>
		<option value="TAMBOREO">12 - TAMBOREO</option>
		<option value="TEÑIDO">13 - TEÑIDO</option>

	</select><span class="error">*</span>
	<br>
	<br>
	Observaciones: <textarea id = "observaciones" name = "observacionesOrden" rows="5" cols="50"></textarea>
	<br>
	<br>
	<input type="submit" value="Guardar"  name="">
</form>

<?php

$obj = new ClcController();
$obj -> registroProduccionController();

?>
 </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->

