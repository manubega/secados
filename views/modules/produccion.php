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
  <?php if ($_SESSION['root'] == 'si') { ?>

  		<a href="principal.php?action=produccion&&opcion=ver"><i class="fa fa-table" aria-hidden="true"></i></a> 
 <?php  } 
   ?>
  
	
	<!-- <a href="principal.php?action=produccion&&opcion=buscar"><i class="fa fa-search" aria-hidden="true"></i>
</a> -->
	

	<!--====  End of OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR  ====-->

<?php 
if (isset($_GET['opcion'])) {
	if ($_GET['opcion'] == 'nuevo') {
		
		include_once 'nuevo.php';
	}
	
		if ($_GET['opcion'] == 'ver') {
		include_once 'vbuscar.php';

	}
	if ($_GET['opcion'] == 'editar') {
		include_once 'editar.php';
	}

	if ($_GET['opcion'] == 'buscar') {
		if ($_SESSION['root'] == 'si') {
			include_once 'vbuscar.php';
		}//END 
	}
		
		if ($_GET['opcion'] == 'buscar') {
			
			include_once 'vbuscar.php';
		}
}//END IF
?>
 	
 </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->



