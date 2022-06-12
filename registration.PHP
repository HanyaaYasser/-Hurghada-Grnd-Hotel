<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
 <title>Sign up</title>
<head>
    <title>SignUp</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
    <style>
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
            
            background-image: url('5.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }

form{
    height: 600px;
    width: 400px;
    position: fixed;
    background-color: rgba(255,255,255,0.13);
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    overflow:scroll;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>

</head>
<body>
    <style>.error{
        color:red;
    }</style>


    <form name="" method="post" action="welcome.php" autocomplete="off" >
        <h3>Sign Up</h3>


        <label for="Name">Name</label>
        <input type="text" placeholder="Name" id="Name" name="Name" required="">
        <span class="error">* </span>

        <label for="username">UserName</label>
        <input type="text" placeholder="username" id="username" name="username">

        <label for="National">National ID</label>
        <input type="text" placeholder="National ID" id="National_ID" name="National_ID">

        <label for="Email">Email</label>
        <input type="text" placeholder="Email" id="Email" name="Email" required="">
        <span class="error">* </span>
        
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required="">
        <span class="error">*</span>

        <label for="Confrim">Confrim Password</label>
        <input type="password" placeholder="Confrim Password" id="Confrim_Password" name="Confirm_Password" required="">
        <span class="error">* </span>

        <label for="Gender">Gender</label>
        <select name="Gender" id="gender"  style="background-color:black">
        <span class="error">*</span>

<option selected hidden value="" >Please Select</option>
<option  value="0" >Other   </option>
<option  value="1">Male  </option>
<option  value="2">Female  </option>
</select>

<label for="Select image" >Image</label>
<input type="file" name="image" >

        <button type="submit" id="submit">Submit</button> 
    </form>
</body>

<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("Confrim_Password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    Confrim_Password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
Confrim_Password.onkeyup = validatePassword;
</script>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$DB = "hotel";
$conn=mysqli_connect($servername,$username,$password,$DB);

if(!$conn)
{
  die("connection failed".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $Add="INSERT INTO rooms (room_num, roomtype, check_in,check_out) VALUES('".$_POST["room-numbox"]."','".$_POST["room-typebox"]."','','')";
    if($conn->query($Add)===true)
    {
        echo 'new record inserted';
    }
    else 
    {
      echo "Error Adding record: " . $conn->error;
    }
}
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con)
{
    die(mysqli_connect_error($con));
}

if(isset($_POST['submit']))
{
    $insert="INSERT INTO info (firstname,username,email,password,confirm_password,national id,gender,img) VALUES('".$_POST["Name"]."','".$_POST["username"]."','".$_POST["Email"]."','".$_POST["password"]."','".$_POST["Confirm_Password"]."','".$_POST["National_ID"]."','".$_POST["Gender"]."','".$_POST["image"]."')";
    if($con->query($insert)===true)
    {
        echo 'new record inserted';
    }
    else 
    {
        die("error".mysqli_error($con));
    }
}

?>
