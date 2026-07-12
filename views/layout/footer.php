</main>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container footer-grid">
            <div>
                <p class="footer-nombre">NOVA<span>TECH</span></p>
                <p class="footer-descripcion">Formando los profesionales tecnológicos del mañana con educación de calidad.</p>
                <div class="footer-redes">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
            <div>
                <p class="footer-nav-titulo">Páginas</p>
                <ul class="footer-nav-lista">
                    <li><a href="index.php?controller=index&action=index">Inicio</a></li>
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
        <div class="container">
            <div class="footer-creditos">
                &copy; 2026 NovaTech Academy — Práctica 2, Ambiente Web Cliente Servidor, Universidad Fidélitas
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <?php if (!empty($pageJs)): ?>
        <script src="js/<?= htmlspecialchars($pageJs) ?>"></script>
    <?php endif; ?>

</body>
</html>