<!DOCTYPE html>
<html>
<head>
	<title>Secados Alta Calidad</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../../views/css/estilo.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/f22f712e94.css">
    <link rel="stylesheet" href="../../views/css/font-awesome-4.7.0/css/font-awesome.min.css">


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