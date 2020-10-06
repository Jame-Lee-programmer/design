<?php 
   include("dbconfig.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = sqlsrv_real_escape_string($conn,$_POST['username']);
      $mypassword = sqlsrv_real_escape_string($conn,$_POST['password']); 
      
	  $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = sqlsrv_query($conn,$sql);
      $row = sqlsrv_fetch_array($result,sqlsrv_ASSOC);

      $count = sqlsrv_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;         
         header("location: index.php");
      }else {
		 $error = "<script>alert('Login Name or Password is invalid');</script>";
      }
   }
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
		<link rel="icon" href="./assets/img/testnav.png">
	    <link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="./assets/css/style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header class="header-section">
	    	<a id="logo" >
   				<div class="container">
				    <div class="row">
						<img src="./assets/img/test.png" alt="logo" width="120px">
						<div class="text-center">
							<label class="site-logo" style="color: #ff0000;font-size: 44px;font-family: 'Open Sans', sans-serif;">Statlab</label><br>
							<label id="logo"  style="margin-bottom:-10px; color: #209948;font-size: 32px;line-height: 36px; font-family: 'Open Sans', sans-serif;">Mobile</label>
						</div>
				 	</div>	
				</div>				
	      	</a>			              
		</header>
		
	    <!-- Hero Section end -->
		<section class="hero-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-center">
							<p style="color:white; font-size:60px; text-shadow: 2px 2px #123456; ">Laboratory Results Retrieval System</p>
						</div>						
					</div>
					<div class="col-lg-6">
						<form class="hero-form">
                            <div class="row">
                                <a href="login_provider.php" class="site-btn sb-dark mt-4" style="margin:20px; color:#209948">Facility<br>Provider</a>
								<a href="login_patient.php" class="site-btn sb-dark mt-4" style="margin:20px; padding-top:40px; color:#ff5533">Patient</a>
                            </div>
						</form>
					</div>
                    <div class="col-lg-12"><p style="margin-top:18px;">&nbsp;</p></div>
				</div>  
			</div>
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/1.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/2.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/3.jpg"></div>
			</div>
		</section>
	</body>
	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.slicknav.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/jquery-ui.min.js"></script>
	<script src="./assets/js/main.js"></script>
</html>
