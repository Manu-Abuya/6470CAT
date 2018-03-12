<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
	body{
		background-image: url(images/3.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.min {
		width: 40%;
		margin: 125px auto;
		-webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);
		padding-top: 50px;
	}
	.jan {
		padding: 12px 15px;
		border-bottom:2px solid orange;
		background: #fff;
	}
	.jan input[type="text"], .jan input[type="password"] {
		outline: none;
		font-size: .9em;
		border: none;
		background: transparent;
		width: 50%;
		color: #000;
		letter-spacing: 1px;
	}
</style>
</head>
<body>
	<div class="main">
		<div class="min">
			<div class="heading text-center">
				<h2>Reset Your Password</h2>
			</div>
			<form method="POST" action="update.php">
				<div class="jan">
					<p>username:
					<input type="text" name="username" placeholder="Input Username" required></p>
				</div>
				<div class="jan">
					<p>password:
					<input type="password" name="pass2" placeholder="New Password" required></p>
				</div>
				<div class="text-center submit">
					<input type="submit" name="submit" value="Change Password">
				</div>
			</form>
		</div>
	</div>
</body>
</html>