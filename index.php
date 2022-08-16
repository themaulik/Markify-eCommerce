<?php include 'inc/header.php'; 
session_start();
?>
<!-- ---------------------------------------------- ! Main Website Pages START HERE ------------------------------------------------------------  -->

<section class="category-section">
  <div class="container-fluid">
    <ul class="navbar-nav d-md-flex flex-md-row  mb-4 justify-content-center ">
      <li class="nav-item col-md-1 text-center fw-bold hover-link">
        <a class="nav-link " href="#">Gen-z</a>
      </li>
      <li class="nav-item col-md-1 text-center fw-bold hover-link">
        <a class="nav-link " href="#">T-shirt</a>
      </li>
      <li class="nav-item col-md-1 text-center fw-bold hover-link">
        <a class="nav-link " href="#">Chinos</a>
      </li>
      <li class="nav-item col-md-1 text-center fw-bold hover-link">
        <a class="nav-link " href="#">Hoodies</a>
      </li>
    </ul>
  </div>
</section>
<!-- slider Start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./src/img/Slider-1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Todays quotes</h5>
        <p>You can have anything you want in life if you dress for it.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./src/img/Slider-2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Todays quotes</h5>
        <p>Clothes mean nothing until someone lives in them.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./src/img/Slider-3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Todays quotes</h5>
        <p>Style is a way to say who you are without having to speak.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<Section class="product-listing">
  <!-- ! Produuct card -->

  <div class="container-fluid">
    <h2 class="text-center fw-bold my-5 text-uppercase">
      Some thing for you
      <hr class="product-hr">
    </h2>
  </div>
  <!-- Product list one -->

  <div class="container-fluid d-md-flex flex-md-row mb-5 justify-content-md-evenly d-grid gap-3">
    <div class="card text-center h-100">
      <div class="card-header">
        <h4>T-shirt</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/tshirt-1.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-1">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 24.56</h5>
      </div>
    </div>
    <!-- The Modal product-1 -->
    <div class="modal fade" id="myModal-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">T-shirt - Product Details <span class="badge bg-danger ">Discount</span></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/tshirt-1.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">Black T-shirt</h1>
              <h4 class="text-center"><del>$50.56</del> $24.56</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-1">
                <input type="hidden" name="Price" value="24.56">
              </form>

            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>


    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Chinos</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/chinos-1.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-2">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 30.63</h5>
      </div>
    </div>

    <!-- The Modal product-2 -->
    <div class="modal fade" id="myModal-2">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">Chinos- Product Details <span class="badge bg-danger ">Discount</span></h4>

            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/chinos-1.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">Cream Chinos</h1>
              <h4 class="text-center"><del>$40.00</del> $30.63</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-2">
                <input type="hidden" name="Price" value="30.63">
              </form>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Hoodies </h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/hoodie-1.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-3">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 36.78</h5>
      </div>
    </div>

    <!-- The Modal product-3 -->
    <div class="modal fade" id="myModal-3">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">Hoodies - Product Details <span class="badge bg-danger ">Discount</span></h4>

            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/hoodie-1.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">Stranger Things Black - hoodies</h1>
              <h4 class="text-center"><del>$40.25</del> $36.78</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="./page/cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-3">
                <input type="hidden" name="Price" value="36.78">
              </form>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Female Clothe</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/female-cloth-1.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-4">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 75.69</h5>
      </div>
    </div>
  </div>

  <!-- The Modal product-4 -->
  <div class="modal fade" id="myModal-4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="">Female - Product Details </h4>
          <div class=" badge bg-danger">Discount</div>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="card-img">
            <img class="product-img-model mx-auto d-block " src="./src/img/female-cloth-1.png" alt="">
          </div>
          <div class="product-card-details">
            <h1 class="text-center">Female Clothe</h1>
            <h4 class="text-center"><del>$110.00</del> $76.69</h4>
            <p class="text-center">100% Original Products <br>
              Pay on delivery might be available <br>
              Easy 30 days returns and exchanges <br>
              Try & Buy might be available</p>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
            <form action="./page/cart_manager.php" method="POST">
              <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
              <input type="hidden" name="item_name" value="Item-4">
              <input type="hidden" name="Price" value="76.69">
            </form>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



  <!-- Product list Two-->

  <div class="container-fluid d-md-flex flex-md-row mb-5 justify-content-md-evenly d-grid gap-3">
    <div class="card text-center h-100">
      <div class="card-header">
        <h4>T-shirt</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/tshirt-2.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-1-1">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 25.56</h5>
      </div>
    </div>
    <!-- The Modal product-1-1 -->
    <div class="modal fade" id="myModal-1-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">T-shirt - Product Details <span class="badge bg-danger ">Discount</span></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/tshirt-2.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">Orange T-shirt</h1>
              <h4 class="text-center"><del>$30.56</del> $25.56</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="./page/cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-5">
                <input type="hidden" name="Price" value="25.56">
              </form>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>


    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Chinos</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/chinos-2.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-2-1">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 32.33</h5>
      </div>
    </div>

    <!-- The Modal product-2-1 -->
    <div class="modal fade" id="myModal-2-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">Chinos- Product Details <span class="badge bg-danger ">Discount</span></h4>

            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/chinos-2.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">navy Blue Chinos</h1>
              <h4 class="text-center"><del>$40.00</del> $33.33</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="/page/cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-6">
                <input type="hidden" name="Price" value="33.33">
              </form>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Hoodies </h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/hoodie-2.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-3-1">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$36.78</h5>
      </div>
    </div>

    <!-- The Modal product-3-1 -->
    <div class="modal fade" id="myModal-3-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="">Hoodies - Product Details <span class="badge bg-danger ">Discount</span></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="card-img">
              <img class="product-img-model mx-auto d-block " src="./src/img/hoodie-2.png" alt="">
            </div>
            <div class="product-card-details">
              <h1 class="text-center">Moon Night - hoodies</h1>
              <h4 class="text-center"><del>$45.85</del> $36.78</h4>
              <p class="text-center">100% Original Products <br>
                Pay on delivery might be available <br>
                Easy 30 days returns and exchanges <br>
                Try & Buy might be available</p>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
              <form action="./page/cart_manager.php" method="POST">
                <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
                <input type="hidden" name="item_name" value="Item-7">
                <input type="hidden" name="Price" value="36.78">
              </form>
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>



    <div class="card text-center h-100">
      <div class="card-header">
        <h4>Female Clothe</h4>
      </div>
      <div class="card-body">
        <img class="product-img img-fluid" src="./src/img/female-cloth-2.png" alt=""><br><br>
        <a href="#" class="btn btn-info text-light text-bold mt-auto" data-bs-toggle="modal" data-bs-target="#myModal-4-1">View Product</a>
      </div>
      <div class="card-footer text-muted">
        <h5>$ 75.69</h5>
      </div>
    </div>
  </div>

  <!-- The Modal product-4 -->
  <div class="modal fade" id="myModal-4-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="">Female clothe - Product Details </h4>
          <div class=" badge bg-danger">Discount</div>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="card-img">
            <img class="product-img-model mx-auto d-block " src="./src/img/female-cloth-2.png" alt="">
          </div>
          <div class="product-card-details">
            <h1 class="text-center">Female Clothe</h1>
            <h4 class="text-center"><del>$84.00</del> $75.69</h4>
            <p class="text-center">100% Original Products <br>
              Pay on delivery might be available <br>
              Easy 30 days returns and exchanges <br>
              Try & Buy might be available</p>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Buy Now</button>
            <form action="./page/cart_manager.php" method="POST">
              <button type="submit" name="addToCart" class="btn btn-warning btn-lg" data-dismiss="modal">Add to Cart</button>
              <input type="hidden" name="item_name" value="Item-8">
              <input type="hidden" name="Price" value="75.69">
            </form>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-white border" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</Section>


<!-- ---------------------------------------------- ! Main Website Pages ENDS HERE ------------------------------------------------------------  -->
<?php include 'inc/footer.php'; ?>