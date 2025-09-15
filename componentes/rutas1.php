<?php
    // Detecta si estás en la raíz del proyecto
    $esRaiz = basename($_SERVER['PHP_SELF']) === 'index.php';

    //ruta absoluta a la raiz (REVISAR ESTO EN PRODUCCION):
    
    // Detecta si estás en local o producción
    $protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $isLocal = strpos($host, 'localhost') !== false;
    // Ruta absoluta a la raíz del proyecto
    $rutaRaiz = $isLocal
        ? $protocolo . $host . '/proyectos/portafolio1'  // Ruta local
        : $protocolo . $host;                            // Ruta en producción


    // Define la ruta al id según la ubicación
    $rutaProyectos = $esRaiz ? '#proyectos' : '../#proyectos';
    $rutaTecnologias = $esRaiz ? '#tecnologias' : '../#tecnologias';


    //IMAGENES:
    $rutaImagenes = $rutaRaiz . '/imagenes';
    $rutaPolitica = $rutaRaiz . '/paginas/politica.php';

?>

