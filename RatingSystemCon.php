<?php
$rate=$_POST['rate'];
$comment=$_POST['comment'];
$Room_ID=$_POST['rooms'];
$conn =new mysqli('localhost','root','','sign up/in');
if($conn->connect_error)
{
	die('Connection Failed :'.$conn->connect_error);
}
else
{
	$sql="INSERT INTO `rrates` (`ID`, `Room_Rating`, `Comment`, `Room_ID`) VALUES (NULL, '$rate', '$comment', '$Room_ID')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>