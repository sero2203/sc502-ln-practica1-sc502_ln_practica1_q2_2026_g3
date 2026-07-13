<div class="container mt-5">
    <h2 class="mb-4">Catálogo de Cursos</h2>

    <!-- Formulario de filtro: Envía los parámetros por GET sin usar JavaScript -->
    <form method="GET" action="index.php" class="mb-4">
        <!-- Campos ocultos para decirle al enrutador qué controlador y acción usar -->
        <input type="hidden" name="controller" value="cursos">
        <input type="hidden" name="action" value="index">

        <div class="row align-items-center">
            <div class="col-auto">
                <label for="categoria" class="col-form-label fw-bold">Filtrar por categoría:</label>
            </div>
            <div class="col-auto">
                <select name="categoria" id="categoria" class="form-select">
                    <option value="todas">Todas las categorías</option>
                    <option value="Programación" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Programación') ? 'selected' : ''; ?>>Programación</option>
                    <option value="Diseño" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Diseño') ? 'selected' : ''; ?>>Diseño</option>
                    <option value="Bases de Datos" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Bases de Datos') ? 'selected' : ''; ?>>Bases de Datos</option>
                    <option value="Negocios" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Negocios') ? 'selected' : ''; ?>>Negocios</option>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Aplicar filtro</button>
            </div>
        </div>
    </form>

    <!-- Listado dinámico de los cursos traídos desde la base de datos -->
    <div class="row">
        <?php if(!empty($cursos)): ?>
            <?php foreach($cursos as $curso): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <span class="badge bg-secondary mb-2"><?php echo htmlspecialchars($curso['categoria']); ?></span>
                            <h5 class="card-title"><?php echo htmlspecialchars($curso['nombre']); ?></h5>
                            <p class="card-text text-muted"><?php echo htmlspecialchars($curso['descripcion']); ?></p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <p class="card-text fw-bold">Precio: $<?php echo number_format($curso['precio'], 2); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info">No se encontraron cursos para la categoría seleccionada.</div>
            </div>
        <?php endif; ?>
    </div>
</div>