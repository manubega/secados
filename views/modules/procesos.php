<?php 

session_start();
if (!$_SESSION['root'] and !$_SESSION['user']) {
	header('Location:../../index.php');
}

 ?>
<h1 style="position: center;">PAGINA DE PROCESOS</h1>