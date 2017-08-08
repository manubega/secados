<!DOCTYPE html>
<html>
<head>
	<title>Secados Alta Calidad</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../../views/css/estilo.css">
 <link rel="stylesheet" href="../../views/css/font-awesome-4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src = "../../views/js/validarProduccion.js"></script>	
 <script type="text/javascript" src = "../../views/js/jquery-3.0.0.min.js"></script>
  <script type="text/javascript" src = "../../views/js/jquery-2.2.0.min.js"></script>
 

 <!-- LINK PARA LA CREACION DE LA TABLA -->
  <!--==================================
  =            TABAL JQUERY            =
 <script type="text/javascript" src="../../views/jquery/media/js/jquery.js"></script>
  <script type="text/javascript" src="../../views/jquery/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="../../views/jquery/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../views/jquery/media/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../views/jquery/media/css/dataTables.bootstrap.css">
  
  ===================================-->
  <!--====  End of TABAL JQUERY  ====-->

<header><a href="principal.php?action=inicio" style="text-decoration: none"><h1>SECADOS</h1></a>
</header>

<?php
include 'modules/navegacion.php'; 
 ?>

 <section>
 	<?php
 	$mvc = new MvcControllers();
 	$mvc -> enlacesPaginasController();
 	?>
 </section>

</body>
</html>