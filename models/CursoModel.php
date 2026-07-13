<?php
require_once 'config/database.php';

class CursoModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    // Método para obtener todos los cursos
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM cursos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener los cursos filtrados por categoría 
    public function getByCategoria($cat) {
        $stmt = $this->db->prepare("SELECT * FROM cursos WHERE categoria = :categoria");
        $stmt->bindParam(':categoria', $cat, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>