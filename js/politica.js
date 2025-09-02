  
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