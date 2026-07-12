<?php require __DIR__ . '/../layout/header.php'; ?>

    <!-- ENCABEZADO -->
    <section id="encabezado-profesores">
        <div class="container">
            <span class="tag">Equipo Docente</span>
            <h1>Aprende de los<br>mejores profesionales</h1>
            <p>Nuestros profesores son expertos activos en la industria tecnológica, con experiencia real en empresas líderes del sector.</p>
        </div>
    </section>

    <!-- TARJETAS DE PROFESORES -->
    <section id="profesores">
        <div class="container">
            <h2 class="seccion-titulo">Nuestro equipo</h2>
            <p class="seccion-subtitulo">Profesionales con experiencia en la industria tecnológica</p>

            <div class="row g-4" id="contenedor-profesores">
                <?php if (empty($profesores)): ?>
                    <p class="text-muted">Todavía no hay profesores registrados.</p>
                <?php else: ?>
                    <?php foreach ($profesores as $profesor): ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="index.php?controller=profesores&action=show&id=<?= (int) $profesor['id'] ?>"
                               class="card-profesor-link text-decoration-none">
                                <div class="card-profesor">
                                    <img src="<?= htmlspecialchars($profesor['foto']) ?>"
                                         alt="Foto de <?= htmlspecialchars($profesor['nombre']) ?>">
                                    <h3><?= htmlspecialchars($profesor['nombre']) ?></h3>
                                    <p class="especialidad"><?= htmlspecialchars($profesor['especialidad']) ?></p>
                                    <p class="descripcion"><?= htmlspecialchars($profesor['bio']) ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- MISIÓN Y VISIÓN -->
    <section id="mision-vision">
        <div class="container">
            <h2 class="seccion-titulo">Misión & Visión</h2>
            <p class="seccion-subtitulo">Los valores que guían nuestra academia</p>

            <div class="row g-4">

                <div class="col-12 col-md-6">
                    <div class="card-mv mision">
                        <span class="mv-tag">Misión</span>
                        <h2>Lo que nos mueve</h2>
                        <p>Formar profesionales en tecnología con las habilidades técnicas y el pensamiento crítico necesarios para enfrentar los desafíos del mundo digital. Brindamos educación accesible, práctica y actualizada, impulsando el crecimiento personal y profesional de cada estudiante.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card-mv vision">
                        <span class="mv-tag">Visión</span>
                        <h2>A dónde vamos</h2>
                        <p>Ser la academia de tecnología más innovadora de Centroamérica, reconocida por la calidad de sus egresados y su impacto en el ecosistema tecnológico regional. Aspiramos a ser el puente entre el talento local y las oportunidades globales de la industria tech.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php require __DIR__ . '/../layout/footer.php'; ?>