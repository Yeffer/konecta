<?php
	// incluimos el fichero de conexión

	include_once('../db/dbcon.php');
	
	// extraemos la informacion de la tabla clientes..
	$sql = "SELECT ID, NOMBRE, DESCRIPCION, FCH_CREACION FROM categoria ORDER BY FCH_CREACION DESC";	
	$query = $con->query($sql);
	if ($query->num_rows  > 0) {
		$output = "";
		$output .= "<table class='table table-hover table-striped'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Fecha</th>
					</tr>
				</thead>";
		while ($row = $query->fetch_assoc()) {
		$output .= "<tbody>
					<tr>
						<td>{$row['ID']}</td>
						<td>{$row['NOMBRE']}</td>
						<td>{$row['DESCRIPCION']}</td>
						<td>{$row['FCH_CREACION']}</td>
					</tr>
			</tbody>";
		}
	$output .="</table>";
	echo $output;
	}else{
		echo "<h5>Ningún registro fue encontrado</h5>";
	}
	
?>


