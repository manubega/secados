<?php 
session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
<div id = "prod1">
	
	 <a href="principal.php?action=produccion&&opcion=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
	 
	 <?php 

	 if ($_SESSION['root'] == 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=editar'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
	 }
	 if ($_SESSION['root']== 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=eliminar'><i class='fa fa-minus-square-o' aria-hidden='true'></i></a>";
	 } ?>
	
	<a href="principal.php?action=produccion&&opcion=ver"><i class="fa fa-street-view" aria-hidden="true"></i></a>
	
<?php 
if (isset($_GET['opcion'])) {
	if ($_GET['opcion'] == 'nuevo') {
		
		include_once 'nuevo.php';
	}
	elseif ($_GET['opcion'] == 'editar') {
		include_once 'editar.php';
	}
	elseif ($_GET['opcion'] == 'eliminar') {
		if ($_SESSION['root'] == 'si') {
			echo "ELIMINAR";
		}
		else
		{
			echo "NO TIENES PERMISOS PARA ESTA OPCIÒN";	
		}
	}
		elseif ($_GET['opcion'] == 'ver') {
			echo "VER";
		}
}
?>


</div>


<?php

$obj = new ClcController();
$obj -> produccionNuevo();

?>