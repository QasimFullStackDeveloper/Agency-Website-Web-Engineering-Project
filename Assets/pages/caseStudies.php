<?php
include('../config/config.php');
$sql = "SELECT blog_image FROM get_blogs";
// echo "Case Studies Coming From DB At Runtime";

try {
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $caseStudies = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Case Studies</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="/Assets/css/style.css" />
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
          <a class="text-decoration-none" href="/assets/pages/about.html">My Case Studies</a>
        </li>
      </ol>
    </nav>
  </div>

  <div class="container py-5">
    <div>
      <h1
        style="font-family: 'Sora', serif"
        class="text-center mt-3 fw-semibold fs-1">
        Provide The Best Service <br />
        With Out Of The Box Ideas
      </h1>
    </div>

    <div class="d-flex flex-wrap gap-4 justify-content-center">
      <?php
      try {
        if (!empty($caseStudies)) {
          foreach ($caseStudies as $caseStudy) {
            echo ' <div> ';
            echo ' <img class="rounded-4 img-fluid" src="/assets/images/blogs/' . htmlspecialchars($caseStudy["blog_image"]) . '" alt="image" /> ';
            echo ' </div> ';
          }
        } else {
          echo '<p>No Case Studies available at the moment.</p>';
        }
      } catch (PDOException $e) {
        echo '<p>Error fetching services: ' . htmlspecialchars($e->getMessage()) . '</p>';
      }
      ?>
    </div>
  </div>
  </div>

  <!-- Dynamic Footer Will Come Here Using JavaScript/Jquery -->
  <div class="position-relative bottom-0 w-100" id="my-footer"></div>

  <!-- Script LInk -->
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
  <script src="/assets/js/script.js"></script>
</body>

</html>