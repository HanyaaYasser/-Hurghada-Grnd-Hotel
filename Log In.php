<html>

  <form action="" method="post">
  <form>
        <h3>Login Here</h3>

        <label for="Email">Email</label>
        <input type="text" placeholder="Email or Phone" name="Ebox">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="Pbox">

        <label for="ID">ID  /  If you are a customer, do not enter the ID</label>
        <input type="password" placeholder="ID" name="IDbox">

  <br>
  <button type="submit"name="Login" >Login</button> 

</form>
<body>
  <style>
     body{
            
            background-image: url('5.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }
        form{
    height: 520px;
    width: 400px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
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
</body>
<?php
$servername="localhost";
$username="root";
$password="";
$DB="hotel";
$conn=mysqli_connect($servername,$username,$password,$DB);
if(!$conn)
{
  die("connection failed".mysqli_connect_error());
}

if(isset($_POST['Login']))
{
  $Email=$_POST['Ebox'];
  $Password=$_POST['Pbox'];
  $ID=$_POST['IDbox'];
  $query="SELECT ID,email,password from info where email = '$Email' and password = '$Password'";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($ID == '2')
  {
        ?>
		<script>
		window.location.href="receptionist.php";
		</script>
		<?php
}
elseif($ID == '')
{
  ?>
  <script>
  window.location.href="welcome.php";
  
  </script>
  <?php
}
}

?>
</html>