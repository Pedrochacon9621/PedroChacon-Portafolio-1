<?php
require __DIR__ . '/../index.php';

// Extrae solo la ruta sin parámetros
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Manejador de rutas
switch ($ruta) {
    case 'paginas/politica.php':
        require __DIR__ . '/../paginas/politica.php';
        exit;

    // Puedes agregar más rutas aquí si lo necesitas
    default:
        // Si no coincide con ninguna ruta, sigue con index.php
        break;
}

?>