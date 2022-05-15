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
        <li class="nav-item">
          <a class="nav-link" href="venta_producto.php">VENTAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="categoria.php">CATEGORÍA</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="container" id="productos">
<br>
<div class="card">
  <div class="card-header">NUEVA CATEGORIA</div>
  <div class="card-body">
  
 <form class="form-horizontal" id="categoriaForm">
  	<div class="form-group row">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" placeholder="Ingrese descripción" name="descripcion">
      </div>
    </div>
    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="registroCategoria">Crear</button>
      </div>
    </div>
  </form>
  </div>
</div>
<div class="container" id="listCategoria">
<br>
<div class="card">
  <div class="card-header">LISTA CATEGORIAS</div>
  <div class="card-body">
  <div id="tableDataCategoria"></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><b>Editar categoría</b></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="editarCategoriaForm"></div>
            </div>
        </div>   
    </div>
    
  </div>
</div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>