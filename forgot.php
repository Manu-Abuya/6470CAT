<!DOCTYPE html>
<html>
<head>
	<title>Forgot Your Password??</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		body{
			background-image: url(images/1.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.main{
			padding-top: 50px;
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
			width: 60%;
			color: #000;
			letter-spacing: 1px;
		}
		h3{
			color: black;
		}
	</style>
</head>
<body>
	<div class="text-center">
		<h3>Have you forgotten your password?<br>
		Fill in the information below to access your password.</h3>
	</div>
	<div class="main">
		<div class="nyef">
			<div class="heading text-center">
				<h2>Password Check</h2>
			</div>
			<form method="POST" action="fupdate.php">
				<div class="jan">
					<p>username:
				<input type="text" name="username" placeholder="Enter Your Username"></p>
				</div>
				<div class="jan">
					<p>phone number:
				<input type="number" name="phone" placeholder="Enter Your Phone Number"></p>
				</div>
				<div class="text-center submit">
				<input type="submit" name="submit" value="View Password">
				</div>
			</form>
		</div>
	</div>
</body>
</html>