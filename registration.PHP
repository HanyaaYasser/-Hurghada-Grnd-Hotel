<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel  = "stylesheet" href = "style.css">
<style>
   h1{
	   color : white; 
	   text-align : center;
   }
   input{
	   color : black; 
   }
   body{
	   margin: 0;
	   padding: 0;
	   font-style: sans-serif;
	   background-image: url('bgpic.jpg');
	   background-size: cover;
	   background-position: center;
	   background-repeat: no-repeat;
   }
   form{
	   border-radius : 10px;
	   backdrop-filter: blur(10px);
	   box-shadow: 0 0 40px rgba(8,7,16,0.6);
	   padding: 20px;
	   text-align : center;
	   color : white;
	   width: 300px;
	   background: #00000000;
	   margin: 8% auto 0;
   }
   label{
	   display: block;
	   margin-top: 5px;
	   margin-bottom: 5px;
	   font-size: 12px;
	   font-weight: 500;
   }
   form h3{
	   font-size: 26px;
	   font-weight: 500;
	   line-height: 42px;
	   text-align: center;
   }
</style>
</head>
	<body>
		<div class = "signup">
		<form>
		<h3>Register Here</h3> </br></br>
		<input type = "FName" class = "input" placeholder = "first name"></br></br>
		<input type = "LName" class = "input" placeholder = "last name"></br></br>
		<input type = "NID" class = "input" placeholder = "national id"></br></br>
		Gender
		<select id = "gender" name = "gender">
			<option value = "0">select your gender</option>
			<option value = "1">Female</option>
		    <option value = "2">Male</option>
		</select> </br></br>
		<label for = "birthday">Birthdate: </label>
		<input type = "date" id = "birthday" name ="birthday"></br></br>
		<input type = "file" id = "myFile" name = "filename"></br></br>
        <input type = "submit" id = "submit">
        </form>	
		</br></br></br>
		</div>
	</body>
</html>
 
