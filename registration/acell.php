<html>

  <head>
    <link rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      h1 {
        text-align: center;
      }
      body {
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
      }
    </style>
  </head>

  <body>
    <div class="row search-table">
      <table id="myTable" class="table table-striped tablesorter"
        style="">
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
    <script type="text/javascript"
      src="html-table-search.js"></script>
    <script type="text/javascript"
      src="jquery-latest.js"></script>
    <script type="text/javascript"
      src="jquery.tablesorter.js"></script>
    <script>
      $(document).ready(function() {
          $("#myTable").tablesorter();

          $('div.search-table').tableSearch({
            searchText: 'Search Table',
            searchPlaceHolder: 'Input Value'
          });
        }
      );
    </script>
    </div>
  </body>

</html>
