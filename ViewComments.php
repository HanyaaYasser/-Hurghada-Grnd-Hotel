
<html>
	<head>
			<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php

?>
	</head>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th>Comments</th>
 
</tr>
</thead>
<?php
 $conn = new mysqli("localhost","root" ,"" ,"sign up/in" );
 $query = "SELECT Comments FROM rates";
 $result = mysqli_query($conn,$query);
  
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['Comments']; ?></td>

  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>