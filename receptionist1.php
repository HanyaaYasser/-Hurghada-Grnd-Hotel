<html>
	<head>
		<style>
			.topnav{
				background-color: brown;
				overflow:hidden;
				color: black;
				padding: 25px 20px;
			}
			.topnav a{
				float:left;
				display:block;
				color: white;
				padding: 0px 16px;
				text-decoration: none;
				font-size: 30px;
			}
			.topnav a:hover{
				background-color: black;
				color: white;
			}
		</style>
	</head>
	<body>		
		<div class="topnav">
			<?php
				if(!empty($_SESSION['ID'])) 
				{
					echo"<a href='search_for_room.php'>search for rooms</a>";
					echo"<a href='show_available.php'>show available rooms</a>";
					echo"<a href='show_non_available.php'>show non-available room</a>";
                    echo"<a href='show_all.php'>show all rooms</a>";
                    
				}
				else
				{
					echo"<a href='search_for_room.php'>search for rooms</a>";
					echo"<a href='show_available.php'>show available rooms</a>";
					echo"<a href='show_non_available.php'>show non-available room</a>";
                    echo"<a href='show_all.php'>show all rooms</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>