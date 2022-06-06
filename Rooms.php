<html>
    <form action="Rooms.php" method="post"></form>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="scrollIt.js" type="text/javascript"></script>

                <body>
    <div class="slideshow-container">
    <header>
        <nav>
          <div class="header">
            
            <a href="#default" class="logo"> <img src="logo.png" style="width:30%;"></a>
            <div class="header-right">
                <a href="home"> Home </a>
                <div class="dropdown">
                    <button class="dropbtn">Rooms & Suits</button>
                    <div class="dropdown-content">
                      <a href="#">Junior Suite</a>
                      <a href="#">Family Room</a>
                      <a href="#">Double Room</a>
                      <a href="#">Deluxe Room</a>
                    </div>
                  </div>
                <a href="about"> About </a>
                <a href="restaurant"> Restaurant</a>
                <a href="contact"> Contact us </a>
                <a href="login"> Login</a>
                
            </div>
          </div>
        </nav>
 </header>
 <div class="text">
 <?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT hotel FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
  <h1 style="position:absolute; font-family: Perpetua Titling MT; color: beige;position-attachment: absolute;left: 900px; top: 540px;font-size:50px"><?=$row['hotel'];?></h1>
  <?php
    }
  }
      ?>
</div>
<div class="mySlides fade">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img1 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
  <img style="width:100%;hight:20%"src='<?=$row['img1'];?>'></img>
  <?php
    }
  }
      ?>
</div>

<div class="mySlides fade">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img2 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <img style="width:100%;hight:20%"src='<?=$row['img2'];?>'></img>
      <?php
        }
      }
          ?>
</div>

<div class="mySlides fade">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img3 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <img style="width:100%;hight:20%"src='<?=$row['img3'];?>'></img>
      <?php
        }
      }
          ?>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000);    
}
</script>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img4,img5,img6,img7 FROM room_image3"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <img style="width:600px;height:400px;position: absolute;left: 900px; top: 1000px; background-attachment: relative;transition: all 0.5s; "src='<?=$row['img4'];?>'></img>
      <img style="width:650px;height:400px;position: absolute;left: 330px; top: 1600px;background-attachment: relative;transition: all 0.5s;"src='<?=$row['img5'];?>'></img>
      <img style="width:650px;height:400px;position: absolute;left: 900px; top: 2200px;background-attachment: relative;transition: all 0.5s;"src='<?=$row['img6'];?>'></img>
      <img style="width:650px;height:400px;position: absolute;left: 330px; top: 2800px;  background-attachment: relative;transition: all 0.5s;"src='<?=$row['img7'];?>'></img>
      <?php
        }
      }
          ?>
      <div class="butn-dark1"> <a href="#" data-scroll-nav="1" id="button1"><span>Book Now</span></a> </div>
      <div class="butn-dark2"> <a href="#" data-scroll-nav="1" id="button1"><span>Book Now</span></a> </div>
      <div class="butn-dark3"> <a href="#" data-scroll-nav="1" id="button1"><span>Book Now</span></a> </div>
      <div class="butn-dark4"> <a href="#" data-scroll-nav="1" id="button1"><span>Book Now</span></a> </div>

  <script>
 (function(a){var b={upKey:38,downKey:40,easing:"linear",scrollTime:600,activeClass:"active",onPageChange:null};a.scrollIt=function(d){var e=a.extend(b,d);var g=0;var i=a("[data-scroll-index]:last").attr("data-scroll-index");var c=function(j){if(j<0||j>i){return}var k=a("[data-scroll-index="+j+"]").offset().top;a("html,body").animate({scrollTop:k,easing:e.easing},e.scrollTime)};var f=function(j){if(e.onPageChange&&j&&(g!=j)){e.onPageChange(j)}g=j;a("[data-scroll-nav]").removeClass(e.activeClass);a("[data-scroll-nav="+j+"]").addClass(e.activeClass)};var h=function(){var j=a(window).scrollTop();var l=a("[data-scroll-index]").filter(function(m,n){return j>=a(n).offset().top&&j<a(n).offset().top+a(n).outerHeight()});var k=l.first().attr("data-scroll-index");f(k)};a(window).scroll(h).scroll();a(window).keydown(function(j){var k=j.which;if(k==e.upKey&&g>0){c(parseInt(g)-1);return false}else{if(k==e.downKey&&g<i){c(parseInt(g)+1);return false}}return true});a("[data-scroll-nav], [data-scroll-goto]").click(function(j){var k=a(j.target).attr("data-scroll-nav")||a(j.target).attr("data-scroll-goto");c(k)})}}(jQuery));
  </script>
      <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price, info,details,details2,details3,details4,details5,details6 FROM room_details where room_type='Junior Suite'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h1 style=" font-family: Bookman Old Style; color: rgb(37, 32, 1); position: absolute; left:10px; top: 40px;"><?=$row['room_type']; ?></h1>
      <h4 style=" color:#7c440c; position: absolute; left:10px; top:10px "><?= $row['price']; ?></h4>
      <p style=" position: absolute; left:10px; top:100px;"><?=$row['info'];?></p>
      <ul>
      <li style="color:#7c440c;  position: absolute;top: 200px;"><?= $row['details']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 230px;"><?= $row['details2']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 260px;"><?= $row['details3']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 290px;"><?= $row['details4']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 320px;"><?= $row['details5']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 350px;"><?= $row['details6']; ?></li>
      
      </ul>
      <?php
    }
  }
      ?>
        </div>
        <div class="flip-box-back">
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT CheckIn, check_in, chek_in2,CheckOut,chech_out,check_out2,Special_checkin_instructions,instructions,Pet,pets,Children_and_extra_beds,extra From room_details where room_type='Junior Suite'";
    $result = $conn->query($sql);

if ($result->num_rows != 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h3 style="position: absolute; left:100px; top: 15px;"><?= $row['CheckIn']; ?></h3>
<p style="position: absolute; left:25px; top: 45px;"><?= $row['check_in']; ?></p>
<p style="position: absolute; left:25px; top: 65px;"><?=  $row['chek_in2']; ?></p>
<h3 style="position: absolute; right:100px; top: 15px;"><?= $row['CheckOut']; ?></h3>
<p style="position: absolute; right:45px; top: 45px"><?= $row['chech_out']; ?></p>
<p style="position: absolute; right:80px; top: 65px"><?=  $row['check_out2']; ?></p>
<h2 style="position: absolute; left:20px; top: 130px;"><?= $row['Special_checkin_instructions']; ?></h2>
<p style="position: absolute; left:15px; top: 170px;"><?= $row['instructions']; ?></p>
<h2 style="position: absolute; left:20px; top: 230px;"><?=  $row['Pet']; ?></h2>
<p style="position: absolute; left:25px; top: 270px;"><?= $row['pets']; ?></p>
<h2 style="position: absolute; left:20px; top: 320px;"><?= $row['Children_and_extra_beds']; ?></h2>
<p style="position: absolute; left:15px; top: 360px;"><?= $row['extra']; ?></p>
	 
       <?php
    }
  }
      ?>
        </div>
  </div>
</div>
<div class="flip-box1">
  <div class="flip-box-inner1">
    <div class="flip-box-front1">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price, info,details,details2,details3,details4,details5,details6 FROM room_details where room_type='Family Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h1 style=" font-family: Bookman Old Style; color: rgb(37, 32, 1); position: absolute; left:10px; top: 40px;"><?=$row['room_type']; ?></h1>
      <h4 style=" color:#7c440c; position: absolute; left:10px; top:10px "><?= $row['price']; ?></h4>
      <p style=" position: absolute; left:10px; top:100px;"><?=$row['info'];?></p>
      <ul>
      <li style="color:#7c440c;  position: absolute;top: 200px;"><?= $row['details']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 230px;"><?= $row['details2']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 260px;"><?= $row['details3']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 290px;"><?= $row['details4']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 320px;"><?= $row['details5']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 350px;"><?= $row['details6']; ?></li>
      
      </ul>
      <?php
    }
  }
      ?>
    </div>
        <div class="flip-box-back1">
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT CheckIn, check_in, chek_in2,CheckOut,chech_out,check_out2,Special_checkin_instructions,instructions,Pet,pets,Children_and_extra_beds,extra From room_details where room_type='Family Room'";
    $result = $conn->query($sql);

if ($result->num_rows != 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h3 style="position: absolute; left:100px; top: 15px;"><?= $row['CheckIn']; ?></h3>
<p style="position: absolute; left:25px; top: 45px;"><?= $row['check_in']; ?></p>
<p style="position: absolute; left:25px; top: 65px;"><?=  $row['chek_in2']; ?></p>
<h3 style="position: absolute; right:100px; top: 15px;"><?= $row['CheckOut']; ?></h3>
<p style="position: absolute; right:45px; top: 45px"><?= $row['chech_out']; ?></p>
<p style="position: absolute; right:80px; top: 65px"><?=  $row['check_out2']; ?></p>
<h2 style="position: absolute; left:20px; top: 130px;"><?= $row['Special_checkin_instructions']; ?></h2>
<p style="position: absolute; left:15px; top: 170px;"><?= $row['instructions']; ?></p>
<h2 style="position: absolute; left:20px; top: 230px;"><?=  $row['Pet']; ?></h2>
<p style="position: absolute; left:25px; top: 270px;"><?= $row['pets']; ?></p>
<h2 style="position: absolute; left:20px; top: 320px;"><?= $row['Children_and_extra_beds']; ?></h2>
<p style="position: absolute; left:15px; top: 360px;"><?= $row['extra']; ?></p>
	 
       <?php
    }
  }
      ?>
      </div>
  </div>
</div>
<div class="flip-box2">
  <div class="flip-box-inner2">
    <div class="flip-box-front2">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price, info,details,details2,details3,details4,details5,details6 FROM room_details where room_type='Double Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h1 style=" font-family: Bookman Old Style; color: rgb(37, 32, 1); position: absolute; left:10px; top: 40px;"><?=$row['room_type']; ?></h1>
      <h4 style=" color:#7c440c; position: absolute; left:10px; top:10px "><?= $row['price']; ?></h4>
      <p style=" position: absolute; left:10px; top:100px;"><?=$row['info'];?></p>
      <ul>
      <li style="color:#7c440c;  position: absolute;top: 200px;"><?= $row['details']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 230px;"><?= $row['details2']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 260px;"><?= $row['details3']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 290px;"><?= $row['details4']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 320px;"><?= $row['details5']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 350px;"><?= $row['details6']; ?></li>
      
      </ul>
      <?php
    }
  }
      ?>
        </div>
        <div class="flip-box-back2">
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT CheckIn, check_in, chek_in2,CheckOut,chech_out,check_out2,Special_checkin_instructions,instructions,Pet,pets,Children_and_extra_beds,extra From room_details where room_type='Double Room'";
    $result = $conn->query($sql);

if ($result->num_rows != 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h3 style="position: absolute; left:100px; top: 15px;"><?= $row['CheckIn']; ?></h3>
<p style="position: absolute; left:25px; top: 45px;"><?= $row['check_in']; ?></p>
<p style="position: absolute; left:25px; top: 65px;"><?=  $row['chek_in2']; ?></p>
<h3 style="position: absolute; right:100px; top: 15px;"><?= $row['CheckOut']; ?></h3>
<p style="position: absolute; right:45px; top: 45px"><?= $row['chech_out']; ?></p>
<p style="position: absolute; right:80px; top: 65px"><?=  $row['check_out2']; ?></p>
<h2 style="position: absolute; left:20px; top: 130px;"><?= $row['Special_checkin_instructions']; ?></h2>
<p style="position: absolute; left:15px; top: 170px;"><?= $row['instructions']; ?></p>
<h2 style="position: absolute; left:20px; top: 230px;"><?=  $row['Pet']; ?></h2>
<p style="position: absolute; left:25px; top: 270px;"><?= $row['pets']; ?></p>
<h2 style="position: absolute; left:20px; top: 320px;"><?= $row['Children_and_extra_beds']; ?></h2>
<p style="position: absolute; left:15px; top: 360px;"><?= $row['extra']; ?></p>
	 
       <?php
    }
  }
      ?>
      </div>
  </div>
</div>
<div class="flip-box3">
  <div class="flip-box-inner3">
    <div class="flip-box-front3">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT room_type, price, info,details,details2,details3,details4,details5,details6 FROM room_details where room_type='Deluxe Room'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h1 style=" font-family: Bookman Old Style; color: rgb(37, 32, 1); position: absolute; left:10px; top: 40px;"><?=$row['room_type']; ?></h1>
      <h4 style=" color:#7c440c; position: absolute; left:10px; top:10px "><?= $row['price']; ?></h4>
      <p style=" position: absolute; left:10px; top:100px;"><?=$row['info'];?></p>
      <ul>
      <li style="color:#7c440c;  position: absolute;top: 200px;"><?= $row['details']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 230px;"><?= $row['details2']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 260px;"><?= $row['details3']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 290px;"><?= $row['details4']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 320px;"><?= $row['details5']; ?></li>
      <li style="color:#7c440c;  position: absolute;top: 350px;"><?= $row['details6']; ?></li>
      
      </ul>
      <?php
    }
  }
      ?>
        </div>
        <div class="flip-box-back3">
        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT CheckIn, check_in, chek_in2,CheckOut,chech_out,check_out2,Special_checkin_instructions,instructions,Pet,pets,Children_and_extra_beds,extra From room_details where room_type='Deluxe Room'";
    $result = $conn->query($sql);

if ($result->num_rows != 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
   <h3 style="position: absolute; left:100px; top: 15px;"><?= $row['CheckIn']; ?></h3>
<p style="position: absolute; left:25px; top: 45px;"><?= $row['check_in']; ?></p>
<p style="position: absolute; left:25px; top: 65px;"><?=  $row['chek_in2']; ?></p>
<h3 style="position: absolute; right:100px; top: 15px;"><?= $row['CheckOut']; ?></h3>
<p style="position: absolute; right:45px; top: 45px"><?= $row['chech_out']; ?></p>
<p style="position: absolute; right:80px; top: 65px"><?=  $row['check_out2']; ?></p>
<h2 style="position: absolute; left:20px; top: 130px;"><?= $row['Special_checkin_instructions']; ?></h2>
<p style="position: absolute; left:15px; top: 170px;"><?= $row['instructions']; ?></p>
<h2 style="position: absolute; left:20px; top: 230px;"><?=  $row['Pet']; ?></h2>
<p style="position: absolute; left:25px; top: 270px;"><?= $row['pets']; ?></p>
<h2 style="position: absolute; left:20px; top: 320px;"><?= $row['Children_and_extra_beds']; ?></h2>
<p style="position: absolute; left:15px; top: 360px;"><?= $row['extra']; ?></p>
       <?php
    }
  }
      ?>
      </div>
        </div>
</div>
</body>
<header>
<div id="creamy_background" data-scroll-index="1">
  <h4 style="font-size: 15px;font-family: 'Barlow Condensed', sans-serif;font-weight: 400;color: #666;text-transform: uppercase;position: relative; letter-spacing: 6px;margin-left:15px; margin-top:-90px;"> availability</h4>
  <h1 style="font-size: 60px;font-family: 'Gilda Display', serif;font-weight: 400;color: #222;margin-left:10px; margin-top:-20px;">Search Rooms</h1>
  <div class="container">
  <div class="booking-inner clearfix">
  <form class="form1 clearfix">
<div class="col1 c1"style="border-color: #aa8453;">
<div class="input1_wrapper">
<div class="input1_inner">
 <input type="text" class="form-control input datepicker" placeholder="Check in">
 </div>
</div>
</div>
<div class="col2 c2"style="border-color: #aa8453;">
<div class="input1_wrapper">
<div class="input1_inner">
 <input type="text" class="form-control input datepicker" placeholder="Check out">
 </div>
</div>
</div>
<div class="col3 c3">
<div class="select1_wrapper">
<div class="select1_inner">
<select class="select2 select" style="border:none;border-bottom: 7px solid #aa8453;width: 15%; height:8%;margin-top:-90px;margin-left:580px;">
<option value="1"> Adults</option>
<option value="1">1 Adult</option>
<option value="2">2 Adults</option>
<option value="3">3 Adults</option>
<option value="4">4 Adults</option>
</select>
</div>
</div>
</div>
<div class="col4 c4">
<div class="select1_wrapper">
<div class="select1_inner">
<select class="select2 select" style="border:none;border-bottom: 7px solid #aa8453;width: 15%; height:8%;margin-top:-90px;margin-left:840px;">
<option value="1"> Children</option>
<option value="1">1 Children</option>
<option value="2">2 Children</option>
<option value="3">3 Children</option>
<option value="4">4 Children</option>
</select>
</div>
</div>
</div>
<div class="col5 c5">
<div class="select1_wrapper">
<div class="select1_inner">
<select class="select2 select" style="border:none;border-bottom: 7px solid #aa8453;width: 15%; height:8%;margin-top:-92px;margin-left:1100px;">
<option value="1"> Rooms</option>
<option value="1">1 Rooms</option>
<option value="2">2 Rooms</option>
<option value="3">3 Rooms</option>
<option value="4">4 Rooms</option>
</select>
</div>
</div>
</div>
<div class="col6 c6">
 <button type="submit" class="btn-form1-submit">Check Now</button>
</div>
</form>
</div>
</div>
<a name="demo"></a>
</div>
</header>
<style>
@-webkit-keyframes  {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    -webkit-transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
  }
}
@keyframes  {
  0% {
    transform: rotate(-45deg) translate(0, 0);
  }
  20% {
    transform: rotate(-45deg) translate(-10px, 10px);
  }
  40% {
    transform: rotate(-45deg) translate(0, 0);
  }
}


  .butn-dark1 {
    position: relative;
    line-height: 1.2em;
    margin-top:700px;
    margin-left:1350px;
    scroll-behavior: smooth;
}
.butn-dark1 a {
    font-weight: 400;
    font-family: 'Barlow Condensed', sans-serif;
    text-transform: uppercase;
    background: #ab8a62;
    color: #fff;
    padding: 13px 22px;
    margin: 0;
    position: relative;
    font-size: 15px;
    letter-spacing: 3px;
}
.butn-dark1 a:after {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 100%;
    z-index: 1;
    background: #222;
    color: #fff;
   }
.butn-dark1 a span {
    position: relative;
    z-index: 2;
}
.butn-dark1 a:hover:after {
    width: 100%;
    left: 0;
    -webkit-transition: width 0.3s ease;
    transition: width 0.3s ease;
}
.butn-dark1 a:hover span {
    color: #fff;
}
.butn-dark2 {
    position: relative;
    line-height: 1.2em;
    margin-top:580px;
    margin-left:330px;
    scroll-behavior: smooth;
}
.butn-dark2 a {
    font-weight: 400;
    font-family: 'Barlow Condensed', sans-serif;
    text-transform: uppercase;
    background: #ab8a62;
    color: #fff;
    padding: 13px 22px;
    margin: 0;
    position: relative;
    font-size: 15px;
    letter-spacing: 3px;
}
.butn-dark2 a:after {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 100%;
    z-index: 1;
    background: #222;
    color: #fff;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.butn-dark2 a span {
    position: relative;
    z-index: 2;
}
.butn-dark2 a:hover:after {
    width: 100%;
    left: 0;
    -webkit-transition: width 0.3s ease;
    
}
.butn-dark2 a:hover span {
    color: #fff;
}
.butn-dark3 {
    position: relative;
    line-height: 1.2em;
    margin-top:580px;
    margin-left:1400px;
    scroll-behavior: smooth;
}
.butn-dark3 a {
    font-weight: 400;
    font-family: 'Barlow Condensed', sans-serif;
    text-transform: uppercase;
    background: #ab8a62;
    color: #fff;
    padding: 13px 22px;
    margin: 0;
    position: relative;
    font-size: 15px;
    letter-spacing: 3px;
}
.butn-dark3 a:after {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 100%;
    z-index: 1;
    background: #222;
    color: #fff;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.butn-dark3 a span {
    position: relative;
    z-index: 2;
}
.butn-dark3 a:hover:after {
    width: 100%;
    left: 0;
    -webkit-transition: width 0.3s ease;
    transition: width 0.3s ease;
}
.butn-dark3 a:hover span {
    color: #fff;
}
.butn-dark4 {
    position: relative;
    line-height: 1.2em;
    margin-top:580px;
    margin-left:330px;
    scroll-behavior: smooth;
}
.butn-dark4 a {
    font-weight: 400;
    font-family: 'Barlow Condensed', sans-serif;
    text-transform: uppercase;
    background: #ab8a62;
    color: #fff;
    padding: 13px 22px;
    margin: 0;
    position: relative;
    font-size: 15px;
    letter-spacing: 3px;
}
.butn-dark4 a:after {
    content: '';
    width: 0;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 100%;
    z-index: 1;
    background: #222;
    color: #fff;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.butn-dark4 a span {
    position: relative;
    z-index: 2;
}
.butn-dark4 a:hover:after {
    width: 100%;
    left: 0;
    -webkit-transition: width 0.3s ease;
    transition: width 0.3s ease;
}
.butn-dark4 a:hover span {
    color: #fff;
}

  /* Style the header with a grey background and some padding */
.header {
  /* overflow: hidden; */
  padding: 20px 10px;
  
}

/* Style the header links */
.header a {
  float: left;
  color:#8e6d45;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 1px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header .logo {
  font-size: 30px;
  font-weight: bold;
  display: flex;
  
}

/* Change the background color on mouse-over */
.header a:hover {
  color:white;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {

    float: right;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    align-items: right;
    padding: 10px ;
    padding-left: 690px;
    margin-left:550px;

}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

/* Dropdown Button */
.dropbtn {
    background-color: transparent;
    color:#8e6d45;
    padding: 16px;
    font-size: 18px;
    line-height: 0px;
    border: none;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn { color: white; }
.booking-wrapper {
    position: absolute;
    left: 0;
    width: 100%;
    bottom: 5%;
    z-index: 5;
}
.booking2-wrapper {
    position: relative;
    margin-bottom: 40px;
}
.booking-inner {
    position: relative;
    border-radius: 0;
}
.form1 {
    display: block;
    padding: 0;
    position: relative;
    margin-top:50px;
    margin-left:-40px;
    background:blur(10px);
}
.form1 .col1 {
  display: block;
    padding: 0;
    border-color: #aa8453;
    margin-top: 60px;
    margin-left:50px;
    width: 15%;
    background: #aa8453;
    line-height: 62.5px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease-out;

}
.form1 .col2 {
  display: block;
    padding: 0;
    border-color: #aa8453;
    margin-left:320px;
    margin-top: -77px;
    width: 15%;
    background: #aa8453;
    line-height: 62.5px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease-out;
}


.form1 .c1 {
    height: 62.5;
    margin-bottom: 15px;
}
.form1 .c2 {
    height: 62.5px;
    margin-bottom: 15px;
}

.ui-datepicker .ui-datepicker-header {
    background: #aa8453;
    border: #aa8453;
    color: #fff;
}
.ui-datepicker {
    font-size: 15px;
    color: #222;
    background: #fff;
    z-index: 100 !important;
    border: 1px solid #fff;
    border-radius: 0px;
}
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    border: 1px solid #f8f5f0;
    background: #f8f5f0;
    color: #222;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
    border: 1px solid #aa8453;
    background: #aa8453;
    font-weight: normal;
    color: #fff;
}
.ui-datepicker .ui-datepicker-prev:after {
    font-size: 10px;
    content: "\e64a";
    font-family: "themify";
    color: #fff;
}
.ui-datepicker .ui-datepicker-next:before {
    font-size: 10px;
    content: "\e649";
    font-family: "themify";
    color: #fff;
    float: right;
}
.ui-datepicker .ui-datepicker-prev:hover,
.ui-datepicker .ui-datepicker-next:hover {
    background: transparent;
    border: 1px solid transparent;
}
.btn-form1-submit {
    display: block;
    padding: 0;
    border: none;
    margin-top: -78px;
    margin-left: 1355px;
    background: #aa8453;
    color: #fff;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 15px;
    text-decoration: none;
    line-height: 62.5px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease-out;
    letter-spacing: 3px;
    text-transform: uppercase;
    width: 250px;
}
.btn-form1-submit:hover {
    background: #222;
}
.btn-form1-submit:focus {
    outline: none;
}
.btn-form1-submit:after {
    content: '';
    display: block;
    width: 1px;
    height: 100%;
    position: absolute;
    left: 100%;
    top: 0;
    background: inherit;
}
.input1_inner {
    position: relative;
    position: relative;
    height:62.5px;
}
.input1_inner:after {
    content: '';
    display: block;
    position: absolute;
    right: 20px;
    top: 23px;
    pointer-events: none;
    content: "\e6b6";
    font-family: "themify";
    font-size: 15px;
    color: #aa8453;
    line-height: 1;
}
.input1_inner input {
    display: block;
    width: 100%;
    font-size: 15px;
    color: #222;
    padding: 20px 40px 20px 20px;
    background: #fff;
    border: none;
    box-shadow: none;
    border-radius: 0;
}
.input1_inner input::placeholder {
    font-size: 17px;
    color: #222 !important;
}
.input1_inner input:focus {
    outline: none;
    box-shadow: none;
    background: #fff;
    color: #222 !important;
}
.select1_wrapper {
    margin-bottom: 0;
}
.select1_inner {
    position: relative;
}
.select2 {
    width: 100%;
    background: #fff;
    margin-bottom: 15px;
}
.select2 *:focus {
    outline: none !important;
}
.select2-container--default .select2-results > .select2-results__options {
    max-height: 500px;
}
.select2-container--default .select2-selection--single {
    background: none;
    border-radius: 0;
    border: none;
    height: auto;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    font-size: 17px;
    line-height: 1;
    color: #222;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    display: none;
}
.select2-dropdown {
    background: none;
    border-radius: 0;
    z-index: 100;
    min-width: 0px;
    border: none;
}
.select2-container--open .select2-dropdown--above {
    border-bottom: 2px solid #aa8453;
}
.select2-container--open .select2-dropdown--below {
    border-top: 2px solid #aa8453;
}
.select2-results__option {
    padding: 10px 30px;
    background: #fff;
    font-size: 15px;
    line-height: 20px;
    color: #222;
    border-top: 1px solid #ececec;
   
}
.select2-results__option:first-child {
    border-top: none;
}
.small .select2-results__option {
    padding-left: 0;
}
.select2-container--default .select2-results__option[aria-selected=true] {
    background: #aa8453;
    color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background: #aa8453;
    color: #fff;
}
/* responsive */
@media (max-width: 1259.98px) {
    .booking2-wrapper {
        margin-bottom: 30px;
    }
}
@media (max-width: 991.98px) {
    .booking2-wrapper {
        margin-bottom: 40px;
    }
    .form1 .col1 {
        width: 50%;
        border-bottom: 1px solid #ececec;
    }
    .form1 .c2 {
        border-right: none;
    }
    .form1 .col2 {
        width: 25%;
    }
    .form1 .col3 {
        width: 25%;
    }
}
@media (max-width: 767.98px) {
    .form1 .col1 {
        width: 100%;
        border-right: 0;
        border-bottom: 1px solid #ececec;
    }
    .form1 .col2 {
        width: 100%;
        border-right: 0;
        border-bottom: 1px solid #ececec;
    }
    .form1 .col3 {
        width: 100%;
        border-right: 0;
    }
    .btn-form1-submit:after {
        background: none;
    }
    .booking-wrapper {
        position: relative;
        bottom: auto;
        padding: 30px 0;
        background: #f8f5f0;
    }
}
/* booking form */
.booking-box {
    position: relative;
    background: #f8f5f0;
    padding: 60px 45px;
    margin-bottom: -75px;
}
.booking-box .head-box h6 {
    font-size: 15px;
    font-family: 'Barlow Condensed', sans-serif;
    font-weight: 400;
    color: #666;
    text-transform: uppercase;
    position: relative;
    letter-spacing: 6px;
    margin-bottom: 10px;
}
.booking-box .head-box h4 {
    font-size: 27px;
    font-weight: 400;
    color: #222;
    border-bottom: 1px solid #ececec;
    padding-bottom: 15px;
}
.booking-box .head-box h4 span {
    color: #222;
}
@media screen and (max-width: 991px) {
    .booking-box {
        margin-bottom: 90px;
        padding: 35px 20px;
    }
}

          body
          {
              background-color:white;
          
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-attachment: relative;
    position: absolute;
    left: 400px;
     top: 1050px;
  background-color: white;
  width: 650px;
  height: 450px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  background-attachment: relative;
  position: relative;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  background-attachment: relative;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: white;
  color: black;
}
.flip-box-back {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
}
.flip-box1 {
  background-attachment: relative;
    position: absolute;
    left: 830px;
     top: 1650px;
  background-color: white;
  width: 650px;
  height: 450px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner1 {
  background-attachment: relative;
  position: relative;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box1:hover .flip-box-inner1 {
  transform: rotateY(180deg);
}

.flip-box-front1, .flip-box-back1 {
  background-attachment: relative;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front1 {
  background-color: white;
  color: black;
}
.flip-box-back1 {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
}
.flip-box2 {
  background-attachment: relative;
    position: absolute;
    left: 400px;
     top: 2250px;
  background-color: white;
  width: 650px;
  height: 450px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner2 {
  background-attachment: relative;
  position: relative;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box2:hover .flip-box-inner2 {
  transform: rotateY(180deg);
}

.flip-box-front2, .flip-box-back2 {
  background-attachment: relative;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front2 {
  background-color: white;
  color: black;
}
.flip-box-back2 {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
}
.flip-box3 {
  background-attachment: relative;
    position: absolute;
    left:830px;
     top: 2900px;
  background-color: white;
  width: 650px;
  height: 450px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner3 {
  background-attachment: relative;
  position: relative;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box3:hover .flip-box-inner3 {
  transform: rotateY(180deg);
}

.flip-box-front3, .flip-box-back3 {
  background-attachment: relative;
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front3 {
  background-color: white;
  color: black;
}
.flip-box-back3 {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
}
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
    size:cover;
  position: 100% 100%;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  top:1300px;
  height: 15px;
  width: 15px;
  margin:20px  2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
    <?php
 $servername="localhost";
 $username="root";
 $password="";
 $DB="Hotel";
 $conn=mysqli_connect($servername,$username,$password,$DB);
 
    ?>
</html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<div class="footer">
  <div class="sec1">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT best_price,services,det1,det2 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <p style="font-size: 20px;color:#aa8453; font-weight: 400;margin-left:-90px;margin-top:-70px;"><?=$row['best_price'];?></p>
      <h2 style="font-size: 45px;font-family: 'Gilda Display', serif;font-weight: 400; color:white;margin-left:-90px;margin-top:-10px;"><?=$row['services'];?></h2>
      <h4 style="font-size: 20px;font-family: 'Barlow Condensed', sans-serif;font-weight: 400;color: #666;position: relative;margin-left:-90px;"><?=$row['det1'];?></h4>
      <h4 style="font-size: 20px;font-family: 'Barlow Condensed', sans-serif;font-weight: 400;color: #666;position: relative;margin-left:-90px;margin-top:90px; "><?=$row['det2'];?></h4>
      <?php
        }
      }
          ?>
 </div>
  <div class="sec2" style="margin-top: -650px; background-color:blur(50px);margin-left:600px;width: 250px;height:60px; padding: 350px;">
  <div class="card">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img8 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
       <img style="width:100%;"src='<?=$row['img8'];?>'></img><?php
        }
      }
          ?>
  <div class="container">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT cleaning,price1,det3,det4,det5 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <p style="line-height: 1;margin-top:25px;margin-left:20px;;font-family: 'Gilda Display', serif;font-size: 30px;color: #222;margin-bottom: 20px;"><?=$row['cleaning'];?></p>
      <p style=" margin-top:40px; margin-left:20px;line-height: font-family: 'Gilda Display', serif;font-size: 30px;margin-bottom: 20px;color: #aa8453;"><?=$row['price1'];?></p>
 
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det3'];?><p>
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det4'];?><p>
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det5'];?><p>
    
      <?php
        }
      }
          ?>

</div>
</div>
<div class="card2">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img9 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
       <img style="width:100%;"src='<?=$row['img9'];?>'></img><?php
        }
      }
          ?>
  <div class="container1">
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT safe,price2,det6,det7,det8 FROM room_image3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <p style="line-height: 1;margin-top:25px;margin-left:20px;;font-family: 'Gilda Display', serif;font-size: 30px;color: #222;margin-bottom: 20px;"><?=$row['safe'];?></p>
      <p style=" margin-top:40px; margin-left:20px;line-height: font-family: 'Gilda Display', serif;font-size: 30px;margin-bottom: 20px;color: #aa8453;"><?=$row['price2'];?></p>
 
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det6'];?><p>
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det7'];?><p>
      <p style="margin-left:25px; color:#aa8453;"><?=$row['det8'];?><p>
    
      <?php
        }
      }
          ?>
</div>
</div>
</div>

</body>
<style>
   .footer{
  padding: 100px;
  background-color:#222;
  margin-top:0;
  background-attachment: absolute;
   }
   .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  margin-top:-260px;
  margin-left:-300px;
  transition: 0.3s;
  width: 150%;
  background:white;
}

.card:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
.card2 {
  box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
  margin-top:-650px;
  margin-left:200px;
  transition: 0.3s;
  width: 150%;
  background:white;
}

.card2:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 70px 20px;
  background:white;
}
.container1 {
  padding: 65px 20px;
  background:white;
}

   .sec1 {
  background-color: blur(50px);
  width: 200px;
  height:350px;
  padding: 150px;
  margin-top: -50px;
}

    #creamy_background {
  padding: 150px;
  background:#f8f5f0;
  margin-top:350px;
  background-attachment: absolute;
}
</style>
