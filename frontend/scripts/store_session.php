<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['uid']) && isset($data['role'])) {
    $_SESSION['uid'] = $data['uid'];
    $_SESSION['role'] = $data['role'];
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>
