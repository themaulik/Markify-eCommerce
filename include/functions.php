<?php

function emptyInputRegister($name, $username, $email, $pwd, $pwdrepeat)
{
  $result;
  if (empty($name) || empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)) {
    $result = true;
  } 
  else {
    $result = false;
  }
  return $result;
}

function invaliduid($username)
{
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/"), $username) {
    $result = true;
  } 
  else {
    $result = false;
  }
  return $result;
}

function invalidemail($email)
{
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } 
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{
  $result;
  if ($pwd !== $pwdrepeat) {
    $result = true;
  } 
  else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email){
  $mysql = "SELECT * FROM users WHERE userID = ? OR userEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location:../register.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if(){
    
  }

}