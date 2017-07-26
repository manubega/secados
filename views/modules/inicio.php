
<?php 

session_start();


if (!$_SESSION['root']) {

if (!$_SESSION['root'] and !$_SESSION['user']) {

if (!$_SESSION['root'] and !$_SESSION['user']) {

	
	header('Location:../../index.php');
}

 ?>
<div class = "titulo">

	<?php 


		if ($_SESSION['root'] == 'si') {
			echo "<h1>SISTEMA DE CONTROL DE PRODUCCIÒN</h1>";
			echo "<p>El Usuario Administrador puede Ingresar, Controlar, Modificar y Eliminar:</p>";
			echo "<p>Entradas, Procesos, Salidas y Reportes </p>";

			
		}
		elseif ($_SESSION['root'] == 'no') {
			echo "<h1>SISTEMA DE CONTROL DE PRODUCCIÒN</h1>";
			echo "<p>El Usuario No tiene permisos de Administrador, puede Registrar y Consultar:</p>";
			echo "<p>Entradas, Procesos y Reportes</p>";
			


		if (isset($_SESSION['root'])) {
			echo "<h1>SISTEMA DE CONTROL DE PRODUCCIÒN</h1>";
			echo "<p>El Usuario Administrador puede Ingresar, Controlar, Modificar y Eliminar:</p>";
			echo "<p>Entradas, Procesos, Salidas y Reportes </p>";
		}
		elseif (isset($_SESSION['user'])) {
			echo "<h1>SISTEMA DE CONTROL DE PRODUCCIÒN</h1>";
			echo "<p>El Usuario No tiene permisos de Administrador, puede Registrar y Consultar:</p>";
			echo "<p>Entradas, Procesos y Reportes</p>";

		}
		 ?>
		 </div>