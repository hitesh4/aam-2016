<?php
session_start();
$password = $_POST["password"];
$password = hash('sha256',$password);
if (isset($_SESSION["forgotPasswordEmail"])) {
  $email = $_SESSION["forgotPasswordEmail"];
  unset($_SESSION["forgotPasswordEmail"]);
} else {
  header('Location: ./index.php?alert=Session timed out. Please try again.');
}
include 'connection.php';
$sql = "UPDATE users SET password=$password WHERE email=$email";
if ($connection->query($sql)) {
  $connection->close();
  $_SESSION["email"] = $email;
  header('Location: ./login-complete.php');
} else {
  header('Location: ./index.php?alert=We could not update your password. Please try again, after some time');
}
?>
