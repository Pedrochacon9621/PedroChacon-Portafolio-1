<?php
require __DIR__ . '/../index.php';

if ($_SERVER['REQUEST_URI'] === '/paginas/politica.php') {
    require __DIR__ . '/paginas/politica.php';
    exit;
}


?>