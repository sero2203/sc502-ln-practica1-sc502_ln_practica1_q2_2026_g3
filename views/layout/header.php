<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'NovaTech Academy' ?></title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <?php if (!empty($pageCss)): ?>
        <link rel="stylesheet" href="css/<?= htmlspecialchars($pageCss) ?>">
    <?php endif; ?>
</head>
<body>

    <!-- NAVBAR -->
    <nav id="navbar">
        <div class="contenedor">
            <div id="nav-contenido">
                <a id="nav-logo" href="index.php?controller=index&action=index">NOVA<span>TECH</span></a>
                <button id="nav-toggle">☰</button>
                <ul id="nav-links">
                    <li><a class="nav-link <?= ($controllerName ?? '') === 'index' ? 'activo' : '' ?>" href="index.php?controller=index&action=index">Inicio</a></li>
                    <li><a class="nav-link <?= ($controllerName ?? '') === 'cursos' ? 'activo' : '' ?>" href="index.php?controller=cursos&action=index">Cursos</a></li>
                    <li><a class="nav-link <?= ($controllerName ?? '') === 'profesores' ? 'activo' : '' ?>" href="index.php?controller=profesores&action=index">Profesores</a></li>
                    <li><a class="nav-link <?= ($controllerName ?? '') === 'contacto' ? 'activo' : '' ?>" href="index.php?controller=contacto&action=index">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>