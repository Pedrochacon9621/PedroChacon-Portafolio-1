<?php
require __DIR__ . '/../index.php';
// Extrae la ruta solicitada
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Ruta base del proyecto
$base = __DIR__ . '/..';

// Verifica si el archivo solicitado existe
$archivoSolicitado = $base . $ruta;

if (file_exists($archivoSolicitado) && pathinfo($archivoSolicitado, PATHINFO_EXTENSION) === 'php') {
    require $archivoSolicitado;
    exit;
}
?>


