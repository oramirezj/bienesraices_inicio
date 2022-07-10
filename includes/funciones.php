<?php

require 'app.php';

function incluirTemplete(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}