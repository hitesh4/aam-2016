<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Home</title>
  <?php include 'topHead.php'; ?>
    <style>
      .item {
        margin-left: 40%;
        margin-right: 40%;
      }
    </style>
    <link href="css/carousel.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="container">
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

    <div class="container">
      <div class="col-md-6 text-center" id="verticalLine">
        <img class="text-center" src="img/logo-square.jpg" alt="" class="logo" />

        <h2 class="text-center"><b>sponsored by</b></h2>

        <div id="myCarousel" class="carousel carousel-fade text-center" data-ride="carousel">

          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e3.png" width="148" height="148">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e2.png" width="148" height="148">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/g11.png" width="250" height="300px">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e5.png" width="148" height="148">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/luxuryhotelpartner.png" width="200" height="200">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/g8.png" width="148" height="148">
            </div>
            <div class="item">
              <img src="img/spons/frontpage-sponsors/strategic.png" width="148" height="180">
            </div>
            <div class="item">
              <img src="img/spons/frontpage-sponsors/g9.png" width="148" height="148">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e7.png" width="200" height="400">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e5.png" width="150" height="300">
            </div>
            <div class="item">
              <img class="img-responsive" src="img/spons/frontpage-sponsors/e4.png" width="148" height="148">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group" id="form">
          <form action="signup.php" method="get">
            <div class="form-group">
              <input class="form-control" type="text" name="name" value="" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
            </div>
            <button type="submit" name="button" class="btn btn-success btn-block">REGISTER NOW</button>
          </form>
        </div>

        <div class="" align="justify">
          <img src="img/a.png" alt="" id="quotes" />
          <div class="container-fluid">
            <div align="center">
              <b>Back to the Roots</b>
            </div>
            <br> The years spent at KGP truly moulds and shapes our personality. The unconditional love we share for KGP, our obsession with Hall, Department and Society stays with us as we wander from personal to professional life even after graduating
            from our Alma Mater. Most importantly the numerous activities at KGP we were involved in and and the friends we made for life made our stay at KGP memorable.
            <br> We strongly believe that KGP has played an important role in helping us achieve our goals. Needless to say, whatever we are it is because of the support by our Alma Mater and connections we made here.It's time to reunite with your own KGP
            and relive the carefree times that were left behind.
            <br> Bathe in the surreal reincarnation of the impeccable past as your buddies from around the world join you in you ride to the past. So, let's board the train of memories in search of our roots - Back to the Roots and relive the good old but
            golden days.
            <br>
            <div align="center">
              Come let's find our roots!
            </div>
          </div>
          <img src="img/b.png" alt="" id="quotes" class="pull-right" />
        </div>
      </div>
    </div>
</body>
<script src="js/typed.min.js"></script>

<script src="js/main.js"></script>

</html>
