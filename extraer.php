<?php
	// incluimos fichero de conexión
	require_once('dbcon.php');

	if (isset($_POST['editarId'])) {
		$editarId = $_POST['editarId'];
	}
	// extraer tabla clientes..
	
	//$sql = "SELECT ID, NOMBRE, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK FROM productos WHERE id = {$editarId}";

	$sql = "SELECT P.ID, P.NOMBRE, P.REFERENCIA, P.PRECIO, P.PESO,  C.NOMBRE AS CATEGORIA, P.STOCK, P.FCH_CREACION, C.ID AS ID_CATEGORIA
			FROM productos P
			INNER JOIN categoria C ON P.ID_CATEGORIA = C.ID WHERE P.ID = {$editarId}";	
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
										        <select class='form-control' id='editarCategoria' aria-label='Default select example'>
										        <option value='0'>Seleccione...</option>";   
										          
										            // incluimos el fichero de conexión
										            require_once('dbcon.php');

										            $sql = "SELECT ID, NOMBRE FROM categoria";  
										            $query = $con->query($sql);
										            while ($row2 = $query->fetch_assoc()) {              
										              $output .="<option value='{$row2['ID']}'>{$row2['NOMBRE']}</option>";
										            }
										          
										      $output .=" </select>										      
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
