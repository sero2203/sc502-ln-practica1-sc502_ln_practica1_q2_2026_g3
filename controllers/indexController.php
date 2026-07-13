<?php
 
require_once __DIR__ . '/../models/IndexModel.php';
 
class IndexController
{
    private IndexModel $model;
    private string $controllerName = 'index';
 
    public function __construct()
    {
        $this->model = new IndexModel();
    }
 
    //  Página de inicio — lista los cursos destacados
 
    public function index(): void
    {
        $cursosDestacados = $this->model->getAll();
        $controllerName = $this->controllerName;
        $pageTitle = 'NovaTech Academy';
        $pageCss = 'index.css';
        $pageJs = 'index.js';
 
        require __DIR__ . '/../views/index/index.php';
    }
}
 