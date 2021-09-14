
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
</head>


<?php
session_start();
if(isset($_POST['uname'])){
	header('location:login.php');
	}

?>
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
							<a class="nav-link" href="#about">About</a>
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
	<div class="slider-content">
		<div class="wrapper-slider text-left">
			<!-- Slideshow 1 -->
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<div class="banner-info">
							<h3>Open your account</h3>
							<p>Connect with over 5 millions jobs in Nairobi's leading job connection network</p>
						</div>
					</li>
					<li>
						<!-- <div class="banner-info">
							<h3>Manage your accounts</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sedc dnmo eiusmod. </p>
						</div> -->
					</li>
				</ul>
			</div>
		</div>
		<div class="ban-form text-left">
			<h5>Open Account Now</h5>
			<form action="index.php" class="mt-4" method="post" enctype="multipart/form-data">
				<input class="form-control" type="text" name="Name" placeholder="Name" required="" />
			<label class="form-control">Gender</label>
				<input  type="radio" name="q1" value="Male" required="" />Male<br>
				<input  type="radio" name="q1" value="female" required="" />Female<br>
				<input class="form-control" type="text" name="IDNumber" placeholder="ID Number" required="" />
				<label style="color: blue;"><b>upload your id</b> </label><input lass="form-control" type="file" name="photo" width="400px">
				<input class="form-control" type="text" name="Number" placeholder="Phone Number" maxlength="10" required="" />
				<label style="color: blue;"><b>upload your profile picture</b> </label><input lass="form-control" type="file" name="pphoto" width="400px">

				<label class="form-control">Area you wish to work </label>
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
				<input class="form-control text-uppercase" type="submit" name="submit" value="Create Account"><br/>
				<center><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal"><span class="glyphicon glyphicon-edit"></span> Have Account? LOGIN</button></center>

                  
							<?php
							if(isset($_POST["submit"]))
							{
							 
							 //Including dbconfig file.
							include 'conn.php';

							$Name=$_POST["Name"];
							$gender=$_POST["q1"];
							$IDNumber=$_POST["IDNumber"];
							$photo=$_FILES['photo']['name'];
							$Number=$_POST["Number"];
							$pphoto=$_FILES['pphoto']['name'];
							$area=$_POST["area"];
$target="photos/";
$target1="photos/";
				  
$target=$target.$photo;
$target1=$target1.$pphoto;


                            $query = "SELECT * FROM users WHERE idno= '$IDNumber' ";
							$results = mysqli_query($conn, $query);
							$rows = mysqli_num_rows($results);

 								if ($rows===0) {
 									
 									
       $sql1="INSERT INTO ausers (fname, gender, idno, photo, tel, pphoto, area, rate) VALUES ('$Name','$gender', '$IDNumber','$photo', '$Number', '$pphoto', '$area',0)"; 
 			mysqli_query($conn, $sql1);

 		$sql="INSERT INTO users (fname, gender, idno, photo, tel, pphoto, area, rate) VALUES ('$Name','$gender', '$IDNumber','$photo', '$Number','$pphoto', '$area',0)"; 
 									
							if(mysqli_query($conn, $sql)){

								move_uploaded_file($_FILES['photo']['tmp_name'],$target);
								move_uploaded_file($_FILES['pphoto']['tmp_name'],$target1);	

							echo "<script>window.alert('Account successfully Created')</script>";
							    
							} else{
							    echo "ERROR: Cannot  execute $sql. " . mysqli_error($conn);
							}
 								}

 								else{

 									echo "<script>window.alert('user exist')</script>";
 								}

							
							 
							// Close connection
							mysqli_close($conn);

							}

							 ?>




			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
	<!-- //banner -->
	
	<!--/choose-->
	<section class="bottom-banner-w3layouts bg-light py-md-5 py-3" id="about">
		<div class="container">
			<div class="row choose-main py-md-5 py-3">
				<div class="col-lg-6 feature text-right">
					<h3>
						<span>Some Info</span>Why choose casuallink</h3>
					<p>Casuallink is the best platform for both employers and workers seeking casual jobs in a day in day out basis.The struggle of finding a casual job is easily solved for you by casuallink </p>
					<div class="read inner mt-4">
						<a href="#" class="btn btn-sm animated-button victoria-two">Read More</a>
					</div>
				</div>
				<div class="col-lg-6 feature fea-slider text-right">
					<img src="images/2.jpg" class="img-fluid rounded" alt="">
				</div>

				
			</div>
		</div>
	</section>
	<!--//choose-->
	

	<!--/bottom-banner-->
	<section class="bottom-banner-w3layouts product">
		<div class="container">
			<h3 class="tittle-wthree text-center">
				<span>Some Info</span>Register  with Casuallink for amazing experiences.</h3>
			<div class="row inner-sec-w3ls-agileinfo">
				<div class="mid-para text-center px-lg-5 px-md-4 px-2">
					<p>Casuallink is the best platform for both employers and workers seeking casual jobs in a day in day out basis.The struggle of finding a casual job is easily solved for you by casuallink.</p>
						<div class="read inner mt-4">
							<a href="#" class="btn btn-sm animated-button victoria-two">Read More</a>
						</div>
				</div>
			</div>
		</div>
	</section>
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
			<form method="POST" action="login.php">
				<div class="modal-header">
					<h3 class="modal-title"><center > ENTER ID NUMBER TO ACCESS YOUR ACCOUNT</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						
						<div class="form-group">
							<label>ID NUMBER</label>
							<input type="number" name="id" value="" class="form-control" required="required" />
						</div>
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> SUBMIT</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
			</form>
				</div>

			</div>
		</div>



</body>

</html>

