<?php 
session_start();
if (!isset($_SESSION['user'])) {
	ob_start();
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>logregCat</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
	body{
		background-image: url(images/4.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.main{
		padding-top: 5px;
	}
	.nyef {
		width: 40%;
		margin: 120px auto;
		-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		padding-top: 50px;
	}
	.jan {
		padding: 12px 15px;
		border-bottom:2px solid green;
		background: #fff;
	}
	.jan input[type="text"], .jan input[type="password"] {
		outline: none;
		font-size: 1.2em;
		border: none;
		background: transparent;
		width: 50%;
		color: #000;
		letter-spacing: 1px;
	}
	h1{
		padding-top: 20px;
	}
	h3{
		letter-spacing: 1px;
		font-size: 20px;
	}
	h2{
		color: white;
		font-size: 30px;
	}
	.reset{
			color: white;
		}
	.logout{
		text-align: center;
	}
	</style>
</head>
<body>
	<div class="text-center">
		<h1><span>-</span>You have successfully logged in! Karibu!<span>-</span></h1>
	</div>
	<div class="main">
		<div class="nyef">
			<form method="POST" action="update_2.php">
				<div>
					<h3 class="text-center">Change Password</h3>
				</div>
				<div class="form-group text-center jan">
					<p>
					<input type="text" name="username" placeholder="Enter Your Username"></p>
				</div>
				<div class="form-group text-center jan">
					<p>password:
					<input type="password" name="pass1" placeholder="Old Password"></p>
				</div>
				<div class="form-group text-center jan">
					<p>
					<input type="password" name="pass2" placeholder="New Password"></p>
				</div>
				<div class="form-group text-center submit">
					<input type="submit" name="submit" value="Change Password" class="btn btn-success"><br>
				</div>
				<div class="text-center reset">
					<h4><u><a href="reset.php">Reset your Password</a></u></h4>
				</div>
			</form>
		</div>
	</div>
<div class="logout">
	<a href="logout.php" class="btn btn-success">Log Out</a>
</div>
</body>
</html>