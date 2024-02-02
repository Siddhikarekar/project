<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Account</title>
    <style>
      body{
        background:url("images/ss.jpg");
        background-repeat:no-repeat;
        background-size: cover;
      }
    </style>
</head>
<body onload="getLocation()">
  <nav id="navbar">
    <div id="logo">Multi purpose <br />Ticket booking system</div>
    <div>
      <ul>
        <li class="item"><a href="h.php">Home</a></li>
        <li class="item"><a href="bus.php">Bus</a></li>
        <li class="item"><a href="train.php">Train</a></li>
        <li class="item"><a href="helpdesk.html">Help Desk</a></li>
        <li class="item"><a href="nearbyLocation.php">Bus Stop Locater</a></li>
    </ul>
  </div>
</nav>
<div class="busstop">
  <form action="nearbyLocation.php" method="post">  
    <input type="hidden" name="lats" id="lats">
    <input type="hidden" name="longs" id="longs">
    <div class="busstop1">
      <h2>Looking for neareast bus stop</h2>
      <h2>click here</h2>
      <button class="button button1" type="submit" name="subm" id="subm" >Find now</button>
    </div>
    <?php
      if(isset($_POST['subm'])){
      
         $l1 = $_POST['lats'];
         $l2 = $_POST['longs'];
         header("Location: nearest.php?lat=$l1&long=$l2");
      }
      ?>
  </form>
</div>
  <script type="text/javascript">
    function getLocation() {
      if (navigator.geolocation) {  
        navigator.geolocation.getCurrentPosition(showPosition);
      }
    }
    function showPosition(position) {
      document.getElementById("lats").value=+position.coords.latitude;
      document.getElementById("longs").value=+position.coords.longitude;
    }
  </script>
</body>
</html>