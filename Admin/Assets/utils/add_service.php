<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $service_heading = $_POST['service_heading'];
    $service_description = $_POST['service_description'];
    $is_active = $_POST['is_active'];
    $is_deleted = $_POST['is_deleted'];

    // Handle file upload
    if (isset($_FILES['service_image']) && $_FILES['service_image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['service_image']['tmp_name'];
        $imageName = uniqid() . '-' . $_FILES['service_image']['name'];
        $uploadDir = '../../../assets/images/services/cardsImages/';
        $uploadFilePath = $uploadDir . $imageName;

        if (move_uploaded_file($imageTmpPath, $uploadFilePath)) {
            $service_image = $imageName;
        } else {
            die("Failed to upload image.");
        }
    } else {
        die("Invalid file upload.");
    }

    try {
        $query = "INSERT INTO get_services_poster (services_image, services_heading, services_description, is_active, is_deleted) 
                  VALUES (:services_image, :services_heading, :services_description, :is_active, :is_deleted)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':services_image' => $service_image,
            ':services_heading' => $service_heading,
            ':services_description' => $service_description,
            ':is_active' => $is_active,
            ':is_deleted' => $is_deleted,
        ]);
        header("Location: ../pages/Service.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
