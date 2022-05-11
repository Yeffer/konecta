<?php
	// incluimos el fichero de conexión

	require_once('dbcon.php');
	
	// extraemos la informacion de la tabla clientes..
	$sql = "SELECT ID, NOMBRE, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK, FCH_CREACION FROM productos";	
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
						<th>Peso</th>
						<th>Categoria</th>
						<th>Cantidad</th>		
						<th>Comprar</th>
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
						<td><input type='number' class='form-control' id='cantidad' placeholder='Cantidad venta' name='cantidad'></td>
						<td><button class='btn btn-danger btn-sm venta-btn' data-id='{$row['ID']}'>Vender</button></td>		
					</tr>
			</tbody>";
		}
	$output .="</table>";
	echo $output;
	}else{
		echo "<h5>Ningún registro fue encontrado</h5>";
	}
	
?>


