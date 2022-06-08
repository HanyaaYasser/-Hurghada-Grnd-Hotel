<?php 
$servername = "localhost";
$username = "root";
$password = ""; //No password
$dbname = "hotelfac";
//session_start();
//create connection

$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM hotelfac";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
?>
<html>
<form method = "post" action = "">
  <div id = "background">
<thead> 
<tr>
	<th>pickupdrop</th>
	<th>parkingspace</th>
	<th>roomservice</th>
	<th>swimmingpool</th>
	<th>fibreinternet</th>
	<th>breakfast</th>
</tr>
</thead>
</div>
</html>
<?php
while($row = mysqli_fetch_array($result)){
	?>
<tr>
	<td><?$row['pickupdrop'];?></td>
	<td><?$row['parkingspace'];?></td>
	<td><?$row['roomservice'];?></td>
	<td><?$row['swimmingpool'];?></td>
	<td><?$row['fibreinternet'];?></td>
	<td><?$row['breakfast'];?></td>
</tr>
<?php
}
?>