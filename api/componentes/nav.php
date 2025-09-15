<?php
    include "rutas1.php";
?>

<nav class="nav1">
    <div class="contentHeader">
<!-- Para agregar posible contenido -->
    </div>

    <div id="hamburger">
                <img src="<?= $rutaImagenes ?>/icons/menu-2.svg" alt="">
                <ul class="menu2">
                    <li class="logo"><a href="<?= $rutaRaiz ?>">Inicio</a></li>
                    <li><a href="<?= $rutaTecnologias ?>">Tecnologías</a></li>
                    <li> <a href="<?= $rutaProyectos ?>">Proyectos</a></li>
                    <li><span id="btnContacto3">Contacto</span></li>
                    <li><a href="<?= $rutaPolitica ?>">Políctica de Privacidad</a></li>
                </ul>
    </div>

    <ul class="menu1">
        
        <li class="logo"><a href="<?= $rutaRaiz ?>"><img src="<?= $rutaImagenes ?>/icons/casaGoogleBlanca.svg" alt=""></a></li>
        <li><a href="<?= $rutaTecnologias ?>">Tecnologías</a></li>
        <li> <a href="<?= $rutaProyectos ?>">Proyectos</a></li>
        <li><span id="btnContacto2">Contacto</span></li>
        <li><a href="<?= $rutaPolitica ?>">Políctica de Privacidad</a></li>
    </ul>
</nav>

 
