<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto | NovaTech Academy</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/contacto.css" />
</head>
<body>

  <nav id="navbar">
    <div id="nav-contenido" class="contenedor">
      <a href="index.php" id="nav-logo">NOVA<span>TECH</span></a>
      <button id="nav-toggle">☰</button>
      <ul id="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="index.php?controller=cursos&action=index">Cursos</a></li>
        <li><a href="index.php?controller=profesores&action=index">Profesores</a></li>
        <li><a href="index.php?controller=contacto&action=index" class="activo">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <section class="encabezado">
    <h1>Contáctanos</h1>
    <p>¿Tienes dudas sobre nuestros cursos? Escríbenos y te respondemos pronto.</p>
  </section>

  <div class="contact-layout">
    <div class="card">
      <h2>Envíanos un mensaje</h2>
      <form id="form-contacto"
            method="POST"
            action="index.php?controller=contacto&action=store">
        <div class="campo">
          <label for="nombre">Nombre completo</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ej: María González" />
          <small class="error" id="error-nombre"></small>
        </div>
        <div class="campo">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="tucorreo@ejemplo.com" />
          <small class="error" id="error-correo"></small>
        </div>
        <div class="campo">
          <label for="telefono">Teléfono</label>
          <input type="tel" id="telefono" name="telefono" placeholder="Ej: 8888-1234" />
          <small class="error" id="error-telefono"></small>
        </div>
        <div class="campo">
          <label for="asunto">Asunto</label>
          <input type="text" id="asunto" name="asunto" placeholder="Ej: Consulta sobre cursos" />
          <small class="error" id="error-asunto"></small>
        </div>
        <div class="campo">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu consulta aquí..."></textarea>
          <small class="error" id="error-mensaje"></small>
        </div>
        <button type="submit" class="btn-acento" id="btn-enviar">Enviar mensaje</button>
      </form>

      <?php if (!empty($mensajeExito)): ?>
        <p id="mensaje-exito" style="margin-top:10px;"><?php echo $mensajeExito; ?></p>
      <?php endif; ?>

      <?php if (!empty($mensajeError)): ?>
        <p style="color:red; margin-top:10px;"><?php echo $mensajeError; ?></p>
      <?php endif; ?>
    </div>

    <div class="lateral">
      <div class="card">
        <h2>Información de contacto</h2>
        <ul class="info-lista">
          <li><strong>Dirección:</strong> Av. Central 450, San José, Costa Rica</li>
          <li><strong>Teléfono:</strong> +506 2234-5678</li>
          <li><strong>Correo:</strong> info@novatechacademy.cr</li>
          <li><strong>Horario:</strong> Lun–Vie 8am–6pm | Sáb 8am–12pm</li>
        </ul>
      </div>

      <div class="card">
        <h2>¿Cómo llegar?</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15719.0!2d-84.0900!3d9.9350!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e343e0c87619%3A0x827ce72c16b8e4f!2sSan%20Jos%C3%A9%2C%20Costa%20Rica!5e0!3m2!1ses!2scr!4v1716000000000"
          width="100%"
          height="220"
          style="border:0; border-radius:6px; margin-top:10px;"
          allowfullscreen=""
          loading="lazy"
          title="Ubicación NovaTech Academy">
        </iframe>
      </div>
    </div>
  </div>

  <footer id="footer">
    <div class="footer-grid contenedor">
      <div>
        <p class="footer-nombre">NOVA<span>TECH</span></p>
        <p class="footer-descripcion">Formando los profesionales tecnológicos del mañana.</p>
        <div class="footer-redes">
          <a href="#">Facebook</a>
          <a href="#">Instagram</a>
          <a href="#">LinkedIn</a>
        </div>
      </div>
      <div>
        <p class="footer-nav-titulo">Páginas</p>
        <ul class="footer-nav-lista">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php?controller=cursos&action=index">Cursos</a></li>
          <li><a href="index.php?controller=profesores&action=index">Profesores</a></li>
          <li><a href="index.php?controller=contacto&action=index">Contacto</a></li>
        </ul>
      </div>
      <div>
        <p class="footer-nav-titulo">Contacto</p>
        <ul class="footer-nav-lista">
          <li>Av. Central 450, San José</li>
          <li>+506 2234-5678</li>
          <li>info@novatechacademy.cr</li>
        </ul>
      </div>
    </div>
    <div class="footer-creditos">
      © 2026 NovaTech Academy — Práctica 1, Ambiente Web, Universidad Fidélitas
    </div>
  </footer>

  <script>
    const toggle = document.getElementById('nav-toggle');
    const links  = document.getElementById('nav-links');
    toggle.addEventListener('click', () => {
      links.style.display = links.style.display === 'flex' ? 'none' : 'flex';
    });
  </script>

  <!-- JS de Tarea 2 se deja comentado si ya no aplica -->
  <!-- <script src="js/contacto.js"></script> -->
</body>
</html>