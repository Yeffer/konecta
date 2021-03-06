<!DOCTYPE html>
<html lang="en">
<head>
  <title>KONECTA - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">  
    <a class="navbar-brand" href="../../index.php">PRODUCTOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="crear_producto.php">CREAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="venta_producto.php">VENTAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categoria.php">CATEGORÍA</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container" id="productos">
<br>
<div class="card">
  <div class="card-header">NUEVO PRODUCTO</div>
  <div class="card-body">
  
 <form class="form-horizontal" id="clienteForm">
  	<div class="form-group row">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="referencia">Referencia:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="referencia" placeholder="Ingrese referencia" name="referencia">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="precio">Precio:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="precio" placeholder="Ingrese precio" name="precio">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="peso">Peso:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="peso" placeholder="Ingrese peso" name="peso">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="categoria">Categoría:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="categoria" aria-label="Default select example">
        <option value="0">Seleccione...</option> 
          <?php
            // incluimos el fichero de conexión
            include_once('../db/dbcon.php');

            $sql = "SELECT ID, NOMBRE FROM categoria";  
            $query = $con->query($sql);
            while ($row = $query->fetch_assoc()) {              
              echo '<option value="'.$row['ID'].'">'.$row['NOMBRE'].'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="stock">Stock:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="stock" placeholder="Ingrese stock" name="stock">
      </div>
    </div>
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="registro">Nuevo</button>
      </div>
    </div>
  </form>
  </div>
</div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>