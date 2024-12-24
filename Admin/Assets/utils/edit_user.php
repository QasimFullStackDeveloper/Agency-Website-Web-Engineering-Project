<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $is_active = $_POST['is_active'];
    $is_deleted = $_POST['is_deleted'];

    $query = "UPDATE accounts SET user_name = :user_name, email = :email, is_active = :is_active, is_deleted = :is_deleted WHERE user_id = :user_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':user_name' => $user_name,
        ':email' => $email,
        ':is_active' => $is_active,
        ':is_deleted' => $is_deleted,
        ':user_id' => $user_id
    ]);

    header("Location: ../pages/User.php");
    exit();
}
