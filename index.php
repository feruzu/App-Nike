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
    require 'includes/funciones.php';
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



      <div class="productos">

        <div class="card">
          <img src="./img/calzado-negro.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Max</h5>
            <p>$6.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-blanco.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike</h5>
            <p>$7.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-rosado.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Rosa</h5>
            <p>$5.999</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-verde.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Verdes</h5>
            <p>$10.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-amarillo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Amarillos</h5>
            <p>$7.600</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-air-max.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Max Jordan</h5>
            <p>$9.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-skateboard.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Skateboard</h5>
            <p>$3.900</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-bryant-bulldog.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Bryant Bulldog</h5>
            <p>$9.999</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-air-max-97.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Max 97</h5>
            <p>$11.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-nike-zoom.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Zoom</h5>
            <p>$6.999</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-air-max-blanco-rojo.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Max</h5>
            <p>$9.999</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

        <div class="card">
          <img src="./img/calzado-air-max-huarache.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike Air Max Huarache</h5>
            <p>$11.000</p>
            <a href="#" class="btn btn-primary">Ver más</a>
          </div>
        </div>

      </div>
      
    </section>


    <?php
   includeTemplate('footer');
    ?>








    <!--  Bootstrap   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>

</html>