<?php $mysqli = new mysqli("localhost", "root", "", "dbsecados");
$salida = "";

$query = "SELECT * FROM orden, clientes WHERE clientes.id_cliente = orden.id_cliente ORDER BY fecha_ingreso";

if (isset($_POST['consulta'])) {
	$q  = $mysqli->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM orden, clientes WHERE numOrden LIKE '%".$q."%' OR nombre LIKE '%".$q."%' OR  fecha_ingreso LIKE '%".$q."%' ";
}

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
	
	?>

	<table id = "" class="display" collspacing = "0" width="100%">
	<th>No.</th><th>No. Orden</th><th>Cliente</th><th>Cantidad</th><th>Color</th><th>Categoria</th><th>Proceso</th><th>Fecha de Registro</th>
	<?php

						while ($fila = $resultado->fetch_assoc()) {
							$salida.= "<tr>
											<td>".$fila['id_cliente']."</td>
											<td>".$fila['nombre']."</td>
											<td>".$fila['numOrden']."</td>
											<td>".$fila['color']."</td>
											<td>".$fila['cantidad']."</td>
											<td>".$fila['fecha_ingreso']."</td>	
										</tr>";
						}
						$salida.="<tbody></table>";
}//END IF

else{
	$salida.="NO HAY DATOS";
}

echo $salida;
$mysqli->close(); ?>