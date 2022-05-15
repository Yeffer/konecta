<?php
	// incluimos la conexión a MySQL

	include_once('../db/dbcon.php');    

	// variables para insertar datos a mysqli
	$nombre = strip_tags(trim($_POST["nombre"])); //Retira las etiquitas HTML
    $nombre = str_replace(array("\r","\n"),array(" "," "), $nombre);
    $referencia = filter_var(trim($_POST["referencia"]), FILTER_SANITIZE_STRING);
    $precio = trim($_POST["precio"]);
    $peso = trim($_POST["peso"]);    
    $id_categoria = $_POST["categoria"];
    $cantidad = trim($_POST["stock"]);    
    $fecha = date("Y-m-d H:i:s");  

    $sql = "SELECT IFNULL(MAX(ID), 0) + 1 AS MAX_ID FROM productos";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row["MAX_ID"];
    }    

    $query = "INSERT INTO productos (ID, NOMBRE, REFERENCIA, PRECIO, PESO, STOCK, FCH_CREACION, ID_CATEGORIA) 
	VALUES($id, '$nombre', '$referencia', $precio, $peso, $cantidad, '$fecha', $id_categoria)";
    
	if ($con->query($query)) {  
        return true;
    }else{
        return false;
    }


?>