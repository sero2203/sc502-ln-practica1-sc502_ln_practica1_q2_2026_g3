<?php
$controller = $_GET['controller'] ?? 'index';
$action     = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'contacto':
        require_once __DIR__ . '/controllers/ContactoController.php';
        $ctrl = new ContactoController();

        if ($action === 'store') {
            $ctrl->store();
        } else {
            $ctrl->index();
        }
        break;

    // aquí van los otros controladores: index, cursos, profesores...
}
?>