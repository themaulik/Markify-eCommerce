<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['addToCart'])) {
    if (isset($_SESSION['cart'])) {
      $myitems = array_column($_SESSION['cart'], 'item-name');

      $count = count($_SESSION['cart']);
      $_SESSION['cart'][$count] = array('item-name' => $_POST['item-name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
      print_r($_SESSION['cart']);
      
    } else {
      $_SESSION['cart'][0] = array('item-name' => $_POST['item-name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
      print_r($_SESSION['cart']);
    }
  }
}
