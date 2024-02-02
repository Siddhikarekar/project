<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <style>
        body{
                background-color:#FFF;
            }
    </style>
    <title>Bus</title>
</head>
<body>
<?php
    $custid=base64_encode('cust'.rand(1000,1000));
    $amount=base64_encode(4000);
    $orderid="ORDS" . rand(10000,99999999);
    $price=$_COOKIE["price"];
?>
    <nav id="navbar">
        <div id="logo">Multi purpose <br />Ticket booking system</div>
        <div>
            <ul>
                <li class="item"><a href="h.html">Home</a></li>
                <li class="item"><a href="bus.php">Bus</a></li>
                <li class="item"><a href="train.php">Train</a></li>
                <li class="item"><a href="helpdesk.html">Help Desk</a></li>
                <li class="item"><a href="nearbyLocation.php">Bus Stop Locater</a></li>
            </ul>
        </div>
    </nav>
                    <form method="post" action="pgRedirect.php" target="_blank">
                        <input value="CheckOut" type="submit" class="btn">
                        <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $orderid;  ?>">
                        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="siddhi">
                        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                        <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" id="TXN_AMOUNT" name="TXN_AMOUNT" value="<?php echo $price;  ?>">
                    </form>
                
</body>

</html>
<!-- <button class="btn" name="subm" type="submit" onclick="price()">Confirm</button><br> -->
<!-- <button class="btn" type="submit">Cancel</button><br>
<button class="btn" type="submit">Payment</button><br>
<button class="btn" type="submit">Download Ticket</button> -->
<!-- <button value="CheckOut" type="submit" class="btn" >Payment</button> -->