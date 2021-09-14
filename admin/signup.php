
<!DOCTYPE HTML>
<html>
<head>
<title>casuallink</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//charts-->
</head>
<body>	
<!--inner block start here-->
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form action="signup.php" class="mt-4" method="post">
					<input type="text" name="cname" placeholder="Company Name" required="">
					<label class="form-control">Area where company is located </label>
					<select class="form-control" name="area">
						<option>---Select Area--</option>
					<option value = "Embakasi"> Embakasi 
					</option>
					<option value = "Idustrial Area"> Idustrial Area 
					</option>
					<option value = "Athi river"> Athi river
					</option>
					<option value = "Mombasa road"> Mombasa road
					</option>
					<option value = "Kericho"> Kericho
					</option>
					</select>
					<input type="text" name="username" placeholder="username" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="submit" value="Register a company">


<?php

if(isset($_POST["submit"]))
							{
							 
							 //Including dbconfig file.
							include 'conn.php';

							$cname=$_POST["cname"];
							$area=$_POST["area"];
							$username=$_POST["username"];
							$password=$_POST["password"];
							


                            $query = "SELECT * FROM cusers WHERE cname= '$cname' ";
							$results = mysqli_query($conn, $query);
							$rows = mysqli_num_rows($results);

 								if ($rows===0) {
 									
 									$sql="INSERT INTO cusers (cname, area, uname, password) VALUES ('$cname','$area', '$username', '$password')"; 
							if(mysqli_query($conn, $sql)){

							echo "<script>window.alert('details successfully inserted')</script>";
							    
							} else{
							    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
 								}

 								else{

 									echo "<script>window.alert('company exist')</script>";
 								}

							
							 
							// Close connection
							mysqli_close($conn);

							}

?>







				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a></h4>
				  
				</div>





			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 Shoppy. All Rights Reserved | Design by   </p>
</div>	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
