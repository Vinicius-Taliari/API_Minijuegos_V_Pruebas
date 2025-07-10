<?php

require_once 'connection.php';


header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

  $data = json_decode(file_get_contents('php://input'), true);

  if($data){
    $puntos = $data['pt'];
    echo "Puntos recibidos: $puntos\n";
    $db->insert("puntos", [
        "puntos" => $puntos
    ]);
    echo "Puntos insertados correctamente.";
  }
?>