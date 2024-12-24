<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $services_id = $_POST['services_id'];

    $query = "DELETE FROM get_services_poster WHERE services_id = :services_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':services_id' => $services_id]);

    header("Location: ../pages/Service.php");
    exit();
}
