<?php 
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /');
    }

        // Importar la conexión
        require 'includes/config/database.php';
        $db = conectarDB();
    
        // Consultar
        $query = "SELECT * FROM calzados WHERE id = $id";
    
        // Obtener resultados
        $resultado = mysqli_query($db, $query);
        $calzado = mysqli_fetch_assoc($resultado);


    require 'includes/funciones.php';
    includeTemplate('header');
?>


<body ontouchstart=""> 
<div class="card">
          <img src="./imagenes/<?php echo $calzado['imagen']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $calzado['titulo']; ?></h5>
            <p><?php echo $calzado['precio']; ?></p>
          </div>
        </div>
</body>


<?php
   includeTemplate('footer');
?>