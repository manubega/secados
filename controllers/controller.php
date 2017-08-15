
<?php 
//include_once '../models/model.php';

class ClcController{

public function registroProduccionController(){

	if (isset($_POST['numOrden']) && isset($_POST['clienteOrden']) && isset($_POST['cantidadOrden']) && isset($_POST['colorOrden']) && isset($_POST['categoriaOrden']) && isset($_POST['procesoOrden'])) {


	$datosController = array('numOrden' => $_POST['numOrden'],
							'nombre' => $_POST['clienteOrden'],
							'cantidad' => $_POST['cantidadOrden'],
							'color' => $_POST['colorOrden'],
							'categoria' => $_POST['categoriaOrden'],
							'proceso' => $_POST['procesoOrden'],
							'observaciones' => $_POST['observacionesOrden']);
						

			$respuesta = ClsModel::registroProduccionModel($datosController, 'orden');

		print_r($respuesta);

			}//END IF	
}

public function listaProduccionController(){

	$respuesta = ClsModel::listaProduccionModel('orden','clientes');
	//print_r($respuesta);
	echo "<br />";
	$no = 1;
	
		foreach ($respuesta as $fila => $columna): 
			$id = $columna['id_cliente'];
			?>

		<tr>	
		<td><?php echo $no; ?></td>
		<td><?php echo $columna['numOrden'] ?></td>
		<td><?php echo $columna['nombre']?></td>
		<td><?php echo $columna['cantidad'] ?></td>
		<td><?php echo $columna['color']?></td>
		<td><?php echo $columna['categoria'] ?></td>
		<td><?php echo $columna['proceso']?></td>
		<td><?php echo $columna['fecha_ingreso']?></td>
		<td><?php echo '<a href = "principal.php?action=produccion&opcion=editar&id='.$columna["id_codigo"].'"><i class = "fa fa-pencil-square-o">'?></td>
		<td><?php echo '<a href = "principal.php?action=produccion&opcion=eliminar&id='.$columna["id_codigo"].'"><i class = "fa fa-minus-square-o">'?></td>
		</tr>
  <?php 
     $no++;
  endforeach;
  
 


}//END FUNCTION

public function editarProduccionController(){

	$datosController = $_GET['id'];
	$respuesta = ClsModel::editarProduccionModel($datosController,'orden');

	$cuero = '';
	$lado = '';
	$delantero = '';
	$reproceso = '';
	if($respuesta["categoria"] == "CUERO"){$cuero = "CUERO";}
	if($respuesta["categoria"] == "LADO"){$lado = "LADO";}
	if($respuesta["categoria"] == "DELANTERO"){$delantero = "DELANTERO";}
	if($respuesta["categoria"] == "REPROCESO"){$reproceso = "REPROCESO";}
	
	echo '	<input type="text" name="numOrden" id="tres"  value ="'.$respuesta["numOrden"].'" required=""><span class="error">*</span>
	<br>
	<br>
	<input type="text" name="clienteOrden" id = "uno" value ="'.$respuesta["nombre"].'" required=""><span class="error">*</span>
	<br>
	<br>
	<input type="number" name="cantidadOrden" id = "cantidadOrden" value="'.$respuesta["cantidad"].'" " required=""><span class="error">*</span>
	
	<input type="text" name="colorOrden" id="colorOrden"  value="'.$respuesta["color"].'" required=""><span class = "error">*<label for="error"></label></span>
	<br>
	<br>';
	?>
	CATEGORIA:
	<input type="radio" name="categoriaOrden" <?php if(isset($cuero) && $respuesta['categoria'] == "CUERO"){echo 'checked = "ckecked"';} ?> value = "CUERO" required>
	<label for="Cuero">Cuero</label>
	<input type="radio" name="categoriaOrden" <?php if(isset($cuero) && $respuesta['categoria'] == "LADO"){echo 'checked = "ckecked"';} ?> value = "LADO" required>
	<label for="lado">Lado</label>
	<input type="radio" name="categoriaOrden" <?php if(isset($cuero) && $respuesta['categoria'] == "DELANTERO"){echo 'checked = "ckecked"';} ?> value = "DELANTERO" required>
	<label for="delantero">Delantero</label>
	<input type="radio" name="categoriaOrden" <?php if(isset($cuero) && $respuesta['categoria'] == "REPROCESO"){echo 'checked = "ckecked"';} ?> value = "RETROCESO" required>
	<label for="delantero">Reproceso</label><span class="error">*</span>
	<br>
	<br>
	PROCESO:
	<select required="" name=""	>
		<option value="">Seleccione un proceso</option>
		<option value="ESC. Y DESV. BAUCE">1 - ESCURRIDO Y DESVENADO (BAUCE)</option>
		<option value="ESC. Y DESV.  POLETO">2 - ESCURRIDO Y DESVENADO (POLETO)</option>
		<option value="WET STRECH">3 - WET STRECH</option>
		<option value="VACIO MAQ. CARTIGLIANO">4 - VACIO (MAQ. CARTIGLIANO)</option>
		<option value="VACIO MAQ. IMPREGNACION">5 - VACIO IMPREGNACION</option>
		<option value="COLG. AEREO NEW TRADING">6 - COLGADO AEREO (NEW TRADING)</option>
		<option value="COLG. AEREO HUMEDO">7 - COLGADO AEREO (HUMEDO)</option>
		<option value="AFLOJADO MAQ. CART">8 - AFLOJADO (MAQ. CARTIGLIANO)</option>
		<option value="TOGGLEN">9 - TOGGLEN</option>
		<option value="PULIDO">10 - PULIDO</option>
		<option value="PULIDO CON ACABADO">11 - PULIDO C/ ACABADO</option>
		<option value="TAMBOREO">12 - TAMBOREO</option>
		<option value="TEÑIDO">13 - TEÑIDO</option>

	</select><span class="error">*</span>
	<br>
	<br>
	Observaciones: <textarea id = "observaciones" name = "observacionesOrden" value = "'.$respuesta["observaciones"].'" "rows="5" cols="50"></textarea>';
	<?php 
}//END FUNCTION

}//END CLASS
//echo '<tr><td>'.$no.'<td>'.$columna['numOrden'].'</td><td>'.$columna['nombre'].'</td></tr>';

 ?>