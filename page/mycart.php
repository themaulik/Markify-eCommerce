<?php include 'inc/header.php'; ?>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['addToCart'])) {
    if (isset($_POST['addCart'])) {
      $myitems = array_column($_SESSION['addCart'], 'item-name');
      if (in_array($_POST['item-name'], $myitems)) {
          echo  alert('Item already Added');
           // </script>";
           //   window.location.href='index.php';
        // echo "<script>
      }

      $count = count($_SESSION['addCart']);
      $_SESSION['addCart'][$count] = array('item-name' => $_POST['item-name'], 'Price' => $_POST['Price'], 'quantity' => 1);
      print_r($_SESSION['addCart']);
    } else {
      $_SESSION['addCart'][0] = array('item-name' => $_POST['item-name'], 'Price' => $_POST['Price'], 'quantity' => 1);
      print_r($_SESSION['addCart']);
       echo "<script> 
          alert('Item Added');
        window.location.href='index.php';
       // </script>";
    }
  }
}