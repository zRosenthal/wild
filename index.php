<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  require_once('../inc/db.php');
  $db = new $db();
  $array = ($db->search($_POST['search']));
  }


?>

<html lang="en">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


  </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">&#x2713</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="view/account.reg.php">Account Creation</a></li>
          </ul>
          <button type="button" class="navbar-right btn btn-default navbar-btn">Sign in</button>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">

      <div class="text-center starter-template">
        <h1>Fifty Fifty Raffle</h1>
      </div>

      <form class="form-search">
        <div class="input-append">
          <label  class="col-sm-2 col-sm-offset-3 control-label">Search 50/50 Events</label>
          <input type="text" class="span2 search-query" name="search">
          <button type="submit" class="btn">Search</button>
        </div>
          <?php 
          if($_SERVER['REQUEST_METHOD']=="POST"){
            if($array=="empty"){
              echo "There are no events that match your query";
            }
            else{
              echo
              "<div class='bs-docs-example'>
              <table class='table table-bordered'>
              <thead>
              <tr>
                <th>#</th>
                <th>Event Name</th>
                <th>City</th>
                <th>Start Date</th>
                <th>Ticket Price</th>
              </tr>
            </thead>
            <tbody>";
            $i = 0;
            foreach ($array as $val) {
              $i++;
              echo "<a href='dashboard.php/?id=val[0]&name=val[1]&city=val[2]&state=val[3]&start=val[6]&end=val[7]&max=val[8]&price=val[9]&account_id=val[10]";
              echo "<tr><td>$i</td>$val[1]<td>$val[2]</td>$val[5]<td>$val[8]</td><td>$val[9]</td></tr></a>";
            }
         echo" </tbody>
          </table>
        </div>";
        }
      } ?>
    </form>


      <img src="NICCAGE.jpg" class="img-responsive" alt="Cinque Terre">

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

