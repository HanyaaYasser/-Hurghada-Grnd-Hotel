<!DOCTYPE html>
<html>
<title>Signup</title>
	<link rel="stylesheet" href="CSS/authenticate.css">
	<!-- links for the font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- link for the ajax -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<head>
<title>Registration Form</title>
<link rel  = "stylesheet" href = "style.css">
<style>
  

   body{
            
            background-image: url('5.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }
   form{
    height: 700px;
    width: 500px;
    position: absolute;
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
    margin-top: 5px;
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
    margin-top: 5px;
    font-size: 14px;
    font-weight: 300;
}
.dropbtn {
	display: block;
    height: 50px;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 5px;
    font-size: 14px;
    font-weight: 300;
	width: 100%;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
	width: 100%;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(255,255,255,0.07);;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	width: 100%;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	width: 100%;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn { color: white; }
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 10px;
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
		<div class = "signup">   
		<form name="signup-form" method="post" enctype="multipart/form-data">
			<div class="signup">Signup</div>

			<input type="text" name="name" id="name" class="textbox" placeholder="Full Name" onkeyup="Name()" 
			value="<?php if($errors['name'] != true) echo $name ?>" required><br>
			<span id="nameMsg"></span><br>

			<input class="textbox" type="text" name="username" id="username" placeholder="Username" onkeyup="userName()" 
			value="<?php if($errors['username'] != true) echo $username ?>" required><br>
			<span id="usernameMsg"></span><br>

			<input class="textbox" type="password" name="password" id="password" placeholder="Password" onkeyup="Password()" 
			value="<?php if($errors['password'] != true) echo $password ?>" required><br>
			<span id="passMsg"></span><br>

			<input class="textbox" type="password" name="conPass" placeholder="Confirm Password"  
			value="<?php if($errors['conPass'] == false) echo $conPass ?>" required><br><br>

			<input class="textbox" type="text" name="email" id="email" placeholder="Email" onkeyup="Mail()" 
			value="<?php if($errors['email'] != true) echo $email ?>" required><br>
			<span id="mailMsg"></span><br>

			<input class="textbox" type="date" name="user_birth" max="2004-01-01"
			value="<?php echo $user_birth ?>" required><br>
			<span></span><br>


			<label style="color: white" for="gender">Male</label>
			<input type="radio" name="gender" value="male" class="radiobutton" <?php if($gender == 'male') echo 'checked' ?>>

			<label style="color: white" for="gender">Female</label>
			<input type="radio" name="gender" value="female" class="radiobutton" <?php if($gender == 'female') echo 'checked' ?> required><br><br>

			<div style="display: flex">
				<label style="color: white; margin-right:10px;" for="image">Picture:</label>
				<input type="file" name="image" id="image" class="form-image" required><br>
			</div>
			<span><?php if($errors['image'] != false) echo '<span class="error-text">
			<span class="material-icons" style="font-size: 18px; vertical-align: middle;"> error_outline </span>' . $errors['image'] . '</span>' ?></span><br>
			
			<div style="text-align: center"><input class="button" type="submit" name="signup" value="Signup"></div>
		</form>
		</div>
	</body>
</html>
<?php
include_once("includes/connection.php");

$name=$username=$password=$conPass=$user_birth=$gender=$image=$email='';

$errors = array(
'name'=> false,
'username'=> false,
'password'=> false,
'conPass'=> false,
'email'=> false,
'user_birth'=> false,
'gender'=> false,
'image'=> false);

if(isset($_POST["signup"]))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$conPass=$_POST['confirm password'];
	$email=$_POST['email'];
	$user_birth=$_POST['birthdate'];
	$gender = $_POST['gender'];
	$imageName= $_FILES['img']['firstname'];
	$imageTmpName= $_FILES['image']['tmp_name'];
	$imageSize= $_FILES['image']['size'];
	$imageError= $_FILES['image']['error'];
	// $imageType= $_FILES['image']['type'];
	
	if (!preg_match ('/^[a-zA-Z\s]+$/', $name )){ 
		$errors['firstname'] = true;
	}

	$usernameQuery = "SELECT * FROM info WHERE email = '$Email'";
	$usernameResult = mysqli_query($con, $usernameQuery);
	$user_rows = mysqli_num_rows($usernameResult);
	if($user_rows > 0)
	{
		$errors['lastname'] = true;
	}
	if(strlen($username) < 5){
		$errors['lastname'] = true;
	}

	$passwordQuery = "SELECT * FROM info WHERE password = '$password'";
	$passwordResult = mysqli_query($con, $passwordQuery);
	$passwordRow = mysqli_num_rows($passwordResult);
	if($passwordRow > 0 || strlen($password) < 5){
		$errors['password'] = true;
		if($conPass == $password){
			$errors['confirm password'] = true;
		}
	}

	if($conPass != $password){
		$errors['confirm password'] = true;
	}

	if(empty($email))
	{
		$errors['email'] = true;
	}
	
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errors['email'] = true;
	}
	$query = mysqli_query($con, "SELECT * FROM info WHERE email = '$email'");
	if(mysqli_num_rows($query) > 0)
	{
		$errors['email'] = true;
	}

	if(empty($imageName)){
		$errors['img'] = "please select an image for your profile picture";
	}
	else{
		$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

		// to divide the file name and extension (ex: image.jpeg  -->  image & jpeg)
		$fileExt = explode('.', $imageName);
		// to make it lower case of the extension
		$fileActualExt = strtolower(end($fileExt));
		$allow = array('jpg', 'jpeg', 'png');
		if(in_array($fileActualExt, $allow)){
			if(!$imageError === 0){
				$errors['img'] = "there was an error uploading your image";
			}
			else if($imageSize > 500000){
				$errors['img'] = "the image you selected is too big";
			}
		}
		else{
			$errors['img'] = "this file format is not allowed, please select jpeg or png file";
		}
	}

	if(!array_filter($errors))
	{
		$query = "INSERT INTO info (firstname, lastname, password, email, birthdate, gender, `img`) 
		values ('$name','$username','$password','$email', '$user_birth','$gender', '$image')";

		mysqli_query($con, $query);            

		header("Location: login.php");
		die;
	}
}
?>

<body class="background">
	<div class="box">
		<form name="signup-form" method="post" enctype="multipart/form-data">
			<div class="signup">Signup</div>

			<input type="text" name="firstname" id="firstname" class="textbox" placeholder="First Name" onkeyup="Name()" 
			value="<?php if($errors['firstname'] != true) echo $name ?>" required><br>
			<span id="firstnameMsg"></span><br>

			<input class="textbox" type="text" name="lastname" id="lastname" placeholder="Last Name" onkeyup="userName()" 
			value="<?php if($errors['lastname'] != true) echo $username ?>" required><br>
			<span id="lastnameMsg"></span><br>

			<input class="textbox" type="password" name="password" id="password" placeholder="Password" onkeyup="Password()" 
			value="<?php if($errors['password'] != true) echo $password ?>" required><br>
			<span id="passMsg"></span><br>

			<input class="textbox" type="password" name="confirm password" placeholder="Confirm Password"  
			value="<?php if($errors['confirm password'] == false) echo $conPass ?>" required><br><br>
			<span id="confirm passwordMsg"></span><br>

			<input class="textbox" type="text" name="email" id="email" placeholder="Email" onkeyup="Mail()" 
			value="<?php if($errors['email'] != true) echo $email ?>" required><br>
			<span id="mailMsg"></span><br>

			<input class="textbox" type="date" name="birthdate" max="2004-01-01"
			value="<?php echo $user_birth ?>" required><br>
			<span></span><br>


			<label style="color: white" for="gender">Male</label>
			<input type="radio" name="gender" value="male" class="radiobutton" <?php if($gender == 'male') echo 'checked' ?>>

			<label style="color: white" for="gender">Female</label>
			<input type="radio" name="gender" value="female" class="radiobutton" <?php if($gender == 'female') echo 'checked' ?> required><br><br>

			<div style="display: flex">
				<label style="color: white; margin-right:10px;" for="img">Picture:</label>
				<input type="file" name="img" id="img" class="form-image" required><br>
			</div>
			<span><?php if($errors['img'] != false) echo '<span class="error-text">
			<span class="material-icons" style="font-size: 18px; vertical-align: middle;"> error_outline </span>' . $errors['image'] . '</span>' ?></span><br>
			
			<div style="text-align: center"><input class="button" type="submit" name="signup" value="Signup"></div>
		</form>
		<p style="color: white; text-align: center;"> Already have an account? <a href="Log In.php">Login</a></p>
	</div>
</body>

<script>
	
	function Name()
	{
		jQuery.ajax(
		{
			url:"includes/check.php",
			data:'firstname=' + $("#firstname").val(),
			type: "POST",
			success: function(data)
			{
				$("#firstnameMsg").html(data);
			}
		});
	}

	function userName()
	{
		jQuery.ajax(
		{
			url:"includes/check.php",
			data:'lastname=' + $("#lastname").val(),
			type: "POST",
			success: function(data)
			{
				$("#lastnameMsg").html(data);
			}
		});
	}

	function Password()
	{
		jQuery.ajax(
		{
			url:"includes/check.php",
			data:'password=' + $("#password").val(),
			type: "POST",
			success: function(data)
			{
				$("#passMsg").html(data);
			}
		});
	}

	function conPass()
	{
		jQuery.ajax(
		{
			url:"includes/check.php",
			data:'confirm password=' + $("#confirm password").val(),
			type: "POST",
			success: function(data)
			{
				$("#confirm passwordMsg").html(data);
			}
		});
	}

	function Mail()
	{
		jQuery.ajax(
		{
			url:"includes/check.php",
			data:'email=' +$("#email").val(),
			type: "POST",
			success: function(data)
			{
				$("#mailMsg").html(data);
			}
		});
	}
</script>
</html>
