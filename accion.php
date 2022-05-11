<?php
	// incluimos la conexión a MySQL

	include_once('dbcon.php');

	// variables para insertar datos a mysqli
	$nombre = strip_tags(trim($_POST["nombre"])); //Retira las etiquitas HTML
    $nombre = str_replace(array("\r","\n"),array(" "," "), $nombre);
    $referencia = filter_var(trim($_POST["referencia"]), FILTER_SANITIZE_STRING);
    $precio = trim($_POST["precio"]);
    $peso = trim($_POST["peso"]);
    $categoria = filter_var(trim($_POST["categoria"]), FILTER_SANITIZE_STRING);
    $cantidad = trim($_POST["stock"]);    
    $fecha = date("Y-m-d H:i:s");  

    $sql = "SELECT IFNULL(MAX(ID), 1) AS MAX_ID FROM productos";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row["MAX_ID"];
    }    
    $id = $id+1;
        
    $query = "INSERT INTO productos (ID, NOMBRE, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK, FCH_CREACION) 
	VALUES($id, '$nombre', '$referencia', '$precio', '$peso', '$categoria', '$cantidad', '$fecha')";
    
	if ($con->query($query)) {  
        return true;
    }else{
        return false;
    }


?>