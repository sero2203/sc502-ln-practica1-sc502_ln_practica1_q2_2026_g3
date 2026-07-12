<?php require __DIR__ . '/../layout/header.php'; ?>

    <!-- ENCABEZADO -->
    <section id="encabezado-profesores">
        <div class="container">
            <span class="tag">Equipo Docente</span>
            <h1><?= htmlspecialchars($profesor['nombre']) ?></h1>
            <p><?= htmlspecialchars($profesor['especialidad']) ?></p>
        </div>
    </section>

    <!-- DETALLE DEL PROFESOR -->
    <section id="profesores">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card-profesor" style="align-items:center; text-align:center;">
                        <img src="<?= htmlspecialchars($profesor['foto']) ?>"
                             alt="Foto de <?= htmlspecialchars($profesor['nombre']) ?>"
                             style="width:120px; height:120px;">

                        <h3><?= htmlspecialchars($profesor['nombre']) ?></h3>
                        <p class="especialidad"><?= htmlspecialchars($profesor['especialidad']) ?></p>
                        <p class="descripcion"><?= htmlspecialchars($profesor['bio']) ?></p>

                        <?php if (!empty($profesor['correo'])): ?>
                            <p class="mt-2"><strong>Correo:</strong> <?= htmlspecialchars($profesor['correo']) ?></p>
                        <?php endif; ?>

                        <?php if (!empty($profesor['cursos'])): ?>
                            <p class="mt-2 mb-1"><strong>Cursos que imparte:</strong></p>
                            <ul style="text-align:left;">
                                <?php foreach (explode(',', $profesor['cursos']) as $curso): ?>
                                    <li><?= htmlspecialchars(trim($curso)) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <a href="index.php?controller=profesores&action=index" class="btn-acento mt-3">
                            &larr; Volver al equipo docente
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require __DIR__ . '/../layout/footer.php'; ?>