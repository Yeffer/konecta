<!DOCTYPE html>
<html lang="en">
<head>
  <title>KONECTA - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PRODUCTOS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="crear_producto.php">CREAR</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="venta_producto.php">VENTAS</a>
      </li>
    </ul>
  </div>
</nav>
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
        <input type="text" class="form-control" id="categoria" placeholder="Ingrese Categoría" name="categoria">
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
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>