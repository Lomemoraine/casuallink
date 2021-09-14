<?php
session_start();
require('conn.php');


$username=$_POST['uname'];
$password=$_POST['password'];

$login="SELECT * FROM admin WHERE uname='$username' AND pass='$password'";


$result_login=mysqli_query($conn, $login); 

	if (@mysqli_num_rows($result_login)==1){
		$_SESSION=mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		header('location:index.php');
	}else{?>
	<script type="text/javascript">
		alert("USERNAME/ PASSWORD IS INVALID");
		window.location.href = "login.php";
	</script><?php
	}
	mysqli_close($conn);
?>

