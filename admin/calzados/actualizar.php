<?php


    // Validando URL
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obtener los datos de el calzado

    $consulta = "SELECT * FROM calzados WHERE id = $id";
    $resultado = mysqli_query($db, $consulta);
    $calzado = mysqli_fetch_assoc($resultado);

    $titulo = $calzado['titulo'];
    $precio = $calzado['precio'];
    $talle = $calzado['talle'];
    $imagen = $calzado['imagen'];
    $descripcion = $calzado['descripcion'];



  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $talle = mysqli_real_escape_string($db, $_POST['talle']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

  $imagen = $_FILES['imagen'];
  
  $carpetaIMG = '../../imagenes/';

  if($imagen['name']) {
    // Eliminar imagen previa si se repite el nombre al actualizar
    unlink($carpetaIMG . $calzado['imagen']);
 }



  // Generar nombre único 
  $nombreImg = md5( uniqid(rand(), true )) . ".jpg";


  // Subir img
  move_uploaded_file($imagen['tmp_name'], $carpetaIMG . $nombreImg);


  // Insertar en Base de Datos
  $query = "UPDATE calzados SET titulo = '$titulo', precio = $precio, talle = $talle, imagen = '$nombreImg', descripcion = '$descripcion' WHERE id = $id";


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
  <h1>Actualizar</h1>

  <a href="/admin">
      <img src="../../img/atras.svg">
    </a>

  <form id="crear" class="row g-3" method="POST" enctype="multipart/form-data">

    <div class="col-md-6">
      <label for="titulo" class="form-label">Titulo:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required>
    </div>

    <div class="col-md-6">
      <label for="precio" class="form-label">Precio:</label>
      <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $precio; ?>" required>
    </div>

    <div class="col-md-6">
      <label for="talle" class="form-label">Talle:</label>
      <input type="number" class="form-control" id="talle" name="talle" value="<?php echo $talle; ?>" required>
    </div>


    <div class="col-md-6">
      <label for="imagen" class="form-label">Imagen</label>
      <div class="input-group has-validation">
        <span class="input-group-text">Imagen:</span>
        <input type="file" class="form-control" id="imagen" accept="image/jpeg, image/png" name="imagen">
      </div>
      <img src="/imagenes/<?php echo $imagen; ?>" width="200">
    </div>


    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" required><?php echo $descripcion ?></textarea>
    </div>

    <div class="col-12">
      <button value="publicar" class="btn btn-primary" type="submit">Publicar</button>
    </div>
  </form>


</main>

<?php
includeTemplate('footer');
?>