//funcion cargar Modal inicial de Politica de Privacidad-----------------------------------------------------------------------------------------------------------------------
const modal2 = document.getElementById('divContenedorFondoModalID2');
const closeBtnPolitica = document.getElementById('btnCerrarPolitica')
window.onload = function () {
  modal2.style.display = 'flex';
}

closeBtnPolitica.addEventListener('click', () => {
    modal2.style.display = 'none';
  });

  // cerrar al hacer clic fuera del contenido
  modal2.addEventListener('click', (e) => {
    if (e.target === modal2) {
      modal2.style.display = 'none';
    }
  });

//funcion cargar Modal inicial de Politica de Privacidad-----------------------------------------------------------------------------------------------------------------------

//funcion del Modal de Tarjetas de Proyectos----------------------------------------------------------------------------------------------------------------------------------
  const tarjetas = document.querySelectorAll('.tarjeta');
  const modal = document.getElementById('divContenedorFondoModalID');
  const modalText = document.getElementById('modalText');
  const modalText2 = document.getElementById('modalText2');
  const enlaceApp = document.getElementById('enlaceApp')
  const closeBtn = document.getElementById('btnCerrarModalApp');
  const modalImg = document.querySelector('.modalImg')
  
  tarjetas.forEach(tarjeta => {
    tarjeta.addEventListener('click', () => {
      const texto1 = tarjeta.querySelector('.parrafoTarj p').innerText;
      const texto2 = tarjeta.querySelector('.parrafoTarj2 p').innerText;
      const enlace = tarjeta.querySelector('.enlaceApp1')
      const enlaceText = enlace.innerText;
      const enlaceRef = enlace.getAttribute('href')
      const imagen = tarjeta.querySelector('.divImgTarj').innerHTML;
      
      modalImg.innerHTML = imagen; // copia el contenido de la imagen
      modalText.innerText = texto1;
      modalText2.innerText = texto2;
      enlaceApp.innerText = enlaceText
      enlaceApp.setAttribute('href', enlaceRef)
      modal.style.display = 'flex';
      
    });
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // cerrar al hacer clic fuera del contenido
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
//funcion del Modal de Tarjetas de Proyectos----------------------------------------------------------------------------------------------------------------------------------

//modal CONTACTO-----------------------------------------------------------------------------------------------------------------------
  const btnContacto1 = document.getElementById('btnContacto1');
  const btnContacto2 = document.getElementById('btnContacto2');
  const btnContacto3 = document.getElementById('btnContacto3');
  const modalContacto = document.getElementById('divContenedorFondoModalID3');
  const btnCerrarContact = document.getElementById('btnCerrarContacto');

    btnContacto1.addEventListener('click', () => {
      modalContacto.style.display = 'flex';
    });
  
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
  
//modal CONTACTO-----------------------------------------------------------------------------------------------------------------------

//Cerrar modales con tecla ESC-----------------------------------------------------------------------------------------------------------------------
document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    // Cierra el modal de tarjetas si está visible
    if (modal.style.display === 'flex') {
      modal.style.display = 'none';
    }
    // Cierra el modal de política si está visible
    if (modal2.style.display === 'flex') {
      modal2.style.display = 'none';
    }
    // Cierra el modal de contacto si está visible
    if (modalContacto.style.display === 'flex') {
      modalContacto.style.display = 'none';
    }
  }

});
//Cerrar modales con tecla ESC-----------------------------------------------------------------------------------------------------------------------

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
//Funcion para copiar correo en el modal de contacto----------------------------------------------------------------------------------------------------------------------------------------

//Funcion menu hamburger----------------------------------------------------------------------------------------------------------------------------------------------------------------------
    const hamburger = document.getElementById('hamburger');
    const menu2 = document.querySelector('.menu2');
    hamburger.addEventListener('click', () => {
    menu2.style.display = menu2.style.display === 'flex' ? 'none' : 'flex';
  });

//Funcion menu hamburger----------------------------------------------------------------------------------------------------------------------------------------------------------------------