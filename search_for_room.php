<?php include "receptionist1.php";?>
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
   <html>
<?php
$conn=new mysqli("localhost","root","","hotel");
$query= "SELECT * FROM room";
$result=mysqli_query($conn,$query);

if(isset($_POST['search'])){
    $sql="SELECT * from room WHERE RoomNO='".$_POST['text']."'";
    $result = mysqli_query($conn,$sql);

   echo"<table table-bordered>

    <tr>
    
        <th> Number of Rooms </th>
        <th> Availabity </th>
        <th> Room Type </th>
        
         
    </tr>";

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

}
?>


<form style = "padding: 15px;"method="post" action="">
<label for="room_no" style="font-size: 20px;">Enter the room number</label>
<input id="room_no" name="text" type="text" style="font-size: 20px; width: 80px;">
<p><button type="submit"  style="font-size: 20px;"  name="search">Search</button></p>
</form>

</html> 