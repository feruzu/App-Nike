<?php
function conectarDB() {
    $db = mysqli_connect('localhost', 'root', 'MiSQL', 'data_base');

    if($db) {
        echo "Se conecto";
    }else{
        echo "No se conecto";
    }
}