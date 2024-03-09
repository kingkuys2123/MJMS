<?php
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location:user_home.php");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="files/styles.css?v=<?php echo time(); ?>">
		<link rel="icon" type="image/x-icon" href="files/assets/web-icon.png">
		<title>MJ Music Studio</title>
	</head>
	<body>
		<div class="header">
			<img class="bg-img" src="files/assets/header-bg.png">
			<div class="navigation contain" style="width: 100%;">
				<div class="container">
					<div class="navbar">

						<div class="logo-toggle-container">
							<a href="#">
								<img src="files/assets/logo.png" alt="">
							</a>
						</div>

						<ul class="menu">
							<li><a class="nav-items" href="home.php">Home</a></li>
							<li><a class="nav-items" href="#">Team</a></li>
							<li><a class="nav-items" href="#">Contact</a></li>
							<li><a class="nav-items" href="login.php">Login</a></li>
							<li><a class="nav-items" href="register.php">Register</a></li>
						</ul>

					</div>
				</div>
			</div>
			<div class="header-2 contain">
				MUSIC MAKES<br>EVERYTHING BETTER
			</div>
		</div>
		<div class="main">
			
		</div>
		<div class="footer">
			<img class="bg-img" src="files/assets/footer-bg.png">
			<div class="footer-content contain" style="width: 100%;">
				  	<div class="footer-quote">
				  		
						Embark on a musical adventure as we shape the ideal future of your studio experience. Join us in crafting the perfect digital <br>harmony for you. Your input is key to our development process, and by providing valuable feedback, you become part of <br>our community of visionary supporters. Together, let's transform the way you create the future of music-making we all desire.

				  	</div>
				  	<div class="footer-copyright">
				  		
						Copyright © 2023 by MJMS<br>All rights reserved

				  	</div>
			</div>
		</div>
	</body>
</html>