<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../views/login.php");
    exit();
}


?>

<?php
require_once '../views/header.php'; //Importamos el header
?>

<h4 class="text-center">Rey del toque</h4>

<div class="container text-center bg-success-subtle">
    <iframe src="../juegos/balance_ball/index.html" frameborder="0" class="rounded m-4" height="400" width="225"></iframe>
</div>


<?php

require_once '../views/ranking_balance_ball.php'; //Importamos el ranking del juego Soccer Goal

require_once '../views/posicion_jugador_balance_ball.php'; //Importamos la posición del jugador en el ranking

require_once '../views/footer.php'; //Importamos el footer
?>