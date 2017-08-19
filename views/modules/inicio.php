
<?php 
session_start();

if (!$_SESSION['root']) {
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
			echo "<p>El Usuario  puede Registrar y Consultar:</p>";
			echo "<p>Entradas, Procesos y Reportes</p>";

		}
		 ?>
		 </div>