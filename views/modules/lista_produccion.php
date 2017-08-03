 <link rel="stylesheet" type="text/css" href="../../views/jquery/css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="../../views/jquery/js/jquery.js">
 <link rel="stylesheet" type="text/css" href=".../../views/jquery/js/jquery.dataTables.min.js">

<script>
	$(document).ready(function(){
    $('#tabla').DataTable();
});
</script>
<table id = "tabla" class="display" collspacing = "0" width="100%">
	<th>Numero</th><th>No. Orden</th><th>Cliente</th><th>Cantidad</th><th>Color</th><th>Categoria</th><th>Proceso</th><th>Observaciones</th>

<?php 

$obj = new ClcController();
$obj -> listaProduccionController();
?>
 <br />
 </table>

