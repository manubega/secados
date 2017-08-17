<br>
<br>
<h1>EDITAR ORDEN DE PRODUCCIÓN</h1>
<!-- FORMULARIO PARA INGRESAR NUEVA ORDEN DE PRODUCCIÒN -->

	<form method = "POST" id = "pro" onchange = "return validaProduccion()">
	<br>
	<br>
	 	
	<time datetime="fecha"><?php echo date("D d F H:i:s");?></time>
	<br>
	<br>
	<?php 

		$editar = new ClcController();
		$editar->editarProduccionController();

 ?>
	<br>
	<br>
	<input type="submit" value="Actualizar"  name="">
</form>

<?php
 $actualizar = new ClcController();
 $actualizar->actualizarProduccionController();
 ?>

