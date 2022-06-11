<html>
    <head>
       <style>
           body{
               color:black;
               font-size:20px;
           }
           h3{
               color:black;
               font-size:30px;
               text-align:Center
           }
           </style>
</head>

    <?php
   $conn = new mysqli("localhost","root","","hotel");
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $FirstName=$_POST['firstname'];
  $LastName=$_POST['lastname'];
  $Phone=$_POST['phone'];
  $Email=$_POST['email'];
  

 
$sql="INSERT INTO checkout(firstname,lastname,phone,email) VALUES('$FirstName','$LastName','$Phone','$Email')";
$result = mysqli_query($conn,$sql);


    ?>

    <h3>Contact Info</h3>
            <form method ="post" action="">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="First Name">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Last Name"><br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="123-456-789">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Email"><br>
                <hr>

        


                <input type="submit">
  </form> 
  </html>