<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $uid = $_POST["email"];
  $email = $_POST["uid"];
  $pwd =$_POST["pwd"];
  $pwdrepeat = $_POST["pwdrepeat"];

  require_once 'connection.php';
  require_once 'functions.php';

  if(emptyInputRegister() !== false){
    header("location:../register.php");
    exit();
  }

} else {
}
  header("location:../register.php");