<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$user_id = $_POST['idno'];
		/*$firstname = $_POST['firstname'];*/
		$area=$_POST["area"];
		$tel=$_POST["tel"];


		
		
		
		/*$sql="UPDATE `users` SET `area` = '$area' WHERE `idno` = '$user_id'";*/
		$sql="UPDATE `ausers` SET `tel` = '$tel' WHERE `idno` = '$user_id'";

		if(mysqli_query($conn, $sql)){

							echo "<script>window.alert('successfully transfered')</script>";

							
							header("location: myprofile.php");
							    
							}

		


else{

 									echo "<script>window.alert('failed')</script>";


 									header("location: index.php");
 								}




	}
	
?>