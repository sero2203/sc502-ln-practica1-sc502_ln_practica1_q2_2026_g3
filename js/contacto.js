document.addEventListener("DOMContentLoaded", function () {
  const form        = document.getElementById("form-contacto");
  const inputNombre = document.getElementById("nombre");
  const inputCorreo = document.getElementById("correo");
  const inputTel    = document.getElementById("telefono");
  const inputAsunto = document.getElementById("asunto");
  const inputMsg    = document.getElementById("mensaje");
  const btnEnviar   = document.getElementById("btn-enviar");
  const msgExito    = document.getElementById("mensaje-exito");

  const errorNombre = document.getElementById("error-nombre");
  const errorCorreo = document.getElementById("error-correo");
  const errorTel    = document.getElementById("error-telefono");
  const errorAsunto = document.getElementById("error-asunto");
  const errorMsg    = document.getElementById("error-mensaje");

  const estadoCampos = {
    nombre:   false,
    correo:   false,
    telefono: false,
    asunto:   false,
    mensaje:  false
  };

  function actualizarEstadoBoton() {
    const todosValidos = Object.values(estadoCampos).every((valor) => valor === true);
    btnEnviar.disabled = !todosValidos;
  }

  function validarNombre() {
    const valor = inputNombre.value.trim();
    const soloLetrasEspacios = /^[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+$/;

    if (valor.length < 5) {
      errorNombre.textContent = "El nombre debe tener al menos 5 caracteres.";
      estadoCampos.nombre = false;
    } else if (!soloLetrasEspacios.test(valor)) {
      errorNombre.textContent = "El nombre solo puede contener letras y espacios.";
      estadoCampos.nombre = false;
    } else {
      errorNombre.textContent = "";
      estadoCampos.nombre = true;
    }

    actualizarEstadoBoton();
  }

  function validarCorreo() {
    const valor = inputCorreo.value.trim();
    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (valor === "") {
      errorCorreo.textContent = "El correo es obligatorio.";
      estadoCampos.correo = false;
    } else if (!regexCorreo.test(valor)) {
      errorCorreo.textContent = "El formato del correo no es válido.";
      estadoCampos.correo = false;
    } else {
      errorCorreo.textContent = "";
      estadoCampos.correo = true;
    }

    actualizarEstadoBoton();
  }

  function validarTelefono() {
    const valor = inputTel.value.trim();
    const soloNumeros = /^[0-9]+$/;

    if (valor === "") {
      errorTel.textContent = "El teléfono es obligatorio.";
      estadoCampos.telefono = false;
    } else if (!soloNumeros.test(valor)) {
      errorTel.textContent = "El teléfono solo puede contener números.";
      estadoCampos.telefono = false;
    } else if (valor.length < 8) {
      errorTel.textContent = "El teléfono debe tener al menos 8 dígitos.";
      estadoCampos.telefono = false;
    } else {
      errorTel.textContent = "";
      estadoCampos.telefono = true;
    }

    actualizarEstadoBoton();
  }

  function validarAsunto() {
    const valor = inputAsunto.value.trim();

    if (valor.length < 3) {
      errorAsunto.textContent = "El asunto debe tener al menos 3 caracteres.";
      estadoCampos.asunto = false;
    } else {
      errorAsunto.textContent = "";
      estadoCampos.asunto = true;
    }

    actualizarEstadoBoton();
  }

  function validarMensaje() {
    const valor = inputMsg.value.trim();

    if (valor.length < 20) {
      errorMsg.textContent = "El mensaje debe tener al menos 20 caracteres.";
      estadoCampos.mensaje = false;
    } else {
      errorMsg.textContent = "";
      estadoCampos.mensaje = true;
    }

    actualizarEstadoBoton();
  }

  inputNombre.addEventListener("input", validarNombre);
  inputCorreo.addEventListener("input", validarCorreo);
  inputTel.addEventListener("input", validarTelefono);
  inputAsunto.addEventListener("input", validarAsunto);
  inputMsg.addEventListener("input", validarMensaje);

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    validarNombre();
    validarCorreo();
    validarTelefono();
    validarAsunto();
    validarMensaje();

    const todosValidos = Object.values(estadoCampos).every((valor) => valor === true);

    if (todosValidos) {
      msgExito.textContent = "Mensaje enviado correctamente. ¡Gracias por contactarnos!";
      msgExito.style.display = "block";

      form.reset();

      estadoCampos.nombre   = false;
      estadoCampos.correo   = false;
      estadoCampos.telefono = false;
      estadoCampos.asunto   = false;
      estadoCampos.mensaje  = false;

      errorNombre.textContent = "";
      errorCorreo.textContent = "";
      errorTel.textContent    = "";
      errorAsunto.textContent = "";
      errorMsg.textContent    = "";

      actualizarEstadoBoton();
    } else {
      msgExito.textContent = "";
      msgExito.style.display = "none";
    }
  });

  actualizarEstadoBoton();
});