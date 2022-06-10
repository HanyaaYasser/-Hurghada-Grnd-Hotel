<html>
	<div class="fullpage1" id="1">
	<head>
		<style>
              body{
        background-image: url('La-Reserva.jpg');
        background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
    }
			.topnav{
                backdrop-filter: blur(10px);
        overflow:hidden;
			}
			.topnav a{
                float:right;
        color: white;
        text-align: center;
        padding: 14px 14px;
        font-size: 25px;
			}
			.topnav a:hover{
                background-color:#2F2F2F;
        color: white;
			}
            .topnav a:active{
                background-color: #2F2F2F;
    color: white;
            }
		</style>
	</head>
	<body>		
		<div class="topnav">
			<?php
				if(!empty($_SESSION['ID'])) 
				{

					echo"<a href='rooms_serv.php'>Rooms Service</a>";
                    echo"<a href='ViewAll.php'>View All Users</a>";
					echo"<a href='search1.php'>Search</a>";
					echo"<a href='reservation.php'>Reservation</a>";
				}
				else
				{
					echo"<a href='rooms_serv.php'>Rooms Service</a>";
					echo"<a href='ViewAll.php'>View All Users</a>";
					echo"<a href='search1.php'>Search</a>";
					echo"<a href='reservation.php'>Reservation</a>";
				}
				?>
		</div>
		<br><br>
	</body>
			</div>
</html>