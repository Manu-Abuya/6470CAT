<?php 
require_once("conn.php");
ob_start();
if (isset($_POST['submit'])) {
	$password=md5($_POST['password']);
	$username=$_POST['user'];
	$number=$_POST['number'];
	$sql1="SELECT ID FROM 6470usersM WHERE USERNAME='$username' and PHONE = '$number'";
	$sql2="INSERT INTO 6470usersM (USERNAME,PASSWORD_HASH,PHONE) VALUES ('$username' , '$password' , '$number') ";
	$select=mysqli_query($conn,$sql1);
	$row = mysqli_fetch_array($select,MYSQLI_ASSOC);
	$count = mysqli_num_rows($select);
	if ($count == 0) {
		unset($_POST);
		mysqli_query($conn,$sql2);
		ob_start();
		header("location:login.php");
	}else {
		echo "<div><center><h1 style='color: blue'><b>Registration failed, username already used.</b></h1><br><br><a href='login.php' class='btn btn-warning'>Register Again</a></center></div>";
	}

}
 ?>

