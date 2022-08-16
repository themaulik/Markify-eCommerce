<?php include '../header.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Cart</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded my-5 bg-dark text-light">
        <h1 class="text-uppercase">My Cart</h1>
      </div>
      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $total = $total + $value['Price'];
                echo "
                  <tr>
                    <td>1</td>
                    <td>$value[item_name]</td>
                    <td>$value[Price]</td>
                    <td><input type='number' value='$value[Quantity]' min='1' max='10'></td>
                    <td>
                      <form action='../cart_manager.php' method='POST'>
                        <button name='remove_item' class='btn btn-sm btn-danger'>Cancel</button>
                        <input type='hidden' name='item_name' value='$value[item_name]'>
                      </form>
                    </td>
                  </tr>
                  ";
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-3">
        <div class="border bg-light rounded p-5">
          <h4>Total:</h4>
          <h5 class="text-end"><?php echo $total; ?></h5>
          <br>
          <form class="">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Pay Wirh Card
              </label>
            </div>
            <br>
            <div class="text-center">
              <button class="btn btn-primary fw-bold">Make Purchase</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>