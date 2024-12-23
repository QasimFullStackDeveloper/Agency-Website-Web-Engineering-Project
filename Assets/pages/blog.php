<?php
include('../config/config.php');
// include('../utils/blogs-query.php');

$page_number = isset($_GET['page_number']) ? (int)$_GET['page_number'] : 1;

if ($page_number < 1) {
  $page_number = 1;
}

try {
  $stmt = $pdo->prepare("CALL GetBlogsPagination(:page_number)");
  $stmt->bindParam(':page_number', $page_number, PDO::PARAM_INT);
  $stmt->execute();

  $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
} catch (PDOException $e) {
  die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blogs</title>
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

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <!-- Dynamic Navbar Will Come Here Using JavaScript/Jquery -->
  <div id="my-navbar"></div>

  <!-- BreadCrumb Code -->
  <div class="breadcrumb-container">
    <nav class="container" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="fisrt-breadcrumb-item">
          <a class="text-decoration-none" href="/index.html">Recruite</a>
        </li>
        <li class="breadcrumb-item mx-2">
          <img
            src="/assets/images/icons/greater-than.svg"
            alt="greater than" />
        </li>
        <li class="second-breadcrumb-item" aria-current="page">
          <a class="text-decoration-none" href="/assets/pages/services.html">Blogs</a>
        </li>
      </ol>
    </nav>
  </div>

  <!-- Blogs Container Start -->
  <div class="blogs py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h1 class="fw-semibold">Our Blogs</h1>
        <p class="text-muted">Explore our latest articles and insights</p>
      </div>

      <!-- Blogs Cards Grid Container -->
      <div class="row gy-4 blogs-grid mb-5">
        <?php
        if (!empty($blogs)) {
          foreach ($blogs as $blog) {
            echo '<div class="col-12 col-md-6 col-lg-4">';
            echo '  <div class="card blogs-card rounded-4 h-100" style="background: none !important">';
            echo '    <img class="card-img-top rounded-top-4" src="/assets/images/blogs/' . htmlspecialchars($blog["blog_image"]) . '" alt="' . htmlspecialchars($blog["blog_heading"]) . '" />';
            echo '    <div class="card-body blogs-card-body">';
            echo '      <div class="d-flex flex-wrap mb-2">';
            echo '        <span class="badge category me-2">' . htmlspecialchars($blog["category1"] ?? "") . '</span>';
            echo '        <span class="badge category">' . htmlspecialchars($blog["category2"] ?? "") . '</span>';
            echo '      </div>';
            echo '      <h5 class="card-title text-truncate">' . htmlspecialchars($blog["blog_heading"]) . '</h5>';
            echo '      <p class="card-text text-truncate">' . htmlspecialchars($blog["blog_description"]) . '</p>';
            echo '      <a class="text-decoration-none fw-medium" href="#">Read More';
            echo '        <span>';
            echo '          <img class="pb-1 ms-1" src="/assets/images/icons/arrow.svg" alt="arrow icon" />';
            echo '        </span>';
            echo '      </a>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
          }
        } else {
          echo '<p>No blogs available at the moment.</p>';
        }
        ?>
      </div>
    </div>

    <!-- Pagination Section Start -->
    <!-- <nav aria-label="Page Navigation">
      <ul class="pagination d-flex justify-content-center align-items-center">
        <li class="page-item">
          <a
            href=""
            class="page-link rounded-circle d-flex justify-content-center me-1"
            style="background-color: #9867ff; color: white; border: #9867ff">
            1
          </a>
        </li>

        <li class="page-item">
          <a
            class="page-link d-flex justify-content-center me-1"
            href="/assets/pages/blog.html">
            2
          </a>
        </li>

        <li class="page-item">
          <a
            class="page-link d-flex justify-content-center align-items-center"
            style="font-size: 14px; color: #999999"
            href="/assets/pages/blog.html">
            NEXT
            <img
              class="ms-1 mt-1"
              src="/assets/images/icons/greater-than.svg"
              alt="greater-than" />
          </a>
        </li>
      </ul>
    </nav> -->
    <?php
    try {
      $total_blogs_query = $pdo->query("SELECT COUNT(*) as total FROM get_blogs WHERE is_active = 1 AND is_deleted = 0");
      $total_blogs = $total_blogs_query->fetch(PDO::FETCH_ASSOC)['total'];
      $blogs_per_page = 6;
      $total_pages = ceil($total_blogs / $blogs_per_page);
    } catch (PDOException $e) {
      die("Error fetching total blogs: " . $e->getMessage());
    }

    echo '<nav aria-label="Page Navigation">';
    echo '<ul class="pagination d-flex justify-content-center align-items-center">';

    // Previous Button
    if ($page_number > 1) {
      echo '<li class="page-item">';
      echo '<a class="page-link d-flex justify-content-center align-items-center me-1" href="?page_number=' . ($page_number - 1) . '" style="font-size: 14px; color: #999999;">';
      echo 'PREV';
      echo '</a>';
      echo '</li>';
    }

    // Page Buttons
    for ($i = 1; $i <= $total_pages; $i++) {
      $is_active = ($i == $page_number) ? 'style="background-color: #9867ff; color: white; border: #9867ff;"' : 'style="color: #999999; border: #ddd;"';
      echo '<li class="page-item">';
      echo '<a class="page-link rounded-circle d-flex justify-content-center me-1" ' . $is_active . ' href="?page_number=' . $i . '">' . $i . '</a>';
      echo '</li>';
    }

    // Next Button
    if ($page_number < $total_pages) {
      echo '<li class="page-item">';
      echo '<a class="page-link d-flex justify-content-center align-items-center me-1" href="?page_number=' . ($page_number + 1) . '" style="font-size: 14px; color: #999999;">';
      echo 'NEXT';
      echo '<img class="ms-1 mt-1" src="/assets/images/icons/greater-than.svg" alt="greater-than" />';
      echo '</a>';
      echo '</li>';
    }

    echo '</ul>';
    echo '</nav>';
    ?>
    <!-- Pagination Section End -->
  </div>
  <!-- Blogs Container End -->

  <!-- Dynamic Footer Will Come Here Using JavaScript/Jquery -->
  <div class="position-relative bottom-0 w-100" id="my-footer"></div>

  <!-- CDN Links -->
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
  <script src="/assets/js/script.js"></script>
</body>

</html>