<?php 

session_start();
if (!$_SESSION['root'] and !$_SESSION['user']) {
	header('Location:../../index.php');
}

 ?>
<h1>PAGINA DE REPORTES</h1>