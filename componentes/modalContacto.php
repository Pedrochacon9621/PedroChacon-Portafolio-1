<?php
    include "rutas1.php";
?>
<div id="divContenedorFondoModalID3" class="divContenedorFondoModalClass">
    <div class="divContentModal">
        <span id="btnCerrarContacto" class="btnCerrarModal">&times;</span>
        <div class="centrarModal1">
            <div style="display: flex; flex-direction: column; align-items: center; gap: 5px;">
                <!--<div class="divImgTec"><img src="imagenes/icons/correowhite.svg" alt=""></div>
                <div>
                    <h3>Pedro Chacón</h3>
                    <p>correo electrónico:</p>
                    <p></p><br>
                </div>
                -->
                <div><img src="<?= $rutaImagenes ?>/generales/correo1.png" alt="" style="width: 300px;"></div>
                <button id="btnCopiarContact" style="padding: 10px">Copiar correo electrónico</button>
                <p id="textCorreoCopiar" style="visibility: hidden;">pedrochacon9621@gmail.com</p>
                    
            </div>
        </div>
    </div>
</div>


