// ============================================
// JOYAS KM - contacto.js
// ============================================

document.addEventListener('DOMContentLoaded', () => {

  const form = document.getElementById('contacto-form');
  const btnEnviar = document.getElementById('btn-enviar');
  const formExito = document.getElementById('form-exito');

  // ---- VALIDAR CAMPO ----
  const validarCampo = (campo) => {
    if (!campo.value.trim()) {
      campo.classList.add('error');
      return false;
    }
    campo.classList.remove('error');
    return true;
  };

  // ---- VALIDAR EMAIL ----
  const validarEmail = (campo) => {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(campo.value.trim())) {
      campo.classList.add('error');
      return false;
    }
    campo.classList.remove('error');
    return true;
  };

  // ---- QUITAR ERROR AL ESCRIBIR ----
  document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(campo => {
    campo.addEventListener('input', () => {
      campo.classList.remove('error');
    });
  });

  // ---- ENVIAR FORMULARIO ----
  if (btnEnviar) {
    btnEnviar.addEventListener('click', () => {

      const nombre   = document.getElementById('nombre');
      const telefono = document.getElementById('telefono');
      const email    = document.getElementById('email');
      const tipo     = document.getElementById('tipo');
      const mensaje  = document.getElementById('mensaje');

      const nombreOk   = validarCampo(nombre);
      const telefonoOk = validarCampo(telefono);
      const emailOk    = validarEmail(email);
      const tipoOk     = validarCampo(tipo);
      const mensajeOk  = validarCampo(mensaje);

      if (!nombreOk || !telefonoOk || !emailOk || !tipoOk || !mensajeOk) {
        return;
      }

      // Armar mensaje para WhatsApp
      const tipoTexto = tipo.options[tipo.selectedIndex].text;
      const msgWA = encodeURIComponent(
        `Hola Joyas KM, me contacto desde el sitio web.\n\n` +
        `Nombre: ${nombre.value.trim()}\n` +
        `Telefono: ${telefono.value.trim()}\n` +
        `Email: ${email.value.trim()}\n` +
        `Consulta: ${tipoTexto}\n\n` +
        `Mensaje: ${mensaje.value.trim()}`
      );

      // Mostrar exito
      formExito.classList.add('visible');
      btnEnviar.textContent = 'Mensaje enviado';
      btnEnviar.style.background = '#38a169';
      btnEnviar.disabled = true;

      // Abrir WhatsApp despues de 1 segundo
      setTimeout(() => {
        window.open(`https://wa.me/56945460876?text=${msgWA}`, '_blank');
      }, 1000);

      // Limpiar formulario despues de 3 segundos
      setTimeout(() => {
        nombre.value = '';
        telefono.value = '';
        email.value = '';
        tipo.value = '';
        mensaje.value = '';
        formExito.classList.remove('visible');
        btnEnviar.textContent = 'Enviar Mensaje';
        btnEnviar.style.background = '';
        btnEnviar.disabled = false;
      }, 3000);

    });
  }

});