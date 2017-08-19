<?php 
session_start();

if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
 <div id = "prod1"><!-- DIVISION UNO -->

 <div class="subdiv"> <!-- DIVISION DOS -->
 
  <a href="principal.php?action=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
  <?php if ($_SESSION['root'] == 'si') { ?>

  		<a href="principal.php?action=tabla"><i class="fa fa-table" aria-hidden="true"></i></a> 
 <?php  
} 
   ?>	
<br>
<br>
<h1>EDITAR ORDEN DE PRODUCCIÓN</h1>
<!-- FORMULARIO PARA INGRESAR NUEVA ORDEN DE PRODUCCIÒN -->

	<form method = "POST" id = "pro" onchange = "return validaProduccion()">
	<br>
	<br> 	
	<time datetime="fecha"><?php echo date("D d F H:i:s");?></time>
	<br>
	<br>
	<?php 

		$editar = new ClcController();
		$editar->editarProduccionController();
		$editar->actualizarProduccionController();

 ?>
	<br>
	<br>
	<input type="submit" value="Actualizar"  name="">
</form>
 </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->

