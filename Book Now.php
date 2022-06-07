<html>
<head>
<style>
* {
  box-sizing: border-box;

}

body {
 background-image: url(1.JPG);
 
  background-size: cover;

}

.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: white;
  color: black;
}


.content {
  background-color:white;
  padding: 10px;
  height: 950px; 
}
.rooms {
  border: 10px solid transparent;
  margin-bottom: 25px;
  width: 100%; 
 
}
.modal-bg
            {
                display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);

            }
            .modal-bg.show
            {
                opacity: 1;
            }
            .modal
            {
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px 50px;
            }
            .modal-btn
            {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
</style>
</head>
<body>

<div class="navbar">
  <a href="Home.php">Home</a>
  <a href="Reservation.php">Book Now</a>
  <a href="Conctact us.php">Contact Us</a>
</div>

<div class="content">
    <div class="row">
        <div class="rooms">
          <p>room1</p><br>
          <img src="1.jpg"  width="200"  height="200">
           <button class="modal-btn"id="MyBtn">Book now</button>
        </div>
        <div class="rooms">
          <p>room2</p><br>
          <img src="3.jpg"  width="200" 
          height="200">
           <button class="modal-btn"id="MyBtn">Book now</button>
        </div>
        <div class="rooms">
          <p>room3</p><br>
          <img src="4.jpg" width="200" 
          height="200">
           <button class="modal-btn"id="MyBtn">Book now</button>
        </div>
      </div>
    </div>
</div>
<div class="modal-bg" id="modal-bg">

    <div class="modal">
        <form action="test.php" method="post">
          Room1:<input type="radio" id="room1" name="room" value="room1">
          Room2: <input type="radio" id="room2" name="room" value="room2">
          Room3: <input type="radio" id="room3" name="room" value="room3"></br>
             <input type="text" placeholder="Email" name="Email" id="Email" required></br>
               <input type="text" placeholder="Number Of Rooms" name="NumberOfRooms" id="NumberOfRooms" required></br>
               <select id="cars" name="car"> 
                 <option value="0">Day-Use</option> 
                 <option value="1">1-7 Days</option> 
                 <option value="2">Long Stay</option> 
                 <option value="3">Vacation</option> 
                 <option value="4">Others</option> 
                </select>
                <button type="submit">Check in</button>
            </form>
            
        
        <button id="close">Cancel</button>
    </div>
    <script>
        var open=document.getElementById("MyBtn");
        var close=document.getElementById("close");
        var modalbg=document.getElementById("modal-bg");
        
open.onclick = function() 
{
modalbg.style.display = "block";
}

close.onclick = function() 
{
    modalbg.style.display = "none";
}    
 </script>

</body>

</html>
