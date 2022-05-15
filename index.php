<!DOCTYPE html>
<html lang="en">
<head>
  <title>KONECTA - PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">  
      <a class="navbar-brand" href="index.php">PRODUCTOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="assets/view/crear_producto.php">CREAR</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="assets/view/venta_producto.php">VENTAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="assets/view/categoria.php">CATEGORÍA</a>
        </li>
      </ul>
    </div>    
  </nav>
</div>
<div class="container" id="productos">
<br>
<div class="card">
  <div class="card-header">LISTA PRODUCTOS</div>
  <div class="card-body">
  <div id="tableData"></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><b>Editar producto</b></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="editarForm"></div>
            </div>
        </div>   
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>