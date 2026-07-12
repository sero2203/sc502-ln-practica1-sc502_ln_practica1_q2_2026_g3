<?php

require_once __DIR__ . '/../models/ProfesorModel.php';

class ProfesoresController
{
    private ProfesorModel $model;
    private string $controllerName = 'profesores';

    public function __construct()
    {
        $this->model = new ProfesorModel();
    }

    //  GET ?controller=profesores&action=index
    //  Lista de todos los profesores en tarjetas

    public function index(): void
    {
        $profesores = $this->model->getAll();
        $controllerName = $this->controllerName;
        $pageTitle = 'Profesores - NovaTech Academy';
        $pageCss = 'profesores.css';
        $pageJs = 'profesores.js';

        require __DIR__ . '/../views/profesores/index.php';
    }

    //  GET ?controller=profesores&action=show&id=X
    //  Muestra el detalle de un profesor específico

    public function show(int $id): void
    {
        $profesor = $this->model->getById($id);

        if (!$profesor) {
            http_response_code(404);
            die('<h2>Profesor no encontrado.</h2>');
        }

        $controllerName = $this->controllerName;
        $pageTitle = htmlspecialchars($profesor['nombre']) . ' - NovaTech Academy';
        $pageCss = 'profesores.css';
        $pageJs = 'profesores.js';

        require __DIR__ . '/../views/profesores/show.php';
    }
}