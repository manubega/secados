<?php 
session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>

 <!--===================================================================
 =            OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR            =
 ====================================================================-->
 <div id = "prod1"><!-- DIVISION UNO -->

 <div class="subdiv"> <!-- DIVISION DOS -->
 
  <a href="principal.php?action=produccion&&opcion=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
	 
	 <?php 

	 if ($_SESSION['root'] == 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=editar'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
	 }
	 if ($_SESSION['root'] == 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=eliminar'><i class='fa fa-minus-square-o' aria-hidden='true'></i></a>";
	 } ?>
	
	<a href="principal.php?action=produccion&&opcion=ver"><i class="fa fa-street-view" aria-hidden="true"></i></a>
	<a href="principal.php?action=produccion&&opcion=buscar"><i class="fa fa-search" aria-hidden="true"></i>
</a>

	<!--====  End of OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR  ====-->

<?php 
if (isset($_GET['opcion'])) {
	if ($_GET['opcion'] == 'nuevo') {
		
		include_once 'nuevo.php';
	}
	elseif ($_GET['opcion'] == 'editar') {
		if ($_SESSION['root'] == 'si') {
			echo "PERMISO DE EDITAR";
			include_once 'editar.php';
		}
		else{
			echo "NO TIENE PERMISO PARA ESTA OPCIÓN";
		}
		
	}
	elseif ($_GET['opcion'] == 'eliminar') {
		if ($_SESSION['root'] == 'si') {
			echo "PERMISO DE ELIMINAR";
		}
		else
		{
			echo "NO TIENES PERMISOS PARA ESTA OPCIÒN";	
		}
	}
		elseif ($_GET['opcion'] == 'ver') {
			include_once 'lista_produccion.php';
		}
}
?>
 	
 </div><!-- DIVISION 2 -->

 
 
	

</div><!-- DIVISION 1 -->



