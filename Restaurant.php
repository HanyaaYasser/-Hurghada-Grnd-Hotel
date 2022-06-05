<html>
<head>
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
    <div class="slideshow-container">
<header>
<div class="text">Hurghada GRND Hotel</div>
<div class="mySlides fade">
  <img src="img1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img3.jpg" style="width:100%">
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
<div class="text">Hurghada GRND Hotel</div>
</header>
<body>
   
<h3 style="position: absolute;left: 300px; top: 1100px;">⭐⭐⭐⭐⭐</h3>
<p style="font_family:Bookman Old Style; position: absolute;left: 300px; top: 1150px;">AN EXPERIENCE FOR THE SENSES</p>
<h1 style="font_family:Times New Roman (Headings CS); position: absolute;left: 300px; top: 1200px;">The Restaurant</h1>
<p style="position: absolute;right:300px; left: 300px; top: 1300px;">Led by Chef de Micheal Martin, The Restaurant is celebrated for its excellent cuisine and unique ambience. The gorgeous dining room features three open studio kitchens, allowing you to enjoy the sights and sounds of the culinary artistry on display. The menu showcases both Asian and European influences, with a tempting selection of classic favorites and creative dishes for you to sample. Cheese connoisseurs will be drawn to the The Wine and Cheese Cellar, housed in five-meter-high glass walls, where our knowledgeable staff can introduce you to some of Hurghada's greatest culinary treasures.</p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1450px;">Hours</h2>
<p  style="position: absolute;left: 300px; top: 1520px;">🕒   Breakfast: 7.00 am – 11.00 am (daily)</p>
<p  style="position: absolute;left: 300px; top: 1550px;">🕒   Lunch: 12.00 noon – 2.00 pm (daily)</p>
<p  style="position: absolute;left: 300px; top: 1580px;">🕒   Dinner: open from 6.30 pm, last order at 10.00 pm (daily)</p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1680px;">Dress Code</h2>
<p style="position: absolute;right:300px; left: 300px; top: 1750px;">Smart casual (no shorts, hats, or sandals permitted)</p>
<h2 style="font_family:Arabic Typesetting; position: absolute;left: 300px; top: 1850px;">Terrace</h2>
<p style="position: absolute;right:300px; left: 300px; top: 1910px;">Open for drinks only</p>
<div id="black_background">
    <h1 style="position: absolute; top:2250px; left:40%; color:white;">Restaurant Menu</h1>
    <div class="starter" id="starter">
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Mozzarella  Dippers</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">60 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2640px;">Fried mozzarella sticks, marinara sauce</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">Onion Rings</h3>
    <p style="position: absolute; color:white;left:39%;top:2760px;">90 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2800px;">Fried onion rings, smoked aioli</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Fried Jalapeno</h3>
    <p style="position: absolute; color:white;left:38.6%;top:2920px;">130 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2960px;">Fried jalapeno pickles, cheddar sauce</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">Buffalo Wings</h3>
    <p  style="position: absolute; color:white;left:79.6%;top:2605px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2640px;">Spicy chicken wings, blue cheese sauce, carrot, celery</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Chilli Con Carne</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">85 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Spicy ground beef, bacon, kidney beans</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">Potato Skins</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Crispy potato skins; bacon & cheddar or vegetables</p>
</div>
<div class="mains" id="main">
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Rusty’s Burger</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">60 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2640px;">Smoked pulled beef ribs, bbq sauce, cheddar, crispy onion</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">Cajun Fish Steak</h3>
    <p  style="position: absolute; color:white;left:39%;top:2760px;">90 EGP</p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2800px;">Cajun spicied seabass, deep fried baby potatoes, side salad</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Southern Fried Chicken</h3>
    <p  style="position: absolute; color:white;left:38.6%;top:2920px;">130 EGP</p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:20%;top:2960px;">Cajun coated chicken breast, fries and honey mustard</p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">Crab Cake</h3>
    <p  style="position: absolute; color:white;left:79.6%;top:2605px;">120 EGP</p>
    <p  style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p  style="position: absolute; color:white; left:60%;top:2640px;">Breaded crab cakes, tartar sauce, apple and fennel salad</p>
    <h3  style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Baby Back Ribs</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">85 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Bbq glazed baby pork ribs, coleslaw, fries</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">Smokehouse Combo</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Smoked beef brisket, rib and sausage, coleslaw, cornbread</p>
</div>
<div class="salad" id="salad">
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Ceaser Salad</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">140 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2640px;">Romaine lettuce, croutons, parmigiano, Ceaser dressing.</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">Waldorf Salad</h3>
    <p style="position: absolute; color:white;left:39%;top:2760px;">180 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2800px;">Lettuce, celery, apple, grape, walnut, waldorf sauce</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Quinoa & Avocado Salad</h3>
    <p style="position: absolute; color:white;left:38.6%;top:2920px;">180 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2960px;">Quinoa, avocado, mixed greens. Nuts, dried and fresh fruits</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">Grilled Salmon Salad</h3>
    <p style="position: absolute; color:white;left:79.6%;top:2605px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2640px;">Grilled salmon, mixed greens, capers, orange slices</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Chicken Cobb Salad</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">85 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Iceberg lettuce, cherry tomatoes, blue cheese, avocado, bacon</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">Salad Chicken</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">150 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Ceaser dressing. Optional grilled chicken breas</p>
</div>
<div class="wine" id="wine">
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Château d'Yquem 2011</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">900 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2640px;">Dessert Wine, Bordeaux, Graves, Sauternes</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">Alvear Cream NV</h3>
    <p style="position: absolute; color:white;left:39%;top:2760px;">180 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2800px;">Dessert, Fortified Wine, Andalucia</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Chateau D'yquem 1990</h3>
    <p style="position: absolute; color:white;left:38.6%;top:2920px;">1600 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2960px;">Dessert Wine, Bordeaux, Graves, Sauternes</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">La Grande Année 2007</h3>
    <p style="position: absolute; color:white;left:79.6%;top:2605px;">900 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2640px;">Rosé, Champagne</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Sine Qua Non 2012</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">1100 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Syrah, Shiraz & Blends, California</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">W.S. Keyes Winery 2006</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">600 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Merlot, California, Napa, Howell Mountain</p>
</div>
<div class="breakfast" id="breakfast">
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Egg Benedict</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">130 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2640px;">English muffin, beef, hollandaise sauce, poached egg.</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">Texas Benedict</h3>
    <p style="position: absolute; color:white;left:39%;top:2760px;">80 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2800px;">English muffin, short ribs, bbq sauce, poached egg.</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Rusty’s Omlette</h3>
    <p style="position: absolute; color:white;left:38.6%;top:2920px;">80 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2960px;">Mozzarella, cheddar, caramelized onion, black beans</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">Salmon Bagel</h3>
    <p style="position: absolute; color:white;left:79.6%;top:2605px;">90 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2640px;">Smoked salmon, cream cheese, dill, rocket, red onion</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Breakfast Bagel</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">90 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Chocolate, marshmallow, biscuit bar</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">Rusty’s Pancake</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Strawberry, white chocolate, dark chocolate, crispearls</p>
</div>
<div class="dessert" id="dessert">
<h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2600px;">Bourbon Pecan Pie</h3>
    <p style="position: absolute; color:white;left:39%;top:2605px;">160 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2640px;">Bourbon pecan stuffed pie, vanilla ice-cream</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2760px;">New York Cheesecake</h3>
    <p style="position: absolute; color:white;left:39%;top:2760px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2800px;">Cheesecake, strawberry & lime salad</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2920px;">Rusty’s ice-cream</h3>
    <p style="position: absolute; color:white;left:38.6%;top:2920px;">80 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:20%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:20%;top:2960px;">Vanilla, bourbon, cookie, chocolate ice-cream</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2600px;">S’mores</h3>
    <p style="position: absolute; color:white;left:79.6%;top:2605px;">120 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2625px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2640px;">Chocolate chip cookies, marshmallow, chocolate</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2760px;">Rocky Road</h3>
    <p style="position: absolute; color:white;left:79%;top:2760px;">90 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2785px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2800px;">Chocolate, marshmallow, biscuit bar</p>
    <h3 style="position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2920px;">Apple & Pear Crumble</h3>
    <p style="position: absolute; color:white;left:78.6%;top:2920px;">130 EGP</p>
    <p style=" position: absolute; color:#645215;font-family: Perpetua Titling MT; left:60%;top:2945px;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
    <p style="position: absolute; color:white; left:60%;top:2960px;">Caramelized pear and apple, oat crumble, vanilla ice-cream</p>
</div>
    <div class="btn-group">
<button class="button" type="submit"  onclick="starters()" style=" position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white;margin-top:-280px; margin-left:-250px;cursor: pointer;display: inline-block;">Starters</button>

<button class="button" type="submit"  onclick="mains()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:-25px;cursor: pointer;display: inline-block;">Mains</button> 

<button class="button" type="submit" onclick="salads()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:200px;cursor: pointer;display: inline-block;">Salads</button> 

<button class="button" type="submit" onclick="wine()"style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:420px;cursor: pointer;display: inline-block;">Wine</button>

<button class="button" type="submit" onclick="breakfast()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:640px;cursor: pointer;display: inline-block;">Breakfast</button>

<button class="button" type="submit" onclick="dessert()" style="position:absolute;background:#242526;border-color:#645215;border-width: thick;font-family: Perpetua Titling MT;width:160;height:50px; color:white; margin-top:-280px; margin-left:860px;cursor: pointer;display: inline-block;">Dessert</button>
</div>
   
</div>
<script>
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("wine").style.visibility = "hidden" 
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("salad").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "visible"
</script>
<script>
  function starters() {
    document.getElementById("wine").style.visibility = "hidden" 
    document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("salad").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "visible";
  }
</script>
<script>
 function mains() {
  document.getElementById("wine").style.visibility = "hidden" 
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "hidden"
  document.getElementById("salad").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "visible";
}
</script>
<script>
function salads() {
  document.getElementById("wine").style.visibility = "hidden" 
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("salad").style.visibility = "visible";
}
</script>
<script>
function wine() {
  document.getElementById("salad").style.visibility = "hidden" 
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("wine").style.visibility = "visible";
}
</script>
<script>
function breakfast() {
  document.getElementById("salad").style.visibility = "hidden" 
  document.getElementById("dessert").style.visibility = "hidden"
  document.getElementById("wine").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "hidden"
  document.getElementById("main").style.visibility = "hidden"
  document.getElementById("breakfast").style.visibility = "visible";
}
</script>
<script>
function dessert() {
  document.getElementById("salad").style.visibility = "hidden" 
  document.getElementById("breakfast").style.visibility = "hidden"
  document.getElementById("wine").style.visibility = "hidden"
  document.getElementById("starter").style.visibility = "hidden"
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
</body>
</html>
