<?php
require 'includes/funciones.php';
includeTemplate('header');
?>


<main id="iniciar-sesion">
<div class="formulario" id="form">

    <form id="iniciar-sesion">
        <h1 class="iniciar-sesion">Iniciar Sesión</h1>

        <div class="mb-3 row" id="campo-form">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>

            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

        </div>
        <div class="mb-3 row" id="campo-form">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>

            <input type="password" class="form-control" id="inputPassword">

        </div>
    </form>
</div>
</main>





    <?php
    includeTemplate('footer');
    ?>