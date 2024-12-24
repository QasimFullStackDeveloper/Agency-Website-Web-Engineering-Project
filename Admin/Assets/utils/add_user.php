<?php
require_once('../config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $isActive = $_POST['is_active'];
    $isDeleted = $_POST['is_deleted'];

    try {
        $query = "INSERT INTO accounts (name, email, is_active, is_deleted) VALUES (:name, :email, :is_active, :is_deleted)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['name' => $name, 'email' => $email, 'is_active' => $isActive, 'is_deleted' => $isDeleted]);
        echo json_encode(['message' => 'User added successfully']);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
