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
 
  <a href="principal.php?action=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
  <?php if ($_SESSION['root'] == 'si') { ?>

  		<a href="principal.php?action=tabla"><i class="fa fa-table" aria-hidden="true"></i></a> 
 <?php 
  } 
   ?>
   <?php if ($_SESSION['root'] == 'no') { ?>

  		<a href="principal.php?action=tablanoroot"><i class="fa fa-table" aria-hidden="true"></i></a>
 <?php 
  } 
   ?>
   
     		 

  
  
	
	<!-- <a href="principal.php?action=produccion&&opcion=buscar"><i class="fa fa-search" aria-hidden="true"></i>
</a> -->
	

	<!--====  End of OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR  ====-->

<?php 
$borrar = new ClcController();
$borrar -> borrarProduccionController();
?>
 	
 </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->



