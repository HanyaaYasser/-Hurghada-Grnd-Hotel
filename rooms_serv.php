<style>
    body
    {
        background-image: url('La-Reserva-Tulum-Firepit-Sunset.jpg');
        background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
    }
table, th, td {
  border: 2px solid #222;
  color:#222;
  font-weight: 900;
  margin-top:150px;
  margin-left:90px;
}
  .menu{
                backdrop-filter: blur(10px);
        overflow:hidden;
			}
			.menu a{
                float:right;
        color: white;
        text-align: center;
        padding: 14px 14px;
        font-size: 25px;
			}
			.menu a:hover{
                background-color:#222;
        color: #aa8453;
			}
            .menu a:active{
                background-color: #222;
    color: #aa8453;
            }
            #background{
    position: absolute;
    transform: translate(-50%,-50%);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
 padding: 0.02px 50px 120px 10px;
 width:25%;
  background:blur(20px);
  margin-top:430px;
  margin-left:450px;
  background-attachment: relative;
  
}
#background2{
    position: absolute;
    transform: translate(-50%,-50%);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
 padding: 0.02px 50px 120px 10px;
 height:60%;
 width:25%;
  background:blur(20px);
  margin-top:500px;
  margin-left:1400px;
  background-attachment: absolute;
}
label{
    display: block;
    margin-top: 90px;
    margin-left: 35%;
    font-size: 30px;
    font-weight: 900;
    padding: 0 10px;
}
::placeholder{
    color: #e5e5e5;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    margin-top: 20px;
    margin-left: 5%;
    font-size: 16px;
    font-weight: 550;
}
button{
    margin-top: 50px;
    margin-left: 5%;
    width: 100%;
    background-color: #222;
    color: #aa8453;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "hotel";
$conn=mysqli_connect($servername,$username,$password,$DB);
if(!$conn)
{
  die("connection failed".mysqli_connect_error());
}
if(isset($_POST['Delete']))
{
  $roomnum=$_POST['room-numbox'];
  $roomtype=$_POST['room-typebox'];
  $DELETE="DELETE FROM rooms WHERE room_num='$roomnum'";
  if($conn->query($DELETE)===true)
  {
  echo "Record deleted successfully";
} 
else
 {
  echo "Error deleting record: " . $conn->error;
}
}
if(isset($_POST['Edit']))
{
  $roomnum=$_POST['room-numbox'];
  $roomtype=$_POST['room-typebox'];
  $EDIT="UPDATE  rooms set roomtype='$roomtype' WHERE room_num='$roomnum'";
  if($conn->query($EDIT)===true)
  {
  echo "Record updated successfully";
} 
else
 {
  echo "Error updating record: " . $conn->error;
}
}

?>
<div id="background2">
 <form action="rooms_serv.php" method="post">
    <label for="room num">Room Number</label>
<input type="text" placeholder="room_num" name="room-numbox">
  <label for="room type">Room Type</label>
 <input type="text" placeholder="room_type" name="room-typebox">
  <br>
  <button type="submit"name="Edit" >Edit</button>
  <button type="submit"name="Delete" >Delete</button>  
</form>
</div>
<header>
<div class="menu" id="menuid">
    <a href='receptionist.php'>Receptionist</a>
     <a href="Info.php">User Information</a>
     <a href="contact.php"> Contact us </a>
</div>
</header>
</html>
<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM rooms";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
  <div id="background">
<table class="table table-bordered">
<thead>
<tr>

	<th>Room_Num</th>
	<th>Room_Type</th>
	<th>Check_In</th>
	<th>Check_Out</th>
  
	 
</tr>
</thead>
</div>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['room_num']; ?></td>
	<td><?= $row['roomtype']; ?></td>
	<td><?=  $row['check_in']; ?></td>
	<td><?= $row['check_out']; ?></td>
  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>