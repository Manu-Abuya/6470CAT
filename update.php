<?php
require_once('conn.php');
if (isset($_POST['submit'])) {
	$user=$_POST['username'];
	$pass1=sha1($_POST['pass_1']);
	$pass2=$_POST['pass_2'];

	$update="UPDATE 6470usersM SET PASSWORD='$pass_2' WHERE USERNAME = '$user'";
	$check="SELECT * FROM 6470usersM WHERE USERNAME = '$user' and PASSWORD_HASH = '$pass_1'";
	$result = mysqli_query($conn,$check);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
    	if ($pass1== $row['PASSWORD_HASH']) {
    		mysqli_query($conn,$update);
    		$success="Password update successful";
    		echo $success;
    	}else {
    		$error1="Invalid Password";
    		echo $error1;
    	}
    } else {
    	$error="Incorrect username or password";
    	echo $error;
    }


}
?>