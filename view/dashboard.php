<?php

?>

<html>
<head>
 <title>RAFFLE</title>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">✓</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="account.reg.php">Account Creation</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
      </ul>
      <p class="navbar-text navbar-right">Signed in as <?php echo $name;?></p>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<body>
  
  <form role="form">
    <div class="col-sm-4 col-sm-offset-7 form-group">
      <label for="Select">Your Fundraising Events</label>
      <select id="Select" class="form-control">
        <option>Select</option>
      </select>
    </div>
  </form>

  <h1>Tickets Sold: <span><?php echo $ticketssold;?></span></h1>
  <h1>Money Sales: $<span><?php echo $moneysales;?></span></h1>
  

</body>










</html>