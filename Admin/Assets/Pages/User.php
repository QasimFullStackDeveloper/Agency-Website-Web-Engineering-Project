<?php
require_once('../config/config.php');

try {
  $query = "SELECT * FROM accounts where is_deleted = 0 and is_active = 1";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // echo json_encode($users);
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
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
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
    <div
      class="container-fluid d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <a class="navbar-brand" href="/Admin/admin.php">
        <img src="/Assets/images/logo/logo.svg" alt="Logo" height="40" />
      </a>
      <!-- Search Box -->
      <div class="d-flex align-items-center">
        <input
          type="text"
          class="form-control search-input"
          placeholder="Search" />
        <button class="icon-btn ms-2">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <!-- Icons and User Profile -->
      <div class="d-flex align-items-center">
        <!-- User Profile -->
        <div class="d-flex align-items-center">
          <img
            src="/Admin/Assets/Admin Image/user4.svg"
            alt="profile"
            class="user-profile" />
          <span class="user-text">Hi,Admin Qasim</span>
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
        <h3 class="fw-bold">Users</h3>
        <div class="dashboard-card">
          <h5>User Details</h5>
          <table class="table table-borderless align-middle mt-3">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>IsActive</th>
                <th>IsDeleted</th>
                <th>Actions</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?= htmlspecialchars($user['user_id']) ?></td>
                    <td>
                      <img src="/Admin/assets/Admin Image/<?= htmlspecialchars($user['user_image'] ?? 'default-user.svg') ?>" alt="profile" class="profile-pic me-2" style="width: 50px; height: 50px; border-radius: 50%;">
                    </td>
                    <td><?= htmlspecialchars($user['user_name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td class="<?= $user['is_active'] ? 'text-success' : 'text-danger' ?>">
                      <?= $user['is_active'] ? 'Yes' : 'No' ?>
                    </td>
                    <td class="<?= $user['is_deleted'] ? 'text-danger' : 'text-success' ?>">
                      <?= $user['is_deleted'] ? 'Yes' : 'No' ?>
                    </td>
                    <td>
                      <!-- Edit Button -->
                      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $user['user_id'] ?>">
                        Edit
                      </button>

                      <!-- Delete Button -->
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $user['user_id'] ?>">
                        Delete
                      </button>
                    </td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                  </tr>

                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal<?= $user['user_id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $user['user_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel<?= $user['user_id'] ?>">Edit User</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Edit Form -->
                          <form action="../utils/edit_user.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                            <div class="mb-3">
                              <label for="user_name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="user_name" name="user_name" value="<?= htmlspecialchars($user['user_name']) ?>" required>
                            </div>
                            <div class="mb-3">
                              <label for="user_email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="user_email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                            </div>
                            <div class="mb-3">
                              <label for="is_active" class="form-label">Active Status</label>
                              <select class="form-select" name="is_active" id="is_active" required>
                                <option value="1" <?= $user['is_active'] ? 'selected' : '' ?>>Active</option>
                                <option value="0" <?= !$user['is_active'] ? 'selected' : '' ?>>Inactive</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="is_deleted" class="form-label">Delete Status</label>
                              <select class="form-select" name="is_deleted" id="is_deleted" required>
                                <option value="0" <?= !$user['is_deleted'] ? 'selected' : '' ?>>Not Deleted</option>
                                <option value="1" <?= $user['is_deleted'] ? 'selected' : '' ?>>Deleted</option>
                              </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal<?= $user['user_id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $user['user_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deleteModalLabel<?= $user['user_id'] ?>">Delete Confirmation</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this user?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <form action="../utils/delete_user.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="8" class="text-center">No users found</td>
                </tr>
              <?php endif; ?>
            </tbody>
        </div>
      </div>
    </div>
    <!-- CDN Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <!-- My Custom Script -->
    <script src="/Admin//assets/js/Script.js"></script>
</body>

</html>