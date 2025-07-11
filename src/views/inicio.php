<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../views/login.php");
    exit();
}

?>

<h1>Hola</h1>