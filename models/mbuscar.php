<?php 

		$mysqli = new mysqli("localhost", "root", "", "dbsecados");
$salida = "";

$query = "SELECT * FROM orden, clientes WHERE clientes.id_cliente = orden.id_cliente ORDER BY fecha_ingreso";

if (isset($_POST['consulta'])) {
	$q  = $mysqli->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM orden, clientes WHERE orden.id_cliente = clientes.id_cliente LIKE '%".$q."%' OR nombre LIKE '%".$q."%' OR  numOrden LIKE '%".$q."%' OR fecha_ingreso LIKE '%".$q."%'";
}

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
	
	
	?>

	<table id = "" class="display" collspacing = "0" width="100%">
	<tr>
		<th>No.</th>
		<th>No. Orden</th>
		<th> ID de Cliente</th>
		<th>Cliente</th>
		<th>Cantidad</th>
		<th>Color</th>
		<th>Categoria</th>
		<th>Proceso</th>
		<th>Fecha de Registro</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	$i = 1;

						while ($fila = $resultado->fetch_assoc()) {
							$salida.= "<tr>
											<td>".$i."</td>
											<td>".$fila['numOrden']."</td>
											<td>".$fila['id_cliente']."</td>
											<td>".$fila['nombre']."</td>
											<td>".$fila['cantidad']."</td>
											<td>".$fila['color']."</td>
											<td>".$fila['categoria']."</td>
											<td>".$fila['proceso']."</td>
											<td>".$fila['fecha_ingreso']."</td>	
											<td><a href='principal.php?action=produccion&&opcion=buscar'><i class='fa fa-minus-square-o' aria-hidden='true'></i></a></td>
											<td><a href='principal.php?action=produccion&&opcion=buscar'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>
										</tr>";
										$i ++;
						}
						$salida.="<tbody></table>";
						
}//END IF

else{
	$salida.="NO HAY DATOS";
}

echo $salida;
$mysqli->close(); 	






?>