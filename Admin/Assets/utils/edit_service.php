<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $services_id = $_POST['services_id'];
    $services_heading = $_POST['services_heading'];
    $services_description = $_POST['services_description'];
    $is_active = $_POST['is_active'];
    $is_deleted = $_POST['is_deleted'];

    // Check if a new image is uploaded
    if (isset($_FILES['services_image']) && $_FILES['services_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../uploads/";
        $fileName = basename($_FILES['services_image']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Move uploaded file to the server
        if (move_uploaded_file($_FILES['services_image']['tmp_name'], $targetFilePath)) {
            $services_image = $fileName;
        } else {
            echo "Error uploading file.";
            exit();
        }
    } else {
        // Fetch the existing image from the database if no new one is uploaded
        $stmt = $pdo->prepare("SELECT services_image FROM get_services_poster WHERE services_id = :services_id");
        $stmt->execute([':services_id' => $services_id]);
        $services_image = $stmt->fetchColumn();
    }

    // Update query
    $query = "UPDATE get_services_poster SET 
                services_image = :services_image, 
                services_heading = :services_heading, 
                services_description = :services_description, 
                is_active = :is_active,
                is_deleted = :is_deleted
              WHERE services_id = :services_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':services_id' => $services_id,
        ':services_image' => $services_image,
        ':services_heading' => $services_heading,
        ':services_description' => $services_description,
        ':is_active' => $is_active,
        ':is_deleted' => $is_deleted,
    ]);

    // Redirect back to the service page
    header("Location: ../pages/Service.php");
    exit();
}
