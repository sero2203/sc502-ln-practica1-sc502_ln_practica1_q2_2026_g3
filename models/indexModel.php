<?php
 
require_once __DIR__ . '/../config/database.php';
 
class IndexModel
{
    private PDO $db;
 
    public function __construct()
    {
        $this->db = Database::getConnection();
    }
 
    //  READ — Obtener todos los cursos destacados disponibles
 
    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT * FROM cursos_destacados WHERE disponible = 1 ORDER BY id ASC'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
 