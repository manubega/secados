<?php 

		$mysqli = new mysqli("localhost", "root", "", "dbsecados");
$salida = "";

$query = "SELECT * FROM clientes ORDER BY fecha_registro DESC";

if (isset($_POST['consulta'])) {
	$q  = $mysqli->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM clientes WHERE id_cliente LIKE '%".$q."%' OR nombre LIKE '%".$q."%' ORDER BY fecha_registro DESC";
}

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
	
	
	?>

	<table id = "" class="display" collspacing = "0" width="100%">
	<tr>
		<th>Cliente</th>
		<th> ID de Cliente</th>
	</tr>
	<?php
	$i = 1;

						while ($fila = $resultado->fetch_assoc()) {
							$salida.= "<tr>
											<td>".$fila['nombre']."</td>
											<td>".$fila['id_cliente']."</td>	
										</tr>";
										$i ++;
						}
						$salida.="<tbody></table>";
						
}//END IF

else{
	$salida.="NO SE ENCONTRO CLIENTE";
}

echo $salida;
$mysqli->close(); 	






?>