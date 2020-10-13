<?php
	include('./header.php');
	include("dbconfig.php");	
    $userid=$_SESSION['login_user'];
    $todo=$_POST['todo'];
    $password0=$_POST['password0'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $mdpassword=md5($password0);
    $uppercase = preg_match('@[A-Z]@', $password1);
    $lowercase = preg_match('@[a-z]@', $password1);
    $number    = preg_match('@[0-9]@', $password1);
    $specialChars = preg_match('@[^\w]@', $password1);
	if (count($_POST) > 0) {
		$result = sqlsrv_query($conn, "SELECT *from users WHERE clientID='$userid'");
        $row = sqlsrv_fetch_array($result);

        if(isset($todo) and $todo=="change-password"){
            $status = "OK";
            $message="";             

			if(strtoupper($row["password"])<>strtoupper($mdpassword)){
				$message=$message."Your old password  does not match as in Our record.<BR>";
				$status= "NOTOK";
			}		

			// if ( strlen($password1) < 12 or strlen($password1) > 50 ){
			// $message=$message."Password must be more than 12 char legth and maximum 50 char length<BR>";
			// $status= "NOTOK";}					
			


			if(strlen($password1) < 12) {
				$message=$message.'Password should be at least 12 characters<BR>';
				$status= "NOTOK";
			}
			if(!$number) {
				$message=$message.'Password should include at least one number<BR>';
				$status= "NOTOK";
			}
			if(!$uppercase) {
				$message=$message.'Password should include at least one upper case letter<BR>';
				$status= "NOTOK";
			}
			if(!$lowercase) {
				$message=$message.'Password should include at least one small case letter<BR>';
				$status= "NOTOK";
			}
	
			if(!$specialChars) {
				$message=$message.'Password should include at least one special character<BR>';
				$status= "NOTOK";
			}        
			
    
			if ( $password1 <> $password2 ){
				$message=$message."New password and confirmation are not matching<BR>";
				$status= "NOTOK";}					
				}
			if($status<>"OK"){ 
				}
			else{
			if (strtoupper($row["password"])==strtoupper($mdpassword)) {
				sqlsrv_query($conn, "UPDATE users set password='" .md5( $_POST["password1"]) . "' WHERE clientID='$userid'");
				$message = "Succeessfully Reset Password!";            
			}
			else
			$message = "Check your password Again";
		}
	}
?>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
	<link rel="icon" href="./assets/img/testnav.png">
	<link rel="stylesheet" href="./assets/css/styles.css" type="text/css">
	<link href="./assets/extra/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="./assets/js/browser.js"></script>
	<script src="./assets/extra/jquery-1.11.1.min.js"></script>
	<script src="./assets/extra/jquery-1.10.2.min.js"></script>
	<script src="./assets/extra/bootstrap.min.js"></script>
	<script src="./assets/extra/ga.js"></script>
</head>	
<header style="width:100%; bottom: 0px; position:relative;">   
    <div style="background-color: #1b212b;padding: 0px 0 20px 0; ">
		<a >				
			<a id="logo"  class="main-logo" style="margin-top:20px;margin-left:10%;color: #ff0000;font-size: 40px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Statlab
			<a id="logo"  class="main-logo" style="margin-bottom:-10px; color: #209948;font-size: 22px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Mobile
		</a>
		<a href="logout.php" style="color: #ffffff;float:right;margin-top:20px; margin-right:10%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><i class="fa fa-sign-out"></i> Log out</a>
		<a href="menu_facility.php" style="color: #42f5b3;float:right;margin-top:20px; margin-right:2%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><i class="fa fa-home"></i> Main Menu</a>
	</div>
</header>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<br><br><br><br><br><br>
			<form name="frmChange" id="frmChange" method="post" action="resetpasscheck.php" onSubmit="return validatePassword()">
                <input type=hidden name=todo value=change-password>
				<table border="0" style="margin: 1% 0% 1% 0%" text-align="center" class="table">
					<tr class="tableheader">
						<div class="message"><?php if(isset($message)) {echo "<font face='Verdana' size='3' color=red>$message</font><br>"; } ?></div>
                    </tr>
                    <tr bgcolor='#f1f1f1' >
 						<td colspan='2' align='center'><font face='verdana, arial, helvetica' size='26px;' align='center'>&nbsp;Reset  Password</font></td> </tr>
					<tr>
					<tr>
			    		<td width="50%"><label>Current Password</label></td>
						<td width="50%"><input type="password" class="input-lg form-control" name="password0" id="password0"  autocomplete="off">
							<div class="row">
								<br>
							</div>
						</td>
					</tr>
					<tr>
						<td><label>New Password</label></td>
						<td><input type="password" class="input-lg form-control" name="password1" id="password1" autocomplete="off">
						<div class="row">
							<div class="col-sm-6">
								<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 12 Characters Long<br>
								<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter<br>
							</div>
							<div class="col-sm-6">	
								<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number<br>
								<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter
							</div>
							
						</div></td>
					</tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" class="input-lg form-control" name="password2" id="password2" autocomplete="off">
						<div class="row">
							<div class="col-sm-12">
								<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
							</div>
						</div></td>
					</tr>
					<tr>
					<br>
						<td><center><input type="submit" name="submit" style="width:50%" onclick="savepass()"
							value="Save" class="btnSave"></center></td>
						<td><center><input type="button" name="cancel"	style="width:50%" onclick="cancelpass()"
						value="Cancel" class="btnCancel"></center></td>
					</tr>
				</table>
			</form>
		</div><!--/col-sm-6-->
	</div><!--/row-->
</div>
</body>
<script>
	function validatePassword() {		
		var currentPassword,newPassword,confirmPassword,output = true;
		currentPassword = document.frmChange.currentPassword;
		newPassword = document.frmChange.newPassword;
		confirmPassword = document.frmChange.confirmPassword;
		if(!currentPassword.value) {
		currentPassword.focus();
		document.getElementById("currentPassword").innerHTML = "Input your current Password";
		output = false;
		}
		else if(!newPassword.value) {
		newPassword.focus();
		document.getElementById("newPassword").innerHTML = "Input your new Password";
		output = false;
		}
		else if(!confirmPassword.value) {
		confirmPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "Confirm your new Password";
		output = false;
		}
		if(newPassword.value != confirmPassword.value) {
		newPassword.value="";
		confirmPassword.value="";
		newPassword.focus();
		document.getElementById("confirmPassword").innerHTML = "Password do not match!";
		output = false;
	} 	
	return output;
}
</script>
<script type="text/javascript">
	function cancelpass(){
		location.href = "result_facility.php";
	}
</script>
<script type="text/javascript">
$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	var symbol = new RegExp("@[^\w]@+");
	if($("#password1").val().length >= 12){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	if(symbol.test($("#password1").val())){
		$("#symbol").removeClass("glyphicon-remove");
		$("#symbol").addClass("glyphicon-ok");
		$("#symbol").css("color","#00A41E");
	}else{
		$("#symbol").removeClass("glyphicon-ok");
		$("#symbol").addClass("glyphicon-remove");
		$("#symbol").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
	
});
</script>

<?php include('./footer.php');?>
