<?php
require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController {

    // Mostrar la página de contacto (formulario)
    public function index() {
        require __DIR__ . '/../views/contacto/contacto.php';
    }

    // Guardar el contacto en la BD
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?controller=contacto&action=index');
            exit;
        }

        // 1. Recoger datos del formulario
        $nombre   = trim($_POST['nombre']   ?? '');
        $correo   = trim($_POST['correo']   ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $asunto   = trim($_POST['asunto']   ?? '');
        $mensaje  = trim($_POST['mensaje']  ?? '');

        // 2. Validación básica
        $errores = [];

        if ($nombre === '')   $errores[] = 'El nombre es obligatorio.';
        if ($correo === '')   $errores[] = 'El correo es obligatorio.';
        if ($mensaje === '')  $errores[] = 'El mensaje es obligatorio.';

        if (!empty($errores)) {
            $mensajeError = implode(' ', $errores);
            require __DIR__ . '/../views/contacto/contacto.php';
            return;
        }

        // 3. Llamar al modelo
        $model = new ContactoModel();
        $ok = $model->create($nombre, $correo, $telefono, $asunto, $mensaje);

        // 4. Decidir qué mostrar
        if ($ok) {
            $mensajeExito = 'Tu mensaje ha sido enviado correctamente.';
        } else {
            $mensajeError = 'Hubo un problema al enviar el mensaje.';
        }

        // 5. Volver a cargar la vista
        require __DIR__ . '/../views/contacto/contacto.php';
    }
}
?>