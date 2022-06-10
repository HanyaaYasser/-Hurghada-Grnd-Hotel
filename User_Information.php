<style>
table, th, td {
  border: 1px solid black;
}
.topnav{
                backdrop-filter: blur(10px);
        overflow:hidden;
			}
			.topnav a{
                float:right;
        color: white;
        text-align: center;
        padding: 14px 14px;
        font-size: 25px;
			}
			.topnav a:hover{
                background-color:#2F2F2F;
        color: white;
			}
            .topnav a:active{
                background-color: #2F2F2F;
    color: white;
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
<form method="post" action="">
  <div id="background">
<table class="table table-bordered">
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
<body>		
		<div class="topnav">
			<?php
				if(!empty($_SESSION['ID'])) 
				{
					echo "Welcome ".$_SESSION['Name'];
					echo"<a href='rooms_serv.php'>Rooms Service</a>";
					echo"<a href='receptionist.php'>Receptionist</a>";
                    echo"<a href='ViewAll.php'>View All Users</a>";
				}
				else
				{
					echo"<a href='receptionist.php'>Receptionist</a>";
					echo"<a href='rooms_serv.php'>Rooms Service</a>";
					echo"<a href='ViewAll.php'>View All Users</a>";
				}
				?>
		</div>
		<br><br>
	</body>
			</div>
            
</html>