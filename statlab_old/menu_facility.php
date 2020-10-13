<?php
	include('./header.php');
	$today = new DateTime();
?>	
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
	<link rel="icon" href="./assets/img/testnav.png">
	<link rel="icon" href="./assets/img/testnav.png">
	<link rel="stylesheet" href="./assets/css/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="./assets/js/browser.js"></script>
</head>	
<header style="width:100%; bottom: 0px; position:relative;">   
    <div style="background-color: #1b212b;padding: 0px 0 20px 0; ">
		<a >				
			<a id="logo"  class="main-logo" style="margin-top:20px;margin-left:10%;color: #ff0000;font-size: 40px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Statlab
			<a id="logo"  class="main-logo" style="margin-bottom:-10px; color: #209948;font-size: 22px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Mobile
		</a>
		<a href="logout.php" style="color: #ffffff;float:right;margin-top:20px; margin-right:10%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><i class="fa fa-sign-out"></i> Log out</a>
	</div>
</header>
<div id="Main" class="mainbody">
	<div class="container">
		<div class="col-lg-12"><p style="margin-top:120px;">&nbsp;</p></div>
		<div class="row" style="text-align: center;">
			<div class="col-lg-3">	
				<a href="create_orders.php" class="site-btn sb-dart mt-4" style="margin:20px; color:#209948">Create Order</a>
			</div>
			<div class="col-lg-3">   
				<a href="order_status.php?start=1" class="site-btn sb-dark mt-4" style="margin:20px; color:beige;">Order Status</a>
			</div>										
			<div class="col-lg-3">
				<a href="result_facility.php" class="site-btn sb-dark mt-4" style="margin:20px; color:aqua">Result Reports</a>
			</div>
			<div class="col-lg-3">
				<a href="resetpass.php" class="site-btn sb-dark mt-4" style="margin:20px; color:#ff2255" >Reset Password</a>
			</div>
		</div>	
		<div class="col-lg-12"><p style="margin-top:60px;">&nbsp;</p></div>
	</div>
</div>


<?php include('./footer.php');?>	