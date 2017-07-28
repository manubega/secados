<?php 
session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
<div id = "prod1">
	<h3>ORDEN DE PRODUCCION</h3>
	<form method="post">
		<select name = "opcion">
		<option>Selecciòn</option>
		<option value = "nuevo">Nuevo</option>
		<option value = "editar">Editar</option>
		<option value = "eliminar">Eliminar</option>
	</select>
	<input type="submit" name="boton" value ="enviar">
	</form>
	
	<br>
	<br>
	<?php 
	if (isset($_POST['opcion'])) {

		$var = $_POST['opcion'];
		
	if (($var == 'nuevo')) {

		?>
		echo "NUEVO";
				<form method="POST" id="pro" onsubmit="return validaProduccion()">
	<input type="date" name="">
	<br>
	<br>
	<input type="text" name="numeroOrden" placeholder="Orden No." required>
	<br>
	<br>
	<input type="text" name="idOrden" placeholder="Id" required>
	<br>
	<br>
	<input type="text" name="nombreOrden" placeholder="compañia" required>
	<br>
	<br>
	<input type="text" name="procesoOrden" placeholder="Proceso" required>
	<br>
	<br>

	<input type="submit" value="Aceptar"  name="">
</form>
		<?php 
			} 


		if (($var == 'editar')) {
		echo "EDITAR";	} 
		if (($var == 'eliminar')) {
		echo "ELIMINAR";	} 
	}
	
		?>


</div>


<?php

$obj = new ClcController();
$obj -> produccion();

?>