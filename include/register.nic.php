<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $username = $_POST["uid"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $pwdrepeat = $_POST["pwdrepeat"];

  require_once 'connection.php';
  require_once 'functions.php';

  if (emptyInputRegister($name, $username, $email, $pwd, $pwdrepeat) !== false) {
    header("location:../register.php?error=emptyinput");
    exit();
  }
  if (invaliduid($username) !== false) {
    header("location:../register.php?error=invaliduid");
    exit();
  }
  if (invalidemail($email) !== false) {
    header("location:../register.php?error=invalidemail");
    exit();
  }
  if (pwdMatch($pwd, $pwdrepeat) !== false) {
    header("location:../register.php?error=pwddontmatch");
    exit();
  }
  if (uidExists($conn, $username, $email) !== false) {
    header("location:../register.php?error=usernamemistake");
    exit();
  }
  createUser($conn, $name, $username, $email, $pwd);
} else {
}
header("location:../register.php");
exit();
