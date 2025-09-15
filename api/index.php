<?php
require __DIR__ . '/../index.php';
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($ruta) {
    case '/paginas/politica.php':
        require __DIR__ . '/../paginas/politica.php';
        break;

    default:
        require __DIR__ . '/../index.php';
        break;
}

?>


