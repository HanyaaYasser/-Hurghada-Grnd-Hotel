
<html>
	
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
			<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
 include "QCNavBar.php";

?>
	</head>
	<div class="container">
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
    <th>Rating ID</th>
    <th>Rating</th>
	<th>Comments</th>
    <th>Room ID</th>
 
 
</tr>
</thead>
<?php
 $conn = new mysqli("localhost","root" ,"" ,"sign up/in" );
 $query = "SELECT * FROM rrates";
 $result = mysqli_query($conn,$query);
  
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
<td><?= $row['ID']; ?></td>
<td><?= $row['Room_Rating']; ?></td>
<td><?= $row['Comment']; ?></td>
<td><?= $row['Room_ID']; ?></td>

  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>
</div>

</body>
</html>
</html>