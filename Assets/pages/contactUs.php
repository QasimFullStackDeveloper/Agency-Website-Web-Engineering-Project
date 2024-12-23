<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
              alt="greater than"
            />
          </li>
          <li class="second-breadcrumb-item" aria-current="page">
            <a class="text-decoration-none" href="/assets/pages/about.html"
              >Contact Us</a
            >
          </li>
        </ol>
      </nav>
    </div>

    <div
      class="contactUs container d-flex flex-wrap align-items-start justify-content-center py-5"
    >
      <div class="col-lg-6 col-md-12 mb-4">
        <h1 class="text-center text-lg-start">
          Get In Touch With HR <br />Consultation Experts
        </h1>
        <p class="text-center text-lg-start">
          In choosing a recruitment service, organizations should consider
          <br />
          factors such as the agency's track record, industry expertise, <br />
          reputation, and alignment with the company's values and <br />
          needs.
        </p>
        <div class="border-1 border-bottom me-5 mb-2" style="color: lightgray;"></div>
        <h3 class="text-center text-lg-start">Our Information</h3>
        <div class="d-flex mt-4 align-items-center">
          <img
            src="/Assets/images/icons/ContactUs_icon/location_icon.svg"
            alt="location"
            class="me-2"
          />
          <span>International Islamic University Islamabad Pakistan</span>
        </div>
        <div class="d-flex mt-2 align-items-center">
          <img
            src="/Assets/images/icons/ContactUs_icon/contact_icon.svg"
            alt="Contact"
            class="me-2"
          />
          <span>(+92) 123465789</span>
        </div>
        <div class="d-flex mt-2 align-items-center">
          <img
            src="/Assets/images/icons/ContactUs_icon/mail_icon.svg"
            alt="Mail"
            class="me-2"
          />
          <span>ABC@gmail.com</span>
        </div>
      </div>

      <div class="Contact_form col-lg-6 col-md-12">
        <div class="row">
          <div class="col-md-6 mb-3">
            <input
              type="text"
              class="form form-control"
              id="name"
              name="Name"
              placeholder="Your Name*"
            />
          </div>
          <div class="col-md-6 mb-3">
            <input
              type="number"
              class="form form-control"
              id="number"
              name="Number"
              placeholder="Your Phone"
            />
          </div>
        </div>
        <input
          type="email"
          class="email_form form-control mb-3"
          id="email"
          name="Email"
          placeholder="Your Email*"
        />
        <textarea
          name="message"
          id="message_sec"
          class="form-control mb-3"
          rows="10"
          placeholder="Your Message*"
        ></textarea>
        <a
          href="#"
          class="btn btn-subscribe btn-send fw-medium d-flex align-items-center rounded-5">
          <span
            class="icon d-flex justify-content-center align-items-center me-2"
          >
            <img src="/assets/images/icons/arrow.svg" alt="arrow" />
          </span>
          Send Message
        </a>
      </div>
      
    </div>

    <iframe
      class="g_map w-100"
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13282.7139908684!2d73.02709265!3d33.66549145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1732159072784!5m2!1sen!2s"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <div class="faqMain container py-5 gap-4">
      <div class="row">
        <!-- FAQ Section -->
        <div class="col-md-8 d-flex flex-column">
          <h1 class="mb-4">Frequently Asked Questions</h1>
          <p class="mb-4">
            If you have questions, we have answers for you here. In case we
            don't, please feel free to reach out to us on the
            <a href="contactUs.html" class="contact">Contact us</a> page.
          </p>

          <div class="mb-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    What is Recrutie and how does it work?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Our solution is agile and flexible, so we can adjust as your
                    needs change.We take great pride in having long-standing
                    client engagements and helping our partner companies grow.
                    We would be happy to share testimonials from companies like
                    yours, too!
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Can we start any time of year?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong>
                    It is hidden by default, until the collapse plugin adds the
                    appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the
                    showing and hiding via CSS transitions. You can modify any
                    of this with custom CSS or overriding our default variables.
                    It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the
                    transition does limit overflow.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    How does the engagement change as my business scales?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It
                    is hidden by default, until the collapse plugin adds the
                    appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the
                    showing and hiding via CSS transitions. You can modify any
                    of this with custom CSS or overriding our default variables.
                    It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the
                    transition does limit overflow.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    In which countries can I find your company?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It
                    is hidden by default, until the collapse plugin adds the
                    appropriate classes that we use to style each element. These
                    classes control the overall appearance, as well as the
                    showing and hiding via CSS transitions. You can modify any
                    of this with custom CSS or overriding our default variables.
                    It's also worth noting that just about any HTML can go
                    within the <code>.accordion-body</code>, though the
                    transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Image Section -->
        <div class="col-md-4 text-center">
          <img
            src="/Assets/images/faq/faqImage.png"
            alt="faq-image"
            class="img-fluid"
          />
        </div>
      </div>
    </div>

    <!-- Dynamic Footer Will Come Here Using JavaScript/Jquery -->
    <div class="position-relative bottom-0 w-100" id="my-footer"></div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>

    <!-- Script LInk -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="/assets/js/script.js"></script>
  </body>
</html>
