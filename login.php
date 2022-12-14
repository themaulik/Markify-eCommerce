<?php include_once 'header.php' ?>

<div class="container my-5">
  <div class="row justify-content-center ">
    <div class="my-5 col-md-4 col-md-offset-4">
      <h1 class="text-uppercase">Login Form</h1>
      <form action="include/login.nic.php" method="POST">
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput">Username/Email</label>
        </div>
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" name="submit" class="btn btn-dark btn-lg">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include_once 'footer.php' ?>