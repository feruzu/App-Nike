<?php

    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){ 

      $titulo = $_POST['titulo'];
      $precio = $_POST['precio'];
      $talle = $_POST['talle'];
      $descripcion = $_POST['descripcion'];


      // Insertar en Base de Datos
      $query = " INSERT INTO calzados (titulo, precio, talle, descripcion) VALUES ( '$titulo', '$precio', '$talle', '$descripcion')";

      // echo $query;

      $resultado = mysqli_query($db, $query);

      if($resultado){
        echo "Insertado Correctamente";
      }

    }
 
    require '../../includes/funciones.php';
    includeTemplate('header');
    ?>

<main class="container seccion">
    <h1>Titulo paginas</h1>

    <a href="/admin">Volver</a>



<form id="crear" class="row g-3 needs-validation" novalidate method="POST" action="/admin/propiedades/crear.php">
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
      <input type="file" class="form-control" id="imagen" accept="image/jpeg, image/png" required>
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
