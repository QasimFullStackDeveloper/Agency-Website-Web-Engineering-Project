<?php
include('../config/config.php');
$sql = "SELECT faq_id, question, answer FROM faq WHERE is_active = 1 AND is_deleted = 0";
// echo "Services Cards Coming From DB At Runtime";

try {
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $faqs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
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
          <a class="text-decoration-none" href="/assets/pages/about.html">FAQ</a>
        </li>
      </ol>
    </nav>
  </div>

  <!-- FAQs Section Start -->
  <div class="faqMain container py-5 gap-4">
    <div class="row">
      <!-- FAQ Section -->
      <div class="col-md-8 d-flex flex-column">
        <h1 class="mb-4">Frequently Asked Questions</h1>
        <p class="mb-4">
          If you have questions, we have answers for you here. In case we don't,
          please feel free to reach out to us on the
          <a href="./contactUs.php" class="contact text-decoration-none">Contact us</a> page.
        </p>

        <div class="mb-4">
          <div class="accordion" id="accordionExample">
            <?php
            $first = true;
            try {
              if (!empty($faqs)) {
                foreach ($faqs as $faq) {
                  $question = htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8');
                  $answer = htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8');
                  $id = 'collapse' . $faq['faq_id'];

                  $showClass = $first ? 'show' : '';
                  $collapsedClass = $first ? '' : 'collapsed';
                  $ariaExpanded = $first ? 'true' : 'false';

                  echo '<div class="accordion-item">';
                  echo '  <h2 class="accordion-header">';
                  echo '    <button class="accordion-button ' . $collapsedClass . '" type="button" data-bs-toggle="collapse" data-bs-target="#' . $id . '" aria-expanded="' . $ariaExpanded . '" aria-controls="' . $id . '">';
                  echo        $question;
                  echo '    </button>';
                  echo '  </h2>';
                  echo '  <div id="' . $id . '" class="accordion-collapse collapse ' . $showClass . '" data-bs-parent="#accordionExample">';
                  echo '    <div class="accordion-body">';
                  echo        $answer;
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';

                  $first = false;
                }
              } else {
                echo '<p>No FAQs available at the moment.</p>';
              }
            } catch (PDOException $e) {
              echo '<p>Error fetching FAQs: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Image Section -->
      <div class="col-md-4 text-center">
        <img
          src="/Assets/images/faq/faqImage.png"
          alt="faq-image"
          class="img-fluid" />
      </div>
    </div>
  </div>
  <!-- FAQs Section End -->

  <div
    class="faqEnd align-content-center px-4 container"
    style="background-repeat: no-repeat">
    <h1 class="Talent">Talent Is Everywhere Opportunity Should Be To</h1>
    <p class="Approve">
      Approve payroll, manage your team and find qualified candidates all on
      one platform.
    </p>
    <a
      href="#"
      class="btn btn-subscribe btn-send fw-medium d-flex align-items-center align-content-center mx-auto rounded-5">
      <span
        class="icon d-flex justify-content-center align-items-center me-2"><img src="/assets/images/icons/arrow.svg" alt="arrow" /></span>
      Subscribe Now
    </a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


  <!-- My Custom Scripts -->
  <script src="/assets/js/script.js"></script>
</body>

</html>