	<?php 
	//DEFINE LOS VALORES Y ENVIA VALORES VACIOS
	$clienteErr = $emailErr = $genderErr = $websiteErr = "";
	$cliente = $email = $gender = $comment = $website = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {//if 1

		if (empty($_POST['cliente'])) { //if 2
			$clienteErr = 'El nombre es requerido';
		}//end if 2
		else{
			$cliente = test_input($_POST['cliente']);
				if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
					$nameErr = 'Solo se permiten letras y espacios en blanco';
				
			}
		}//end else

		
	}//end if 1
	 ?>

	<form method="POST" id="pro" onsubmit="return validaProduccion()">
	 	
<time datetime="fecha">Fecha</time>
	<br>
	<br>
	
	<input type="text" name="clienteOrden" placeholder="compañia">
	<br>
	<br>
	Proceso:
	<input type="radio" name="procesoOrden" <?php if (isset($procesoOrden) && $procesoOrden == 'cuero')  ?>>
	<label for="Cuero">Cuero</label>
	<input type="radio" name="procesoOrden">
	<label for="Lado">Lado</label>
	<input type="radio" name="procesoOrden">
	<label for="Delantero">Delantero</label>
	<br>
	<input type="submit" value="Guardar"  name="">
</form>