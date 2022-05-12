<?php
	// declarar la conexión
	require_once('dbcon.php');

	if (isset($_POST['ventaId'])) {
		$ventaId = $_POST['ventaId'];
	}
	if (isset($_POST['cantidad'])) {
		$cantidadEntrada = $_POST['cantidad'];
	}

	// revisar si existe el registro en la tabla
	$sql = "SELECT STOCK FROM productos WHERE ID = {$ventaId}";
	$result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $cantidad = $row["STOCK"];
    } 
    $fecha = date("Y-m-d H:i:s");  
        
    if($cantidadEntrada > $cantidad || $cantidadEntrada <= 0 || $cantidadEntrada == ''){
    	return 0;	
    }else{
    	if ($result->num_rows > 0) {
			
    		//Se realiza la difrecia para actulizar
    		$total = $cantidad - $cantidadEntrada;

    		// SQL para actualizar un registro	
			$query = "UPDATE productos SET STOCK={$total} WHERE id='{$ventaId}'";			
			if ($con->query($query)) {
				echo 1;
			}else{
				echo 0;
			}   

		    $sql = "SELECT IFNULL(MAX(id), 1) AS ID FROM ventas";
			$result = $con->query($sql);

		    while ($row = $result->fetch_assoc()) {
		        $id = $row["ID"]+1;
		    } 
		    
		    //Insertamos las ventas
			$query = "INSERT INTO ventas (id, id_productos, cantidad, fch_venta) 
			VALUES($id, $ventaId, $cantidadEntrada, '$fecha')";		    

			if ($con->query($query)) {  
		        return 1;
		    }else{
		        return 0;
		    }
		}
    }
	
?>