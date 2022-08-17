<?php include_once 'header.php' ?>

<div class="container my-5 ">
  <div class="row justify-content-center">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-uppercase">registration form</h1>
      <form action="include/register.nic.php" method="POST">
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="text" name="uid" class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3 border border-dark rounded">
          <input type="password" name="pwdrepeat" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Repeat Password</label>
        </div>
        <button type="submit" name="submit" class="btn btn-dark btn-lg">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php 
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<script>
          alert('No Input (Please Fill the Input Correctly)');
        </script>";
    }
    if ($_GET["error"] == "invaliduid") {
      echo "<script>
          alert('Invalid Username');
        </script>";
    }
  }
?>

<?php include_once 'footer.php' ?>