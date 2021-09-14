 <<?php 

session_start();
ob_start();
if (isset($_SESSION['idno']) && $_SESSION['idno'] != "") {
$session = $_SESSION['idno'];
}
else {
header('location: myprofile.php');
}
if (isset($_POST['btnLogout'])) {
session_destroy();
header('location: index.php');
}

 ?>




 <!DOCTYPE html>
<html lang="zxx">



<head>
	<title>casuallink</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">


	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['cpaint',     11],
         
         
        ]);

        var options = {
          title: 'All Payment'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>



<body>
	<!--/banner-->
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<h1 class="logo">
					<a class="navbar-brand" href="index.html">
						<i class="fab fa-accusoft"></i>
						<span>casual link</span>
					</a>
				</h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#payment">Payment</a>
						</li>
						

						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="search">
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
								<i class="fas fa-search"></i>
							</a>
							<div id="small-dialog" class="mfp-hide">
								<div class="search-top">
									<div class="search-inn">
										<form action="#" method="post" class="disply-flex">
											<input class="form-control" type="search" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											<button class="btn2">
												<i class="fas fa-search"></i>
											</button>
										</form>
									</div>
									<p>Casual link</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- <form class="form-inline my-2 my-lg-0">
							  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							</form> -->
			</nav>
		</header>

	<!-- //header -->
	<!-- banner-text -->
	<div class="container">
		<div class="jumbotron">
		
		<div class="row">
			
				<div class="col-md-9">
					<center>
						<h3>MY PERSONAL DETAILS</h3>
					</center>	
				</div>
				<div class="col-md-3">
					<form method="POST">
						<?php
			                   include 'conn.php';
			                    $result = mysqli_query($conn,'select * from ausers where idno = "'.$session.'"') or die(mysqli_error($conn));
			                    
			                    while($fetch = mysqli_fetch_array($result)){
                                         


			                    	/*echo "".$row["area"]."";*/

			                    	$fname=$fetch["fname"];
			                    	$photo=$fetch["photo"];
			                    	$idno=$fetch["idno"];
			                    	$tel=$fetch["tel"];
			                    	$area=$fetch["area"];
			                    	$rate=$fetch["rate"];
			                    
			                    	
			                    	
			                 	?>
								<?php  } mysqli_close($conn); ?>
						<b>Welcome: </b>

						<?php echo "$fname" ?><br>

	

						<input type="submit" name="btnLogout" value="Logout" class="btn btn-danger">
					</form>
				</div>
			
		</div>
	</div>
</div>
	<!-- //banner -->
<div class="container">
		
		
		<div class="row">
			
				<div class="col-md-4"><div class="jumtron">
					<?php
  include "conn.php";
  $id=$_SESSION['idno'];
  $sql=mysqli_query($conn, "SELECT * FROM ausers where idno='$id'")or die(mysql_error());
  $data=mysqli_fetch_array($sql);
  
  ?>
<div align="center" style="text-align:center"><img src="photos/<?php echo $data['pphoto'] ?>" height="300"  /></div>	
				</div>
			</div>
				<div class="col-md-8"><div class="jumbotron">
					       <div class="table-responsive">
					       	<u><label>PERSONAL DETAILS</label></u>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      
                                      <th>full names</th>
                                      <th>id no</th> 
                                      <th>gender</th>                                   
                                                                        
                                      <th>mobile number</th>
                                      <th>area</th>
                                      <th>ratings</th>
                                      <th>comments</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
			                   include 'conn.php';


			                    $result = mysqli_query($conn,'select * from ausers where idno ="'.$session.'" ') or die(mysqli_error($conn));
			                    
			                    while($fetch = mysqli_fetch_array($result)){
			                    	
			                    	
			                 	?>
			                 	<tr>
			                        
			                        
			                        <td><?php echo $fetch['fname']; ?></td>
			                        <td><?php echo $fetch['idno']; ?></td>
			                        <td><?php echo $fetch['gender']; ?></td>
			                        
			                        
			                        <td><?php echo $fetch['tel']; ?></td>
			                        <td><?php echo $fetch['area']; ?></td>
			                        <td><?php echo $fetch['rate']; ?>%</td>
			                        <td><?php echo $fetch['cm']; ?></td>
			                        <td>

			                    </tr>
			                <?php  } mysqli_close($conn); ?>
                          </tbody>
                      </table>
				</div>
			
		</div>
	</div>
</div>
<div class="container">
		
		
		<div class="row">
			
				<div class="col-md-3"><div class="jumbotron">
					<center>
						<u><h3>DASHBOARD</h3></u>
					</center><br>
					<center><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal"><span class="glyphicon glyphicon-edit"></span><b>TRANSFER</b></button></center>
				</div>
			</div>
				<div class="col-md-9"><div class="jumbotron">
					       <div class="table-responsive">
					       	<u><label>COMPANY WORKING FOR</label></u>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>company name</th>
                                      <th>full names</th>
                                      <th>id no</th> 
                                     <th>ratings</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
			                   include 'conn.php';


			                    $result = mysqli_query($conn,'select * from sworkers where idno ="'.$session.'" ') or die(mysqli_error($conn));
			                    
			                    while($row=mysqli_fetch_assoc($result)){
			                    	
			                    	
			                 	?>
			                 	<tr>
			                        
			                        <td><?php echo $row['session']; ?></td>
			                        <td><?php echo $row['fname']; ?></td>
			                        <td><?php echo $row['idno']; ?></td>
			                        
			                        <!-- <td><?php echo $row['area']; ?></td> -->
			                        <td><?php echo $row['rate']; ?>%</td>
			                    </tr>
			                <?php  } mysqli_close($conn); ?>
                          </tbody>
                      </table>

				</div>
			
		</div>
	</div>
</div>
</div>
</div>
 
 <section id="payment">
<div class="container">
		
		
		<div class="row">
			
				<div class="col-md-3"><div class="jumbotron">
					<center>
						
					</center><br>
					<center><button class="btn btn-outline-success" data-toggle="modal" type="button" data-target="#update_mod"><span class="glyphicon glyphicon-edit"></span><b>TRANSACTIONS</b></button></center><br/>
					<center><label>Balance
						<?php
			                   include 'conn.php';
			                    $result = mysqli_query($conn,'select * from payment where idno = "'.$session.'"') or die(mysqli_error($conn));
			                    $qty= 0;
			                    while($row=mysqli_fetch_assoc($result)){
                                         
			                    	$qty += $row['total'];

			                    	/*echo "".$row["area"]."";*/

			                    	
			                    
			                    	
			                    	
			                 	?>
								<?php  } mysqli_close($conn); ?>
													<p><?php echo "Ksh: $qty"; ?></p>

					</label></center>
					<center><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update"><span class="glyphicon glyphicon-edit"></span><b>WITHDRAW </b></button></center>



					<div class="modal fade" id="update" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="logi.php">
				<div class="modal-header">
				<center >	<h3 class="modal-title"> REQUEST WITHDRAWAL</h3></center>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label class="fas fa-phone-volume">PHONE NUMBER</label>
							<label></label><input type="number" name="no" value="<?php echo "$tel" ?>" class="form-control" required="required" disabled />
						</div>
						<div class="form-group">
							<label class="fa fa-money">AMOUNT</label>
							<input type="number" name="amt" value="" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>MINMUM AMOUNT ksh 50</label>
							
						</div>
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<center><button name="withdraw" class="btn btn-outline-success"><span class="glyphicon glyphicon-edit"></span> withdraw to mpesa</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button></center>
				</div>
			</form>
				</div>

			</div>
		</div>
				</div>
			</div>
				<div class="col-md-9"><div class="jumbotron">
					       <div class="table-responsive">
					       	<u><label>PAYMENTS</label></u>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>company name</th>
                                      <th>full names</th>
                                      <th>amount</th> 
                                     
                                     
                                      <th>time</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php
			                   include 'conn.php';


			                    $result = mysqli_query($conn,'select * from payment where idno ="'.$session.'" ') or die(mysqli_error($conn));
			                    
			                    while($row=mysqli_fetch_assoc($result)){
			                    	
			                    	
			                 	?>
			                 	<tr>
			                        
			                        <td><?php echo $row['session']; ?></td>
			                        <td><?php echo $row['fname']; ?></td>
			                        
			                        
			                       <td><?php echo $row['total']; ?></td>
			                        <td><?php echo $row['time']; ?></td>
			                    </tr>
			                <?php  } mysqli_close($conn); ?>
                          </tbody>
                      </table>
                      <div id="piechart" style="width: 500px; height: 300px;"></div>

				</div>
			
		</div>
	</div>
</div>
</div>
</section>
	<!--/choose-->
	
	<!--//choose-->
	


	<!--/bottom-banner-->
	
	<!--//-->
	<!--/process-->
	
	<!--//preocess-->
	<section class="testimonials bottom-banner-w3layouts">
		<div class="container">
			<h3 class="tittle-wthree cen text-center">Find out more about casuallink</h3>
		</div>
	</section>
	<!--/features-->
	
	<!--//features-->
	
	
	<!--footer -->
	<footer id="contact">
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Casuallink is a platform to connect and help casual labourers find casual jobs at the comfort of their homes.Similary,companies and indutries find workers easy.</p>
						<div class="social-icon footer text-left mt-4">
							<div class="icon-social">
								<a href="#" class="button-footr">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="button-footr">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="button-footr">
									<i class="fab fa-dribbble"></i>
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>Dedan Kimathi University,Nyeri kenya.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : 0748177004</p>
							<p>Email :
								<a href="mailto:info@example.com">lorrainechepkemoi4@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Useful Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="#about">About</a>
						</li>
						
						
						<li>
							<a href="#contact">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from  casuallink.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright mt-4">
				<p class="copy-right text-center ">&copy; casual link. All Rights Reserved
					<!-- <a href="#"><img src="images/n.png" style="width: 10%;"></a> -->
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //Custom-JavaScript-File-Links -->
	<!-- js -->
	<script  src="js/jquery-2.2.3.min.js"></script>
	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: false,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "centered-btns"
			});

		});
	</script>
	<!--//slider-->
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->
<script src="js/sweetalert.min.js"></script>
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
	
<div class="modal fade" id="update_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="myprofile.php">
				<div class="modal-header">
					<h3 class="modal-title"><center > TRANSFER TO ANOTHER AREA</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<center><div class="col-md-8">
						
						<div class="form-group">
							<label>FULLNAME</label>
						
						
							<input type="text" name="fname" value="<?php echo "$fname" ?>" class="form-control" required="required" disabled/>
						</div>
						<div class="form-group">
							<label>ID NUMBER</label>
							<input type="number" name="idno" value="<?php echo "$idno" ?>" class="form-control" required="required" disabled />
						</div>
						
						<div class="form-group">
							<label>AREA</label>
							<input type="text" name="area" value="<?php echo "$area" ?>" class="form-control" required="required" disabled />
						</div>

						<div class="form-group">
<label class="form-control">Area you wish to relocate </label>
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

						</div>
					</div></center>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> SUBMIT</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>

				<?php
	include 'conn.php';
	
	if(ISSET($_POST['update'])){
		
		/*$firstname = $_POST['firstname'];*/
		$area=$_POST["area"];
		


		
		
		
		/*$sql="UPDATE `users` SET `area` = '$area' WHERE `idno` = '$user_id'";*/
		$sql="UPDATE `ausers` SET `area` = '$area' WHERE `idno` = '$session'";

		if(mysqli_query($conn, $sql)){

							echo "<script>window.alert('successfully transferred')</script>";

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
			</form>
				</div>





				

</body>

</html>

