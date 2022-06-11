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
					echo"<a href='GuestActDeact.php'>GuestActDeact</a>";
					echo"<a href='Promotion.php'>Promote</a>";
					echo"<a href='ReceptionstActDeact.php'>ReceptionstActDeact</a>";
                    echo"<a href='ReceptionstRegister.php'>ReceptionstRegister</a>";
                    echo"<a href='ViewComments.php'>ViewComments</a>";
                    
				}
				else
				{
					echo"<a href='GuestActDeact.php'>GuestActDeact</a>";
					echo"<a href='Promotion.php'>Promote</a>";
					echo"<a href='ReceptionstActDeact.php'>ReceptionstActDeact</a>";
                    echo"<a href='ReceptionstRegister.php'>ReceptionstRegister</a>";
                    echo"<a href='ViewComments.php'>ViewComments</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>