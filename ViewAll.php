<style>
table, th, td {
  border: 1px solid black;
}
body{
    background:#f8f5f0;
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
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM info";
$result = mysqli_query($conn,$query);
 

?>
<html>
<header>
<div class="menu" id="menuid">
    <a href='receptionist.php'>Receptionist</a>
     <a href="ViewAll.php">View All Users</a>
     <a href='reservation.php'>Reservation</a>

</div>
</header>
<form method="post" action="">
  <div id="background">
<table class="table table-bordered" style="margin-top:50px; margin-left:450px;">
<thead>
<tr>

	<th>ID</th>
	<th>First_Name</th>
	<th>Last_Name</th>
	<th>Email</th>
    <th>Password</th>
    <th>Confirm_Password</th>
    <th>National_ID</th>
    <th>Gender</th>
    <th>Birthdate</th>
    <th>Image</th>
  
	 
</tr>
</thead>
</div>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['ID']; ?></td>
	<td><?= $row['firstname']; ?></td>
	<td><?=  $row['lastname']; ?></td>
	<td><?= $row['email']; ?></td>
    <td><?= $row['password']; ?></td>
	<td><?= $row['confirm password']; ?></td>
	<td><?=  $row['national id']; ?></td>
	<td><?= $row['gender']; ?></td>
    <td><?= $row['birthdate']; ?></td>
	<td><?= $row['img']; ?></td>
  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

			</div>

</html>