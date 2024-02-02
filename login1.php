<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
        <link rel="stylesheet" href="home.css">
        <style>
            body{
                background-color:#FFF;
            }
        </style>
        <body>
        <?php 
                include 'register2.php';    
                if(isset($_POST['subm'])){
                
                    $email=mysqli_real_escape_string($con,$_POST['email']);
                    $password=mysqli_real_escape_string($con,$_POST['password']);
                    $emailquery ="select * from userinfo where email='$email' and password='$password'";
                    $result = mysqli_query($con,$emailquery);
                    $resultstring = $result->fetch_row()[0];
                    echo $resultstring;
                    $query=mysqli_query($con,$emailquery);
                    $emailcount=mysqli_num_rows($query);
                    if($emailcount>0){
                        $emailid ="email";
                        $email_value=$email;
                        setcookie($emailid, $email_value); 
                        $name ="name";
                        $name_value=$resultstring;
                        setcookie($name, $name_value); 
                            echo "email already exists";
                            header("Location:h.php");
                    }   
                    else{
                        header("Location:regInvalid.php");
                    }}
?>
            <div class="container">
            <form action="login1.php" method="post">
                <h1>login</h1>
                <h2>Email</h2>
                <input type="email" placeholder="Email" name="email">
                <br />
                <h2>Password</h2>
                <input type="password" placeholder="Password" name="password">
                <br />
                <button name="subm" class="registerbtn">login</button>
                <!-- <button  class="fog">Forgetpassword</button> -->
            </form>
            <form action="register1.php">
                <button  id="subm" name="subm" type="submit" class="registerbtn">Register</button>
            </form>
        </div>
            </div>
        </body>
    </html>