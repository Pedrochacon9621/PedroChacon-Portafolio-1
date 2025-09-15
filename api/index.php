<?php
echo '<pre>';
echo 'REQUEST_URI: ' . $_SERVER['REQUEST_URI'] . "\n";
echo 'PATH_INFO: ' . ($_SERVER['PATH_INFO'] ?? 'N/A') . "\n";
echo 'SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . "\n";
echo 'PHP_SELF: ' . $_SERVER['PHP_SELF'] . "\n";
echo '</pre>';



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

echo '<pre>Ruta limpia: ' . $ruta . '</pre>';

?>


