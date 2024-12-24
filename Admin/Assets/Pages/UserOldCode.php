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
                        <!-- <tbody>
                <tr>
                  <td>
                    <img
                      src="/Admin/Assets/Admin Image/user1.svg"
                      alt="profile"
                      class="profile-pic me-2" />
                  </td>
                  <td>Ali Mujeed</td>
                  <td>Example@gmail.com</td>
                  <td class="text-success">Yes</td>
                  <td class="text-success">Yes</td>
                  <td>
                    <div class="fs-5">
                      <button
                        type="button"
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop3">
                        Delete
                      </button>

                      <div
                        class="modal fade"
                        id="staticBackdrop3"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdrop3Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="staticBackdrop3Label">
                                Delete Confirmation
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are You Sure you want to delete this?
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Cancel
                              </button>
                              <button type="button" class="btn btn-primary">
                                Confirm
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop1">
                        Edit
                      </button>

                      <div
                        class="modal fade"
                        id="staticBackdrop1"
                        data-bs-backdrop="static"
                        data-bs-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="staticBackdrop1Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-5"
                                id="staticBackdrop1Label">
                                Edit User
                              </h1>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form class="row g-3">
                                <div class="col-md-6">
                                  <label for="IsActive" class="form-label"
                                    >IsActive</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="IsActive" />
                                </div>
                                <div class="col-md-6">
                                  <label for="IsDeleted" class="form-label"
                                    >IsDeleted</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="IsDeleted" />
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Cancel
                              </button>
                              <button type="button" class="btn btn-primary">
                                Save
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-secondary">17/12/2024</td>
                </tr>
              </tbody> -->

                        <tbody>
                            <?php
                            include '../utils/userFunctions.php';
                            $users = fetchAllUsers();
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>{$user['user_id']}</td>";
                                echo "<td><img src='/Admin/assets/Admin Image/{$user['user_image']}' alt='profile' class='profile-pic me-2' style='width: 50px; height: 50px; border-radius: 50%;'></td>";
                                echo "<td>{$user['user_name']}</td>";
                                echo "<td>{$user['email']}</td>";
                                echo "<td class='text-success'>" . ($user['is_active'] ? 'Yes' : 'No') . "</td>";
                                echo "<td class='text-danger'>" . ($user['is_deleted'] ? 'Yes' : 'No') . "</td>";
                                echo "<td>
                            <button class='btn btn-primary edit-user' data-bs-toggle='modal' data-bs-target='#editModal' data-user-id='{$user['user_id']}' data-user-name='{$user['user_name']}' data-is-active='{$user['is_active']}'>Edit</button>
                            <button class='btn btn-danger delete-user' data-bs-toggle='modal' data-bs-target='#deleteModal' data-user-id='{$user['user_id']}'>Delete</button>
                      </td>";
                                echo "<td class='text-secondary'>{$user['created_at']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm">
                                <input type="hidden" name="user_id" id="editUserId">
                                <div class="mb-3">
                                    <label for="editUserName" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="user_name" id="editUserName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editIsActive" class="form-label">Is Active</label>
                                    <select class="form-control" name="is_active" id="editIsActive" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this user?
                            <form id="deleteForm">
                                <input type="hidden" name="user_id" id="deleteUserId">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" form="deleteForm" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
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