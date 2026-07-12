<?php
/**
 * Front Controller
 * Único punto de entrada de la aplicación.
 * Lee ?controller=...&action=... y despacha hacia el Controller correspondiente.
 */

// Controlador y acción por defecto (página de inicio)
$controllerName = $_GET['controller'] ?? 'index';
$actionName     = $_GET['action']     ?? 'index';
$id             = isset($_GET['id']) ? (int) $_GET['id'] : null;

// Mapa: nombre recibido por GET
$controllersMap = [
    'index'      => ['file' => 'IndexController.php',      'class' => 'IndexController'],
    'cursos'     => ['file' => 'CursosController.php',     'class' => 'CursosController'],
    'profesores' => ['file' => 'ProfesoresController.php', 'class' => 'ProfesoresController'],
    'contacto'   => ['file' => 'ContactoController.php',   'class' => 'ContactoController'],
];

// Validar que el controlador solicitado exista en el mapa
if (!isset($controllersMap[$controllerName])) {
    http_response_code(404);
    die('<h2>404 - Controlador no encontrado.</h2>');
}

$controllerFile  = __DIR__ . '/controllers/' . $controllersMap[$controllerName]['file'];
$controllerClass = $controllersMap[$controllerName]['class'];

// Si el archivo del controlador aún no existe, avisa en vez de romper
if (!file_exists($controllerFile)) {
    http_response_code(501);
    die('<h2>El controlador "' . htmlspecialchars($controllerName) . '" todavía no ha sido implementado.</h2>');
}

require_once $controllerFile;

if (!class_exists($controllerClass) || !method_exists($controllerClass, $actionName)) {
    http_response_code(404);
    die('<h2>404 - Acción no encontrada.</h2>');
}

$controller = new $controllerClass();

// Las acciones que reciben id (show, edit, update, delete) se llaman con el id como parámetro
if ($id !== null && in_array($actionName, ['show', 'edit', 'update', 'delete'], true)) {
    $controller->$actionName($id);
} else {
    $controller->$actionName();
}