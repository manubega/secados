<?php 
session_start();
if (!$_SESSION['root']) {
	header('Location:../../index.php');
}

 ?>
<script type="text/javascript">
	function buscar(){
		var opcion = document.getElementById('names').value;
		window.location.href = 'http://localhost:8000/secados/views/modules/principal.php?action=produccion&&opcion=' + opcion;
	}
</script>
 <form action="post">
 	<select name="names" id="names" onchange="return buscar();">
 		<option value=""></option>
 		<option value="hola"></option>
 	</select>
 </form>
 <!--===================================================================
 =            OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR            =
 ====================================================================-->
 <div id = "prod1">
	
	 <a href="principal.php?action=produccion&&opcion=nuevo"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
	 
	 <?php 

	 if ($_SESSION['root'] == 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=editar'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>";
	 }
	 if ($_SESSION['root'] == 'si') {
	 	echo "<a href='principal.php?action=produccion&&opcion=eliminar'><i class='fa fa-minus-square-o' aria-hidden='true'></i></a>";
	 } ?>
	
	<a href="principal.php?action=produccion&&opcion=ver"><i class="fa fa-street-view" aria-hidden="true"></i></a>
	<a href="principal.php?action=produccion&&opcion=buscar"><i class="fa fa-search" aria-hidden="true"></i>
</a>

	<!--====  End of OPCIONES: NUEVO EDITAR ELIMINAR LISTAR BUSCAR  ====-->

<?php 
if (isset($_GET['opcion'])) {
	if ($_GET['opcion'] == 'nuevo') {
		
		include_once 'nuevo.php';
	}
	elseif ($_GET['opcion'] == 'editar') {
		if ($_SESSION['root'] == 'si') {
			echo "PERMISO DE EDITAR";
			include_once 'editar.php';
		}
		else{
			echo "NO TIENE PERMISO PARA ESTA OPCIÓN";
		}
		
	}
	elseif ($_GET['opcion'] == 'eliminar') {
		if ($_SESSION['root'] == 'si') {
			echo "PERMISO DE ELIMINAR";
		}
		else
		{
			echo "NO TIENES PERMISOS PARA ESTA OPCIÒN";	
		}
	}
		elseif ($_GET['opcion'] == 'ver') {
			echo "VER";
		}
}
?>

</div>


<?php

$obj = new ClcController();
$obj -> produccionNuevo();

?>