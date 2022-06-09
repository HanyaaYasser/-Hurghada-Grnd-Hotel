<html>
<head>
<style>
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
  top: 50%;
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
.text {
  color:  rgb(37, 32, 1);
  font-family:Arial Rounded MT Bold;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 10px;
left: 100px;;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
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
  animation-duration: 1s;
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
</head>
<body>
<div class="header">
            
            <a href="#default" class="logo"> <img src="logo.png" style="width:30%;"></a>
            <div class="header-right">
                <a href="welcome.php"> Home </a>
                <div class="dropdown">
                    <button class="dropbtn">Rooms & Suits</button>
                    <div class="dropdown-content">
                    <a href="page2.html">Rooms 1</a>
                      <a href="Rooms.php">Rooms 2</a>
                      <a href="#">Rooms 3</a>
                    </div>
                  </div>
                  <a href="about.html"> About </a>
                <a href="Restaurant.php"> Restaurant</a>
                <a href="contact.html"> Contact us </a>
                <a href="log In.php"> Login</a>
                
            </div>
          </div>
        </nav>
 </header>
    <div class="slideshow-container">
<header>
<div class="mySlides fade">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT img1 FROM restaurant ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
  <img style="width:100%;"src='<?=$row['img1'];?>'></img>
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
    $sql = "SELECT img2 FROM restaurant ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
  <img style="width:100%;"src='<?=$row['img2'];?>'></img>
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
    $sql = "SELECT img3 FROM restaurant ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
  <img style="width:100%;"src='<?=$row['img3'];?>'></img>
  <?php
    }
  }
  ?>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

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
  setTimeout(carousel, 5000);    
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

</header>
</body>
<header>

</header>
<body>
   
<h3 style="position: absolute;left: 300px; top: 1200px;">⭐⭐⭐⭐⭐</h3>
<p style="font_family:Bookman Old Style; position: absolute;left: 300px; top: 1250px;">AN EXPERIENCE FOR THE SENSES</p>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT restaurant,det1,hours,det2,det22,det23,dress,det3,terrace,det4 FROM restaurant ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <h1 style="font_family:Times New Roman (Headings CS); position: absolute;left: 300px; top: 1330px;"><?=$row['restaurant'];?></h1>
<p style="position: absolute;right:300px; left: 300px; top: 1400px;"><?=$row['det1'];?></p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1570px;"><?=$row['hours'];?></h2>
<p  style="position: absolute;left: 300px; top: 1630px;"><?=$row['det2'];?></p>
<p  style="position: absolute;left: 300px; top: 1660px;"><?=$row['det22'];?></p>
<p  style="position: absolute;left: 300px; top: 1690px;"><?=$row['det23'];?></p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1780px;"><?=$row['dress'];?></h2>
<p style="position: absolute;right:300px; left: 300px; top: 1840px;"><?=$row['det3'];?></p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1930px;"><?=$row['terrace'];?></h2>
<p style="position: absolute;right:300px; left: 300px; top: 1990px;"><?=$row['det4'];?></p>
<?php
    }
  }
  ?>
<div id="black_background">
    <h1 style="position: absolute; top:2350px; left:40%; color:white;">Restaurant Menu</h1>
   
<div class="mains" id="main">
  <?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT m1,p1,d1,m2,p2,d2,m3,p3,d3,m4,p4,d4,m5,p5,d5,m6,p6,d6 FROM mains ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;"><?=$row['m1'];?></h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;"><?=$row['p2'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2640px;"><?=$row['d1'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;"><?=$row['m2'];?></h3>
    <p  style="position: absolute; color:white;left:39%;top:2760px;"><?=$row['p2'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2800px;"><?=$row['d2'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;"><?=$row['m3'];?></h3>
    <p  style="position: absolute; color:white;left:38.6%;top:2920px;"><?=$row['p3'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2960px;"><?=$row['d3'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;"><?=$row['m4'];?></h3>
    <p  style="position: absolute; color:white;left:79.6%;top:2605px;"><?=$row['p4'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:60%;top:2640px;"><?=$row['d4'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;"><?=$row['m5'];?></h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;"><?=$row['p5'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;"><?=$row['d5'];?>s</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;"><?=$row['m6'];?></h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;"><?=$row['p6'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;"><?=$row['d6'];?></p>
    <?php
    }
  }
  ?>
</div>


<div class="breakfast" id="breakfast">
<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT m1,p1,d1,m2,p2,d2,m3,p3,d3,m4,p4,d4,m5,p5,d5,m6,p6,d6 FROM breakfast ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;"><?=$row['m1'];?></h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;"><?=$row['p2'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2640px;"><?=$row['d1'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;"><?=$row['m2'];?></h3>
    <p  style="position: absolute; color:white;left:39%;top:2760px;"><?=$row['p2'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2800px;"><?=$row['d2'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;"><?=$row['m3'];?></h3>
    <p  style="position: absolute; color:white;left:38.6%;top:2920px;"><?=$row['p3'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2960px;"><?=$row['d3'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;"><?=$row['m4'];?></h3>
    <p  style="position: absolute; color:white;left:79.6%;top:2605px;"><?=$row['p4'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:60%;top:2640px;"><?=$row['d4'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;"><?=$row['m5'];?></h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;"><?=$row['p5'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;"><?=$row['d5'];?>s</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;"><?=$row['m6'];?></h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;"><?=$row['p6'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;"><?=$row['d6'];?></p>
    <?php
    }
  }
  ?>
</div>
<div class="dessert" id="dessert">
<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT m1,p1,d1,m2,p2,d2,m3,p3,d3,m4,p4,d4,m5,p5,d5,m6,p6,d6 FROM dessert ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;"><?=$row['m1'];?></h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;"><?=$row['p2'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2640px;"><?=$row['d1'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;"><?=$row['m2'];?></h3>
    <p  style="position: absolute; color:white;left:39%;top:2760px;"><?=$row['p2'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2800px;"><?=$row['d2'];?></p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;"><?=$row['m3'];?></h3>
    <p  style="position: absolute; color:white;left:38.6%;top:2920px;"><?=$row['p3'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2960px;"><?=$row['d3'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;"><?=$row['m4'];?></h3>
    <p  style="position: absolute; color:white;left:79.6%;top:2605px;"><?=$row['p4'];?></p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:60%;top:2640px;"><?=$row['d4'];?></p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;"><?=$row['m5'];?></h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;"><?=$row['p5'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;"><?=$row['d5'];?>s</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;"><?=$row['m6'];?></h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;"><?=$row['p6'];?></p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;"><?=$row['d6'];?></p>
    <?php
    }
  }
  ?>
</div>
    <div class="btn-group">

<button class="button" type="submit"  onclick="mains()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:-25px;cursor: pointer;display: inline-block;">Mains</button> 

<button class="button" type="submit" onclick="breakfast()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:300px;cursor: pointer;display: inline-block;">Breakfast</button>

<button class="button" type="submit" onclick="dessert()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:640px;cursor: pointer;display: inline-block;">Dessert</button>
</div>
   
</div>
<script>
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "visible"
</script>

<script>
 function mains() {
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "visible";
}
</script>

<script>
function breakfast() {
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "visible";
}
</script>
<script>
function dessert() {
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("dessert").style.visibility = "visible";
}
</script>
    <style>
#black_background {
  padding: 550px;
  background:#242526;
  margin-top:1100px;
  background-attachment: absolute;
}
</style>
</body>
</html>
