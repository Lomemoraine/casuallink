<?php 
session_start();
if (isset($_SESSION['uname']) && $_SESSION['uname'] != "") {
$session = $_SESSION['uname'];
}
else {
header('location: login.php');
}

if (isset($_POST['btnLogout'])) {
session_destroy();
header('location: login.php');
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
	 
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	
      <div class="col-md-12 chit-chat-layer1-rit">    	
      	  <div class="geo-chart">
					<section id="charts1" class="charts">
				<div class="wrapper-flex">
				
				  </div>

				   <div class="chit-chat-heading">
                                  selected workers</div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      
                                      <th>full names</th>
                                      <th>id no</th> 
                                      <th>gender</th>                                   
                                                                        
                                      <th>mobile number</th>
                                     <th>ratings</th>
                                     <th>action</th>
                                  </tr>
                              </thead>
                              <tbody>

                              	<form action="index.php" method="POST">
                                <?php
			                   include 'conn.php';


			                    $result = mysqli_query($conn,'select * from sworkers where session="'.$session.'" ') or die(mysqli_error($conn));
			                    
			                    while($fetch = mysqli_fetch_array($result)){
			                    $id=$fetch['idno'];	
			                    	
			                 	?>
			                 	<tr>
			                        
			                        
			                        <td><?php echo $fetch['fname']; ?></td>
			                        <td><?php echo $fetch['idno']; ?></td>
			                        <td><?php echo $fetch['gender']; ?></td>
			                        
			                        
			                        <td><?php echo $fetch['tel']; ?></td>
			                        <td><?php echo $fetch['rate']; ?>%</td>
			                        <td>

			                        	<a rel="tooltip"  title="rate" class="btn btn-warning"class="btn btn-warning" id="<?php echo $id; ?>" href="rate.php<?php echo '?id='.$id; ?>">rate</a>
									</td>
			                    </tr>

			                    
			                <?php
					
					
					
					}
				?>
                          </tbody>
                      </table>
                      
</form>

<form action="sworkers.php" method="POST" >
<label class="label label-default" style="background-color: green;"><h>pay workers</h2></label></br></br>

				<input type="number" name="amt" class="" placeholder="amount per day in ksh" required><br><br>
				<input type="number" name="day" class="" placeholder="days worked" required><br><br>

				
				<input class="btn btn-success btn btn-block" type="submit" name="sbtn" value="pay all selected workers">
				<?php
				error_reporting(0);
					include('conn.php');
					
					$amt=$_POST["amt"];
					$day=$_POST["day"];
					 $total=$amt*$day;

					if (isset($_POST['sbtn'])) {
						require('AfricasTalkingGateway.php');
					$res = mysqli_query($conn,'select * from sworkers where session="'.$session.'" ') or die(mysqli_error($conn));
				
	        	

						for ($i=0; $i < mysqli_num_rows($res); $i++) {
							$row = mysqli_fetch_assoc($res);
							$fname=$row["fname"];
	        				$idno=$row["idno"];
	        				$timestamp = date("Y-m-d H:i:s");


							$recipients = "254".$row['tel'];
							$message    = "Dear, ".$row['fname']." ksh ".$total." has been credited to your account by  ".$session." ";
							$gateway    = new AfricasTalkingGateway("casuallink", "6888fe653186b698dcab7916cbfd8a7a1e0589f7f45fa59c61629bedf82e6583");
							try {
								$results = $gateway->sendMessage($recipients, $message);
								
								$sql="INSERT INTO payment (session,fname, idno, total, time) VALUES ('$session','$fname','$idno','$total', '$timestamp')"; 
								mysqli_query($conn, $sql);

								foreach($results as $result) {
									echo " Number: " .$result->number;
									echo " Status: " .$result->status;
									echo " MessageId: " .$result->messageId;
									echo " Cost: "   .$result->cost."\n";
									/*if (strpos($result->status,"error") || strpos($result->status,"failed")) {
										// do nothing. do not delete user
									}
									else {
										// user invited successfully so delete from users open for jobs
										
									}*/

								}
							}
							catch ( AfricasTalkingGatewayException $e ) {
								echo "Encountered an error while sending: ".$e->getMessage();
							}
						}
						echo "<script>alert('payment made successfully');</script>";
						echo '<META HTTP-EQUIV="refresh" content="0; URL=index.php">';
					}
				?>
			</form>

				    <div class="col geo_main">
				         



				      

				    </div>
				
				
				</div><!-- .wrapper-flex -->
				</section>				
			</div>
      </div>
     <div class="clearfix"> </div>
</div>
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