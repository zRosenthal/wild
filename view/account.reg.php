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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="account.reg.php">Account Creation</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  	<h1 class="text-center"><b>Create Your Account</b></h1>
	
	<form class="form-horizontal" action="register.php" method="post">

            <br/>
            <div class="row">
              <div class="text-center">
                <p class="text-danger"></p>
              </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Name</label>
                <div class="col-sm-3">
                  <input type="text" name="name" value="" class="form-control" id="inputEmail3" placeholder="Nick Cage">
                </div>
              </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Email</label>
                <div class="col-sm-3">
                  <input type="text" name="email" value="" class="form-control" id="email" placeholder="NickNack@nick.cage">
                </div>
              </div>


              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Password</label>
                <div class="col-sm-3">
                  <input type="password" class="form-control" id="inputPassword" name="password" value="" placeholder="***********"/>
                </div>
              </div>


              <div class="form-group center-block">
                <label  class="col-sm-2 col-sm-offset-3 control-label">Password (confirm)</label>
                <div class="col-sm-3">
                  <input type="password" class="form-control" id="inputPassword" name="password-confirm" value="" placeholder="***********"/>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-sm-offset-5 checkbox">
              <label>
                <input type="checkbox" value="paypal">
                Paypal
              </label>
            </div>
            <div class="col-sm-6 col-sm-offset-5 checkbox">
              <label>
                <input type="checkbox" value="venmo">
                Venmo
              </label>
            </div>


            <div class="row">
              <div class="col-sm-6 col-sm-offset-5 control-group">
                <div class="controls">
                  <br/>
                  <a href="events.reg.php" class="btn btn-primary btn-lg active" role="button">Create Account</a>
                </div>
              </div>
            </div>

        </form>



</html>