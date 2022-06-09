
<html>
    <head>
        <style>
            table{
    font-size: 20px;
    color:black;

}
th{
background-color: black;
color : white;
}

            </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
</html>
<?php include "receptionist1.php";?>
<?php
$conn = new mysqli("localhost","root","","hotel");
$query=$query = "SELECT * FROM room";
$result = mysqli_query($conn,$query);
?>

<html>
<form method="post" action="">
<table class="table table-bordered table-hover">
<thead>
<tr>

	<th> RoomNo </th>
	<th> Availabilty </th>
	<th> Room Type </th>
  
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['RoomNo']; ?></td>
	<td><?= $row['Avalibilty']; ?></td>
	<td><?= $row['RoomTypeId']; ?></td>
  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>
</html>