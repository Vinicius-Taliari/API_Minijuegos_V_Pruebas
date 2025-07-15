<?php

include_once 'obtener_ranking.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../views/login.php");
    exit();
}

$ranking = getRankingData($db, 2);
?>