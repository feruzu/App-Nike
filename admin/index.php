<?php

    // Importar la conexion 
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM calzados";

    // Consultar BD
    $resultado =  mysqli_query($db, $query);



    // Eliminar calzado
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];

        $id = filter_var($id, FILTER_VALIDATE_INT);


        if($id){
        // Eliminar imagen
        $query = "SELECT imagen FROM calzados WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        $calzados = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $calzados['imagen']);

        // Eliminar archivo     
        $query = "DELETE FROM calzados WHERE id = $id";
        $resultado = mysqli_query($db, $query);

            if($resultado){
                header('location: /admin');
            }
        }
    }

    require '../includes/funciones.php';
    includeTemplate('header');
    ?>

<section class="container seccion actualizar">
    <h1>Administrador de Calzados</h1>

    <a href="/admin/calzados/crear.php" class="añadir">Añadir</a>


    <table class="productos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Talle</th>
                <th>Calzados</th>
            </tr>
        </thead>

        <tbody>
            <?php while($calzados = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $calzados['id']; ?></td>
                <td><?php echo $calzados['titulo']; ?></td>
                <td> <img src="/imagenes/<?php echo $calzados['imagen']; ?> "class="imagen-tabla"></td>
                <td>$<?php echo $calzados['precio']; ?></td>
                <td><?php echo $calzados['talle']; ?></td>
                <td>

                <form method="POST" class="formulario-botones">
                <input type="hidden" name="id" value="<?php echo $calzados['id']; ?>">

                <input type="submit" class="boton-borrar" value="Eliminar"></input>
                </form>   
                    

                    <a class="boton-actualizar" href="admin/calzados/actualizar.php?id=<?php echo $calzados['id']; ?>">Actualizar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php
    mysqli_close($db);

   includeTemplate('footer');
    ?>
