<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "markifyDB";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
  die("connection Failed: " . mysqli_connect_error());
}
