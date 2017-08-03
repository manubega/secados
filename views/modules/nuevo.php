	
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
	<label for="delantero">Delantero</label><span class="error">*</span>
	<br>
	<br>
	PROCESO:
	<select required="" name="procesoOrden" >
		<option value="HUMEDO">HUMEDO</option>
		<option value="DESVENADO">DESVENADO</option>
		<option value="BAUCHE">BAUCHE</option>
		<option value="WELT">WELT</option>
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

