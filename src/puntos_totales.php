<?php
require_once 'connection.php';

$puntosTotales = $db->sum("puntos", "puntos");
echo "Puntos totales: $puntosTotales\n";
?>
