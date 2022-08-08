<?php echo "maulik" ?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/src/css/style.css" />
    <title>Markify - Book For You</title>
  </head>
  <body>
    <!-- ! Nav Bar Started -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MARKIFY</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Login</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="csearch form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              /> 
              <button class="csearch btn btn-danger" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <!-- ! Nav Bar Ends -->

    <div style="margin: 100px; text-align: center">Testing</div>
    <!-- ! Footer Started -->
    <!-- Footer -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-white text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>MARKIFY
              </h6>
              <p class="text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Inventore, vel voluptatem recusandae quos accusamus pariatur
                harum aliquid ipsum dicta, saepe possimus, laborum officia
                fugiat sapiente.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-white text-uppercase fw-bold mb-4">Products</h6>
              <p class="text-white">
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">React</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-white text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p class="text-white">
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p class="text-white">
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-white text-uppercase fw-bold mb-4">Contact</h6>
              <p class="text-white">
                <i class="fas fa-home me-3"></i> New York, NY 10012, US
              </p>
              <p class="text-white">
                <i class="fas fa-envelope me-3"></i>
                info@markify.com
              </p>
              <p class="text-white">
                <i class="fas fa-phone me-3"></i> + 01 234 567 88
              </p>
              <p class="text-white">
                <i class="fas fa-print me-3"></i> + 01 234 567 89
              </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-white text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2021 Copyright:
        <a class="text-white text-reset fw-bold" href="#">markify.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- ! Footer Bar Ends -->

    <!-- ! Scripting Tag Started -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <script src="/src/js/main.js"></script>
    <!-- ! Scripting Tag Ends -->
  </body>
</html>
