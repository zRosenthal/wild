<?php

?>

<html>
	<head>
    	<title>RAFFLE</title>
    	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  	<h1 class="text-center"><b>Create Your Event</b></h1>
	
	<form class="form-horizontal" action="../controller/event.reg.controller.php" method="post">

            <br/>
            <div class="row">

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Event Name</label>
                <div class="col-sm-3">
                  <input type="text" name="name" value="" class="form-control" placeholder="Event Name">
                </div>
              </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">Max Tickets</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control"  name="max" value="" placeholder="10"/>
                </div>
              </div>


              <div class="form-group center-block">
                <label  class="col-sm-2 col-sm-offset-3 control-label">Price</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control"  name="price" placeholder="1.00"/>
                </div>
              </div>
            </div>

              <div class="form-group center-block">
                <label class="col-sm-2 col-sm-offset-3 control-label">City</label>
                <div class="col-sm-3">
                  <input type="text" name="city" class="form-control" id="city" placeholder="East Lansing">
                </div>
              </div>
              

              <div class="form-group center-block">
                <label  class="col-sm-2 col-sm-offset-3 control-label">State</label>
                <div class="col-sm-3">
                  <select name="state" class="form-control">
                    <option value="Alabama">AL</option>
                    <option value="Alaska">AK</option>
                    <option value="Arizona">AZ</option>
                    <option value="Arkansas">AR</option>
                    <option value="California">CA</option>
                    <option value="Colorado">CO</option>
                    <option value="Conneticut">CT</option>
                    <option value="Deleware">DE</option>
                    <option value="Washington DC">DC</option>
                    <option value="Florida">FL</option>
                    <option value="Georgia">GA</option>
                    <option value="Hawaii">HI</option>
                    <option value="Idaho">ID</option>
                    <option value="Illinois">IL</option>
                    <option value="Indian">IN</option>
                    <option value="Iowa">IA</option>
                    <option value="Kansas">KS</option>
                    <option value="Kentucky">KY</option>
                    <option value="Louisiana">LA</option>
                    <option value="Maine">ME</option>
                    <option value="Maryland">MD</option>
                    <option value="Massachusetts">MA</option>
                    <option value="Michigan">MI</option>
                    <option value="Minnisota">MN</option>
                    <option value="Mississippi">MS</option>
                    <option value="Missouri">MO</option>
                    <option value="Montana">MT</option>
                    <option value="Nevada">NE</option>
                    <option value="North Virginia">NV</option>
                    <option value="New Hampshire">NH</option>
                    <option value="New Jersey">NJ</option>
                    <option value="New Mexico">NM</option>
                    <option value="New York">NY</option>
                    <option value="North Carolina">NC</option>
                    <option value="North Dakota">ND</option>
                    <option value="Ohio">OH</option>
                    <option value="Oklahoma">OK</option>
                    <option value="Oregon">OR</option>
                    <option value="Pennsylvania">PA</option>
                    <option value="Rhode Island">RI</option>
                    <option value="South Carolina">SC</option>
                    <option value="South Dakota">SD</option>
                    <option value="Tennesee">TN</option>
                    <option value="Texas">TX</option>
                    <option value="Utah">UT</option>
                    <option value="Vermont">VT</option>
                    <option value="Virginia">VA</option>
                    <option value="Washington">WA</option>
                    <option value="West Virginia">WV</option>
                    <option value="Wisconsin">WI</option>
                    <option value="Wyoming">WY</option>
                  </select>
                </div>
              </div>


              
              <div class="form-group center-block">
                <label  class="col-sm-2 col-sm-offset-3 control-label">Zip-Code</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="zip" placeholder="XXXXX"/>
                </div>
              </div>
            </div>

            
           


              


            <div class="row">
              <div class="col-sm-2 col-sm-offset-5 control-group">
                <div class="controls">
                  <br/>
                    <button type="submit" class="btn btn-primary" name="submit">Create</button>
                </div>
              </div>
            </div>
        </form>



</html>
