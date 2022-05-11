<?php
	// declarar la conexión
	require_once('dbcon.php');

	if (isset($_POST['ventaId'])) {
		$ventaId = $_POST['ventaId'];
	}

	echo '<pre>';
	var_dump($_POST);
	die("Entro..");
	// revisar si existe el registro en la tabla
	$sql = "SELECT STOCK FROM productos WHERE ID = {$ventaId}";
	$result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $cantidad = $row["STOCK"];
    } 

    $fecha = date("Y-m-d H:i:s");  

	if ($result->num_rows > 0) {

		// SQL para actualizar un registro	
		$query = "UPDATE productos SET STOCK={$cantidad} WHERE id='{$ventaId}'";	
		if ($con->query($query)) {
			echo 1;
		}else{
			echo 0;
		}   

	    $sql = "SELECT IFNULL(MAX(id), 1) AS ID FROM ventas";
		$result = $con->query($sql);

	    while ($row = $result->fetch_assoc()) {
	        $id = $row["ID"];
	    } 

		$query = "INSERT INTO ventas (id, id_productos, cantidad, fch_venta) 
		VALUES($id, '$nombre', '$ventaId', '$cantidad', '$fecha')";
	    
		if ($con->query($query)) {  
	        return true;
	    }else{
	        return false;
	    }


	}
	
?>