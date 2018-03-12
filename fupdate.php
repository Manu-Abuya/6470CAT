<?php
require_once('conn.php');
if (isset($_POST['submit'])) {				
			$user=$_POST['username'];
			$phone = $_POST['phone'];
			$sql = "SELECT PASSWORD_HASH FROM 6470usersM WHERE USERNAME = '$user' AND PHONE = '$phone'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			if ($count == 1) {
				$pass= $row['PASSWORD_HASH'];
				ob_start();
				header("location:reset.php");
			}else{
				$error = "Your username or password is incorrect";
				echo $error;
			}
		}
?>
<form><input type="submit" name="error" value=""></form>