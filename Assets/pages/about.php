<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
            <a class="text-decoration-none" href="/assets/pages/about.html"
              >About Us</a
            >
          </li>
        </ol>
      </nav>
    </div>

    <!-- Start Main About -->
    <div class="container-lg container-md container-sm container p-5">
      <div class="row">
        <div class="col-lg-6">
          <img
            src="/Assets/images/About_Page_Images/Container.svg"
            class="img-fluid h-100"
            alt="Container" />
        </div>
        <div class="col-lg-6">
          <p class="primary-colors mb-0 mt-4">/ About Us /</p>
          <p class="h2 ms-3 fw-semibold secondary-colors">
            One Stop Solution For All<span class="d-sm-block d-inline">Your HR Needs</span></p>
          <p class="Gray-colors mb-0 h6">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout.
          </p>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="button">
              <a
                class="nav-link active primary-colors fw-bold"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home-tab-pane"
                role="tab"
                aria-controls="home-tab-pane"
                aria-selected="true"
                >Our Mission</a
              >
            </li>
            <li class="nav-item" role="button">
              <a
                class="nav-link secondary-colors fw-bold"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane"
                role="tab"
                aria-controls="profile-tab-pane"
                aria-selected="false"
                >Our Version</a
              >
            </li>
          </ul>
          <div class="tab-content mt-2" id="myTabContent">
            <div
              class="tab-pane fade show active Gray-colors h6"
              id="home-tab-pane"
              role="tabpanel"
              aria-labelledby="home-tab"
              tabindex="0">
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo.
              </p>
              <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores et quas molestias excepturi sint.
              </p>
            </div>
            <div
              class="tab-pane fade Gray-colors h6"
              id="profile-tab-pane"
              role="tabpanel"
              aria-labelledby="profile-tab"
              tabindex="0">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
              quae ab illo inventore veritatis et quasi architecto beatae vitae
              dicta sunt explicabo.
            </div>
          </div>
          <div class="d-flex justify-content-start">
            <a href="#" class="btn btn-quote fw-medium d-flex align-items-center justify">
              <span class="icon d-flex justify-content-center align-items-center me-2">
                <img src="/assets/images/icons/arrow.svg" alt="arrow" />
              </span>About Us</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Our Leadership Team -->
    <div class="container-lg container-md container-sm container p-xs-5 pb-5 text-center">
      <p class="primary-colors mb-0">/ meet our expert /</p>
      <p class="h2 fw-bold secondary-colors">Our Leadership Team</p>
      <div class="row pt-4 h-100 justify-content-center container text-start">
        <div class="col-md-3 col-sm-5 col-10 mt-5 mt-sm-0">
          <div class="card border-0">
            <img
              src="/Assets/images/About_Page_Images/team1.svg"
              class="card-img-top img-fluid"
              alt="..." />
            <div class="card-body border-bottom">
              <h5 class="card-title secondary-colors fw-semibold">
                Zainab Rehman
              </h5>
              <p class="card-text Gray-colors">miye@example.com</p>
            </div>
            <div class="mt-3 d-flex gap-2">
              <a href="#" role="button"
                ><i class="fa-brands fa-linkedin fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-behance fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-instagram fa-xl primary-colors"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-5 col-10 mt-5">
          <div class="card border-0">
            <img
              src="/Assets/images/About_Page_Images/team2.svg"
              class="card-img-top img-fluid"
              alt="..." />
            <div class="card-body border-bottom">
              <h5 class="card-title secondary-colors fw-semibold">
                Isabella Thompson
              </h5>
              <p class="card-text Gray-colors">miye@example.com</p>
            </div>
            <div class="mt-3 d-flex gap-2">
              <a href="#" role="button"
                ><i class="fa-brands fa-linkedin fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-behance fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-instagram fa-xl primary-colors"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-5 col-10 mt-5 mt-sm-0">
          <div class="card border-0">
            <img
              src="/Assets/images/About_Page_Images/team3.svg"
              class="card-img-top img-fluid"
              alt="..." />
            <div class="card-body border-bottom">
              <h5 class="card-title secondary-colors fw-semibold">
                Kadir Miye
              </h5>
              <p class="card-text Gray-colors">miye@example.com</p>
            </div>
            <div class="mt-3 d-flex gap-2">
              <a href="#" role="button"
                ><i class="fa-brands fa-linkedin fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-behance fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-instagram fa-xl primary-colors"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-5 col-10 mt-5">
          <div class="card border-0 ">
            <img
              src="/Assets/images/About_Page_Images/team4.svg"
              class="card-img-top img-fluid"
              alt="..." />
            <div class="card-body border-bottom">
              <h5 class="card-title secondary-colors fw-semibold">
                Aiden Davis
              </h5>
              <p class="card-text Gray-colors">miye@example.com</p>
            </div>
            <div class="mt-3 d-flex gap-2">
              <a href="#" role="button"
                ><i class="fa-brands fa-linkedin fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-behance fa-xl primary-colors"></i
              ></a>
              <a href="#" role="button"
                ><i class="fa-brands fa-instagram fa-xl primary-colors"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button
          type="button"
          data-bs-target="#carouselExampleDark"
          data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <!-- <img src="..." class="d-block w-100" alt="..."> -->
        </div>
        <div class="carousel-item">
          <!-- <img src="..." class="d-block w-100" alt="..."> -->
        </div>
      </div>
    </div>
    <!-- Our Goals -->
    <div class="bg-Image align-content-center">
      <div class="container-lg container-md container-sm container p-md-5">
        <div class="row justify-content-between">
          <div class="col-md-5">
            <p class="primary-colors mb-0">/ our Commitment /</p>
            <p class="h2 secondary-colors fw-bold" style="font-family: Sora">
              Your Business Goals Are Our Top Priority
            </p>
          </div>
          <div class="col-md-5">
            <ul
              class="nav nav-tabs mb-2 bg-white border rounded-start-pill"
              id="pills-tab"
              role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active bg-primary-color text-white p-2 py-sm-2 px-sm-4 me-sm-3 rounded-start-pill"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true">
                  Expertise
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link text-dark p-2 py-sm-2 me-sm-3 px-sm-4"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-profile"
                  type="button"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false">
                  Innovation
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link text-dark p-2 py-sm-2 px-sm-4"
                  id="pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-contact"
                  type="button"
                  role="tab"
                  aria-controls="pills-contact"
                  aria-selected="false">
                  Acountability
                </button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
                tabindex="0">
                We embody unwavering expertise. garnered through years of
                industry mastery. Our team's extensive knowledge and refined
                skills ensure effective solutions, fostering trust
              </div>
              <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
                tabindex="0">
                We embody unwavering expertise. garnered through years of
                industry mastery. Our team's extensive knowledge and refined
                skills ensure effective solutions, fostering trust
              </div>
              <div
                class="tab-pane fade"
                id="pills-contact"
                role="tabpanel"
                aria-labelledby="pills-contact-tab"
                tabindex="0">
                We embody unwavering expertise. garnered through years of
                industry mastery. Our team's extensive knowledge and refined
                skills ensure effective solutions, fostering trust
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center justify-content-center my-4">
          <div class="col-lg-3 col-md-6 col-sm-8 col-10 mt-4">
            <div
              class="card border-0 py-3 align-items-center">
              <img
                src="/Assets/images/Icons/Icon_01.svg"
                class="card-img-top img-fluid w-25 h-25"
                alt="..." />
              <div class="card-body">
                <h3 class="card-title secondary-colors fw-bold">15+</h3>
                <p class="card-text Gray-colors">
                  Years of industry experience
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8 col-10 mt-4">
            <div
              class="card border-0 py-3 align-items-center">
              <img
                src="/Assets/images/Icons/Icon_02.svg"
                class="card-img-top img-fluid w-25 h-25"
                alt="..." />
              <div class="card-body">
                <h3 class="card-title secondary-colors fw-bold">224</h3>
                <p class="card-text Gray-colors">Digital project completed</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8  col-10 mt-4">
            <div
              class="card border-0 py-3 align-items-center">
              <img
                src="/Assets/images/Icons/Icon_03.svg"
                class="card-img-top img-fluid w-25 h-25"
                alt="..." />
              <div class="card-body">
                <h3 class="card-title secondary-colors fw-bold">300</h3>
                <p class="card-text Gray-colors">Data transferred monthly</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-8 col-10 mt-4">
            <div
              class="card border-0 py-3 align-items-center">
              <img
                src="/Assets/images/Icons/Icon_04.svg"
                class="card-img-top img-fluid w-25 h-25"
                alt="..." />
              <div class="card-body">
                <h3 class="card-title secondary-colors fw-bold">440+</h3>
                <p class="card-text Gray-colors">Certified HR Solution</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Customer Review -->
    <div class="container-lg container-md container-sm container p-xs-5 p-auto py-5">
      <div class="row gap-4">
        <div class="col-md-6">
          <img
            src="/Assets/images/About_Page_Images/Customer_Pic.svg"
            class="img-fluid"
            alt="Customer" />
        </div>
        <div class="col-md-5 mt-3 secondary-colors">
          <div class="quote_icon d-flex justify-content-center align-items-center mb-2">
            <img src="/Assets/images/Icons/Quote.svg" class="img-fluid w-50 h-50" alt="" />
          </div>
          <p class="h2 fw-bold secondary-colors">Our Happy Customers</p>
          <p class="fw-semibold h6 mt-md-5 mt-4" style="text-align: justify">
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
     <!-- End About Page -->
     <!-- Dynamic Footer Will Come Here Using JavaScript/Jquery -->
     <div class="position-relative bottom-0 w-100" id="my-footer"></div>
    <!-- Script LInk -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>
      </div>
    </div>
    <!-- End About Page -->
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
