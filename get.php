<?php
require_once("conn.php");
if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass=md5($_POST['password']);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql="SELECT USERNAME FROM 6470usersM WHERE USERNAME = '$user'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
		$count = mysqli_num_rows($result);


		if ($count==1) {
			unset($_POST);
			session_start();
			$_SESSION['user']=$user;
			header("location:view.php");
		} else {
			$error="<h1>Your username or password is incorrect</h1>";
			header("location:login.php");
		}
	}
}

?>
