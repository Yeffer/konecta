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
        <li class="nav-item">
          <a class="nav-link" href="crear_producto.php">CREAR</a>
        </li>
        <li class="nav-item active">
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
    <div class="card-header">VENDER PRODUCTOS</div>
    <div class="card-body">
      <div id="tableDataVenta"></div>
    </div>  
  </div>
</div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>