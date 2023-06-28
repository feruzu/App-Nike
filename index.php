<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">

    <!--Fuentes-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;800;900&display=swap" rel="stylesheet">

    <!--  Bootstrap   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Nike</title>
</head>

<body ontouchstart=""> 

    <?php
    require './includes/funciones.php';
    includeTemplate('header');
    ?>

    <main>
        <div class="contenedor">
          <div class="calzado-portada">
            <img src="./img/calzado-nike-portada.png">
        </div>
            <h1 class="titulo-nike">NIKE</h1>
        </div>
    </main>

    <section id="nosotros" class="nosotros">
      <div class="grid-container">
        <div class="item">
          <img class="championes" src="./img/championes.png" id="championes">
        </div>
         
          <h1 class="item">SOBRE <br> NOSOTROS</h1>
        
        <div class="item"> <img class="corriendo" src="./img/corriendo.png" id="corriendo"></div>
        <div class="item"> <img class="ejercicio" src="./img/ejercicio.png" id="ejercicio"></div>
        <div class="item"> <img class="pesas" src="./img/pesas.png" id="pesas">
        </div>
      </div>
    </section>


    <section class="banner">
      <video src="./video/banner-nike-video.mp4" muted autoplay loop playsinline id="banner-nike">
    </section>

    <section id="calzados" class="calzados">
      <div class="dropdown" id="filtrar">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Mujer</a></li>
          <li><a class="dropdown-item" href="#">Hombre</a></li>
          <li><a class="dropdown-item" href="#">Todo</a></li>
        </ul>
      </div>


    <?php include 'calzados.php' ?>
      
      
    </section>

    <?php
   includeTemplate('footer');
    ?>
</body>

</html>