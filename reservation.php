<style>
    body
    {
        background:#f8f5f0;
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
        color: #aa8453;
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
 padding: 10px 50px 120px 10px;
 width:35%;
 height:50%;
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
    margin-top: 70px;
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
    margin-top: 40px;
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
$sql="SELECT ID FROM info";
if(isset($_POST['Cancel']))
{
    $Pin=$_POST['pinbox'];
    if($Pin="ID")
    {
    $Email=$_POST['Ebox'];
  $DELETE="DELETE FROM reservation WHERE email='$Email'";
  
  if($conn->query($DELETE)===true)
  {
  echo "Record canceled successfully";
} 
else
 {
  echo "Error canceled record: " . $conn->error;
}
    }
}

?>
<div id="background2">
 <form action="reservation.php" method="post">
 <label for="Email">Email</label>
<input type="text" placeholder="Email" name="Ebox">

    <label for="Pin">Manger's Pin</label>
<input type="password" placeholder="Pin" name="pinbox">

 
  <br>
  <button type="submit"name="Cancel" >Cancel</button>  
</form>
</div>
<header>
<div class="menu" id="menuid">
    <a href='receptionist.php'>Receptionist</a>
     <a href="ViewAll.php">View All Users</a>
     <a href='rooms_serv.php'>Rooms Service</a>

</div>
</header>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM reservation";
$result = mysqli_query($conn,$query);
 

?>
<html>
<form method="post" action="">
  <div id="background">
<table class="table table-bordered" style="margin-left:65px;">
<thead>
<tr>

	<th>Email</th>
	<th>National_ID</th>
	<th>Room_Type</th>
	<th>Payment</th>
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
  
	<td><?= $row['email']; ?></td>
	<td><?= $row['national id']; ?></td>
	<td><?=  $row['roomtype']; ?></td>
    <td><?= $row['payment']; ?></td>
	<td><?= $row['check_in']; ?></td>
    <td><?= $row['check_out']; ?></td>
	
</tr>
<?php
 
}
?>
</table>
 
</form>

</html>