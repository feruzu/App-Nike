<?php

// Importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

// Consultar
$query = "SELECT * FROM calzados";

// Obtener resultados
$resultado = mysqli_query($db, $query);

?>

<div class="productos">

  <?php while ($calzado = mysqli_fetch_assoc($resultado)) :  ?>

    <div class="card">
      <img src="./imagenes/<?php echo $calzado['imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $calzado['titulo']; ?></h5>
        <p><?php echo $calzado['precio']; ?></p>
        <a href="calzado.php?id=<?php echo $calzado['id']; ?>" class="btn btn-primary">Ver más</a>
      </div>
    </div>
  <?php endwhile; ?>
</div>