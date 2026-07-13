<?php require __DIR__ . '/../layout/header.php'; ?>
 
    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <h1 class="seccion-titulo">
                Domina la Tecnología del Futuro
            </h1>
 
            <p class="seccion-subtitulo">
                Aprende las habilidades más demandadas en Data Science,
                Inteligencia Artificial, Desarrollo Full Stack y
                Ciberseguridad.
            </p>
 
            <a href="#" class="btn-acento">
                Explorar Programas
            </a>
        </div>
    </section>
 
    <!-- BENEFICIOS -->
    <section class="beneficios">
        <div class="container">
            <div class="beneficios-header">
                <h2 class="seccion-titulo">
                    ¿Por qué estudiar con nosotros?
                </h2>
            </div>
 
            <div class="beneficios-grid">
                <div class="beneficio">
                    <h3>Profesores Expertos</h3>
                    <p>Aprende con profesionales activos en la industria.</p>
                </div>
 
                <div class="beneficio">
                    <h3>Modalidad Flexible</h3>
                    <p>Estudia desde cualquier lugar y a tu ritmo.</p>
                </div>
 
                <div class="beneficio">
                    <h3>Certificación</h3>
                    <p>Obtén certificados al completar cada programa.</p>
                </div>
 
                <div class="beneficio">
                    <h3>Proyectos Reales</h3>
                    <p>Desarrolla experiencia práctica para tu portafolio.</p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- CURSOS -->
    <section class="cursos">
        <div class="container">
            <div class="cursos-header">
                <h2 class="seccion-titulo">Nuestros Programas</h2>
            </div>
 
            <div id="cursos-grid">
                <?php if (empty($cursosDestacados)): ?>
                    <p class="text-muted">Todavía no hay cursos destacados.</p>
                <?php else: ?>
                    <?php foreach ($cursosDestacados as $curso): ?>
                        <div class="curso-tarjeta">
                            <img src="<?= htmlspecialchars($curso['imagen']) ?>"
                                 alt="<?= htmlspecialchars($curso['nombre']) ?>"
                                 class="curso-imagen">
 
                            <div class="curso-cuerpo">
                                <span class="curso-categoria"><?= htmlspecialchars($curso['categoria']) ?></span>
                                <h3 class="curso-nombre"><?= htmlspecialchars($curso['nombre']) ?></h3>
                                <p class="curso-descripcion"><?= htmlspecialchars($curso['descripcion']) ?></p>
                                <a href="index.php?controller=cursos&action=index" class="btn-acento curso-boton">
                                    Ver programa
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
 
<?php require __DIR__ . '/../layout/footer.php'; ?>