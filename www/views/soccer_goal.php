<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../views/login.php");
    exit();
}

?>

<?php
require_once '../views/header.php';
?>

<h4 class="text-center">Soccer Goal</h4>

<div class="container text-center">
    <iframe src="../juegos/Soccer_Goal/index.html" frameborder="0" class="container" height="400"></iframe>
</div>

<?php
require_once '../views/footer.php';
?>