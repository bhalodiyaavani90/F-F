<?php	session_start();

		error_reporting(0);

		
		include("include/config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>F&F</title>
 <link rel="icon" href="images/logo/logo22.jpg" type="image/gif" sizes="16x16"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
		
			<a href="index.php"><h1 style="
    font-family: 'Dancing Script', cursive;
    font-size: 32px;
    font-weight: 600;
    color: black;
    margin: 0;
  ">Footprint & Fashion<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				
				
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Wardrobe<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">

										<div class="col-sm-4">
											<ul class="multi-column-dropdown">

												<?php
													$cat_q = "select * from category";

													$cat_res = mysqli_query($link,$cat_q);

													while($cat_row = mysqli_fetch_assoc($cat_res))
													{
														//echo $cat_row["cat_id"];
														
														echo '<li>
																<a href="men.php?id='.$cat_row['cat_id'].'">
																	<i class="fa fa-angle-right" aria-hidden="true"></i>'.$cat_row['cat_nm'].'
																</a>
															</li>';
													
													}
												?>

											</ul>
										</div>
										
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
											</ul>						
										</div>

										<div class="col-sm-4 w3l">
											<a href="men.php"></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						
						<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						 <li><a href="gallery.php" class="hyper"><span>Gallery</span></a></li> 

						<?php 
							if (!isset($_SESSION['client']['status'])) 
							{
								echo '<li><a href="register.php" class="hyper"><span>Register</span></a></li>'; 
								echo '<li><a href="login.php" class="hyper"><span>Login</span></a></li>';
							} 
						?>

						<?php
							 if(isset($_SESSION['client']['status']))
							 {
						 ?>
							<li><a href="Profile.php" class="hyper"><span>Profile</span></a></li>
							<li><a href="order_history.php" class="hyper"><span>My Orders</span></a></li>
							<li><a href="logout.php" class="hyper"><span>Logout</span></a></li>
						<?php 
							} 
						?>


					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="search.php" method="get">
				<input type="search" name="search" placeholder="Search for a Product...">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		
		<?php
				if(isset($_SESSION['client']['status']))
				{
		?>
					<div class="col-md-1 cart-wthree">
						<div class="cart"> 
								<button class="w3view-cart" type="submit" name="submit" value="">
								<a href="cart.php" style="color:black;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></button> 
						</div>
					</div>
		<?php
				}
		?>
		
		<div class="clearfix"></div>
	</div>
</div>
