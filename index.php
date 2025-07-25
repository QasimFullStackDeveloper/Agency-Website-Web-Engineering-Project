<!-- php -S localhost:8000
http://localhost:8000/index.php -->

<?php
include('./Assets/config/config.php');
include('./Assets/utils/blogs-query.php');
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
  <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet" />
  <!-- My Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <!-- Dynamic Navbar Will Come Here Using JavaScript/Jquery -->
  <!-- Navbar Section Start -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transperant">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="/index.php">
        <img src="/assets/images/logo/logo.svg" alt="Logo" height="40" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto fw-medium">
          <li class="nav-item">
            <a class="nav-link active" href="/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/assets/pages/about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/assets/pages/services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/assets/pages/caseStudies.php">Case Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/assets/pages/blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/assets/pages/BlogDetails.php">Blog Details</a>
          </li>
        </ul>

        <!-- Quote Button -->
        <a
          href="#"
          class="btn btn-quote ms-0 ms-lg-3 fw-medium d-flex align-items-center justify">
          <span class="icon d-flex justify-content-center align-items-center me-2"><img src="/assets/images/icons/arrow.svg" alt="arrow" /></span>
          Get A Quote
        </a>
      </div>
    </div>
  </nav>
  <!-- Navbar Section End -->
  <!-- Hero Section Start -->
  <section class="hero-section position-relative">
    <!-- Decorative Elements -->
    <div class="top-left-shape position-absolute"></div>
    <div class="bottom-right-shape position-absolute"></div>

    <!-- Floating Images -->
    <img src="/Assets/images/Home_Page_Image/slider-1.svg" class="floating-image top-left-img" alt="Teamwork">
    <img src="/Assets/images/Home_Page_Image/slider-3.svg" class="floating-image top-right-img" alt="Collaboration">
    <img src="/Assets/images/Home_Page_Image/slider-2.svg" class="floating-image bottom-left-img" alt="Employee">
    <img src="/Assets/images/Home_Page_Image/slider-4.svg" class="floating-image bottom-right-img" alt="Profile">
    <section class=" align-content-center h-100 text-center pb-5">
      <div class="container p-5">
        <h1 class=" secondary-colors fw-bold ">
          Best Solution To Get <span class="d-sm-block d-inline">Good Employees</span>
        </h1>
        <p class="Gray-colors">
          Social creatures, living in prides led by a dominant male. They rely on <span
            class="d-md-block d-inline">teamwork during hunts, showcasing their exceptional hunting skills.</span>
        </p>
        <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-quote  fw-medium d-flex align-items-center justify">
            <span class="icon d-flex justify-content-center align-items-center me-2">
              <img src="/assets/images/icons/arrow.svg" alt="arrow" />
            </span>Learn More</a>
        </div>
      </div>
    </section>
    <!-- Tags Section -->
    <div class="tags-container position-absolute text-center">
      <span class="tag">#human resource</span>
      <span class="tag">#best candidates</span>
      <span class="tag">#hiring process</span>
      <span class="tag">#HR solution</span>
    </div>
  </section>
  <!-- Promotional Cards -->
  <div class="container p-5">
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 col-sm-9">
        <div class="card blue mb-3 py-4 px-3">
          <img src="./Assets/images/icons/Search_icon.svg" class=" h-25 w-25 px-2" alt="Search">
          <div class="card-body white-colors">
            <h4 class="card-title">Build your compelling job advertisement</h4>
            <p class="card-text white-colors">Get o'clock guidance on how to attract more candidates.</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 col-sm-9">
        <div class="card green mb-3 py-4 px-3">
          <img src="./Assets/images/icons/Announce_icon.svg" class=" h-25 w-25 px-2" alt="Announce">
          <div class="card-body white-colors">
            <h4 class="card-title">Promote your ad on 100+ job search sites</h4>
            <p class="card-text white-colors">Get o'clock guidance on how to attract more candidates.</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 col-sm-9">
        <div class="card purple mb-3 py-4 px-3">
          <img src="./Assets/images/icons/report_icon.svg" class=" h-25 w-25 px-2" alt="Report">
          <div class="card-body white-colors">
            <h4 class="card-title">Manage candidates easy with hiring workflows</h4>
            <p class="card-text white-colors">Get o'clock guidance on how to attract more candidates.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Who We Are -->
  <div class="container-lg container-md container-sm container p-5">
    <p class="primary-colors mb-0 text-center">/ who we are /</p>
    <p class="h1 secondary-colors fw-bold text-center" style="font-family: Sora">
      A Leading Global Provider <span class="d-lg-block d-inline"> Of Recruitment</span>
    </p>
    <div class="row gap-3 justify-content-center py-4">
      <div class="col-lg-5 col-md-10">
        <img src="./Assets/images/Blog Details Image/Container.svg" class="img-fluid mb-4" alt="">
      </div>
      <div class="col-lg-6 col-md-8 col-10">
        <p class="secondary-colors">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
          veritatis et quasi architecto beatae.</p>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-10">
            <p class="h6 fw-bold secondary-colors">Leadership Trainning</p>
            <p class="Gray-colors">Get highlighted by the company that you've been worked.</p>
            <p class="h6 fw-bold secondary-colors">Profile Highlighter</p>
            <p class="Gray-colors">Get highlighted by the company that you've been worked.</p>
          </div>
          <div class="col-md-6 col-sm-6 col-10">
            <p class="h6 mb-3 fw-bold secondary-colors">Find Suitable Candidates</p>
            <p class="Gray-colors">Get highlighted by the company that you've been worked.</p>
            <p class="h6 fw-bold secondary-colors">Fast On Demand Service</p>
            <p class="Gray-colors">Get highlighted by the company that you've been worked.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center py-5">
        <div class="col-lg-2 col-md-3 col-sm-5 col-6">
          <p class="h3 fw-bold primary-colors">834.0 M</p>
          <p class="secondary-colors">Total Freelancer</p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5 col-6">
          <p class="h3 fw-bold primary-colors">732.0 M</p>
          <p class="secondary-colors">Positive Review</p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5 col-6">
          <p class="h3 fw-bold primary-colors">90.0 M</p>
          <p class="secondary-colors">Order Received</p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5 col-6">
          <p class="h3 fw-bold primary-colors">236.0 M</p>
          <p class="secondary-colors">Project Complete</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Grid Container -->
  <div class="services-grid container pb-5">
    <div class="row justify-content-between p-4">
      <div class="col-sm-8 col-12">
        <p class="primary-colors mb-0 text-start">/ our Services /</p>
        <p class="h1 secondary-colors fw-bold mb-4" style="font-family: Sora">
          A Leading Global Provider <span class="d-md-block d-inline"> Of Recruitment</span>
        </p>
      </div>
      <div class="col-sm-4 col-10 align-content-center">
        <div class="d-flex justify-content-end">
          <a href="#" class="btn btn-quote ps-1 fw-medium d-flex align-items-center justify">
            <span class="icon d-flex justify-content-center align-items-center me-2">
              <img src="/assets/images/icons/arrow.svg" alt="arrow" />
            </span>See All Services</a>
        </div>
      </div>
    </div>
    <?php include('./Assets/utils/services-grid.php'); ?>
  </div>
  <!-- How We Work -->
  <div class="bg-Image my-4">
    <div class="container-lg container-md container-sm container text-center pt-5">
      <p class="primary-colors mb-0">/ how we work /</p>
      <p class="h1 secondary-colors fw-bold" style="font-family: Sora">
        Solution To Improve <span class="d-md-block d-inline">Performance</span>
      </p>
      <p class="Gray-colors text-center mb-5">Ut enim ad minima veniam, quis nostrum exercitationem ullam <span
          class="d-md-block d-inline">corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</span></p>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-sm-6 col-8">
          <img src="/Assets/images/icons/Analysis.svg" class="img-fluid h-25 w-25 mb-3" alt="Analysis">
          <p class="h5 fw-bold secondary-colors">Analysis</p>
          <p class="Gray-colors">Our commitment to support<span class="d-md-block d-inline">your HR needs every
              steps.</span></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8">
          <img src="/Assets/images/icons/Service.svg" class="img-fluid h-25 w-25 mb-3" alt="Customer Service">
          <p class="h5 fw-bold secondary-colors">Customer Service</p>
          <p class="Gray-colors">Enpowering your HR decisions<span class="d-md-block d-inline">with advanced
              analysis tools</span></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8">
          <img src="/Assets/images/icons/Security.svg" class="img-fluid h-25 w-25 mb-3" alt="Data Security">
          <p class="h5 fw-bold secondary-colors">Data Security</p>
          <p class="Gray-colors">Your data, our priority, ensuring<span class="d-md-block d-inline">ironclad
              security for your HR.</span></p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-8">
          <img src="/Assets/images/icons/Collaboration.svg" class="img-fluid h-25 w-25 mb-3" alt="Collaboration">
          <p class="h5 fw-bold secondary-colors">Collaboration</p>
          <p class="Gray-colors">Collaborate seamlessly across<span class="d-md-block d-inline">HR functions for
              optimal.</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Customer Review -->
  <div class="container-lg container-md container-sm container p-5 p-auto py-5">
    <div class="row gap-4">
      <div class="col-md-6">
        <img src="/Assets/images/About_Page_Images/Customer_Pic.svg" class="img-fluid h-100" alt="Customer" />
      </div>
      <div class="col-md-5 mt-3 secondary-colors">
        <div class="quote_icon d-flex justify-content-center align-items-center mb-2">
          <img src="/Assets/images/Icons/Quote.svg" class="img-fluid w-50 h-50" alt="" />
        </div>
        <p class="h2 fw-bold secondary-colors">Our Happy Customers</p>
        <p class="fw-semibold h6 mt-md-4 mt-3" style="text-align: justify">
          “HR Solutions are incredibly accommodating, diligent and competent.
          They understand the scope, needs and importance of both concerned
          parties within the interviewing and hiring process - That really
          helps with building a life and career”
        </p>
        <p class="h5 fw-semibold mb-0">James Thomas</p>
        <p class="Gray-colors">UI Designer</p>
      </div>
    </div>
  </div>
  <!-- Find the Best Talents Card... -->
  <div class="container my-5">
    <div
      class="bg-subscribe d-flex flex-column flex-md-row align-items-center justify-content-between">
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
  <!-- Blog Cards -->
  <div class="blogs container">
    <p class="primary-colors mb-0 text-center">/ our Blogs /</p>
    <h1 class="text-center fw-semibold mb-5">Explore Our Latest Articles</h1>
    <div class="row blogs-grid g-4">
      <?php
      try {
        if (!empty($blogs)) {
          $limitedBlogs = array_slice($blogs, 0, 3);

          foreach ($limitedBlogs as $blog) {
            echo '<div class="col-12 col-md-6 col-lg-4">';
            echo '  <div class="card blogs-card rounded-4 h-100" style="background: none !important">';
            echo '    <img class="card-img-top rounded-top-4" src="/assets/images/blogs/' . htmlspecialchars($blog["blog_image"]) . '" alt="' . htmlspecialchars($blog["blog_heading"]) . '" />';
            echo '    <div class="card-body blogs-card-body">';
            echo '      <div class="d-flex flex-wrap mb-2">';
            echo '        <span class="badge category me-2">' . htmlspecialchars($blog["category1"]) . '</span>';
            echo '        <span class="badge category">' . htmlspecialchars($blog["category2"]) . '</span>';
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
      } catch (PDOException $e) {
        echo '<p>Error fetching blogs: ' . htmlspecialchars($e->getMessage()) . '</p>';
      }
      ?>

    </div>
  </div>
  <!-- Contact Us Form -->
  <div class="form-wrapper my-5">
    <div class="container-lg container-md container-sm container">
      <div class="row">
        <!-- Form Section -->
        <div class="col-lg-6 col-md-6 col-sm-10 py-5">
          <p class="primary-colors mb-0">/ get a quote /</p>
          <p class="h2 secondary-colors fw-bold" style="font-family: Sora">Request A Call Back</p>
          <p class="Gray-colors">Contact to us when you have questions for our solution or something elses.</p>
          <form class="Gray-colors">
            <div class="mb-2">
              <input type="text" class="form-control rounded-5 Gray-colors" id="formGroupExampleInput" placeholder="Name *" required>
            </div>
            <div class="mb-2">
              <input type="email" class="form-control rounded-5 Gray-colors" id="formGroupExampleInput2" placeholder="Email *" required>
            </div>
            <div class="mb-2">
              <input type="text" class="form-control rounded-5 Gray-colors" id="formGroupExampleInput2" placeholder="Phone Number" required>
            </div>
            <div class="mb-2">
              <select id="inputState" class="form-select rounded-5 Gray-colors" required>
                <option value="" disabled selected>Interested In</option>
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
              </select>
            </div>
            <div class="mb-3">
              <textarea class="form-control rounded-5 Gray-colors" rows="4" id="validationTextarea" placeholder="Message" required></textarea>
            </div>
            <a href="#" class="btn btn-quote ms-0 ms-lg-3 fw-medium d-flex align-items-center justify">
              <span class="icon d-flex justify-content-center align-items-center me-2">
                <img src="/assets/images/icons/arrow.svg" alt="arrow" /></span>Send Request</a>
          </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8 d-none d-md-inline">
          <img src="/Assets/images/Home_Page_Image/callback.svg" class="img-fluid h-100" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Our team -->
  <div class="container p-xs-5 pb-5 my-5 text-center">
    <p class="primary-colors mb-0">/ meet our expert /</p>
    <p class="h2 fw-bold secondary-colors">Our Leadership Team</p>
    <div class="row pt-4 h-100 justify-content-center container text-start">
      <div class="col-md-3 col-sm-5 col-10 mt-5 mt-sm-0">
        <div class="card border-0">
          <img src="/Assets/images/About_Page_Images/team1.svg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body border-bottom">
            <h5 class="card-title secondary-colors fw-semibold">
              Zainab Rehman
            </h5>
            <p class="card-text Gray-colors">miye@example.com</p>
          </div>
          <div class="mt-3 d-flex gap-2">
            <a href="#" role="button"><i class="fa-brands fa-linkedin fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-behance fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-instagram fa-xl primary-colors"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 col-10 mt-5">
        <div class="card border-0">
          <img src="/Assets/images/About_Page_Images/team2.svg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body border-bottom">
            <h5 class="card-title secondary-colors fw-semibold">
              Isabella Thompson
            </h5>
            <p class="card-text Gray-colors">miye@example.com</p>
          </div>
          <div class="mt-3 d-flex gap-2">
            <a href="#" role="button"><i class="fa-brands fa-linkedin fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-behance fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-instagram fa-xl primary-colors"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 col-10 mt-5 mt-sm-0">
        <div class="card border-0">
          <img src="/Assets/images/About_Page_Images/team3.svg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body border-bottom">
            <h5 class="card-title secondary-colors fw-semibold">
              Kadir Miye
            </h5>
            <p class="card-text Gray-colors">miye@example.com</p>
          </div>
          <div class="mt-3 d-flex gap-2">
            <a href="#" role="button"><i class="fa-brands fa-linkedin fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-behance fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-instagram fa-xl primary-colors"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 col-10 mt-5">
        <div class="card border-0 ">
          <img src="/Assets/images/About_Page_Images/team4.svg" class="card-img-top img-fluid" alt="..." />
          <div class="card-body border-bottom">
            <h5 class="card-title secondary-colors fw-semibold">
              Aiden Davis
            </h5>
            <p class="card-text Gray-colors">miye@example.com</p>
          </div>
          <div class="mt-3 d-flex gap-2">
            <a href="#" role="button"><i class="fa-brands fa-linkedin fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-behance fa-xl primary-colors"></i></a>
            <a href="#" role="button"><i class="fa-brands fa-instagram fa-xl primary-colors"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dynamic Footer Will Come Here Using JavaScript/Jquery -->
  <div class="position-relative bottom-0 w-100" id="my-footer"></div>

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
  <script src="./assets/js/script.js"></script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        var navbar = $('.navbar');
        if ($(window).scrollTop() > 40) {
          navbar.addClass('scrolled');
        } else {
          navbar.removeClass('scrolled');
        }
      });
    });
  </script>
</body>

</html>