<?php
$Room=$_POST['room'];
$Email=$_POST['Email'];
$NumberOfRooms=$_POST['NumberOfRooms'];
$TimeOfStay=$_POST['car'];

$conn =new mysqli('localhost','root','','sign up/in');
if($conn->connect_error)
{
	die('Connection Failed :'.$conn->connect_error);
}
else
{
	$sql="INSERT INTO reservation(Email,Room,NumberOfRooms,TimeOfStay) VALUES('$Email','$Room','$NumberOfRooms','$TimeOfStay')";
}
if ($conn->query($sql) === TRUE) {
  header("Location:RatingSystem.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>