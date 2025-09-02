<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <!--nav.....................................................................................................................................................-->
        <?php
            include "componentes/nav.php"       
        ?>
        <!--nav.....................................................................................................................................................-->
    </header>
    <main>
        <!--Presentacion.....................................................................................................................................................-->
        <div class="divPresentacion">
            <div style="display: flex; flex-direction: column; align-items:center; gap: 5px">
                <h1 class="enlaceBtn1" style="padding: 5px 50px; border-radius: 50px;">Pedro Chacón</h1>
                <h4>Desarrollador Full-Stack</h4>
            </div>
            <div class= "divPresentacion2">
                    
                    <div class="contenTextPresent">
                        <p>
                            Hola, soy Pedro, desarrollador con experiencia en backend y frontend. Con más de 4 años resolviendo problemáticas reales, poseo dominio en tecnologías versátiles como React, Node.js y Django. También tengo experiencia en gestión de bases de datos, arquitectura de computadores, configuración de redes y administración de sistemas con herramientas como Windows Server.
                        </p><br>
                        
                        <p>
                            Además de mi experiencia técnica, he configurado, aprendido y manejado múltiples sistemas e interfaces de usuario, que van desde aplicaciones administrativas hasta herramientas de edición y entretenimiento. Esta experiencia me ha permitido desarrollar una comprensión profunda de lo que los usuarios realmente necesitan, lo que me ayuda a diseñar soluciones tecnológicas más intuitivas, funcionales y efectivas.
                        </p><br>
                        <p>
                            Me apasiona colaborar con equipos creativos, aprender constantemente y enfrentar nuevos desafíos tecnológicos que me permitan crecer y aportar valor.
                        </p>
                    </div>
                    
            </div>   
                     <div class="btnCV">
                        <a href="docs/CVpedro.pdf" class="enlaceBtn1" target="_blank">Descargar CV</a>
                    </div>     
        </div>
        <!--Presentacion.....................................................................................................................................................-->

        <!--Tecnologias-conocimientos.....................................................................................................................................................-->
        <div class="divAproyectos">
            <div id="tecnologias" class="titulos2">
                    <h2>Herramientas y Tecnologías</h2>
            </div>
            <div class="divTarjTecnologias">
                <!--columna 1-->
                <div class="divContTarjTec">
                    <div class="titulos3 titulos3Grid"><h3>Frontend</h3></div><hr>
                    <div class=divAgruparTarjTec>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/html5.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>HTML</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/css_old.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>CSS</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/javascript.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>JavaScript</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/bootstrap.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Bootstrap</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/tailwindcss.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Tailwind</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/React_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>React</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/jQuery_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>jQuery</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/wordpress.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>WordPress</p>
                            </div>
                        </div>
                    </div>    
                </div>
                <!--columna 2-->
                <div class="divContTarjTec ">
                    <div class="titulos3 titulos3Grid"><h3>Backend</h3></div><hr>
                    <div class=divAgruparTarjTec>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/python.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Python</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/Php_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>PHP</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/nodejs.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Node.js</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/Express.js_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Express</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/django.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Django</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/nestjs.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>NestJS</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/csharp.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>C#.NET</p>
                            </div>
                        </div>
                    </div>    
                </div>
                <!--columna 3-->
                <div class="divContTarjTec">
                    <div class="titulos3 titulos3Grid"><h3>Bases de datos</h3></div><hr>
                    <div class=divAgruparTarjTec>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/sql-server.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>SQL Server</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/mysql.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>MySQL</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/postgresql.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>PostgreSQL</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec" style="width: 20px; height: auto; padding: 0;">
                                <img src="imagenes/iconsTec/mongodb.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>MongoDB</p>
                            </div>
                        </div>
                    </div>    
                </div>
                <!--columna 4-->
                <div class="divContTarjTec">
                    <div class="titulos3 titulos3Grid"><h3>Despliegue y DevOps</h3></div><hr>
                    <div class=divAgruparTarjTec>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/git.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Git</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/GitHub_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>GitHub</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec">
                                <img src="imagenes/iconsTec/Railway_dark.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Railway</p>
                            </div>
                        </div>
                        <div class="tarjetasTec">
                            <div class="divImgTec" style="background-color: rgb(230, 230, 230); border-radius: 2px;">
                                <img src="imagenes/iconsTec/Render.svg" alt="">
                            </div>
                            <div class="divTextTec">
                                <p>Render</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tecnologias-conocimientos.....................................................................................................................................................-->

        <!--Proyectos.....................................................................................................................................................-->
        <div class="divAproyectos">
            <div id="proyectos" class="titulos2">
                <h2>Proyectos Realizados</h2>
            </div>
            <div class="divTarjetas">
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="imagenes/proyectos/AppCasos1.png" alt=""></div>
                    <div class="parrafoTarj">
                        <h3>Sistema de control de actividades con entorno personalizable</h3><br>
                        <p>Sistema para llevar un control de actividades que permite adaptarse a cualquier entorno de trabajo. Desarrollado en React, Django y Bootstrap para los estilos.</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Esta aplicación permite realzar envíos de correo electrónico a varios destinarios a la vez, pero permitiendo enviar un correo personalizado con mensaje y contenido distinto a cada uno de ellos. Surge de la necesidad que se presenta constantemente en varios entornos de oficina, donde necesitan enviar varios correos pero que a cada uno de los destinarios se le debe enviar un mensaje diferente. En varias ocasiones pude observar esta situación junto a mis compañeros de trabajo, y se llegaba a utilizar herramientas con macros en Excel, que requerían vinculación con aplicaciones como Outlook de escritorio, configuraciones e interfaces confusas y complicadas para un usuario común.</p>
                        <a class="enlaceApp1" href="https://frontendappcasos-p1.onrender.com">🔗Enlace a la aplicación</a>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="imagenes/proyectos/appcorreo1.png" alt=""></div>
                    <div class="parrafoTarj">
                        <h3>Correos masivos personalizados</h3><br>
                        <p>Aplicación para enviar varios correos personalizados, desarrollada en React y Node.js.</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Esta aplicación permite realzar envíos de correo electrónico a varios destinarios a la vez, pero permitiendo enviar un correo personalizado con mensaje y contenido distinto a cada uno de ellos. Surge de la necesidad que se presenta constantemente en varios entornos de oficina, donde necesitan enviar varios correos pero que a cada uno de los destinarios se le debe enviar un mensaje diferente. En varias ocasiones pude observar esta situación junto a mis compañeros de trabajo, y se llegaba a utilizar herramientas con macros en Excel, que requerían vinculación con aplicaciones como Outlook de escritorio, configuraciones e interfaces confusas y complicadas para un usuario común. </p>
                        <a class="enlaceApp1" href="https://frontend-appcorreos1.onrender.com">🔗Enlace a la aplicación</a>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="imagenes/proyectos/crudEjemplo1.png" alt=""></div>
                    <div class="parrafoTarj">
                        <h3>Ejemplo de sistema CRUD con interfaz de usuario</h3><br>
                        <p>Interfaz simple con funcionalidad de registro (operaciones CRUD). Desarrollado con Node.js y para el Frontend HTML, CSS, JavaScript y jQuery.</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Interfaz de usuario simple, que permite el registro de información a una base de datos, logrando realizar las operaciones CRUD, consultar, guardar, actualizar y eliminar, ofreciendo una interfaz amigable. Fue realizado con objetivos prácticos, y a la vez sirve como base o plantilla para otros proyectos.</p>
                        <a class="enlaceApp1" href="https://formularioplantillacrudnodejs1.onrender.com">🔗Enlace a la aplicación</a>
                    </div>
                </div>
                <!--
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="" alt=""></div>
                    <div class="parrafoTarj">
                        <p>HOLA</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum illo in aspernatur dignissimos ut rem inventore obcaecati! Exercitationem quas odio ab minus nemo rerum quaerat, corporis atque asperiores facere dolor!</p>
                    </div>
                </div>
                
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="" alt=""></div>
                    <div class="parrafoTarj">
                        <p>HOLA</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum illo in aspernatur dignissimos ut rem inventore obcaecati! Exercitationem quas odio ab minus nemo rerum quaerat, corporis atque asperiores facere dolor!</p>
                    </div>
                </div>
                <div class="tarjeta">
                    <div class="divImgTarj"><img src="" alt=""></div>
                    <div class="parrafoTarj">
                        <p>HOLA</p>
                    </div> 
                    <div class="parrafoTarj2">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum illo in aspernatur dignissimos ut rem inventore obcaecati! Exercitationem quas odio ab minus nemo rerum quaerat, corporis atque asperiores facere dolor!</p>
                    </div>
                </div>
                -->
            </div>
        </div>
        <!--Proyectos.....................................................................................................................................................-->

        <!--Correo de Contacto.....................................................................................................................................................-->
        <div class="divContacto">
            <div id="contacto" class="titulos2">
                <h2>Información de Contacto</h2>
            </div>
            <div id="btnContacto1" class="tarjetaContacto">
                <div class="divTextoContacto">
                    <div class="divImgTec"><img src="imagenes/icons/contact2.svg" alt=""></div>
                    <span><h4>Click para visualizar información de contacto</h4></span>
                </div>
            </div>
        </div>    
        <!--Correo de Contacto.....................................................................................................................................................-->
    </main>
    <footer>
        <!--Contenido FOOTER.....................................................................................................................................................-->
        <?php
            include "componentes/footer.php"
        ?>
        <!--Contenido FOOTER.....................................................................................................................................................-->
    </footer>

    <!-- Modal oculto para las Apps -->
    <div id="divContenedorFondoModalID" class="divContenedorFondoModalClass">
        <div class="divContentModal divContentModalApp">
            <span id="btnCerrarModalApp" class="btnCerrarModal">&times;</span>
            <div class="divImgTarj modalImg"></div>
            <div class="parrafoTarj divModalText">
                <p id="modalText"></p><br>
                <p id="modalText2"></p>
                <a id="enlaceApp" target="_blank"></a>
            </div>
        </div>
    </div>
    <!-- Modal oculto para las apps-->

    <!-- Modal oculto para Politica de privacidad-->
    <div id="divContenedorFondoModalID2" class="divContenedorFondoModalClass" >
        <div class="divContentModal">
            <span id="btnCerrarPolitica" class="btnCerrarModal">&times;</span>
            <div class="textoPoliModal">
                <div class="centrarTexto"><h3>Politicas de Privacidad</h3></div><br>
                <p>Este sitio no recopila datos personales ni utiliza cookies. Su único propósito es mostrar información profesional y proyectos. En caso de habilitar un formulario de contacto en el futuro, se garantizará el uso responsable de los datos.</p>
                <p>Para leer la política de privacidad completa, <span><a href="paginas/politica.php" target="_blank">haz clic aquí.</a></span></p>
            </div>
        </div>
    </div>
    
    <!-- Modal oculto para COntacto-->
    <?php
        include "componentes/modalContacto.php";
    ?>
    <!-- Modal oculto para Contacto-->
     <script src="js/funciones.js"></script>
</body>
</html>