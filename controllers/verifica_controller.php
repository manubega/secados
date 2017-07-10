<?php 
	
	class ClsVerifica {
		
		//VERIFICA QUE EL USUARIO Y EL PASSWORD SEAN VALIDOS
	public function verificaLogin(){
		$_GET['action'] = 0;

		if (isset($_POST['usuario'])&& isset($_POST['password'])) {
			$user = $_POST['usuario'];
			$pass  =$_POST['password'];

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