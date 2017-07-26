<?php 
<<<<<<< HEAD


session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}
if ($_SESSION['root'] == 'si') {
	# code...

 ?>
=======
session_start();
if (!$_SESSION['root'] and !$_SESSION['user']) {
	header('Location:../../index.php');
}
>>>>>>> origin/master

 ?>
<h1>PAGINA PRODUCCION</h1>
<form method="GET" onsubmit="return validaProduccion()">
<<<<<<< HEAD

=======
>>>>>>> origin/master
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
<<<<<<< HEAD
<<<<<<< HEAD
	<input type="submit" value="Nuevo"  name="">
	<input type="button" value="Editar" name="">
	<input type="button" value="Eliminar" name="">
</form>
<?php } 

$obj = new ClcController();
$obj -> produccion();

?>

	<input type="button" value="Nuevo"  name="">
	<input type="button" value="Editar" name="">
	<input type="button" value="Eliminar" name="">
</form>

=======
	<input type="button" value="Nuevo"  name="">
	<input type="button" value="Editar" name="">
	<input type="button" value="Eliminar" name="">
</form>
>>>>>>> origin/master
