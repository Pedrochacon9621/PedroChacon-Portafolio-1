<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Politica de Privacidad</title>
</head>
<body>
    <header>
         <!--nav.....................................................................................................................................................-->
        <?php
        $raiz2 = dirname(__DIR__);
            include $raiz2 . "/componentes/nav.php";       
        ?>
        <!--nav.....................................................................................................................................................--> 
    </header>
    <main>
        <div class="contentTexto">
            <div class="texto1 fontTexto-1">
                <h1>🔒Política de Privacidad</h1><hr><br>

                <p>Esta página web tiene como finalidad presentar información sobre mi perfil profesional y mostrar enlaces a mis proyectos. No se recopilan datos personales de los usuarios ni se utilizan cookies o tecnologías similares para rastrear la navegación.</p><br>

                <h2>👤Responsable del sitio</h2><hr><br>
                <p>Pedro Chacón<br>
                Ubicación: España<br>
                Correo electrónico: pedrochacon9621@gmail.com</p><br>

                <h2>📁Datos personales</h2><hr><br>
                <p>Actualmente, esta web no dispone de formularios ni mecanismos para la recogida de datos personales. No se almacenan, procesan ni comparten datos de los visitantes.</p><br>

                <h2>📨Formulario de contacto (futuro)</h2><hr><br>
                <p>En caso de que en el futuro se habilite un formulario de contacto, este solo solicitará los siguientes datos:</p><br>
                <ul>
                    <li>Nombre o razón social</li>
                    <li>Correo electrónico</li>
                    <li>Mensaje</li>
                </ul><br>
                <p>Estos datos se utilizarán exclusivamente para responder a las consultas recibidas. No se compartirán con terceros ni se utilizarán con fines comerciales. El usuario podrá solicitar la eliminación de sus datos en cualquier momento.</p><br>

                <h2>🔗Enlaces externos</h2><hr><br>
                <p>Este sitio contiene enlaces a proyectos personales alojados en otras plataformas. No me responsabilizo por las políticas de privacidad de dichos sitios externos. Se recomienda revisar sus respectivas políticas antes de proporcionar cualquier información.</p><br>

                <h2>🛠️Modificaciones</h2><hr><br>
                <p>Esta política de privacidad puede actualizarse en cualquier momento para reflejar cambios en el sitio o en la legislación vigente. Se recomienda revisarla periódicamente.</p><br>

                <h2>📜Derechos del usuario</h2><hr><br>
                <p>De acuerdo con el Reglamento General de Protección de Datos (RGPD), los usuarios tienen derecho a acceder, rectificar, suprimir y limitar el tratamiento de sus datos personales. Para ejercer estos derechos, podrán contactar al responsable del sitio mediante el correo electrónico proporcionado.</p><br>

            </div>
        </div>
    </main>
    <footer>
         <!--Contenido FOOTER.....................................................................................................................................................-->
        <?php
            include $raiz2 . "/componentes/footer.php";
        ?>
        <!--Contenido FOOTER.....................................................................................................................................................-->
    </footer>
    <!-- Modal oculto para COntacto-->
    <?php
        include $raiz2 . "/componentes/modalContacto.php";
    ?>  
    <!-- Modal oculto para Contacto-->  
 <script src="../js/politica.js"></script>
</body>
</html>