<?php

// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $talle = mysqli_real_escape_string($db, $_POST['talle']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

  $imagen = $_FILES['imagen'];

  var_dump($imagen);

  $carpetaIMG = '../../imagenes/';

  // Generar nombre único 
  $nombreImg = md5( uniqid(rand(), true )) . ".jpg";

  // Subir img
  move_uploaded_file($imagen['tmp_name'], $carpetaIMG . $nombreImg);

  // Insertar en Base de Datos
  $query = " INSERT INTO calzados (titulo, precio, talle, imagen, descripcion) VALUES ( '$titulo', '$precio', '$talle', '$nombreImg', '$descripcion')";


  $resultado = mysqli_query($db, $query);

  if ($resultado) {

  // Redireccionar 
    header('Location: /admin');
  }
}

require '../../includes/funciones.php';
includeTemplate('header');

?>

<main class="container seccion">
  <h1>Añadir Producto</h1>

  <a href="/admin">
      <img src="../../img/atras.svg">
    </a>

  <form id="crear" class="row g-3" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">

    <div class="col-md-6">
      <label for="titulo" class="form-label">Titulo:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="col-md-6">
      <label for="precio" class="form-label">Precio:</label>
      <input type="number" class="form-control" id="precio" name="precio" required>
    </div>

    <div class="col-md-6">
      <label for="talle" class="form-label">Talle:</label>
      <input type="number" class="form-control" id="talle" name="talle" required>
    </div>


    <div class="col-md-6">
      <label for="imagen" class="form-label">Imagen</label>
      <div class="input-group has-validation">
        <span class="input-group-text">Imagen:</span>
        <input type="file" class="form-control" id="imagen" accept="image/jpeg, image/png" name="imagen" required>
      </div>
    </div>


    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
    </div>

    <div class="col-12">
      <button value="publicar" class="btn btn-primary" type="submit">Publicar</button>
    </div>
  </form>


</main>

<?php
includeTemplate('footer');
?>