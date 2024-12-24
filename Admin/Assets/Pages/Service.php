<?php
require_once('../config/config.php');

try {
    $query = "SELECT * FROM get_services_poster";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page - Agency Website</title>
    <!-- CDNS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <!-- My Custom CSS -->
    <link rel="stylesheet" href="/Admin/Assets/css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg px-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/Assets/images/logo/logo.svg" alt="Logo" height="40" />
            </a>
            <!-- Search Box -->
            <div class="d-flex align-items-center">
                <input type="text" class="form-control search-input" placeholder="Search">
                <button class="icon-btn ms-2">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <!-- Icons and User Profile -->
            <div class="d-flex align-items-center">

                <!-- User Profile -->
                <div class="d-flex align-items-center">
                    <img src="/Admin/Assets/Admin Image/user4.svg" alt="profile" class="user-profile">
                    <span class="user-text">Hi,Admin John</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Content Body-->
    <div class="container-fluid sidelink">
        <div class="row">
            <!-- Sidebar -->
            <span class="col-2" id="SideBar"></span>

            <!-- Main Content -->
            <div class="col-10 p-4">
                <!-- <h3 class="fw-bold">Services Details</h3> -->
                <div class="dashboard-card">
                    <div class="d-flex justify-content-between">
                        <h3 class="fw-bold">Service Details</h3>
                        <!-- Add Button to Trigger Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                            Add New Service
                        </button>

                        <!-- Add Service Modal -->
                        <div class="modal fade" id="addServiceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addServiceModalLabel">Add New Service</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="../utils/add_service.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="serviceHeading" class="form-label">Service Heading</label>
                                                <input type="text" class="form-control" id="serviceHeading" name="service_heading" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="serviceDescription" class="form-label">Service Description</label>
                                                <textarea class="form-control" id="serviceDescription" name="service_description" rows="3" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="serviceImage" class="form-label">Service Image</label>
                                                <input type="file" class="form-control" id="serviceImage" name="service_image" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="isActive" class="form-label">Is Active</label>
                                                <select class="form-select" id="isActive" name="is_active" required>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="isDeleted" class="form-label">Is Deleted</label>
                                                <select class="form-select" id="isDeleted" name="is_deleted" required>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Add Service</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <table class="table table-borderless align-middle mt-3">
                        <thead>
                            <tr class="fs-5">
                                <th>Service ID</th>
                                <th>Service Image</th>
                                <th>Service Heading</th>
                                <th>Service Description</th>
                                <th>IsActive</th>
                                <th>IsDeleted</th>
                                <th>Actions</th>
                                <th>Create Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services as $service): ?>
                                <tr>
                                    <td><?= htmlspecialchars($service['services_id']) ?></td>
                                    <td>
                                        <img src="/assets/images/services/cardsImages/<?= htmlspecialchars($service['services_image']) ?>" alt="Service Image" class="me-2" width="100" height="100">
                                    </td>
                                    <td><?= htmlspecialchars($service['services_heading']) ?></td>
                                    <td>
                                        <div class="text-truncate"><?= htmlspecialchars($service['services_description']) ?></div>
                                    </td>
                                    <td class="<?= $service['is_active'] ? 'text-success' : 'text-danger' ?>">
                                        <?= $service['is_active'] ? 'Yes' : 'No' ?>
                                    </td>
                                    <td class="<?= $service['is_deleted'] ? 'text-danger' : 'text-success' ?>">
                                        <?= $service['is_deleted'] ? 'Yes' : 'No' ?>
                                    </td>
                                    <td>
                                        <div class="fs-5">
                                            <!-- Delete Button to Modal Trigger -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $service['services_id'] ?>">
                                                Delete
                                            </button>

                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="deleteModal<?= $service['services_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5">Delete Confirmation</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this service?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <a href="../utils/delete_service.php?id=<?= $service['services_id'] ?>" class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Button to Trigger Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $service['services_id'] ?>">
                                                Edit
                                            </button>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal<?= $service['services_id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5">Edit Service</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="../utils/edit_service.php" method="POST" enctype="multipart/form-data">
                                                                <input type="hidden" name="services_id" value="<?= $service['services_id'] ?>">
                                                                <div class="mb-3">
                                                                    <label for="serviceHeading<?= $service['services_id'] ?>" class="form-label">Service Heading</label>
                                                                    <input type="text" class="form-control" id="serviceHeading<?= $service['services_id'] ?>" name="services_heading" value="<?= htmlspecialchars($service['services_heading']) ?>" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="serviceDescription<?= $service['services_id'] ?>" class="form-label">Service Description</label>
                                                                    <textarea class="form-control" id="serviceDescription<?= $service['services_id'] ?>" name="services_description" rows="3" required><?= htmlspecialchars($service['services_description']) ?></textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="serviceImage<?= $service['services_id'] ?>" class="form-label">Service Image</label>
                                                                    <input type="file" class="form-control" id="serviceImage<?= $service['services_image'] ?>" name="services_image">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="isActive<?= $service['services_id'] ?>" class="form-label">Is Active</label>
                                                                    <select class="form-select" id="isActive<?= $service['services_id'] ?>" name="is_active" required>
                                                                        <option value="1" <?= $service['is_active'] ? 'selected' : '' ?>>Yes</option>
                                                                        <option value="0" <?= !$service['is_active'] ? 'selected' : '' ?>>No</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="isDeleted<?= $service['services_id'] ?>" class="form-label">Is Deleted</label>
                                                                    <select class="form-select" id="isDeleted<?= $service['services_id'] ?>" name="is_deleted" required>
                                                                        <option value="1" <?= $service['is_deleted'] ? 'selected' : '' ?>>Yes</option>
                                                                        <option value="0" <?= !$service['is_deleted'] ? 'selected' : '' ?>>No</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-secondary"><?= htmlspecialchars($service['created_at']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- CDN Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- My Custom Script -->
    <script src="/Admin/Assets/js/Script.js"></script>
</body>

</html>