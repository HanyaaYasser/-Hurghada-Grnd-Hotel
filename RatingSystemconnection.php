<?php
$rate=$_POST['rate'];
$comment=$_POST['comment'];
$conn =new mysqli('localhost','root','','sign up/in');
if($conn->connect_error)
{
	die('Connection Failed :'.$conn->connect_error);
}
else
{
	$sql="INSERT INTO rates(Reservation_Rating,Comments) VALUES('$rate','$comment')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>