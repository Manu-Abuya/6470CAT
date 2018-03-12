<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		body{
			background-image: url(images/2.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body class="balas">
	<div class="dec">
		<div class="zulu">
			<div class="heading">
				<h2>Register</h2>
			</div>
			<form method="POST" action="input.php">
				<div class="form-group text-center">
					<p>username:
					<input type="text" name="user" placeholder="Type in yourUsername" required></p>
				</div>
				<div class="form-group text-center kite">
					<p>password:
					<input type="password" name="password" placeholder="Type Your Password" required></p>
				</div>
				<div class="form-group text-center kite">
					<p>phone number:
					<input type="number" name="number" placeholder="Type your Phone Number" required>
				</div>
				<div class="form-group text-center submit">
					<input type="submit" name="submit" value="Register">
				</div>
			</form>
		</div>
	</div>
		<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		$password = md5($_POST['password']);
		$userName = $_POST['user'];
		$number = $_POST['phone_number'];
		$sql1 = "SELECT USERNAME FROM 6470usersM WHERE USERNAME = '$userName'";
		$select = mysqli_query($conn, $sql1);
		$sql2 = "INSERT INTO 6470usersM (USERNAME, PASSWORD_HASH, PHONE) VALUES ('$userName', '$password', '$number')";
		$row = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
		$count = mysqli_num_rows($sql1);
		if ($count == 0) {
			mysqli_query($conn, $sql2);
		} else{
			echo "<h2>Registration denied: Username already exists.</h2>";
		}
	}
	?>
</body>
</html>