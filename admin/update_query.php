<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$user_id = $_POST['idno'];
		/*$firstname = $_POST['firstname'];*/
		$rno = $_POST['lastname'];

		$rrno =($rno/9.73)*100;
		
		
		$sql="UPDATE `users` SET `rate` = '$rrno' WHERE `idno` = '$user_id'";

		if(mysqli_query($conn, $sql)){

							echo "<script>window.alert('successfully rated')</script>";

							
							 header("refresh:0"); 
							/*header("location: myprofile.php");*/
							exit();
							    
							}

		


else{

 									echo "<script>window.alert('failed')</script>";


 									header("location: index.php");
 								}




	}
	
?>