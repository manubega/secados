<?php 



session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
 
<div id = "prod1">
	<h3>ORDEN DE PRODUCCION</h3>
	<br>
	<form method="POST" id="pro" onsubmit="return validaProduccion()">
	<input type="text" name="numeroOrden" placeholder="Orden No." required>
	<br>
	<br>
	<input type="text" name="idOrden" placeholder="Id" required>
	<br>
	<br>
	<input type="text" name="nombreOrden" placeholder="compañia" required>
	<br>
	<br>
	<input type="text" name="procesoOrden" placeholder="Proceso">
	<br>
	<br>

	<input type="submit" value="Nuevo"  name="">
	<input type="button" value="Editar" name="">
	<input type="button" value="Eliminar" name="">
</form>

</div>


<?php

$obj = new ClcController();
$obj -> produccion();

?>