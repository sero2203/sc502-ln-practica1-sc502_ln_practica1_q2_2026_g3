<?php

require_once __DIR__ . '/../config/database.php';

class ProfesorModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    //  READ — Obtener todos los profesores activos

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT * FROM profesores WHERE activo = 1 ORDER BY nombre ASC'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //  READ — Obtener un profesor por ID

    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM profesores WHERE id = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
}