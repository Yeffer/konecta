<?php
	// incluimos el fichero de conexión

	require_once('../db/dbcon.php');
	
	// extraemos la informacion de la tabla clientes..
	$sql = "SELECT P.ID, P.NOMBRE, P.REFERENCIA, P.PRECIO, P.PESO,  C.NOMBRE AS CATEGORIA, P.STOCK, P.FCH_CREACION
			FROM productos P
			INNER JOIN categoria C ON P.ID_CATEGORIA = C.ID
			ORDER BY P.ID";	
	$query = $con->query($sql);
	if ($query->num_rows  > 0) {
		$output = "";
		$output .= "<table class='table table-hover table-striped'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Referencia</th>
						<th>Precio</th>
						<th>Peso Kg</th>
						<th>Categoría</th>
						<th>Cantidad</th>						
						<th>Fecha creación</th>
					</tr>
				</thead>";
		while ($row = $query->fetch_assoc()) {
		$output .= "<tbody>
					<tr>
						<td>{$row['ID']}</td>
						<td>{$row['NOMBRE']}</td>
						<td>{$row['REFERENCIA']}</td>
						<td>{$row['PRECIO']}</td>
						<td>{$row['PESO']}</td>
						<td>{$row['CATEGORIA']}</td>
						<td>{$row['STOCK']}</td>
						<td>{$row['FCH_CREACION']}</td>
						<td><button class='btn btn-success btn-sm editar-btn' data-id='{$row['ID']}' data-toggle='modal' data-target='#exampleModal'>Editar</button></td>						
						<td><button class='btn btn-danger btn-sm borrar-btn' data-id='{$row['ID']}'>Borrar</button></td>
					</tr>
			</tbody>";
		}
	$output .="</table>";
	echo $output;
	}else{
		echo "<h5>Ningún registro fue encontrado</h5>";
	}
	
?>


