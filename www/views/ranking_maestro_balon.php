<?php
//Componente de ranking para el juego Soccer Goal
require_once '../server/ranking_juego_2.php';
$mi_ranking = $ranking;
?>

<div class="container mt-4">
    <h5 class="text-center">Ranking</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Posición</th>
                <th>Usuario</th>
                <th>Puntos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mi_ranking as $index => $usuario): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['total_puntos']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>