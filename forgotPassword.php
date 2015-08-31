<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>13th Annual Alumni Meet &middot; Forgot Password</title>
    <?php include 'topHead.php'; ?>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    <div class="container">
      <h2 align="center">Reset your Password</h2>
      <?php
      if (isset($_GET["alert"])) {
        echo "<div class='alert alert-danger alert-dismissible'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo $_GET["alert"];
        echo "</div>";
      }
       ?>
      <form class="" action="newPassword.php" method="post">
        <div class="form-group">
          <label for="Email ID">Email ID</label>
          <input class="form-control" type="email" name="email" value="" placeholder="Email ID" required>
        </div>
        <div class="form-group">
          <label for="DOB">Date of Birth</label>
          <input class="form-control" type="date" name="dob" value="" placeholder="Date of Birth" required>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>
