<?php 

include_once 'models/verifica_model.php';
	
	class ClsVerifica {
		
		//VERIFICA QUE EL USUARIO Y EL PASSWORD SEAN VALIDOS
	public function verificaLogin(){
		$_GET['action'] = 0;

		if (isset($_POST['usuarioIngreso'])&& isset($_POST['passwordIngreso'])) {

			$datosCcntroller = array('usuario' => $_POST['usuarioIngreso'],
				'password' => $_POST['passwordIngreso']);

			$user = $_POST['usuarioIngreso'];
			$pass  =$_POST['passwordIngreso'];

			$respuesta = VerificaLogin::Verifica($datosController, 'usuarios');





				if ($user == 'secados') {
			if ($pass == 'secados') {
				header('Location:./views/modules/principal.php');
			}
			else{
				echo "<script>alert('Usuario o Password Incorrecto')</script>";
			}
		}
		else{
			echo "<script>alert('Usuario o Password Incorrecto')</script>";
		}
		}
		else{
			$user = $_POST['usuario'] = 0;
			$pass  =$_POST['password'] = 0;


		}
	
	}
	}


 ?>