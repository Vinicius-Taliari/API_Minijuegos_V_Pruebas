<?php

$id_jugador = $_SESSION['id_usuario'] ?? null;

require_once '../server/ranking_juego_2.php';

$mi_ranking = $ranking;

foreach ($mi_ranking as $index => $usuario) {
    if ($usuario['id_user'] == $id_jugador) {
        $mi_posicion = $index + 1; // +1 porque las posiciones empiezan en 1
        ?>
        <div class="container mt-4">
            <h5 class="text-center">Tu Posición en el Ranking</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tu posición</th>
                        <th>Usuario</th>
                        <th>Puntos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $mi_posicion; ?></td>
                        <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['total_puntos']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php break;
    }
}

?>