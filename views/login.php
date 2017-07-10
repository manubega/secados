<html>
	<head>
		<title>Login</title>
		<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="views/css/estilo.css">

	</head>

	</style>
	<body>
		<div id="formulario">
			<h1>Ingreso al Panel</h1>
			<form method = "POST" action="" >
				<input type="text" name = "usuario" placeholder = "Usuario" maxlength="10" minlength="7">
				<input type="password" name = "password" placeholder= "Password" 
				maxlength="10" minlength="7">
				<input type="submit" value = "Entrar">
			</form>
		</div>
		</div>
	</body>
</html>

<?php 
$obj = new ClsVerifica();
$obj -> verificaLogin();
 ?>

