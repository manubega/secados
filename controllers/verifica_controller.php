<?php 

include_once 'models/verifica_model.php';
	
	class ClsVerifica {
		
		//VERIFICA QUE EL USUARIO Y EL PASSWORD SEAN VALIDOS
	public function verificaLogin(){
		$_GET['action'] = 0;

		//VERIFICA QUE LOS CAMPOS VENGAN CON DATOS
		if (isset($_POST['usuarioIngreso']) && isset($_POST['passwordIngreso'])) {//if-1

			//preg_match: REALIZA UNA COMPARACIÒN CON UNA EXPRESION REGULAR
			
			if (preg_match('/^[a-zA-Z0-9]*$/', $_POST['usuarioIngreso']) &&
				preg_match('/^[a-zA-Z0-9]*$/', $_POST['passwordIngreso'])) {//if-2

			$datosController = array('usuario' => $_POST['usuarioIngreso'],
				'password' => $_POST['passwordIngreso']);

			$user = $_POST['usuarioIngreso'];
			$pass  =$_POST['passwordIngreso'];

			$respuesta = VerificaLogin::verifica($datosController, 'usuarios');

			//IF VALIDANDO EL USUARIO INGRESADO CON EL USUARIO DE LA BASE DE DATOS Y VALIDA SI ES ADMINISTRADOR
				if ($respuesta['usuario'] == $user) {//if-usaurio
					//VALIDANDO PASSWORD CON EL PASSWORD DE LA BASE DE DATOS
			if ($respuesta['password'] == $pass) {

				
				if ($respuesta['administrador'] == 'si') {//IF-VALIDAR SI ES ADMINISTRDOR
					session_start();
					$_SESSION["root"] = 'si';
					$name= $respuesta['nombre'];
					header("Location:./views/modules/principal.php?action=inicio&&name={$name}");
				}//END-IF ADMINISTRDOR
				if ($respuesta['administrador'] == 'no') {
					session_start();
					$_SESSION["root"] = 'no';
					$name= $respuesta['nombre'];
					header("Location:./views/modules/principal.php?action=inicio&&name={$name}");
					
				}
				
				
			}//if
			else{
				echo "<script>alert('Usuario o Password Incorrecto')</script>";
			}
		}//END if-USUARIO




		else{
			echo "<script>alert('Usuario o Password Incorrecto')</script>";
		}
		}//if-2
		}//if-1
		
	
	}
	}


 ?>