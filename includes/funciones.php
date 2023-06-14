<?php

require 'app.php';

function includeTemplate( string $nombre ){
    include TEMPLATE_URL . "/{$nombre}.php";
}