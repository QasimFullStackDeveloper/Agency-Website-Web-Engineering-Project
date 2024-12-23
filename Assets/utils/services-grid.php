<?php
$sql = "SELECT services_heading, services_description, services_image FROM get_services_poster WHERE is_active = 1 AND is_deleted = 0";
// echo "Services Cards Are Coming From DB At Runtime";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<div class="services-grid container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
        <?php
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
            echo '<p class="text-center fs-2">No services available at the moment.</p>';
        }
        ?>
    </div>
</div>