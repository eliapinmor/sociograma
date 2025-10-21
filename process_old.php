<?php

include 'includes/header.php';
include 'includes/functions.php'; 

$errores = [];
$nombre = "";
$email = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Rehidratamos los valores (los guardamos para volver a mostrarlos)
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');

    // --- Validar nombre ---
    if ($nombre === '') {
        $errores['nombre'] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 4) {
        $errores['nombre'] = "El nombre debe tener al menos 3 caracteres.";
    }

    if (empty($errores)) {
        echo "<p>Formulario enviado correctamente.</p>";
        exit;
    } else {
        
    }
}



<?php include 'includes/footer.php'; ?>