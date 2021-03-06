<?php

?>

<html>
	<head>
    	<title>RAFFLE</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script text="type/javascript" src="../inc/account_validate.js" charset="utf-8"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    .error {
      color: red;
    }
    </style>
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
          <a class="navbar-brand" href="#">&#x2713</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="account.reg.php">Account Creation</a></li>
          </ul>
          <button type="button" class="navbar-right btn btn-default navbar-btn">Sign in</button>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  	<h1 class="text-center"><b>Create Your Account</b></h1>
	<form class="form-horizontal" id="account_registration" action="../controller/account.controller.php" method="post">

            <br/>
            <div class="row">
              <div class="text-center">
                <p class="text-danger"></p>
              </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Name</label>
                <div class="col-sm-3">
                  <input type="text" name="name" value="" class="form-control" id="account_name" placeholder="Nick Cage">
                  <span id="account_name_error" class="error">Please enter your name.</span>
                </div>
              </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Email</label>
                <div class="col-sm-3">
                  <input type="text" name="email" value="" class="form-control" id="account_email" placeholder="NickNack@nick.cage">
                  <span id="account_email_error" class="error">Please enter your email address.</span>
                  <span id="account_invalid_email_error" class="error">Please enter a valid email address.</span>
                </div>
              </div>


              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Password</label>
                <div class="col-sm-3">
                  <input type="password" class="form-control" id="password1" name="password" value="" placeholder="***********"/>
                  <span id="password_error" class="error">Please enter both password fields.</span>
                  <span id="password_equal_error" class="error">Your passwords did not match.</span>
                  <span id="password_strength_error" class="error">Your password must have at least one number.</span>
                </div>
              </div>


              <div class="form-group center-block">
                <label  class="col-sm-2 col-sm-offset-3 control-label">Password (confirm)</label>
                <div class="col-sm-3">
                  <input type="password" class="form-control" id="password2" name="password-confirm" value="" placeholder="***********"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label  class="col-sm-2 col-sm-offset-3 control-label">Payment Type(s)</label>
              <div class="col-sm-1">
                <select name="when" class="form-control">
                  <option value="paypal">Paypal</option>
                  <option value="venmo">Venmo</option>
                  <option value="both">Both</option>
                </select>
              </div>
            </div>


            <div class="row">
              <div class="col-sm-6 col-sm-offset-5 control-group">
                <div class="controls">
                  <br/>

                  <input type="submit" class="btn btn-primary btn-lg active" value="Create Account" role="button" />

                </div>
              </div>
            </div>

        </form>
</html>