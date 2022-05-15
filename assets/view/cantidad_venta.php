<?php
	// incluimos fichero de conexión
	require_once('dbcon.php');

	if (isset($_POST['editarId'])) {
		$editarId = $_POST['editarId'];
	}
	// extraer tabla clientes..
	
	$sql = "SELECT ID, NOMBRE, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK FROM productos WHERE id = {$editarId}";
	$query = $con->query($sql);
	if ($query->num_rows > 0) {
		$output = "";
		while ($row = $query->fetch_assoc()) {
	    $output .= "<form>
                      <div class='modal-body'>
                      	<input type='hidden' class='form-control' id='editarId' value='{$row['ID']}'>
                        <div class='form-group'>
														<label class='control-label' for='nombre'>Nombre:</label>
                            <input type='text' class='form-control' id='editarNombre' value='{$row['NOMBRE']}'>
                        </div>
                        <div class='form-group'>
														<label class='control-label' for='referencia'>Referencia:</label>
                            <input type='text' class='form-control' id='editarReferencia' value='{$row['REFERENCIA']}'>
                        </div>
												<div class='form-group'>
												<label class='control-label' for='precio'>Precio:</label>
                            <input type='number' class='form-control' id='editarPrecio' value='{$row['PRECIO']}'>
                        </div>
                        <div class='form-group'>
												<label class='control-label' for='peso'>Peso:</label>
                            <input type='number' class='form-control' id='editarPeso' value='{$row['PESO']}'>
                        </div>
                        <div class='form-group'>
														<label class='control-label' for='categoria'>Categoria:</label>
                            <input type='text' class='form-control' id='editarCategoria' value='{$row['CATEGORIA']}'>
                        </div>
                         <div class='form-group'>
														<label class='control-label' for='cantidad'>Cantidad:</label>
                            <input type='number' class='form-control' id='editarCantidad' value='{$row['STOCK']}'>
                        </div>                         
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                        <button type='button' class='btn btn-info' id='editarSubmit'>Guardar cambios</button>
                      </div>
                  </form>";         	
	    }
	    $output .="</table>";
	}
	echo $output;

?>
