<?php include 'inc/header.php'; ?>
<!-- ---------------------------------------------- ! Main Website Pages START HERE ------------------------------------------------------------  -->

<section class="category-section">
  <div class="container-fluid">
  <ul class="navbar-nav d-md-flex flex-md-row  mb-4 justify-content-center ">
    <li class="nav-item col-md-1 text-center fw-bold">
      <a class="nav-link active" aria-current="page" href="#">Gen-z</a>
    </li>
    <li class="nav-item col-md-1 text-center fw-bold">
      <a class="nav-link" href="#">T-shirt</a>
    </li>
    <li class="nav-item col-md-1 text-center fw-bold">
      <a class="nav-link disabled">Chinos</a>
    </li>
    <li class="nav-item col-md-1 text-center fw-bold">
      <a class="nav-link disabled">Hoodies</a>
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


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <h4 class="me-2">Chinos - Product Details</h4> <h6> <span class="badge bg-danger">Discount</span> </h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        maulik
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="border btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- ! Produuct card -->

<div class="container-fluid">
  <h2 class="text-center fw-bold my-5 text-uppercase">
    Some thing for you<hr class="product-hr">
  </h2>
</div>
<!-- Product list one -->
<div class="container-fluid d-md-flex flex-md-row  mb-5 justify-content-md-evenly d-grid gap-3">
<div class="card text-center ">
  <div class="card-header">
   <h4>T-shirt</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">aaaaaa</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold" data-bs-toggle="modal" data-bs-target="#myModal">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Chinos</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Hoodies </h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Hoodies </h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
</div>

<!-- Product list two -->


<div class="container-fluid d-md-flex flex-md-row  mb-5 justify-content-md-evenly d-grid gap-3">
<div class="card text-center ">
  <div class="card-header">
   <h4>T-shirt</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">aaaaaa</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Chinos</h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold" >View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Hoodies </h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <h4>Hoodies </h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With </p>
    <a href="#" class="btn btn-info text-light text-bold">View Product</a>
  </div>
  <div class="card-footer text-muted">
    <h5>$ 20.05</h5>
  </div>
</div>
</div>


<!-- ---------------------------------------------- ! Main Website Pages ENDS HERE ------------------------------------------------------------  -->
<?php include 'inc/footer.php'; ?>