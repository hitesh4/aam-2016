<html>
  <head>
    <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      h1 {
        text-align: center;
      }
    </style>
  </head>

  <body>
    <div class="row">
      <input type="search"
        style="position:relative;left:50px;width:800px;padding:9px;border-radius:7px;margin-top:20px;">
      <table class="table table-striped"
        style="width:800px;">
        <?php include 'acell_backend.php'; ?>
      </table>
      <button type="button"
        class="btn btn-success"
        onclick="window.print();">print</button>
      <button type="button"
        class="btn btn-info"
        onclick="window.close();">close</button>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>