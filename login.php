<?php
 session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		body{
			background-image: url(images/2.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.main{
			padding-top: 80px;
		}
		.nyef {
			width: 40%;
			margin: 125px auto;
			-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
			padding-top: 50px;
		}
		.jan {
			padding: 12px 15px;
			border-bottom:2px solid red;
			border-right: 2px solid red;
			background: #fff;
		}
		.jan input[type="text"], .halo input[type="password"] {
			outline: none;
			font-size: .9em;
			border: none;
			background: transparent;
			width: 50%;
			color: #000;
			letter-spacing: 1px;
		}
		.reset{
			color: white;
		}
	</style>
</head>

<body>
	<div class="main">
		<div class="nyef">
			<div class="heading text-center">
				<h2>Log-in Here</h2>
			</div>
			<br>
			<form method="POST" action="get.php">
				<div class="jan">
					<p>username:
					<input type="text" name="username" placeholder="Enter Your Username" required></p>
				</div>
				<div class="jan">
					<p>password:
					<input type="password" name="password" placeholder="Enter Your Password" required></p>
				</div>
				<div class="text-center reset">
					<h4><u><b><a href="forgot.php">Forgot Password?</a></b></u></h4>
				</div>
				<div class="text-center submit">
					<input type="submit" name="submit" value="Login">
				</div>
			</form>
		</div>
	</div>
</body>
</html>