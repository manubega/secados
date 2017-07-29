<?php 

session_start();
if (!$_SESSION['root'] and !$_SESSION['user']) {
	header('Location:../../index.php');
}

 ?>
 <div id = "prod1">
 <h1 style="position: center;">PAGINA DE PROCESOS</h1>
 </div>
