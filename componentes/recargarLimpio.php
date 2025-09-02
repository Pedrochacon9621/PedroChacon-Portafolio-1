 <?php
   
        include "componentes/rutas1.php";

        if ($esRaiz): ?>
        <script>
        window.addEventListener('load', () => {
            if (window.location.hash && window.location.hash !== '') {
            // Redirige a la raíz (recarga limpia)
            window.location.href = window.location.pathname;
            }
        });
        </script>
    <?php endif; ?>