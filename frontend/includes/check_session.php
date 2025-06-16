
<?php
session_start();

function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isLoggedIn() {
    return isset($_SESSION['uid']);
}

// Ejemplo de uso:
if (isAdmin()) {
    header('Location: ../pages/dashboard.php');
} elseif (isLoggedIn()) {
    header('Location: ../pages/index.php');
} else {
    header('Location: ../pages/dashboard.php'); //Es el unico que usa, luego de ingresar en login, este es el que se ejecuta, apesar de que cuando inicio sesion, si recibo estos mensajes:
    exit();
}
?>
