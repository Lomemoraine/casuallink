<?php
session_start();
require('conn.php');


$id=$_POST['id'];


$login="SELECT * FROM ausers WHERE idno='$id'";


$result_login=mysqli_query($conn, $login); 

	if (@mysqli_num_rows($result_login)==1){
		$_SESSION=mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		header('location:myprofile.php');
	}else{?>
	<script type="text/javascript">
		alert("USER DOES NOT EXIST");
		window.location.href = "index.php";
	</script><?php
	}
	mysqli_close($conn);
?>