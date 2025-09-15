<?php
require __DIR__ . '/../index.php';

$ruta = $_SERVER['REQUEST_URI'];

switch ($ruta) {
    case '/../paginas/politica.php':
        require __DIR__ . '/../paginas/politica.php';
        break;
    case '/sobre-mi':
        require __DIR__ . '/../paginas/sobre-mi.php';
        break;
    default:
        require __DIR__ . '/../componentes/404.php';
        break;
}

?>