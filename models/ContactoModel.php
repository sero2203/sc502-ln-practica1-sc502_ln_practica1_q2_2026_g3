<?php
require_once __DIR__ . '/../config/database.php';

class ContactoModel {

    public function create($nombre, $correo, $telefono, $asunto, $mensaje) {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO contacto (nombre, correo, telefono, asunto, mensaje)
                VALUES (:nombre, :correo, :telefono, :asunto, :mensaje)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre',   $nombre);
        $stmt->bindParam(':correo',   $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':asunto',   $asunto);
        $stmt->bindParam(':mensaje',  $mensaje);

        return $stmt->execute();
    }
}
?>