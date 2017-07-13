<!DOCTYPE html>
<html>
<head>
	<title>Secados Alta Calidad</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../../views/css/estilo.css">
<header><a href="principal.php?" style="text-decoration: none"><h1>SECADOS</h1></a>
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