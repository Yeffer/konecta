<?php
	// incluimos la conexión a MySQL

	include_once('../db/dbcon.php');    

	// variables para insertar datos a mysqli
	$nombre = strip_tags(trim($_POST["nombre"])); //Retira las etiquitas HTML
    $nombre = str_replace(array("\r","\n"),array(" "," "), $nombre);
    $descripcion = filter_var(trim($_POST["descripcion"]), FILTER_SANITIZE_STRING);    
    $fecha = date("Y-m-d H:i:s");  

    $sql = "SELECT IFNULL(MAX(ID), 0) + 1 AS MAX_ID FROM categoria";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row["MAX_ID"];
    }    
    
    $query = "INSERT INTO categoria (ID, NOMBRE, DESCRIPCION, FCH_CREACION) 
	VALUES($id, '$nombre', '$descripcion', '$fecha')";
    
	if ($con->query($query)) {  
        return true;
    }else{
        return false;
    }


?>