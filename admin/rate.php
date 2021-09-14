<?php 
session_start();
if (isset($_SESSION['uname']) && $_SESSION['uname'] != "") {
$session = $_SESSION['uname'];
$get_id = isset($_GET['id']) ? $_GET['id'] : 'home';
}
else {
header('location: login.php');
}

if (isset($_POST['btnLogout'])) {
session_destroy();
header('location: login.php');
}

require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$user_id = $_POST['idno'];
		/*$firstname = $_POST['firstname'];*/
		$rno = $_POST['lastname'];
		$cm = $_POST['cm'];

		$rrno =($rno/9.73)*100;
		
		
		$sql1="UPDATE `users` SET `rate` = '$rrno',  WHERE `idno` = '$user_id'";
		mysqli_query($conn, $sql1);
		$sql2="UPDATE `ausers` SET `rate` = '$rrno', `cm` = '$cm' WHERE `idno` = '$user_id'";
		mysqli_query($conn, $sql2);
		$sql="UPDATE `sworkers` SET `rate` = '$rrno' WHERE `idno` = '$user_id'";
		
		

		/*$sql1="UPDATE `allusers` SET `rate` = '$rrno', `cm` = '$cm'  WHERE `idno` = '$user_id'";*/
		
		/*$sql1="UPDATE `allusers` SET `cm` = '$cm' WHERE `idno` = '$user_id'";*/
		/*mysqli_query($conn, $sql1);*/

		if(mysqli_query($conn, $sql )){

							/*echo '<script type="text/javascript">toastr.success("Have Fun")</script>';*/

							 
							/*header("location: sworkers.php");*/


							echo "<script>window.alert('successfully rated')</script>";

							 header("refresh:0; sworkers.php");

							/*header("location: myprofile.php");*/
							exit();
									    
							}

		


else{

 									echo "<script>window.alert('failed')</script>";


 								
 								}




	}
 

?>


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


<script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>casual link</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<!-- <div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div> --><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"></span> 
												<div class="user-name">



													<?php
			                   include 'conn.php';
			                    $result = mysqli_query($conn,'select * from cusers where uname = "'.$session.'"') or die(mysqli_error($conn));
			                    
			                    while($row=mysqli_fetch_assoc($result)){
                                         


			                    	/*echo "".$row["area"]."";*/

			                    	$cname=$row["cname"];
			                    
			                    	
			                    	
			                 	?>
								<?php  } mysqli_close($conn); ?>
													<p><?php echo "$cname"; ?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											 <form method="POST">
											<li> <input type="submit" name="btnLogout" value="Logout" class="btn btn-danger"></li></form>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 






	 <form method="POST" action="rate.php">
				<div class="modal-header">


					<?php
                                include "conn.php";
                                $result = mysqli_query($conn,"select * from sworkers where idno='$get_id'") or die(mysqli_error($conn));
                                $row=mysqli_fetch_array($result);
                                mysqli_close($conn);
                            ?>
					<h3 class="modal-title"><center > Rate worker <?php echo $row['fname'];?> on a scale of 1-10</center></h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Fullname</label>
						<input type="hidden" name="idno" value="<?php echo $row['idno']?>"/>
						
							<input type="text" name="firstname" value="<?php echo $row['fname']?>" class="form-control" required="required" disabled/>
						</div>
						<div class="form-group">
							<label>rate</label>
							<input type="number" name="lastname" value="" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>comments</label>
							<input type="text" name="cm" value="" class="form-control" required="required" />
						</div>
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
<center>
					<button type="submit" name="update" class="btn btn-warning">Submit</button>
					<a rel="tooltip"  title="rate" class="btn btn-danger"class="btn btn-warning" id="" href="sworkers.php">Back</a></center>
				</div>

<?php
	
	
?>




			</form>
<!--market updates end here-->
<!--mainpage chit-chating-->

<!--main page chit chating end here-->
<!--main page chart start here-->

<!--main page chart layer2-->

	
<!--climate start here-->

<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>casuallink. All Rights Reserved   </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>

		        


		        <li id="menu-comunicacao" ><a href="sworkers.php"><i class="fa fa-book nav_icon"></i><span>selected workers</span></a>
		        	<li id="menu-comunicacao" ><a href="payments.php"><i class="fa fa-money"></i><span>payments</span></a>
		         
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>





<!-- mother grid end here-->
</body>
</html>                     