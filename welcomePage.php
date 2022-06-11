<html>
<head>
     <title> Hurghada GRND Hotel </title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="main">
  
        <div>
           <center> <span class="fa fa-star checked"></span>
<span class="fa fa-star checked" ></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</center>
            <h2> Luxury Hotel and Best Resort </h2>
            <h1> Enjoy A Luxury Experience </h1>
            <!-- <button> <a href="log In.php" class="log_button" > <span> <h3> Log In </h3></span></a> </button> -->
            <a href="log In.php" class="log_button" ><h3 style="margin-left:280px;"> Log In </h3></a>
            <a href="registration.php" class="sign_button" ><h3 style="margin-left:280px;"> Sign Up </h3></a>
        </div>
  

        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a href="index.html">
                <div class="logo">
                    <img src="images/" class="logo-img" alt="">
                </div>
            </a>
        </div>

</div>


</html>

<style>

.main {
  
  width: 100%;
  min-height: 100vh;
  display:flex;
  align-items: center;
  background-image: url(7.jpg);
  height: 100%;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  
  
}

.main h2{
      font-family: "Gilda Display", serif;
      font-size: 15px;
      font-weight: 100px;
      text-transform: uppercase;
      letter-spacing: 6px;
      color: rgb(255, 255, 255);
      text-align: center;
      margin-bottom: 20px;
      margin-top: 50px;
      animation-delay: 0.4s;
      margin: 0px 0px 20px;
      margin-left: 20px;
  }
  
  .main h1 {
   
      margin-bottom: 20px;
      margin-top: 8px;
      font-family: "Gilda Display", serif;
      font-size: 60px;
      text-transform: uppercase;
      line-height: 1.35em;
      animation-delay: 0.6s;
      color:rgb(255, 255, 255);
      font-weight: 400;
      letter-spacing: 15px;
     text-align: center;
     margin-left: 70px;
   
  }

  .checked {
      color: orange;
      
  }
  .fa-star {
      /* text-align: center; */
      margin-bottom: 30px;
      margin-left: 30px;
  }


  .log_button  {
      color: white;
      border-style: solid;
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      display: inline-block;
      padding: 0.9375em 2.1875em;
      letter-spacing: 1px;
      /* border-radius: 15px; */
      margin-bottom: 40px;
      align-items: center ;
      text-transform: uppercase;
      cursor: pointer;
      margin-left: 600px;
      width:700px;
  
  }
  .log_button span {
      cursor: pointer;
      display: inline-block;
      transition: 0.5s;
   }
  
  .log_button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .log_button:hover span {
    padding-right: 25px;
  }
  
  .log_button:hover span:after {
    opacity: 1;
    right: 0;
  }

  .sign_button  {
      color: white;
      border-style: solid;
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      display: inline-block;
      padding: 0.9375em 2.1875em;
      letter-spacing: 1px;
      /* border-radius: 15px; */
      margin-bottom: 40px;
      align-items: center ;
      text-transform: uppercase;
      cursor: pointer;
      margin-left: 600px;
      width:700px;
  
  }
  .sign_button span {
      cursor: pointer;
      display: inline-block;
      transition: 0.5s;
   }
  
  .sign_button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .sign_button:hover span {
    padding-right: 25px;
  }
  
  .sign_button:hover span:after {
    opacity: 1;
    right: 0;
  }
  
  </style>
