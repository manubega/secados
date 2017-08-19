
<?php 
session_start();

if (!$_SESSION['root']) {
    header('Location:../../index.php');
}

if(isset($_GET['action'])){
  if ($_GET['action'] == 'cambio') {
    echo '<script>alert(" SE REALIZO LA ACTUALIZACIÒN DE FORMA CORRECTA")</script>';
    echo $_GET['orden'];
  }
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

 <div class="subdiv"> <!-- DIVISION DOS -->
 
  <a href="principal.php?action=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
  <?php if ($_SESSION['root'] == 'si') { ?>

        <a href="principal.php?action=tabla"><i class="fa fa-table" aria-hidden="true"></i></a> 
 <?php  
} 
   ?>   

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
 <script type="text/javascript" src = "../../views/js/jbuscar.js"></script>
  </div><!-- DIVISION 2 -->
</div><!-- DIVISION 1 -->


