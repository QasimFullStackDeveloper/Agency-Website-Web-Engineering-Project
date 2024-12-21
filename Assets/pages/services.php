<?php
include('/University Documents/5th Semester/Web Engineering (WE)/Project/Agency-Website-Web-Engineering-Project-main Latest/config/config.php');

$sql = "SELECT services_heading, services_description, services_image FROM get_services_poster";

try {
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Query failed: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services</title>
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
          <a class="text-decoration-none" href="/assets/pages/services.html">Our Service</a>
        </li>
      </ol>
    </nav>
  </div>

  <div class="container services py-5">
    <h1 class="text-center fw-semibold mb-5">
      A Leading Global Provider <br />
      Of Recruitment
    </h1>

    <!-- Services Grid Container -->
    <div class="services-grid container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
        <?php
        try {
          if (!empty($services)) {
            foreach ($services as $service) {
              echo '<div class="col d-flex justify-content-center">';
              echo '  <div class="card rounded-4 h-100">';
              echo '    <div class="card-body px-4 pt-4 pb-0">';
              echo '      <h5 class="card-title fw-semibold lh-lg">' . htmlspecialchars($service["services_heading"]) . '</h5>';
              echo '      <p class="fw-normal card-text lh-base">' . htmlspecialchars($service["services_description"]) . '</p>';
              echo '      <a class="text-decoration-none" href="#">Explore Now';
              echo '        <span>';
              echo '          <img class="pb-1 ms-1" src="/assets/images/icons/arrow.svg" alt="arrow" />';
              echo '        </span>';
              echo '      </a>';
              echo '      <br />';
              echo '    </div>';
              echo '    <img class="rounded-4 img-fluid" src="/assets/images/services/cardsImages/' . htmlspecialchars($service["services_image"]) . '" alt="card-pic" />';
              echo '  </div>';
              echo '</div>';
            }
          } else {
            echo '<p>No services available at the moment.</p>';
          }
        } catch (PDOException $e) {
          echo '<p>Error fetching services: ' . htmlspecialchars($e->getMessage()) . '</p>';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Find the Best Talents Card... -->
  <div class="container my-5">
    <div
      class="subscribe-section d-flex flex-column flex-md-row align-items-center justify-content-between">
      <!-- Left Content -->
      <div class="col-md-6 text-md-start text-center mb-4 mb-md-0">
        <h1 class="subscribe-title fs-1 fw-semibold lh-base">
          Find The Best <span class="d-inline d-sm-block"></span>
          Talents & Build Relationship
        </h1>
      </div>

      <!-- Right Content -->
      <div class="col-md-6">
        <p class="subscribe-text mb-3">
          The most complete talent relationship platform for talent sourcing,
          recruitment events, and internal mobility.
        </p>
        <!-- Sucscribe Button -->
        <div class="input-group align-items-center">
          <input
            type="email"
            class="form-control rounded-5 border-0"
            placeholder="Enter email" />

          <a
            href="#"
            class="btn btn-subscribe-purple btn-subscribe d-flex align-items-center rounded-5">
            <span
              class="icon d-flex justify-content-center align-items-center me-2"><img src="/assets/images/icons/arrow.svg" alt="arrow" /></span>
            Subscribe Now
          </a>
        </div>
      </div>
    </div>
  </div>

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