<?php 
session_start();

if (!$_SESSION['root'] == 'si') {
	header('Location:../../index.php');
}

 ?>
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 98%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #eee;
}
</style>
<div id = "prod1"><!-- DIVISION UNO -->
 <div class="row"> <!-- DIVISION DOS -->
 <div class="col-sm-6">
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
<br>
<br>
<h3>EDITAR ORDEN DE PRODUCCIÓN</h3>
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
 </div><!-- DIVISION 3 -->

  <div class="col-sm-6" >
  	<script type="text/javascript" src = "../../views/js/jquery-3.0.0.min.js"></script>
<section class="principal">
	<div class="form-1-2">
		<label for="caja_busqueda"> Buscar:</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda">
	</div>
	<br>
    <table id = "" class="display" collspacing = "0" width="100%">
   
	<div id="datos">
        
    </div>
</section>
 <script type="text/javascript" src = "../../views/js/jclientes.js"></script>
  </div>
 </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->

