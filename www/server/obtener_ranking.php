<?php
require_once 'connection.php';

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../views/login.php");
    exit();
}

// Fetch ranking data
function getRankingData($db, $id_juego) {
    $sql = "
    SELECT puntos.id_user, usuarios.nombre, SUM(puntos.puntos) AS total_puntos
    FROM puntos
    JOIN usuarios ON puntos.id_user = usuarios.id
    GROUP BY puntos.id_user
    ORDER BY total_puntos DESC
";
    return $resultado = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>

