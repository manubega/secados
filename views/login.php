<html>
	<head>
		<title>Login</title>
		<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="views/css/estilo.css">
	
	</head>

	</style>
	<body>		
	<div id="login">
			<h1>Ingreso al Panel</h1>
			<form method = "POST" onSubmit="return validacion()" id="login" >

			<label for = "usuarioIngreso"></label>
				<input type="text" name = "usuarioIngreso" placeholder = "Usuario" maxlength="15" minlength="4" value="usuario" id="usuarioIngreso" required>

				<label for = "passwordIngreso"></label>
				<input type="password" name = "passwordIngreso" placeholder= "Password" maxlength="15" minlength="5" value="password" id="passwordIngreso" required>
				<input type="submit" value = "Entrar">
			</form>

		</div>
		
		 	 <script type="text/javascript" src = "views/js/validarIngreso.js"></script>	
	</body>
</html>

<?php 
$obj = new ClsVerifica();
$obj -> verificaLogin();
 ?>