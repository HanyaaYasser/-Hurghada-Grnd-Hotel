
<html>
<head>
     <title> Hurghada GRND Hotel </title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
          <div class="header">
          <a href="#default" class="logo"> <img src="logo.png" style="width:30%;"></a>
            <div class="header-right">
                <a href="home"> Home </a>
                <div class="dropdown">
                    <button class="dropbtn">Rooms & Suits</button>
                    <div class="dropdown-content">
                      <a href="page2.html">Rooms 1</a>
                      <a href="Rooms.php">Rooms 2</a>
                      <a href="#">Rooms 3</a>
                    </div>
                  </div>
                <!-- <a href="rooms"> Rooms </a> -->
                <a href="about.html"> About </a>
                <a href="Restaurant.php"> Restaurant</a>
                <a href="contact.php"> Contact us </a>
                <a href="log In.php"> Login</a>
                
            </div>
          </div>
        </nav>
 </header>


    <section class="main">
        <div>
            <div class="stars"style="margin-left:250px;">
           <center> <span class="fa fa-star checked"></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</center>
</div>
            <h2 style="margin-left:300px;"> Luxury Hotel and Best Resort </h2>
            <h1> Enjoy A Luxury Experience </h1>
            <a href="Rooms.php" class="main_button" > <span>Rooms & Suits </span></a>

        </div>
  

        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a href="index.html">
                <div class="logo">
                    <img src="images/" class="logo-img" alt="">
                </div>
            </a>
        </div>

    </section>

<!-----------About---------->
    <section class="about section-padding">
        <div class="container2">
            <div class="row">
                <div class="col-md-6 animate-box" ></div>
                <div class="stars2" style="margin-top:-50px; margin-left:-400px;">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked" ></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
</div>

                <p style="margin-left:-90px; margin-top:0px;font-size: 20px; font-family: 'Barlow Condensed', sans-serif;font-weight: 400;color: #666;">  HURGHADA GRND HOTEL </p>

           <h1 style="margin-left:-180px;  margin-top:30px; font-size: 50px;font-family: 'Barlow Condensed', sans-serif;font-weight: 400;color: #666;">Enjoy a Luxury <br>  Experience </h1>
                <p style="margin-left:-250px; margin-top:160px;"> Welcome to the best five-star deluxe hotel in Egypt.</p>
    
                <!--call-->
                <div class="reservations">
                    <div class="text">
                        <p style="margin-left:-250px; margin-top:250px; font-size: 20px;"> Reservation </p> <a href="tel:855-100-4444" style="margin-left:-250px; margin-top:10px; font-size: 20px;"> 855 100 4444</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"style="width:300px; height:450px; margin-left:350px;  margin-top:-300px; ">
                <?php
                  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img11 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                          <img style="margin:10px;width:100%;height:400px; " src='<?=$row['img11'];?>'></img>
                        <?php
        }
      }
          ?>
            </div>
            <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp" style="width:300px; height:450px; margin-left:650px; margin-top:-550px;" > 
            <?php
                  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img12 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <img style="margin:10px;width:100%;height:400px; " src='<?=$row['img12'];?>'></img>
                        <?php
        }
      }
          ?>
            </div>
        </div>
    </section>

     <!----------Rooms---------->
<section class="rooms1 section-padding bg-cream" data-scroll-index="1" style="margin-top:150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"> Hurghada GRND Hotel </div>
                    <div class="section-title"> Rooms & Suites</div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img4 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <div class="position-re o-hidden" > <img style="width: 300px; height:350px;" src='<?=$row['img4'];?>'></img></div>
                        <?php
        }
      }
          ?>

                        <div class="con">
                        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price FROM room_details where room_type='Junior Suite'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                            <h6> <a href="Rooms.php"><?= $row['price']; ?></a></h6>   
                            <h5><a href="Rooms.php"><?=$row['room_type']; ?></a> </h5>
                            <div class="line"></div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"> <a href="Rooms.php "> Details </div> 
    </div>
                        </div>
                    </div>
                </div>
                <?php
        }
      }
          ?>
                <div class="col-md-4">
                    <div class="item">
                    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img5 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <div class="position-re o-hidden"> <img style="width: 300px; height:350px;" src='<?=$row['img5'];?>'></img></div>
                        <?php
        }
      }
          ?>
                 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price FROM room_details where room_type='Family Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <div class="con">
                            <h6> <a href=" Rooms.php"><?= $row['price']; ?></a></h6>   
                            <h5><a href="Rooms.php"><?=$row['room_type']; ?></a> </h5>
                            <div class="line"></div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"> <a href="Rooms.php "> Details </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
      }
          ?>
                <div class="col-md-4">
                    <div class="item">
                    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img6 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <div class="position-re o-hidden"><img style="width: 300px; height:350px;" src='<?=$row['img6'];?>'></img></div>
                        <?php
        }
      }
          ?>
          
                        <div class="con">
                        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price FROM room_details where room_type='Double Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                            <h6><a href="Rooms.php"><?= $row['price']; ?></a></h6>
                            <h5><a href="Rooms.php"><?=$row['room_type']; ?></a></h5>
                            <div class="line"></div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="Rooms.php">Details </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
      }
          ?>
                <div class="col-md-4">
                    <div class="item">
                    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img7 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <div class="position-re o-hidden"> <img style="width: 300px; height:350px;" src='<?=$row['img7'];?>'></img></div>
                        <?php
        }
      }
          ?>
          
                        <div class="con">
                        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price FROM room_details where room_type='Deluxe Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                            <h6><a href="room-details.html"><?= $row['price']; ?></a></h6>
                            <h5><a href="room-details.html"><?=$row['room_type']; ?></a></h5>
                            <div class="line"></div>
                                <div class="col col-md-5 text-right">
                                    <div class="permalink"><a href="Rooms.php">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
      }
          ?>
                </div>
            </div>
        </div>
    </section>



<!------------Footer----------->
<footer class="footer">
    <div class="box-container">
        <div class="box">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-column footer-about">
                    <h3 class="footer-title" style="color: aliceblue;" style="margin-left: 15px;"> About Hotel </h3>
                    <p class="footer-about-text" style="color:gray">Welcome to the best five-star deluxe hotel in New York, where you'll feel totally Home. </p>
                </div>
            </div>
                <div class="col-sm-4">
                    <div class="footer-column footer-explore">
                        <h3 class="footer-title" style="color: aliceblue;" > Explore </h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="welcome.html" style="color:gray">Home</a></li>
                            <li><a href="page2.html" style="color:gray">Rooms & Suites</a></li>
                            <li><a href="Restaurant.php" style="color:gray">Restaurant</a></li>
                            <li><a href="about.html" style="color:gray">About Hotel</a></li>
                            <li><a href="contact.html" style="color:gray">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="footer-column footer-contact">
                    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT Contact,address,country,phone,email FROM room_details where room_type='nothing'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
                        <h3 class="footer-title" style="color: aliceblue;"><?= $row['Contact']; ?></h3>
                        <p class="footer-contact-text" style="color:gray"><?= $row['address']; ?><br><?= $row['country']; ?></p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone" style="color:gray"><span class="flaticon-call"></span><?= $row['phone']; ?></p>
                            <p class="footer-contact-mail" style="color:gray"><?= $row['email']; ?>/p>
                        </div>
                        <?php
        }
      }
          ?>
                    </div>
        </div>
    </div>
        </div>
    
</footer>
</body>
</html>
<style>
    .js .animate-box {
    opacity: 0;
}
.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
}
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

@-webkit-keyframes bounce {
  from, 20%, 53%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }
}
    .main {

width: 100%;
min-height: 100vh;
display:flex;
align-items: center;
background-image: url(all.jpeg);
height: 100%;
background-size: cover;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;


}
.main h2{
    font-family: "Gilda Display", serif;
    font-size: 15px;
    font-weight: 100px;
    text-transform: uppercase;
    letter-spacing: 6px;
    color: rgb(255, 255, 255);
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
    animation-delay: 0.4s;
    margin: 0px 0px 20px;
 
}

.main h1 {
 
    margin-bottom: 20px;
    margin-top: 8px;
    margin-left:350px;
    font-family: "Gilda Display", serif;
    font-size: 60px;
    text-transform: uppercase;
    line-height: 1.35em;
    animation-delay: 0.6s;
    color: rgb(255, 255, 255);
    font-weight: 400;
    letter-spacing: 15px;
   text-align: center;
 
}
.checked {
    color: orange;
    
}
.fa-star {
    /* text-align: center; */
    margin-bottom: 30px;
}

/* .main h2 span {
    display: inline-block;
    margin-top: 5px;
    color: white;
    font-size: 4em;
    font-weight: 600;

} */

.main_button {
    color: white;
    border-style: solid;
    text-decoration: none;
    font-size: 15px;
    font-weight: 400;
    display: inline-block;
    padding: 0.9375em 2.1875em;
    letter-spacing: 1px;
    /* border-radius: 15px; */
    margin-bottom: 40px;
    align-items: center ;
    text-transform: uppercase;
    cursor: pointer;
    margin-left: 850px;

}
.main_button span {
    cursor: pointer;
    display: inline-block;
    transition: 0.5s;
 }

.main_button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.main_button:hover span {
  padding-right: 25px;
}

.main_button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
