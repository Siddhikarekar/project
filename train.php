<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="home.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <style>
    body{

      background:url("images/train.png");
      background-repeat:no-repeat;
      background-size: cover;
    }
  </style>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function () {
        var today = new Date();
        var month = ('0' + (today.getMonth() + 1)).slice(-2);
        var day = ('0' + today.getDate()).slice(-2);
        var year = today.getFullYear();
        var date = year + '-' + month + '-' + day;
        $('[id*=date]').attr('min', date);
      });
    </script>
    <script>

            function destination(val){
              var error = document.getElementById("error");
              var startlocation = document.getElementById("startlocation").value;
              var destination = document.getElementById("destination").value;
              if(startlocation==destination){
                error.textContent = "Please enter different destination"
                error.style.color = "red"
              }else {
                    error.textContent = ""
                }
            }
            function calculateAmount(val) {
            //     var tot_price = val * 5;
            //     var divobj = document.getElementById('tot_amount');
            //     divobj.value = tot_price;
            //     divobj.value = tot_price;
            // var divobj1 = document.getElementById('TXN_AMOUNT');
            // divobj1.value = tot_price;
            var trainroute=document.getElementById("trainroute").value;
            var traintype=document.getElementById("traintype").value;
            var startlocation=document.getElementById("startlocation").value;
            var destination=document.getElementById("destination").value;
            var date=document.getElementById("date").value;
            var time=document.getElementById("time").value;
            var seat=document.getElementById("seat").value;
            var ORDER_ID=document.getElementById("ORDER_ID").value;
            if(traintype=="First Class"){
            var tot_price = val * 50;
            var divobj = document.getElementById('tot_amount');
            divobj.value = tot_price;
            divobj.value = tot_price;
            var divobj1 = document.getElementById('TXN_AMOUNT');
            divobj1.value = tot_price;
            }else if(traintype=="Second Class"){
            var tot_price = val * 5;
            var divobj = document.getElementById('tot_amount');
            divobj.value = tot_price;
            divobj.value = tot_price;
            var divobj1 = document.getElementById('TXN_AMOUNT');
            divobj1.value = tot_price;
            }
            document.cookie = "trainroute" + "=" + trainroute;
            document.cookie = "traintype" + "=" + traintype;
            document.cookie = "oderid" + "=" + ORDER_ID;
            document.cookie = "startlocation" + "=" + startlocation;
            document.cookie = "destination" + "=" + destination;
            document.cookie = "date" + "=" + date;
            document.cookie = "time" + "=" + time;
            document.cookie = "seat" + "=" + seat;
            document.cookie = "price" + "=" + tot_price;
            document.cookie = "oderid" + "=" + ORDER_ID;
            }
            function tarinroute(val){
              var tarinroute = document.getElementById('trainroute');
              if(tarinroute.value=="Western"){
                console.log("western");
                $( function() {
                  var availableTags = [
                    "Andheri",
                    "Bandra",
                    "Bhayander",
                    "Borivali",
                    "Charni Rd",
                    "Churchgate",
                    "Dadar",
                    "Dahisar",
                    "Elphinstone rd/Prabhadevi",
                    "Goregaon",
                    "Grant Rd",
                    "Jogeshwari",
                    "Kandivali",
                    "Khar Rd",
                    "Lower Parel",
                    "Mahalakshmi",
                    "Mahim",
                    "Malad",
                    "Marine Lines",
                    "Matunga Rd",
                    "Mira Rd",
                    "Mumbai Central",
                    "Naigaon",
                    "Nalla Sopara",
                    "Santa Cruz",
                    "Vasai Rd",
                    "Vile Parle",
                    "Virar",
                    "Ram Mandir",
                    "Vashi",
                    "Vile Parle",
                    "Wadala Rd",
                    "Ambedkar Nagar",
                    "Mint Colony",
                    "Lower Parel",
                    "Sant Gadge Maharaj Chowk",
                    "Mumbai Metro",
                    "Ghatkopar",
                    "Jagruti Nagar",
                    "Asalpha",
                    "Saki Naka",
                    "Marol",
                    "Airport Road",
                    "Chakala",
                    "Western Express Highway",
                    "Andheri",
                    "Azad Nagar",
                    "DN Nagar",
                    "Versova",

                  ];
                  $( "#startlocation" ).autocomplete({
                    source: availableTags
                  });
                  $( "#destination" ).autocomplete({
                  source: availableTags
                  });
                } );
              }
              if(tarinroute.value=="Harbour"){
                console.log("Harbour");
                $( function() {
                  var availableTags = [
                    "Andheri",
                    "Bandra",
                    "Belapur CBD",
                    "Chembur",
                    "Chunabhatti",
                    "Cotton Green",
                    "Dockyard Road",
                    "Govandi",
                    "GTB Nagar",
                    "Juinagar",
                    "Khandeshwar",
                    "Khar Road",
                    "Kharghar",
                    "Kings Circle",
                    "Kurla",
                    "Mahim Jn",
                    "Mankhurd",
                    "Mansarovar",
                    "Masjid",
                    "Mumbai CST",
                    "Nerul",
                    "Panvel",
                    "Reay Road",
                    "Sandhurst Road",
                    "Sanpada",
                    "Santacruz",
                    "Seawood Darave",
                    "Sewri",
                    "Tilaknagar",
                    "Wadala Bridge",
                    "Dadar (East)",
                    "Naigaon",

                  ];
                  $( "#startlocation" ).autocomplete({
                    source: availableTags
                  });
                  $( "#destination" ).autocomplete({
                  source: availableTags
                  });
                } );
            }
            if(tarinroute.value=="Central"){
                console.log("Central");
                $( function() {
                  var availableTags = [
                    "Ambernath",
                    "Ambivili",
                    "Asangaon",
                    "Atgaon",
                    "Badlapur",
                    "Bhandup",
                    "Bhivpuri",
                    "Byculla",
                    "Chinchpokli",
                    "Currey Road",
                    "Dadar",
                    "Diva",
                    "Dolavi",
                    "Dombivili",
                    "Ghatkopar",
                    "Kalwa",
                    "Kalyan",
                    "Kanjurmarg",
                    "Karjat",
                    "Kasara",
                    "Kelavi",
                    "Khadavli",
                    "Khardi",
                    "Khopoli",
                    "Kopar",
                    "Kurla",
                    "Lowjee",
                    "Masjid",
                    "Matunga",
                    "Mulund",
                    "Mumbai_CST",
                    "Mumbra",
                    "Nahur",
                    "Neral",
                    "Palasdari",
                    "Parel",
                    "Sandurst Road",
                    "Shahad",
                    "Shelu",
                    "Sion",
                    "Thakurli",
                    "Thane",
                    "Titwala",
                    "Ulhasnagar",
                    "Vangani",
                    "Vasind",
                    "Vidhyavihar",
                    "Vikhroli",
                    "Vithalwadi",
                  ];
                  $( "#startlocation" ).autocomplete({
                    source: availableTags
                  });
                  $( "#destination" ).autocomplete({
                  source: availableTags
                  });
                } );
            }
          }
    </script>
    <title>Train</title>
</head>
<body>
<?php
    $custid=base64_encode('cust'.rand(1000,1000));
    $amount=base64_encode(4000);
    $orderid="ORDS" . rand(10000,99999999);
    ?>
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
  <!-- <form  action="paymenttrain.php" target="_blank" method="post"> -->
    <div class="train">
    <div class="train1">
      <div class="form-group">
        <h3>Train Route</h2>
        <select id="trainroute" class="form-control" name="trainroute" onchange="tarinroute(this.value)">
        <option></option>
          <option>Western</option>
          <option>Harbour</option>
          <option>Central</option>
        </select>
      </div>
      <div class="form-group">
        <h3>Train Type</h2>
        <select id="traintype" class="form-control" name="traintype">
        <option></option>
          <option>First Class</option>
          <option>Second Class</option>
          <!-- <option>First Class AC</option> -->
        </select>
      </div>
      <div class="form-group">
        <h3>Start Location</h2>
        <input
            type="text"
            class="form-control"
            name="startlocation"
            id="startlocation"
            require
          />
      </div>
      <div class="form-group">
        <h3>Destination</h2>
        <input
            type="text"
            class="form-control"
            name="destination"
            id="destination"
            onchange="destination(this.value)"
            require
          />
      </div>
      <span id="error"></span>
      <div class="form-group">
        <h3>Date</h2>
        <input class="form-control" id="date" type="date" name="date" required>
      </div>
      <div class="form-group">
        <h3>Time</h2>
        <input class="form-control" id="time" type="time" required name="time">
      </div>
      <div class="form-group">
        <h3>Seat</h2>
        <input class="form-control" type="number" id="seat" name="seat" onchange="calculateAmount(this.value)"required ><br>
      </div>
      <div class="form-group">
        <h3>price</h2>
        <input class="form-control" name="price" id="tot_amount" type="text" readonly>
      </div>
      <div class="form-group">
        <!-- <button class="btn" name="subm" type="submit" onclick="checkCookie()">Confirm ticket</button><br> -->
        <form method="post" action="pgRedirecttrain.php" target="_blank">
                            <input value="Payment" type="submit" class="btn">
                            <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $orderid;  ?>">
                            <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="siddhi">
                            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                            <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                            <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" id="TXN_AMOUNT" name="TXN_AMOUNT" value="<?php echo $price;  ?>">
                        </form>
      </div>
      
    </div>
  </div>  
  <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<!-- </form>  -->
</body>
</html>
                    <!-- <select class="form-control" name="seat" onchange="calculateAmount(this.value)" required>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  </select><br> -->