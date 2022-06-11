<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php

session_start();
include "QCNavBar.php";

$conn = new mysqli('localhost','root','','sign up/in');


$query = "SELECT * FROM register WHERE Role='Receptionist'";
$result = mysqli_query($conn,$query);
if(isset($_POST['deactivate']))
{
	$promote_ID=$_POST['check'];
	$Promoted_ID=implode(',',$promote_ID);
	
	$sql="UPDATE register set Activation='Not-Activated' WHERE ID='".$Promoted_ID."'";
	mysqli_query($conn,$sql);
}
if(isset($_POST['activate']))
{
	$promote_ID=$_POST['check'];
	$Promoted_ID=implode(',',$promote_ID);
	
	$sql="UPDATE register set Activation='Activated' WHERE ID='".$Promoted_ID."'";
	mysqli_query($conn,$sql);
}

?>
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<div class="container">
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th>First Name</th>
	<th> Gender</th>
	<th>Email</th>
	<th>PhoneNumber</th>
    <th>Role</th>
	<th>Activation</th>
    <th>set/unset</th>
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
    <td><?= $row['FirstName']; ?></td>
	<td><?= $row['Gender']; ?></td>
	<td><?=  $row['Email']; ?></td>
	<td><?= $row['PhoneNumber']; ?></td>
	<td><?= $row['Role']; ?></td>
    <td><?= $row['Activation']; ?></td>

    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["ID"]; ?>"></td>
	 
</tr>
<?php
 
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="deactivate">deactivate</button></p>
<p><button type="submit" class="btn btn-success" name="activate">activate</button></p>
</form>
</div>

</body>
</html>
</html>