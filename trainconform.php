<?php
 include 'register2.php';
 $trainroute= $_COOKIE["trainroute"]; 
 $traintype=$_COOKIE["traintype"]; 
 $startlocation=$_COOKIE["startlocation"]; 
 $destination=$_COOKIE["destination"];
 $time=$_COOKIE["time"];
 $date=$_COOKIE["date"];
 $seat=$_COOKIE["seat"];
 $price=$_COOKIE["price"];
 $email=$_COOKIE["email"];
 $oderid=$_COOKIE["oderid"];
$insertquery ="insert into trainticket(trainroute,traintype,startlocation,destination,time,date,seat,price) values('$trainroute','$traintype','$startlocation','$destination','$time','$date','$seat','$price')";
$iquery =mysqli_query($con,$insertquery);
$to =  $_COOKIE["email"];
$subject = "MPTBS Train Ticket booked";
$txt = "Your ticket has been booked from $startlocation to $destination  train route $trainroute train type $traintype date $date time $time price $price & no of seats $seat";    
$headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
</head>
<body>
        <div id="htmlContent">
                <table>
                    <tr>
                                <td>Trainroute</td>
                                <td><?php echo $trainroute;  ?></td>
                        </tr>
                        <tr>
                                <td>traintype</td>
                                <td><?php echo $traintype;  ?></td>
                        </tr>
                        <tr>
                                <td>Start Location</td>
                                <td><?php echo $startlocation;  ?></td>
                        </tr>
                        <tr>
                                <td>Destination</td>
                                <td><?php echo $destination;  ?></td>
                        </tr>
                        <tr>
                                <td>No of Seat</td>
                                <td><?php echo $seat;  ?></td>
                        </tr>
                        <tr>
                                <td>Price</td>
                                <td><?php echo $price;  ?></td>
                        </tr>
                        <tr>
                                <td>Email ID</td>
                                <td><?php echo $email;  ?></td>
                        </tr>
                        <tr>
                                <td>Oder ID</td>
                                <td><?php echo $oderid;  ?></td>
                        </tr>
                        <tr>
                            <td>Price Paid</td>
                            <td>Successful</td>
                </tr>
                </table>
        </div>
        <div id="editor"></div>
                <center>
                <p>
                <button id="generatePDF">Download PDF</button>
                </p>
                </center>
                <script type="text/javascript">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
 
 
$('#generatePDF').click(function () {
    doc.fromHTML($('#htmlContent').html(), 15, 15, {
        'width': 700,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample_file.pdf');
});
</script>
</body>
</html>