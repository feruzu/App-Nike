<?php

    // Base de datos
    require '../../includes/config/database.php';
    conectarDB();



    require '../../includes/funciones.php';
    includeTemplate('header');
    ?>

<main class="container seccion">
    <h1>Titulo paginas</h1>

    <a href="/admin">Volver</a>



<form id="crear" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="titulo" class="form-label">Titulo:</label>
    <input type="text" class="form-control" id="titulo" value="Nombre calzado" required>
  </div>

  <div class="col-md-4">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" class="form-control" id="precio" value="precio" required>
  </div>

  <div class="col-md-4">
    <label for="talle" class="form-label">Talle:</label>
    <input type="number" class="form-control" id="talle" value="talle" required>
  </div>


  <div class="col-md-8">
    <label for="imagen" class="form-label">Imagen</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="imagen">Imagen:</span>
      <input type="file" class="form-control" id="imagen" accept="image/jpeg, image/png" required>
    </div>
  </div>


  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea class="form-control" id="descripcion" required></textarea>
  </div>

  <div class="col-12">
    <button value="publicar" class="btn btn-primary" type="submit">Publicar</button>
  </div>
</form>









</main>


<?php
   includeTemplate('footer');
    ?>
