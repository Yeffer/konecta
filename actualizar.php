<?php
	// incluimos la conexión
	include "dbcon.php";

	// Variables para editar la tabla por id
	$id = $_POST['editar_id'];
	$nombre = $_POST['nombre'];
	$referencia = $_POST['referencia'];
	$precio = $_POST['precio'];
	$peso = $_POST['peso'];
	$categoria = $_POST['categoria'];
	$cantidad = $_POST['cantidad'];

	// SQL para actualizar un registro	
	$query = "UPDATE productos SET NOMBRE='{$nombre}',REFERENCIA='{$referencia}',PRECIO={$precio},PESO={$peso}, CATEGORIA='{$categoria}', STOCK={$cantidad} WHERE id='{$id}'";	
	if ($con->query($query)) {
		echo 1;
	}else{
		echo 0;
	}

?>
