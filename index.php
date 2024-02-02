<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="slide.css" />
    <title>home</title>
  </head>

  <body>
    <nav id="navbar">
      <div id="logo">Multi purpose <br />Ticket booking system</div>
      <div>
        <ul>
        <li class="item"><a href="">Home</a></li>
        <li class="item"><a href="">Bus</a></li>
        <li class="item"><a href="">Train</a></li>
        <li class="item"><a href="">Help Desk</a></li>
        <li class="item"><a href="">Bus Stop Locater</a></li>
      </ul>
    </div>
    <div>
      <ul>
        <li class="item"><a href="login1.php">Login</a></li>
        <li class="item"><a href="register1.php">Register</a></li>
      </ul>
    </div>
  </nav>
  <div id="sld">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <input type="radio" name="radio-btn" id="radio4" />
          <div class="slide first">
            <img src="images/ss.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="images/train.png" alt="" />
          </div>
          <div class="slide">
            <img src="images/bus.jpg" alt="" />
          </div>
          <div class="slide">
            <h2>welcome user</h2>
            <!-- <img src="images/sl1.jpg   " alt="" /> -->
          </div>
        </div>
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
    </div>
  <div class="bkh">
    <!-- <img src="img/ss.jpg" alt=""> -->
  </div>
    <!-- <div id="Home">
      <section id="sec">
        <div id="wl">
          <h1>Welcome user</h1>
        </div>
        <div class="sec1">
          1. select the mode of transportion bus page/Train page
        </div>
        <div class="sec1">2. select start location and destination</div>
        <div class="sec1">3. select date and time</div>
        <div class="sec1">4. select number of seats</div>
        <div class="sec1">5. make payment</div>
        <div class="sec1">6. Download ticket</div>
      </section>
    </div> -->
  </body>
</html>

