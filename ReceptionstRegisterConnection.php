<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Gender=$_POST['Gender'];
$Email=$_POST['email'];
$Password=$_POST['psw'];
$PhoneNumber=$_POST['PhoneNumber'];

$conn =new mysqli('localhost','root','','sign up/in');
if($conn->connect_error)
{
	die('Connection Failed :'.$conn->connect_error);
}
else
{
	$sql="INSERT INTO register(FirstName,LastName,Gender,Email,Password,PhoneNumber,Role) VALUES('$FirstName','$LastName','$Gender','$Email','$Password','$PhoneNumber','Receptionist')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>