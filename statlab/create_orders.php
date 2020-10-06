<?php
	include('./header.php');
	$today = new DateTime();
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
	define( 'SQLSRV_FETCH_ASSOC', 2 );
	$userid=$_SESSION['login_user'];
	$today = new DateTime();
	$premonth = new DateTime();
	$firstDate = date_add($premonth, date_interval_create_from_date_string("-1 month"));
	$endDate = new DateTime();	
	$flag = $_GET['selname'] = isset($_GET['selname']) ? $_GET['selname'] : '';
	$result1 = sqlsrv_query($conn, "SELECT RaceID, RaceDesc FROM Race WHERE Category IN (1,0) ORDER BY RaceDesc");
	$row1 = sqlsrv_fetch_array($result1,2);
	$result2 = sqlsrv_query($conn, "SELECT EthnicityID, Ethnicity FROM Ethnicity ORDER BY Ethnicity");
	$row2 = sqlsrv_fetch_array($result2,2);
	$result3 = sqlsrv_query($conn, "SELECT ProviderID, ProviderName FROM Providers WHERE Status = 1 ORDER BY ProviderName");
	$row3 = sqlsrv_fetch_array($result3,2);
	$result4 = sqlsrv_query($conn, "SELECT SpecimenID, SpecimenType FROM SpecimenType WHERE RowStatus = 1 ORDER BY SpecimenType");
	$row4 = sqlsrv_fetch_array($result4,2);
	$result5 = sqlsrv_query($conn, "SELECT TestID,TestName FROM Tests WHERE Status = 1 ORDER BY TestName");
	$testtable = array();
	while ($row = sqlsrv_fetch_array($result5,2)) {
		$testtable[] = $row;
	}
	$testquery = sqlsrv_query($conn, "SELECT ord.PatientID as PatientID, ord.OrderID as OrderID,* FROM Orders ord INNER JOIN 
	Patients pa ON ord.PatientID = pa.PatientID AND ord.clientID = pa.clientID Left JOIN SpecimenType sp ON sp.SpecimenType = ord.SpecimenType Left JOIN OrderTests ot ON ord.OrderID = ot.OrderID Left JOIN Tests t ON t.TestID = ot.TestID WHERE 
	NameFirst = '$flag'" ) or die("database error:". sqlsrv_error($conn));
	$testrow = array();
	while ($row = sqlsrv_fetch_array($testquery,2)) {
		// Loop through each result set and add to result array
		$testrow[] = $row;
	}
	if (isset($_GET['selname'])) { 
		$query1 = sqlsrv_query($conn, "SELECT Orders.PatientID as PatientID, Orders.OrderID as OrderID,*	FROM Orders INNER JOIN Patients ON Orders.PatientID = Patients.PatientID AND Orders.ClientID = Patients.ClientID 
		LEFT JOIN SpecimenType ON Orders.SpecimenType = SpecimenType.SpecimenType Left JOIN OrderTests ON Orders.OrderID = OrderTests.OrderID Left JOIN Tests ON Tests.TestID = OrderTests.TestID
		WHERE NameFirst = '$flag'") or die("database error:". sqlsrv_error($conn));	
		$Orderrow = sqlsrv_fetch_array($query1,2); 		
		$query = sqlsrv_query($conn, "SELECT *	FROM Patients WHERE NameFirst = '$flag'") or die("database error:". sqlsrv_error($conn));			
		$row = sqlsrv_fetch_array($query,2);
	}

?>
<style>
* {box-sizing: border-box}
/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}
/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
}
.tablink:hover {
  background-color: #777;
}
/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
#Patient {background-color: lightblue;}
#Test {background-color: #bad63e;}
#Save {background-color: #d69a9a;}
</style>
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
		<a>				
			<a id="logo" class="main-logo" style="margin-top:20px;margin-left:10%;color: #ff0000;font-size: 40px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Statlab
			<a id="logo" class="main-logo" style="margin-bottom:-10px; color: #209948;font-size: 22px;line-height: 36px; font-family: '  Open Sans', sans-serif;">Mobile
		</a>
		<a href="logout.php" style="color: #ffffff;float:right;margin-top:20px; margin-right:10%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><i class="fa fa-sign-out"></i> Log out</a>
		<a style="color: #42f5b3;float:right;margin-top:20px; margin-right:2%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><label id="returnmenu"><i class="fa fa-home"></i> Main Menu</label></a>
	</div>
</header>
<button class="tablink" style="width:33.3%;" onclick="openPage('Patient', this, 'lightblue')" id = "PatientPage">Patient Info</button>
<button class="tablink" style="width:33.3%;" id = "TestPage">Test Info</button>
<button class="tablink" style="width:33.4%;" id = "SavePage">Save Print Send</button>
<div id="Patient" class="tabcontent">
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">	
		<!-- CTA Section end -->
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
				<h2 style="text-align:center;">Patient Info</h2>
					<form action="patient_info.php" method="post" style="border-style: solid; border-width:2px; border-radius:10px;">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10" style="border-style: dotted; border-width:2px; border-radius:10px; margin-top:10px; margin-bottom:-5px;">
								<div class="col-sm-12" style="margin-top:10px;">
									<div class="form-group">		
										<div class="alert alert-success" id="alertform6" style="display: none;  font-size:32px; text-align:center;">
											Can not find such patient!
										</div>			
									</div>
									<div class="form-group row">
										<label for="lname" class="col-sm-1 col-form-label" style="text-align: left;">*</label>
										<div class="col-sm-11">
											<input type="text" style="text-align: left;" class="form-control" value="<?php if($row!=null){echo $row['NameLast'];} else{echo '';} ?>"  id="lname" name="lname" placeholder="Last name" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="fname" class="col-sm-1 col-form-label" style="text-align: left;">*</label>
										<div class="col-sm-11">
											<input type="text" class="form-control" value="<?php if($row!=null){echo $row['NameFirst'];} else{echo '';}?>" id="fname" name="fname" placeholder="First name" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="mrn" class="col-sm-1 col-form-label" style="text-align: left;"></label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="<?php if($row!=null){echo $row['MRN'];} else{echo '';}?>" id="mrn" name="mrn" placeholder="Medical Record No">
										</div>
										<div class="col-sm-3">
											<button type="button" id="find" style="width:100%;" onclick="showresults()" class="btn btn-md btn-danger">Find&nbsp;<i class="fa fa-search"></i></button>
										</div>
									</div>	
								</div>
							</div>
							<div class="col-md-1"></div>	
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10" style="margin-top:10px;">
								<div class="col-sm-12">
									<div class="form-group row">
										<label for="dob" class="col-sm-1 col-form-label" style="text-align: left;">*</label>
										<div class="col-sm-11">
											<input type="tel" style="text-align: left;" class="form-control" value="<?php if($row!=null){echo $row['DOB']->format('m/d/Y');} else{echo '';} ?>" id="dob" maxlength="10" placeholder="Input your DOB" name="dob" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
										</div>
									</div>
									<div class="form-group row" style="margin-bottom:5px;">
										<label for="sex" class="col-sm-1 col-form-label" style="text-align: left;">*</label>
										<label for="sex" class="col-sm-2 col-form-label" style="text-align: right;"><h3 style="color:#495057">Sex</h3></label>
										<label for="male" class="col-sm-2 col-form-label" style="text-align: right;"><h4 style="color:#495057">M</h4></label>
										<div class="col-sm-2">
											<input type="radio" class="form-control" id="male" name="gender" <?php if($row!=null&&$row['Sex']=='M'){echo 'checked';} else{echo 'checked';}?> required>
										</div>
										<label for="female" class="col-sm-2 col-form-label" style="text-align: right;"><h4 style="color:#495057">F</h4></label>
										<div class="col-sm-2">
											<input type="radio" class="form-control" id="female" name="gender"  <?php if($row!=null&&$row['Sex']=='F'){echo 'checked';} else{echo '';}?> required>
										</div>
									</div>
									<div class="from-group row">
										<label for="race" class="col-sm-3 col-form-label" style="text-align: right;"><h3 style="color:#495057">Race</h3></label>
										<div class="col-sm-9">
											<select class="form-control" id="racecombo" >
												<option value="-1">- Select -</option>
												<?php
													if (sqlsrv_num_fields($result1) > 0) {												
														do {	?>						
															<option value="<?php echo $row1['RaceID']?>" <?php if ($row!=null && $row['RaceID']==$row1['RaceID']) { ?>selected<?php } ?> ><?php echo $row1['RaceDesc']?></option>
														<?php }while($row1 = sqlsrv_fetch_array($result1,2)) ;
													}
												?>
											</select>
										</div>
									</div>
									<div class="from-group row" style="margin-top:5px;">
										<label for="ethnicity" class="col-sm-3 col-form-label" style="text-align: left;"><h3 style="color:#495057">Ethnitity</h3></label>
										<div class="col-sm-9">
											<select class="form-control" id="ethnicitycombo">
												<option value="-1">- Select -</option>
												<?php
													if (sqlsrv_num_fields($result2) > 0) {												
															do{	?>						
															<option value="<?php echo $row2['EthnicityID'] ?>" <?php if ($row!=null && $row['EthnicityID']==$row2['EthnicityID']) { ?>selected<?php } ?> ><?php echo $row2['Ethnicity']?></option>
														<?php }while($row2 = sqlsrv_fetch_array($result2,2));
													}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
				</div>
				<div class="col-xl-6">
				<h2 style="text-align:center;">Contact Info</h2>
					<form style="border-style: solid; border-width:2px; border-radius:10px;">	
						<br>					
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group row">			
									<input type="text" class="form-control" id="address" name="address" value="<?php if($row!=null){echo $row['StreetAddress'];} else{echo '';}?>" placeholder="Street Address">
								</div>
								<div class="form-group row">			
									<input type="text" class="form-control" id="zip" name="zip" value="<?php if($row!=null){echo $row['ZipCode'];} else{echo '';}?>" placeholder="Zip Code">
								</div>	
								<div class="form-group row">			
									<input type="text" class="form-control" id="city" name="city" value="<?php if($row!=null){echo $row['City'];} else{echo '';}?>" placeholder="City">
								</div>	
								<div class="form-group row">
									<input type="text" class="form-control" id="state" name="state" value="<?php if($row!=null){echo $row['State'];} else{echo '';}?>" placeholder="State">
								</div>
								<div class="form-group row">
									<input type="text" class="form-control" id="county" name="county" value="<?php if($row!=null){echo $row['County'];} else{echo '';}?>"
									placeholder="County">
								</div>							
								<div class="form-group row">			
									<input type="tel" class="form-control" id="phone" name="phone" value="<?php if($row!=null){echo $row['Telephone'];} else{echo '';}?>" placeholder="Telephone">
								</div>
								<div class="form-group row">			
									<input type="email" class="form-control" id="email" name="email" value="<?php if($row!=null){echo $row['Email'];} else{echo '';}?>" placeholder="Email Address">
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
				</div>			
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<button id="forward_test" style="width:8%"  class="btn btn-primary">Next &raquo;</button>
				</div>
			</div>
			<br>
			<div class="form-group">		
				<div class="alert alert-danger" id="alertform5" style="display: none;  font-size:32px; text-align:center;">
					Please fill all the required fields!
				</div>			
			</div>
		</div>
	</section>
</div>
<div id="Test" class="tabcontent">
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
				<h2 style="text-align:center;">Order Information</h2>
					<form style="border-style: solid; border-width:2px; border-radius:10px;">
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group row">
									<label for="dob" class="col-sm-4 col-form-label" style="text-align: left;">Order Date</label>
									<label for="dob" class="col-sm-1 col-form-label" style="text-align: right;">*</label>
									<div class="col-sm-7">
										<!-- <label class="label" style="font-size:22px;">Order Date</label> -->
										<input type="date" class="form-control" id="od" maxlength="10" placeholder="Input your OrderDate" name="od" 
										value="<?php echo date_format($today,"Y-m-d");?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
									</div>
								</div>
								<div class="form-group row">
									<label for="dob" class="col-sm-4 col-form-label" style="text-align: left;">Provider</label>
									<label for="dob" class="col-sm-1 col-form-label" style="text-align: right;">*</label>
									<div class="col-sm-7">
										<!-- <label class="label" style="font-size:22px;">Provider</label> -->
										<select class="form-control" id="provider">
											<option value="0">- Select -</option>
												<?php
													do { ?>						
														<option value="<?php echo $row3['ProviderID'] ?>"><?php echo $row3['ProviderName'] ?></option>
													<?php }while($row3 = sqlsrv_fetch_array($result3,2));
													?>
										</select>									
									</div>
								</div>
							<div class="col-md-1"></div>
							</div>
						</div>	
					</form>
				<h2 style="text-align:center; margin-top:15px;">Specimen Information</h2>
				<form style="border-style: solid; border-width:2px; border-radius:10px;">
					<br>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="form-group row">
								<label for="cbt" class="col-sm-5 col-form-label" style="text-align: left;">Collected By/Tech</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" id="bytech" name="bytech" placeholder="">
								</div>
							</div>				
							<div class="form-group row">
								<label for="dob" class="col-sm-4 col-form-label" style="text-align: left;">Collection</label>
								<label for="dob" class="col-sm-1 col-form-label" style="text-align: right;">*</label>
								<div class="col-sm-7">
								<input type="datetime-local" class="form-control" id="cdt" maxlength="10" 
									value="<?php echo date_format($today,('Y-m-d\TH:i'));?>" placeholder="Collection Date Time"  name="cdt" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
								</div>
							</div>
							<div class="form-group row">
								<label for="dob" class="col-sm-5 col-form-label" style="text-align: left;">Specimen Type</label>
								<div class="col-sm-7">
									<select class="form-control" id="st">
									<option value="0">- Select -</option>
									<?php
										if (sqlsrv_num_fields($result4) > 0) {												
											do {?>						
												<option value="<?php echo $row4['SpecimenID'] ?>"><?php echo $row4['SpecimenType'] ?></option>
											<?php } while($row4 = sqlsrv_fetch_array($result4,2));
										}
									?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</form>
				</div>
				<div class="col-xl-6">
				<h2 style="text-align:center;">Tests Ordered</h2>
					<form style="border-style: solid; border-width:2px; border-radius:10px;">
						<br>
						<div class="row">
							<div class="col-md-11">
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;">*</label>
									<div class="col-sm-10">
										<select class="form-control" id="st1">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[0]) && $table['TestID'] == $testrow[0]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>			
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st2">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[1]) && $table['TestID'] == $testrow[1]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st3">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[2]) && $table['TestID'] == $testrow[2]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st4">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[3]) && $table['TestID'] == $testrow[3]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st5">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[4]) && $table['TestID'] == $testrow[4]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st6">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[5]) && $table['TestID'] == $testrow[5]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
								<div class="form-group row">
									<label for="fname" class="col-sm-2 col-form-label" style="text-align: right;"></label>
									<div class="col-sm-10">
										<select class="form-control" id="st7">
											<option value="0">- Select -</option>
											<?php foreach ($testtable as $table) { ?>
												<option value="<?php echo $table['TestID']?>" 
												<?php if ($row!=null && isset($testrow[6]) && $table['TestID'] == $testrow[6]['TestID'] ) { ?><?php } ?> ><?php echo $table['TestName']?></option>
											<?php } ?>
										</select>
									</div>
								</div>	
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
				</div>			
			</div>
			<br>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<button class="btn btn-primary" id = "return_patient" >&laquo Previous</button></a>
					<button class="btn btn-primary" style="width:8%"  id="forward_save" >Next &raquo;</button></a>
				</div>
			</div>
			<br>
			<div class="form-group">		
				<div class="alert alert-danger" id="alertform4" style="display: none;  font-size:32px; text-align:center;">
					Please fill all the required fields!
				</div>			
			</div>
		</div>	
	</section>
</div>
<div id="Save" class="tabcontent">
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<h2 style="text-align:center;">Order Summary</h2>
					<form style="border-style: solid; border-width:2px; border-radius:10px;">					
						<div class="row">
							<div class="col-md-12">
								<fieldset>
									<div class="form-group">
									<br>
									<!-- <label for="pi" class="col-sm-12 control-label" style="text-align: left;">Patient Information</label> -->
										<div class="col-sm-12">
											<textarea class="form-control" id="content" name="content" rows="20"></textarea>
										</div>
									</div>
								</fieldset>              
							</div>
						</div>		
					</form>
				</div>
				<div class="col-xl-6">
					<form>
						<br><br><br><br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group">		
									<div class="alert alert-success" id="alertform1" style="display: none;  font-size:32px; text-align:center;">
										Successfully Saved Order!
									</div>			
								</div>
								<div class="form-group">		
									<div class="alert alert-danger" id="alertform2" style="display: none;  font-size:32px; text-align:center;">
										Successfully Deleted Order!
									</div>			
								</div>
								<div class="form-group">		
									<div class="alert alert-success" id="alertform3" style="display: none;  font-size:32px; text-align:center;">
										Successfully Sent to Laboratory!
									</div>			
								</div>
								<div class="form-group row">
									<div class="col-md-6" >
										<button type="button" class="btn btn-primary" style="width:100%;" onclick="saveinfo()" id="save"><i class="fa fa-save"></i>   Save</button>
									</div>
									<div class="col-md-6">
										<button type="button" class="btn btn-primary" style="width:100%; " onclick="deleteinfo()" id="delete" disabled="disabled"><i class="fa fa-trash"></i>   DELETE</button>
									</div>
								</div>	
								<div class="form-group row">
									<div class="col-md-12">
										<button type="button" class="btn btn-primary" style="width:100%;" id="send" onclick="sendlab()" disabled="disabled"><i class="fa fa-send"></i>   SEND to Laboratory</button>
									</div>	
								</div>		
								<div class="form-group row">
									<div class="col-md-12">
										<button type="button" class="btn btn-primary" style="width:100%;" id="printRF" onclick="printRF()" disabled="disibled"><i class="fa fa-print"></i>   PRINT Requisiton Form</button>
									</div>							 
								</div>			
								<div class="form-group row">
									<div class="col-md-12">
										<button type="button" class="btn btn-primary" style="width:100%;" id="printSL" onclick="printSL()" disabled="disabled"><i class="fa fa-print"></i>   PRINT Specimen Labels</button>
									</div>	
								</div>
							
								<div class="row">
									<div class="col-md-12" style="text-align: center;">
										<button type="button" id="return_test" class="btn btn-primary" >&laquo Previous</button>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>			
					</form>		
				</div>						
			</div>			
			<br>
		</div>	
	
	</section>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("PatientPage").click();
function showresults(){
	$.post("patientList.php",{firstname: $("#fname").val(), lastname: $("#lname").val(), mrn: $("#mrn").val(), type:0}, function(data, status){
		console.log(status);
		if(status == "success"){
			formdata = JSON.parse(data);
			console.log(formdata[0].length);
			if (formdata[0][0]== null)
			{
				$("#alertform6").show();
			}	
			if(formdata[0].length!=1)
			{
				window.location.href = "patient_listing.php?firstname="+$("#fname").val()+"&lastname="+$("#lname").val()+"&mrn="+$("#mrn").val()+"&type="+'0';
			}
			$('#fname').val(formdata[0][0].NameFirst);
			$('#lname').val(formdata[0][0].NameLast);
			$('#mrn').val(formdata[0][0].MRN);
			$('#dob').val(formdata[0][0].DOB.date.slice(5,7)+"/"+formdata[0][0].DOB.date.slice(8,10)+"/"+formdata[0][0].DOB.date.slice(0,4));
			$('#address').val(formdata[0][0].StreetAddress);
			$('#zip').val(formdata[0][0].ZipCode);
			$('#city').val(formdata[0][0].City);
			$('#state').val(formdata[0][0].State);
			$('#county').val(formdata[0][0].County);
			$('#phone').val(formdata[0][0].Telephone);
			$('#email').val(formdata[0][0].Email);
			if (formdata[0][0].Sex=="M"){
				document.getElementById("male").checked = true;
				document.getElementById("female").checked = false;
			}
			else {
				document.getElementById("male").checked = false;
				document.getElementById("female").checked = true;
			}			
			$("#racecombo option").each(function() {
				if ($(this).val() == formdata[0][0].RaceID) {
					$("#racecombo").val(formdata[0][0].RaceID)
				}
			})
			$("#ethnicitycombo option").each(function() {
				if ($(this).val() == formdata[0][0].EthnicityID) {
					$("#ethnicitycombo").val(formdata[0][0].EthnicityID)
				}
			})
		}	
	});
}
</script>
<script>
$('#forward_test').click(function(){
	if($("#fname").val()==0 ||$("#lname").val()==0 ||$("#dob").val()==0){
		// alert('you did not input all required data');
		$("#alertform5").show();			
	}
	else{
		$("#alertform5").hide();
		openPage('Test', document.getElementById("TestPage"), '#bad63e');
	}
});
$('#forward_save').click(function(){
	if( $("#provider").val() == 0 || $("#st1").val() == 0){
		// alert('you did not input all required data');	
		$("#alertform4").show();
	}
	else{
		$("#alertform4").hide();
		var spectypetext = document.getElementById("st").options[st.selectedIndex].text;
		var testtext1 = document.getElementById("st1").options[st1.selectedIndex].text;
		var testtext2 = document.getElementById("st2").options[st2.selectedIndex].text;
		var testtext3 = document.getElementById("st3").options[st3.selectedIndex].text;
		var testtext4 = document.getElementById("st4").options[st4.selectedIndex].text;
		var testtext5 = document.getElementById("st5").options[st5.selectedIndex].text;
		var testtext6 = document.getElementById("st6").options[st6.selectedIndex].text;
		var testtext7 = document.getElementById("st7").options[st7.selectedIndex].text;
		var t_provider = document.getElementById("provider").options[provider.selectedIndex].text;
		var t_coldate = $("#cdt").val().slice(5,7)+"/"+$("#cdt").val().slice(8,10)+"/"
			+$("#cdt").val().slice(0,4)+" "+$("#cdt").val().slice(11,13)+":"+$("#cdt").val().slice(14,16);
		var t_orderdate = $("#od").val().slice(5,7)+"/"+$("#od").val().slice(8,10)+"/"
			+$("#od").val().slice(0,4);
		var p_lname = $("#lname").val();
		var p_fname = $("#fname").val();
		var p_mrn = $("#mrn").val();
		var p_dob =$("#dob").val();
		if ($("#address").val()==0){
			var p_address = "Not Provided";
		} else{
			var p_address = $("#address").val();
		}
		if ($("#city").val()==0){
			var p_city = "Not Provided";
		} else{
			var p_city = $("#city").val();
		}
		if ($("#state").val()==0){
			var p_state = "Not Provided";
		} else{
			var p_state = $("#state").val();
		}
		if ($("#zip").val()==0){
			var p_zipcode = "Not Provided";
		} else{
			var p_zipcode = $("#zip").val();
		}
		if ($("#county").val()==0){
			var p_county = "Not Provided";
		} else{
			var p_county = $("#county").val();
		}
		if ($("#phone").val()==0){
			var p_phone = "Not Provided";
		} else{
			var p_phone = $("#phone").val();
		}
		if ($("#email").val()==0){
			var p_email = "Not Provided";
		} else{
			var p_email = $("#email").val();
		}
		if ($("#bytech").val()==0){
			var t_coltech = "Not Provided";
		} else{
			var t_coltech = $("#bytech").val();
		}
		if ($("#st").val()==0){
			var spectypetext = "Not Provided";
		} else{
			var t_spectype = $("#st").val();
		}
		if ($("#st1").val()==0){
			var testtext1 = "";
		} 
		if ($("#st2").val()==0){
			var testtext2 = "";
		} 
		if ($("#st3").val()==0){
			var testtext3 = "";
		} 
		if ($("#st4").val()==0){
			var testtext4 = "";
		} 
		if ($("#st5").val()==0){
			var testtext5 = "";
		}
		if ($("#st6").val()==0){
			var testtext6 = "";
		}
		if ($("#st7").val()==0){
			var testtext7 = "";
		}
		$('#content').val('-----------------Patient Info---------------------------------'+'\n'+'Name Last:'+'\t'+'\t'+'\t'+p_lname+'\n'+'Name First:'+'\t'+'\t'+'\t'+p_fname+'\n'+'DOB:'+'\t'+'\t'+'\t'+'\t'+p_dob+'\n'+'Address:'+'\t'+'\t'+'\t'+p_address+'\n'+'City:'+'\t'+'\t'+'\t'+'\t'+p_city+'\n'+'State:'+'\t'+'\t'+'\t'+'\t'+p_state+'\n'+
		'Zip Code:'+'\t'+'\t'+'\t'+p_zipcode+'\n'+'County:'+'\t'+'\t'+'\t'+'\t'+p_county+'\n'+'Phone:'+'\t'+'\t'+'\t'+'\t'+p_phone+'\n'+'Email:'+'\t'+'\t'+'\t'+'\t'+p_email+'\n'
		+'---------------------Test Info---------------------------------'+'\n'+'Date Ordered:'+'\t'+'\t'+t_orderdate+'\n'+'Provider:'+'\t'+'\t'+'\t'+t_provider
		+'\n'+'Collection Date:'+'\t'+'\t'+t_coldate+'\n'+'Collection Tech:'+'\t'+'\t'+t_coltech+'\n'+'Specimen Type:'+'\t'+'\t'+spectypetext+'\n'+'Tests Ordered:'+'\t'+'\t'+testtext1+'\n'+
		'\t'+'\t'+'\t'+'\t'+'\t'+testtext2+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext3+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext4+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext5+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext6+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext7);
		openPage('Save', document.getElementById("SavePage"), '#d69a9a');
	}
});

$('#return_patient').click(function(){
	openPage('Patient', document.getElementById("PatientPage"), 'lightblue');
});
$("#TestPage").click(function(){		
	if($("#fname").val()==0 ||$("#lname").val()==0 ||$("#dob").val()==0){
		$("#alertform5").show();		
	}
	else{
		$("#alertform5").hide();	
		openPage('Test', document.getElementById("TestPage"), '#bad63e');
	}
});
$("#SavePage").click(function(){		
	if( $("#provider").val() == 0 || $("#st1").val() == 0){
		$("#alertform4").show();
	}
	else{
		$("#alertform4").hide();
		var spectypetext = document.getElementById("st").options[st.selectedIndex].text;
		var testtext1 = document.getElementById("st1").options[st1.selectedIndex].text;
		var testtext2 = document.getElementById("st2").options[st2.selectedIndex].text;
		var testtext3 = document.getElementById("st3").options[st3.selectedIndex].text;
		var testtext4 = document.getElementById("st4").options[st4.selectedIndex].text;
		var testtext5 = document.getElementById("st5").options[st5.selectedIndex].text;
		var testtext6 = document.getElementById("st6").options[st6.selectedIndex].text;
		var testtext7 = document.getElementById("st7").options[st7.selectedIndex].text;
		var t_provider = document.getElementById("provider").options[provider.selectedIndex].text;
		var t_coldate = $("#cdt").val().slice(5,7)+"/"+$("#cdt").val().slice(8,10)+"/"
			+$("#cdt").val().slice(0,4)+" "+$("#cdt").val().slice(11,13)+":"+$("#cdt").val().slice(14,16);
		var t_orderdate = $("#od").val().slice(5,7)+"/"+$("#od").val().slice(8,10)+"/"
			+$("#od").val().slice(0,4);
		var p_lname = $("#lname").val();
		var p_fname = $("#fname").val();
		var p_mrn = $("#mrn").val();
		var p_dob =$("#dob").val();
		if ($("#address").val()==0){
			var p_address = "Not Provided";
		} else{
			var p_address = $("#address").val();
		}
		if ($("#city").val()==0){
			var p_city = "Not Provided";
		} else{
			var p_city = $("#city").val();
		}
		if ($("#state").val()==0){
			var p_state = "Not Provided";
		} else{
			var p_state = $("#state").val();
		}
		if ($("#zip").val()==0){
			var p_zipcode = "Not Provided";
		} else{
			var p_zipcode = $("#zip").val();
		}
		if ($("#county").val()==0){
			var p_county = "Not Provided";
		} else{
			var p_county = $("#county").val();
		}
		if ($("#phone").val()==0){
			var p_phone = "Not Provided";
		} else{
			var p_phone = $("#phone").val();
		}
		if ($("#email").val()==0){
			var p_email = "Not Provided";
		} else{
			var p_email = $("#email").val();
		}
		if ($("#bytech").val()==0){
			var t_coltech = "Not Provided";
		} else{
			var t_coltech = $("#bytech").val();
		}
		if ($("#st").val()==0){
			var spectypetext = "Not Provided";
		} else{
			var t_spectype = $("#st").val();
		}
		if ($("#st1").val()==0){
			var testtext1 = "";
		} 
		if ($("#st2").val()==0){
			var testtext2 = "";
		} 
		if ($("#st3").val()==0){
			var testtext3 = "";
		} 
		if ($("#st4").val()==0){
			var testtext4 = "";
		} 
		if ($("#st5").val()==0){
			var testtext5 = "";
		}
		if ($("#st6").val()==0){
			var testtext6 = "";
		}
		if ($("#st7").val()==0){
			var testtext7 = "";
		}
		$('#content').val('-----------------Patient Info---------------------------------'+'\n'+'Name Last:'+'\t'+'\t'+'\t'+p_lname+'\n'+'Name First:'+'\t'+'\t'+'\t'+p_fname+'\n'+'DOB:'+'\t'+'\t'+'\t'+'\t'+p_dob+'\n'+'Address:'+'\t'+'\t'+'\t'+p_address+'\n'+'City:'+'\t'+'\t'+'\t'+'\t'+p_city+'\n'+'State:'+'\t'+'\t'+'\t'+'\t'+p_state+'\n'+
		'Zip Code:'+'\t'+'\t'+'\t'+p_zipcode+'\n'+'County:'+'\t'+'\t'+'\t'+'\t'+p_county+'\n'+'Phone:'+'\t'+'\t'+'\t'+'\t'+p_phone+'\n'+'Email:'+'\t'+'\t'+'\t'+'\t'+p_email+'\n'
		+'---------------------Test Info---------------------------------'+'\n'+'Date Ordered:'+'\t'+'\t'+t_orderdate+'\n'+'Provider:'+'\t'+'\t'+'\t'+t_provider
		+'\n'+'Collection Date:'+'\t'+'\t'+t_coldate+'\n'+'Collection Tech:'+'\t'+'\t'+t_coltech+'\n'+'Specimen Type:'+'\t'+'\t'+spectypetext+'\n'+'Tests Ordered:'+'\t'+'\t'+testtext1+'\n'+
		'\t'+'\t'+'\t'+'\t'+'\t'+testtext2+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext3+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext4+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext5+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext6+'\n'+'\t'+'\t'+'\t'+'\t'+'\t'+testtext7);
		openPage('Save', document.getElementById("SavePage"), '#d69a9a');
	}
});	
$('#return_test').click(function(){
	openPage('Test', document.getElementById("TestPage"), '#bad63e');
});

$('#returnmenu').click(function(){
	if (document.getElementById("delete").disabled = false)
	{
		window.location.href = "menu_facility.php";
	}
	else { if (confirm("You will lose all data! Will you continue?")){
		window.location.href = "menu_facility.php";
	}
}
});

function saveinfo(){
	document.getElementById("save").disabled = true;
	document.getElementById("delete").disabled = false;
	document.getElementById("send").disabled = false;
	var spectypetext = document.getElementById("st").options[st.selectedIndex].text;
	var testtext1 = document.getElementById("st1").options[st1.selectedIndex].text;
	var testtext2 = document.getElementById("st2").options[st2.selectedIndex].text;
	var testtext3 = document.getElementById("st3").options[st3.selectedIndex].text;
	var testtext4 = document.getElementById("st4").options[st4.selectedIndex].text;
	var testtext5 = document.getElementById("st5").options[st5.selectedIndex].text;
	var testtext6 = document.getElementById("st6").options[st6.selectedIndex].text;
	var testtext7 = document.getElementById("st7").options[st7.selectedIndex].text;
	var providertext = document.getElementById("provider").options[provider.selectedIndex].text;
	var t_coldate = $("#cdt").val().slice(5,7)+"/"+$("#cdt").val().slice(8,10)+"/"
		+$("#cdt").val().slice(0,4)+" "+$("#cdt").val().slice(11,13)+":"+$("#cdt").val().slice(14,16);
	var t_orderdate = $("#od").val().slice(5,7)+"/"+$("#od").val().slice(8,10)+"/"
		+$("#od").val().slice(0,4);
	var p_lname = $("#lname").val();
	var p_fname = $("#fname").val();
	var p_mrn = $("#mrn").val();
	var p_dob = $("#dob").val();
	var p_race = $("#racecombo").val();
	var p_ethn = $("#ethnicitycombo").val();
	var t_spectype = $("#st").val();
	var t_provider = $("#provider").val();
	var t_test1 = $("#st1").val();
	var t_test2 = $("#st2").val();
	var t_test3 = $("#st3").val();
	var t_test4 = $("#st4").val();
	var t_test5 = $("#st5").val();
	var t_test6 = $("#st6").val();
	var t_test7 = $("#st7").val();
	var p_address = $("#address").val();
	var p_city = $("#city").val();
	var p_state = $("#state").val();
	var p_zipcode = $("#zip").val();
	var p_county = $("#county").val();
	var p_phone = $("#phone").val();
	var p_email = $("#email").val();
	var t_coltech = "";
	var t_coltech = $("#bytech").val();
	if ($("#st").val()==0){
		var spectypetext = "";
	}
	$.post("saveresult.php",{p_lname: p_lname, p_fname: p_fname, p_dob: p_dob, p_mrn: p_mrn,p_address:p_address,p_city:p_city,p_state:p_state,p_zipcode:p_zipcode,p_race:p_race,p_ethn:p_ethn,
	p_county:p_county,p_phone:p_phone,p_email:p_email,t_orderdate:t_orderdate,t_provider:t_provider,t_coldate:t_coldate,t_coltech:t_coltech,t_spectype:spectypetext,
	t_test1:t_test1,t_test2:t_test2,t_test3:t_test3,t_test4:t_test4,t_test5:t_test5,t_test6:t_test6,t_test7:t_test7,type:0}, function(data, status){
		console.log(data);
		// alert(data);
		if(status == "success"){
			$("#alertform1").show();
		}	
	});	
}
function deleteinfo(){
	$.post("deleteorder.php",{type:0}, function(data, status){
		console.log(data);
		// alert(data);
		if(status == "success"){
			$("#alertform2").show();
		}	
	});	
	document.getElementById("delete").disabled = true;
}
function printRF(){

}
function printSL(){

}
function sendlab(){
	$.post("sendorder.php",{type:0}, function(data, status){
		console.log(data);
		// alert(data);
		if(status == "success"){
			$("#alertform3").show();
		}	
	});	
	document.getElementById("save").disabled = true;
	document.getElementById("delete").disabled = true;
	document.getElementById("send").disabled = true;
	document.getElementById("printRF").disabled = false;
	document.getElementById("printSL").disabled = false;
}
</script>
<script type="text/javascript" src="./assets/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.maskedinput-1.2.2-co.min.js"></script>
	<script type="text/javascript">
	jQuery(function($){
		$("#dob").mask("99/99/9999",{placeholder: 'mm/dd/yyyy'});
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.maskedinput-1.2.2-co.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<?php include('./footer.php');?>	