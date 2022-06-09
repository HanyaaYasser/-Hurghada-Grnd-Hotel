<html>
<head>

</head>

<body>

<?php

?>
</body>

<form action="ReceptionstRegister.php" method="post">
    <label for="FirstName"><b>FirstName</b></label>
    <input type="text" placeholder="Enter FirstName" name="FirstName" id="FirstName" required>
	
    <label for="LastName"><b>LastName</b></label>
    <input type="text" placeholder="Enter LastName" name="LastName" id="LastName" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
	
	<label for="PhoneNumber"><b>PhoneNumber</b></label>
    <input type="text" placeholder="Enter PhoneNumber" name="PhoneNumber" id="PhoneNumber" required><br>
	
	<input type="radio" id="Male" name="Gender" value="Male">
    <label for="Male">Male</label><br>
    <input type="radio" id="Female" name="Gender" value="Female">
    <label for="Female">Female</label><br>
    <button type="submit">Register</button>
</form>

</html>