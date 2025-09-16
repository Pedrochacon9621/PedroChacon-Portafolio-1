  
//Modal contacto para politica-----------------------------------------------------------------------------------------------------------------------
  const btnContacto2 = document.getElementById('btnContacto2');
  const btnContacto3 = document.getElementById('btnContacto3');
  const modalContacto = document.getElementById('divContenedorFondoModalID3');
  const btnCerrarContact = document.getElementById('btnCerrarContacto');
    btnContacto2.addEventListener('click', () => {
      modalContacto.style.display = 'flex';
    });
    btnContacto3.addEventListener('click', () => {
      modalContacto.style.display = 'flex';
    });
    btnCerrarContact.addEventListener('click', () => {
      modalContacto.style.display = 'none';
    });
    modalContacto.addEventListener('click', (e) => {
      if (e.target === modalContacto) {
        modalContacto.style.display = 'none';
      }
    });
    document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    // Cierra el modal de contacto si está visible
    if (modalContacto.style.display === 'flex') {
      modalContacto.style.display = 'none';
    }
  }
});

//Modal contacto para politica-----------------------------------------------------------------------------------------------------------------------

//Funcion menu hamburger----------------------------------------------------------------------------------------------------------------------------------------------------------------------
    const hamburger = document.getElementById('hamburger');
    const menu2 = document.querySelector('.menu2');
    hamburger.addEventListener('click', () => {
    menu2.style.display = menu2.style.display === 'flex' ? 'none' : 'flex';
  });

//Funcion menu hamburger----------------------------------------------------------------------------------------------------------------------------------------------------------------------

//Funcion para copiar correo en el modal de contacto---------------------------------------------------------------------------------------------------------------------------------------

  //'DOMContentLoaded' espera a que todo este cargado en el DOM para ejecutar la funcion, medida de seguridad de efectividad para esta funcion
      document.addEventListener('DOMContentLoaded', function () {
          const botonCopiar = document.getElementById('btnCopiarContact');
          const correoParrafo = document.getElementById('textCorreoCopiar');

          botonCopiar.addEventListener('click', function () {
              const correo = correoParrafo.textContent.trim();

              // API del portapapeles
              navigator.clipboard.writeText(correo).then(function () {
                  alert('Correo electrónico copiado');
              }).catch(function (err) {
                  console.error('Error al copiar: ', err);
              });
          });
      });
//Funcion para copiar correo en el modal de contacto-----------------------------------------------------------------------------------------------------------------------------