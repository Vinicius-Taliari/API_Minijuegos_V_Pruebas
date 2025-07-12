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

<div class="container">
    <h3 class="display-6 text-center">Elije el juego</h3>
    <div class="grid text-center container">
        <div class="g-col-4"><a href="soccer_goal.php">Soccer Goal</a></div>
    </div>
</div>

<?php
require_once '../views/footer.php';
?>