<?php

include "connection.php";
include "function.php";

$Email=$password='';
//errors array
$errors = array('email'=>'', 'password'=>'');
if($_SERVER['REQUEST_METHOD'] == "POST")//bashof el data el bakhodha men el database zay el data el badkhalha
{
    //something was posted
    $Email=$_POST['email'];
    $password=$_POST['password'];
    

  
    
    if(!array_filter($errors))
    {
        //read from database
        $query = "SELECT * FROM info WHERE email = '$Email' limit 1";

        $result = mysqli_query($con, $query);
        
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['role']=='client')
                {
                    if($user_data['password'] == $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location:welcome.php");
                        die;
                    }
                }
                else if($user_data['role']=='receptionist')
                {
                    if($user_data['password'] == $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: receptionist.php");
                        die;
                    }
                }
                else if($user_data['role']=='quality control')
                {
                if($user_data['password'] == $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: GuestActDeact.php");
                    die;
                }
              }
            }
        }
    }

    $errors['password'] = "*Wrong Email or password!";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="CSS/authenticate.css">
        <!-- links for the font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body class="background">
        <div class="box">

            <form name="" method="post" autocomplete="off">
            <h3>Login Here</h3>
            <p>Suggestions: <span id="txtHint"></span></p>
            <label for="Email">Email</label>
                <input class="textbox" type="text" name="email" placeholder="Email" onkeyup="showHint(this.value)" value="<?php echo $Email ?>" required><br>
                <span class="error"><?php echo $errors['email']; ?></span><br>


                <label for="password">Password</label>
                <input class="textbox" type="password" name="password" placeholder="Password" value="<?php echo $password ?>" required><br>
                <span class="error"><?php echo $errors['password']; ?></span><br>

                <button type="submit">Login</button>

               <p style="color: white; text-align: center;">Create a <a href="signup.php">new account</a></p>

            </form>
        </div>
    </body>
    <script>
function showHint(str)
{
    if(str.length ==0)
    {
        document.getElementById("txtHint").innerHTML="";
        return;
    }
    else{
        var xmlhttp= new XMLHttpRequest();// request object
        xmlhttp.onreadystatechange=function() // onreadystatechange defines a function to be called when the readyState property changes
        {
            if(this.readyState==4 && this.status==200)  // readyState: status of the request. 4 means en el request finished and response is ready. status: return status no. of the request.
            {
                document.getElementById("txtHint").innerHTML=this.responseText; // get the response data as a string 
            }
        };
        xmlhttp.open("GET","gethint.php?q="+str,true) // specifies the request (method, url, asynchronous:true). gethint.php el php file checks an array of names and returns corresponding names
        xmlhttp.send(); // sends request to server
    }

}
    </script>
</html>
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
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 30px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


input:required {
  border-color: #FF0000;
  border-width: 3px;
}

.error 
{
  color: #FF0000;
}
  </style>
