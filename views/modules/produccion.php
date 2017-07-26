<?php 



session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}
if ($_SESSION['root'] == 'si') {
	# code...

 ?>




<h1>PAGINA PRODUCCION</h1>
<form method="POST" onsubmit="return validaProduccion()">



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
<?php } 

$obj = new ClcController();
$obj -> produccion();

?>



