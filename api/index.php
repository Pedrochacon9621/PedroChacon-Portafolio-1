<?php
$ruta = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Ruta base del proyecto
$base = __DIR__ . '/..';

// Verifica si la ruta corresponde a una página específica
$archivoSolicitado = $base . $ruta;

if (
    file_exists($archivoSolicitado) &&
    pathinfo($archivoSolicitado, PATHINFO_EXTENSION) === 'php'
) {
    require $archivoSolicitado;
} else {
    require $base . '/index.php';
}
?>


