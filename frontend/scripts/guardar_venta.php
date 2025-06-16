<?php
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $fecha = $data['fecha'];
    $archivo = "../ventas/$fecha.json";

    if (!file_exists("../ventas")) {
        mkdir("../ventas", 0777, true);
    }

    $ventas = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];
    $ventas[] = $data;

    file_put_contents($archivo, json_encode($ventas, JSON_PRETTY_PRINT));
    http_response_code(200);
} else {
    http_response_code(400);
}
?>
