<html>
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
					echo "Welcome ".$_SESSION['Name'];
					echo"<a href='rooms_serv.php'>Rooms Service</a>";
					echo"<a href='receptionist.php'>Receptionist</a>";
					echo"<a href='Add.php'>Add User</a>";
					echo"<a href='Delete.php'>'Delete User</a>";
                    echo"<a href='Update2.php'>Update User</a>";
                    echo"<a href='ViewAll.php'>View All Users</a>";
                    echo"<a href='Search.php'>Search</a>";
				}
				else
				{
					echo"<a href='receptionist.php'>Receptionist</a>";
					echo"<a href='rooms_serv.php'>Rooms Service</a>";
					echo"<a href='Add.php'>Add User</a>";
					echo"<a href='Delete.php'>Delete User</a>";
                    echo"<a href='Update2.php'>Update User</a>";
                    echo"<a href='ViewAll.php'>View All Users</a>";
                    echo"<a href='Search.php'>Search</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>