<?php

require_once 'Medoo.php';
use Medoo\Medoo;

$db = new Medoo([
    'type' => 'mysql',
    'host' => 'mysql',
    'database' => 'videojuego',
    'username' => 'root',
    'password' => 'root'
]);
