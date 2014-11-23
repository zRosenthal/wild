<?php

?>

<html>
<head>
 <title>RAFFLE</title>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script text="type/javascript" src="../inc/event_validate.js" charset="utf-8"></script>
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
        <li><a href="dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1 class="col-sm-offset-5"><b>Create Your Event</b></h1>

<form class="form-horizontal" id="event_registration" action="../controller/event.reg.controller.php" method="post">

  <br/>
  <div class="row">

    <div class="form-group center-block">
      <label class="col-sm-2 col-sm-offset-3 control-label">Event Name</label>
      <div class="col-sm-3">
        <input type="text" name="name" id="event_name" value="" class="form-control" placeholder="Event Name">
        <span id="event_name_error" class="error">Please enter the event name.</span>
      </div>
    </div>

    <div class="form-group center-block">
      <label class="col-sm-2 col-sm-offset-3 control-label">Max Tickets</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="max_tickets" name="max" value="" placeholder="10"/>
        <span id="event_max_error" class="error">Please enter a valid max.</span>
      </div>
    </div>

    <div class="form-group center-block">
      <label  class="col-sm-2 col-sm-offset-3 control-label">Price</label>
      <div class="col-sm-3">
        <input type="text" class="form-control"  id="event_price" name="price" placeholder="1.00"/>
        <span id="event_price_error" class="error">Please enter a price.</span>
        <span id="event_price_invalid" class="error">Please enter a valid price.</span>
      </div>
    </div>
  </div>

  <div class="form-group center-block">
    <label class="col-sm-2 col-sm-offset-3 control-label">City</label>
    <div class="col-sm-3">
      <input type="text" name="city" class="form-control" id="event_city" placeholder="East Lansing">
        <span id="event_city_error" class="error">Please enter a city.</span>
    </div>
  </div>

  <div class="form-group center-block">
    <label  class="col-sm-2 col-sm-offset-3 control-label">State</label>
    <div class="col-sm-3">
      <select name="state" class="form-control">
        <option value="Alabama">Alabama</option>
        <option value="Alaska">Alaska</option>
        <option value="Arizona">Arizona</option>
        <option value="Arkansas">Arkansas</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Conneticut">Conneticut</option>
        <option value="Deleware">Deleware</option>
        <option value="WashingtonDC">Washington DC</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho</option>
        <option value="Illinois">Illinois</option>
        <option value="Indian">Indian</option>
        <option value="Iowa">Iowa</option>
        <option value="Kansas">Kansas</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Maine">Maine</option>
        <option value="Maryland">Maryland</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="Michigan">Michigan</option>
        <option value="Minnisota">Minnisota</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Missouri">Missouri</option>
        <option value="Montana">Montana</option>
        <option value="Nevada">Nevada</option>
        <option value="NorthVirginia">North Virginia</option>
        <option value="NewHampshire">New Hampshire</option>
        <option value="NewJersey">New Jersey</option>
        <option value="NewMexico">New Mexico</option>
        <option value="NewYork">New York</option>
        <option value="NorthCarolina">North Carolina</option>
        <option value="NorthDakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="RhodeIsland">Rhode Island</option>
        <option value="SouthCarolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Tennesee">Tennesee</option>
        <option value="Texas">Texas</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Virginia">Virginia</option>
        <option value="Washington">Washington</option>
        <option value="WestVirginia">West Virginia</option>
        <option value="Wisconsin">Wisconsin</option>
        <option value="Wyoming">Wyoming</option>
      </select>
    </div>
  </div>

  <div class="form-group center-block">
    <label class="col-sm-2 col-sm-offset-3 control-label">Zip Code</label>
    <div class="col-sm-3">
      <input type="text" name="zip" id="event_zip"  class="form-control" placeholder="49685">
      <span id="event_zip_error" class="error">Please enter a zip code.</span>
      <span id="event_zip_invalid" class="error">Please enter a valid 5 digit zip code.</span>
    </div>
  </div>

  <div class="form-group center-block">
    <label  class="col-sm-2 col-sm-offset-3 control-label">Start Date</label>
    <div class="col-xs-3">
      <input type="text" class="form-control" id="event_start" name="start" placeholder="XX/XX/XXXX">
      <span id="event_date_error" class="error">Please enter both a start date and an end date.</span>
      <span id="event_date_invalid" class="error">Please enter a valid start date and end date in the format MM/DD/YYYY.</span>
    </div>
  </div>

  <div class="form-group center-block">
    <label  class="col-sm-2 col-sm-offset-3 control-label">End Date</label>
    <div class="col-xs-3">
      <input type="text" class="form-control" id="event_end"  name="end" placeholder="XX/XX/XXXX">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 col-sm-offset-3 control-label">Time</label>
    <div class="col-xs-2">
      <input type="text" class="form-control" name="starttime" placeholder="XX:XX">
    </div>
    <div class="col-sm-1">
        <select name="when" class="form-control">
          <option value="am">AM</option>
          <option value="pm">PM</option>
        </select>
    </div>
  </div>


<div class="form-group">
    <label  class="col-sm-2 col-sm-offset-3 control-label">End Time</label>
    <div class="col-xs-2">
      <input type="text" class="form-control" name="Endtime" placeholder="XX:XX">
    </div>
    <div class="col-sm-1">
        <select name="when" class="form-control">
          <option value="am">AM</option>
          <option value="pm">PM</option>
        </select>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-2 col-sm-offset-6 control-group">
      <div class="controls">
        <br/>
        <button type="submit" class="btn btn-primary" name="submit">Create</button>
      </div>
    </div>
  </div>
</form>



</html>
