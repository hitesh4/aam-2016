<?php
session_start();
$email = $_POST["email"];
$dob = $_POST["dob"];

include 'connection.php';
$sql = "SELECT * FROM users WHERE email=$email";
$result = $connection->query($sql);

if ($row = $result->fetch_assoc) {
  if ($dob == $row["dob"]) {
    $_SESSION["forgotPasswordEmail"] = $email;
  } else {
    header('Location: ./forgotPassword.php?alert=Incorrect credentials, Password reset unsuccessful');
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13th Annual Alumni Meet &middot; New Password</title>
    <?php include 'topHead.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <h2 align="center">Enter New Password</h2>
      <form class="" action="updatePassword.php" method="post">
        <div class="form-group">
          <label for="password">New Password</label>
          <input type="password" class="form-control" name="password" value="">
        </div>
        <button class="btn btn-primary btn-block" type="submit" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>
