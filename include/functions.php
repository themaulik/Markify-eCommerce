<?php

function emptyInputRegister($name, $username, $email, $pwd, $pwdrepeat)
{
  $result;
  if (empty($name) || empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invaliduid($username)
{
  $result = true;
  if (preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = false;
  }
  return $result;
}

function invalidemail($email)
{
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{
  $result;
  if (!$pwd !== $pwdrepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email)
{
  $mysql = "SELECT * FROM users WHERE userID = ? OR userEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $mysql)) {
    header("location:../register.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $email, $pwd)
{
  $mysql = "INSERT INTO users (userName, userUid, userEmail, userPwd) VALUE (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $mysql)) {
    header("location:../register.php?error=stmtfailed");
    exit();
  }
  $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedpwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location:../register.php?error=none");
  exit();
}
