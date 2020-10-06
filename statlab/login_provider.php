<?php 
    include("dbconfig.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myusername = $_POST['username'];
		$mypassword = $_POST['password']; 
		$hashpassword = md5($mypassword);
		$sql = "SELECT clientID FROM users WHERE username = '$myusername' and password = '$hashpassword'";
		$result = sqlsrv_query($conn,$sql);
		$row = sqlsrv_fetch_array($result);
		$count = sqlsrv_num_fields($result);
		$sql1 = "SELECT ProviderID FROM users WHERE username = '$myusername' and password = '$hashpassword'";
		$result1 = sqlsrv_query($conn,$sql1);
		$row1 = sqlsrv_fetch_array($result1);
		$count1 = sqlsrv_num_fields($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($row['clientID']&&!$row1['ProviderID']) {
			$_SESSION['login_user'] =  $row['clientID'];
			header("location: menu_facility.php");
		}
		if ($row1['ProviderID']) {
			$_SESSION['login_user'] =  $row1['ProviderID'];
			header("location: menu_provider.php");
		}
   }
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
		<link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
		<link rel="icon" href="./assets/img/testnav.png">
		<link rel="stylesheet" href="./assets/css/style.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
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
						<div class="text-center" style="margin-top:-10px;">
							<p style="color:white; font-size:60px;text-shadow: 2px 2px #123456;">Facility/Provider<br>Login</p>                         
						</div>
					</div>										
					<div id="login_form_provider" class="col-lg-6" style="margin-top:-70px;">
						<form id="loginpr_form" class="hero-form" action="./login_provider.php" method="post">						
							<div class="form-group">		
								<div class="alert alert-danger" id="alertform" style="display: none;  font-size:32px; text-align:center;">
									Incorrect name or password
								</div>			
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="username" placeholder="Your Name"  required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Your password"  required="required">
							</div>
   							<div class="text-center">
							   <button type="button" onclick="loginpr()" id="loginpr_btn" class="site-btn">Login</button>					
							</div>			
						</form>
					</div>
				</div>	
				<div class="col-lg-12"><p style="margin-top:-60px;">&nbsp;</p></div>
 			</div>
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/1.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/2.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/3.jpg"></div>
			</div>
		</section>
	<script type="text/javascript">
		function openPatientForm(){
			$("#login_form_provider").hide();
			$("#login_form_patient").show();
		}
		function openProviderForm(){
			$("#login_form_provider").show();
			$("#login_form_patient").hide();
		}
	</script>
	<script type="text/javascript">
		function loginpr(){
			$.post("compare.php",{username: $("#username").val(), password: $("#password").val(), type: 0}, function(data, status){
				if(status == "success")
					if(data == '1'){
						$("#loginpr_form").submit();
					} else{
						$("#alertform").show();
					}
				});
		}
	</script>
	<script type="text/javascript">
		document.getElementById("password")
	    .addEventListener("keyup", function(event) {
	    event.preventDefault();
	    if (event.keyCode === 13) {
	        document.getElementById("loginpr_btn").click();
	    }
		});		
	</script>
	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.slicknav.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/jquery-ui.min.js"></script>
	<script src="./assets/js/main.js"></script>
</html>
