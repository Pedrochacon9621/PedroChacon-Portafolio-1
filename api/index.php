<?php
require __DIR__ . '/../index.php';

// Detecta la ruta solicitada
$ruta = $_SERVER['REQUEST_URI'];

// Maneja la ruta de la política
if ($ruta === '/paginas/politica.php') {
    require __DIR__ . '/../paginas/politica.php';
    exit;
}

?>