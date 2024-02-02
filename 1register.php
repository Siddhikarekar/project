<!DOCTYPE html>
<html>
    <head>
        <title>
            Register
        </title>
        
        <style>
        Body{
                font-family: Arial, Helvetica, sans-serif;
                background:url("/img/ss.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            p,h1{
                text-align: center;
            }
            *{
                box-sizing:border-box;
            }
            .container{
                padding: 2px;
                width: 25%;
                font-size: small;
                background-color:turquoise;
                background-position: center;
                margin: auto;
            }
            input[type=text],input[type=email],input[type=phonenumber],input[type=password]{
                width:100%;
                padding: 6px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                outline: none;
                background: whitesmoke;
            }
            input[type=text]:focus,input[type=email]:focus,input[type=phonenumber]:focus,input[type=password]:focus{
                background-color: #add;
                outline:none;
            }
            .registerbtn ,.login-btn{
                background-color: turquoise;
                color: black;
                padding: 10px 20px;
                margin: 8px;
                margin: auto;
                cursor: pointer;
                width:60%;
                opacity: 0.9;
            }
            .registerbtn:hover ,.login-btn:hover{
                opacity: 1;
            }
            a{
                color:blue;
             }
             .login{
                 background-color: turquoise;
                 text-align: center;
             }

        </style>
        <body>
            <div class="container">
            <form  method="post">
                <h1>Register</h1>
                <p>please fill the form to create your account</p>
                <hr />
                <label>Name</label><br>
                <input type="text" placeholder="Name"/ name="name">
                <br />
                <label>Email</label><br>
                <input type="email" placeholder="Email"/ name="email">
                <br />
                <label>Phonenumber</label><br>
                <input type="phonenumber" placeholder="Phonenumber"/ name="phone">
                <br />
                <!-- <label>Address</label><br>
                <input type="text" placeholder="Address"/>
                <br /> -->
                
                <label>Password</label><br>
                <input type="password" placeholder="Password"/ name="password">
                <br />
                <label>Re-password</label><br>
                <input type="password" placeholder="Re-password"/ name="confirmpassword">
                <br />
                <button  id="subm" name="subm" type="submit" class="registerbtn">Register</button>
                <p>Already have an account?</p>
                <button class="login-btn">login</button>
                <?php 
                // if(isset($_POST['subm'])){
                //     $name=$_POST['name'];
                //     $email=$_POST['email'];
                //     $phone=$_POST['phone'];
                //     $password=$_POST['password'];
                //     $confirmpassword=$_POST['confirmpassword'];
                //     header("Location: register.php?name=$name");
                //  }
                 $server ='localhost';
$user ='root';
$pass="";
$db="mptbs";
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$password=$_GET['password'];
$confirmpassword=$_GET['confirmpassword'];
$con = mysqli_connect($server,$user,$pass,$db);
if($con){
    ?>
    <script>
            alert("connection Successful");
        </script>
    <?php
}else{
    ?>
    <script>
            alert("invalid connection");
        </script>
        <?php
}

$emailquery ="select * from userinfo where email='$email'";
$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);

if($emailcount>0){
    echo "email already exists";
}
else{
if($password === $confirmpassword){
    $insertquery ="insert into userinfo(name,email,phone,password,confirmpassword) values('$name','$email','$phone','$password','$confirmpassword')";
    $iquery =mysqli_query($con,$insertquery);
    if($iquery){
        ?>
        <script>
                alert("inserted");
            </script>
        <?php
    }else{
        ?>
        <script>
                alert("not inserted");
            </script>
            <?php
    }
}else{
    echo "password not matching";
}
}
?>
            </form>
            </div>
        </body>
    </head>