<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table, th, td {
            border: 1px solid black;
        }

</style>
</head>

<?php
$conn=new mysqli("localhost","root","","room");
$query= "SELECT * FROM room";
$result=mysqli_query($conn,$query);

if(isset($_POST['save'])){
    $sql="SELECT * from room WHERE room='".$_POST['text']."'";
    $result = mysqli_query($conn,$sql);

    echo"<table >

    <tr>
    
        <th> Number of Rooms</th>
        <th>room</th>
        
         
    </tr>";

    while($row = mysqli_fetch_array($result)) 
{
    ?>
    <tr>

    <td><?= $row['Number of Room']; ?></td>
	<td><?= $row['room']; ?></td>
	
    </tr>
    <?php
}

}
?>
<form method="post" action="">
Enter Room
<input type="text" name="text">
 
<p><button type="submit" class="btn btn-success" name="save">Search</button></p>

</html> 
