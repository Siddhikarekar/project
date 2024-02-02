<?php
include('db.php');
$v1=$_GET['lat'];
$v2=$_GET['long'] ;

$sql="SELECT id , name, address,bus,   ( 3959 * acos( cos( radians($v1) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($v2) ) + sin(radians($v1) ) * sin( radians( lat ) ) ) ) AS distance FROM businfo HAVING distance < 25 ORDER BY distance LIMIT 0 , 10";
    $query=$dbh ->prepare($sql); $query->execute();
$results=$query->fetchALL(PDO::FETCH_OBJ); $cnt=1; ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="home.css" />
  <head>
    
  </head>
<body>
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
<div class="busdata">
  <table class="busdatatable">
    <tr>
    <th>Name</th>
    <th>Address</th>
    <th>BusInfo</th>
  </tr>
      <?php
          if($query->rowCount()>0){ foreach ($results as $result) { ?>
  <tr>
    <td><?php echo htmlentities($result->name); ?></td>
    <td><?php echo htmlentities($result->address); ?></td>
    <td><?php echo htmlentities($result->bus); ?></td>
  </tr>
  <?php
        }
      } ?>
</table>
</div>
</body>
</html>
