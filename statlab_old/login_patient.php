<?php 
   	include("dbconfig.php");
   	session_start();   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		$myinfo = $_POST['pinfo'];
		$mydob = $_POST['dob']; 
		$mynewdob = substr($mydob,6,4)."-".substr($mydob,0,2)."-".substr($mydob,3,2);
		$myzip = $_POST['address']; 
		$sql = "SELECT patientID FROM users WHERE (phone = '$myinfo' or SSN = '$myinfo' or email = '$myinfo' )and DOB = '$mynewdob' and zipcode='$myzip'";
		$result = sqlsrv_query($conn,$sql);
		$row = sqlsrv_fetch_array($result);		
		$count = sqlsrv_num_fields($result);
		// If result matched $myusername and $mydob and $myzip, table row must be 1 row
		if($count == 1) {
			$_SESSION['login_user'] =  $row['patientID']; 
			header("location: result_patient.php");
		}
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	  	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
		<link rel="icon" href="./assets/img/testnav.png">
	    <link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
	    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
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
						<div class="text-center" style="margin-top:70px;">
							<p style="color:white; font-size:60px;text-shadow: 2px 2px #123456;">Patient Login</p>                         
						</div>
					</div>	
					<div id="login_form_patient"  class="col-lg-6">
						<form class="hero-form" style="margin-top:-85px;" id="loginpa_form" action="./login_patient.php" method="post">
							<div class="form-group">		
								<div class="alert alert-danger" id="alertform" style="display: none; font-size:32px; text-align:center;">
									Incorrect Phone, email, SSN, DOB, or Zip Code
								</div>	
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="pinfo" placeholder="Input Phone, email or SSN" name="pinfo" required>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" id="dob" maxlength="10" placeholder="Input your DOB" name="dob" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
							</div>							
							<div class="form-group">
								<input type="text" name="address" id="address" placeholder="ZIP code" class="form-control" required>
							</div>										
							<div class="text-center">
							  	<button type="button" onclick="loginpa()" id="loginpa_btn" class="site-btn">Login</button>
							</div>		
						</form>	
					</div>				
				</div>
				<div class="col-lg-12"><p class="patientmargin">&nbsp;</p></div>
			</div>
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/1.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/2.jpg"></div>
				<div class="hs-item set-bg" data-setbg="./assets/img/hero-slider/3.jpg"></div>
			</div>
		</section>
		<!-- Hero Section end -->
		
	</body>
	<script type="text/javascript">
		function loginpa(){
				var dob = $("#dob").val();
				var Birth = dob.slice(6,10)+"-"+dob.slice(0,2)+"-"+dob.slice(3,5);
				console.log(Birth);
				$.post("compare.php",{pinfo: $("#pinfo").val(), dob: Birth, address: $("#address").val(), type: 1}, function(data, status){
				if(status == "success"){
					console.log(data);
					if(data == '1'){
						$("#loginpa_form").submit();
					} else{
						$("#alertform").show();
					}
				}
			});
		}
	</script>
	<script type="text/javascript">
		document.getElementById("address")
	    .addEventListener("keyup", function(event) {
	    event.preventDefault();
	    if (event.keyCode === 13) {
	        document.getElementById("loginpa_btn").click();
	    }
		});	
	</script>
	<script type="text/javascript" src="./assets/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.maskedinput-1.2.2-co.min.js"></script>
	<script type="text/javascript">
	jQuery(function($){
		$("#dob").mask("99/99/9999",{placeholder: 'mm/dd/yyyy'});
	});
	</script>
	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.slicknav.min.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/jquery-ui.min.js"></script>
	<script src="./assets/js/main.js"></script>
</html>
