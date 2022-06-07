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
$conn = new mysqli("localhost","root","","room");
$query = "SELECT * FROM room";
$result= mysqli_query($conn,$query);
if(isset($_POST['save'])){
	$checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    $sql="DELETE FROM user WHERE Id='".$del_id."'";
	mysqli_query($conn,$sql);
    $message = "Data deleted successfully !";
    echo ($message);
}
}
?>

<form method ="post" action= "">
    <table class ="table table-bordered">
        <thead>
            <tr>
                <th>Number of Rooms</th>
                <th>Rooms</th>
                <th>Delete</th>
    </tr>
    </thead>

    <?php
    while($row=mysqli_fetch_array($result))
    {
      ?>
        <tr>
            <td><?=$row['Number of Room'];?></td>
            <td><?=$row['room'];?></td>
            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["Id"]; ?>"></td>

    </tr>
    <?php
    }
    ?>
    </table>
    <p><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
</form>
</body>
</html>