 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 98%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #eee;
}
</style>
<table id = "" class="display" collspacing = "0" width="100%">
	<tr>
		<th>No.</th>
		<th>No. Orden</th>
		<th>Cliente</th>
		<th>Cantidad</th>
		<th>Color</th>
		<th>Categoria</th>
		<th>Proceso</th>
		<th>Fecha de Registro</th>
		<th></th>
		<th></th>
	<tr>

<?php 

$obj = new ClcController();
$obj -> listaProduccionController();
?>
 <br />
 </table>

