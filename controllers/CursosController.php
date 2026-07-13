<?php
require_once 'models/CursoModel.php';

class CursosController {
    
    // Esta es la acción principal que lista los cursos
    public function index() {
        $model = new CursoModel();

        $categoria_seleccionada = isset($_GET['categoria']) ? $_GET['categoria'] : '';

        if (!empty($categoria_seleccionada) && $categoria_seleccionada !== 'todas') {
            $cursos = $model->getByCategoria($categoria_seleccionada);
        } else {
            $cursos = $model->getAll();
        }

        // Cargamos las vistas
        require_once 'views/layout/header.php';
        require_once 'views/cursos/index.php';
        require_once 'views/layout/footer.php';
    }
}
?>