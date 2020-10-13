<?php
	include('./header.php');
	$flag = $_GET['orderid'] = isset($_GET['orderid']) ? $_GET['orderid'] : '';
	$query = sqlsrv_query($conn, "SELECT DISTINCT 
	Orders.ReqNo as Barcode,
	ISNULL(Users.ClientName,'NOT PROVIDED') as ClientName, 
	Orders.ClientID,
	CONVERT(VARCHAR,Orders.DateOrdered,101) as DateOrdered, 
	Providers.ProviderName, 
	CONVERT(VARCHAR,Orders.DateCollected,101) + ' ' + CONVERT(VARCHAR,Orders.DateCollected,108) as DateCollected, 
	ISNULL(Orders.CollectedBy,'NOT PROVIDED') as CollectedBy, 
	ISNULL(Orders.SpecimenType,'NOT PROVIDED') as SpecimenType, 
	Orders.ReqNo,
	Orders.OrderID,
	Patients.NameLast + ', ' + Patients.NameFirst as PatientName,
	Patients.MRN + ' / ' + CONVERT(VARCHAR(36),Patients.PatientID) as MRNPID,
	CONVERT(VARCHAR,Patients.DOB,101) + ' ' + Patients.Sex as DOBSex,  
	Race.RaceDesc, Ethnicity.Ethnicity, 
	ISNULL(Patients.StreetAddress,'NOT PROVIDED') as StreetAddress, ISNULL(Patients.ZipCode, 'NOT PROVIDED') as ZipCode, 
	ISNULL(Patients.City, 'NOT PROVIDED') as City, ISNULL(Patients.State, 'NOT PROVIDED') as State, ISNULL(Patients.County,'NOT PROVIDED') as County,
	ISNULL(Patients.Telephone,'NOT PROVIDED') as Telephone, ISNULL(Patients.Email, 'NOT PROVIDED') as Email
	FROM Ethnicity 
	INNER JOIN Patients ON Ethnicity.EthnicityID = Patients.EthnicityID 
	INNER JOIN Race ON Patients.RaceID = Race.RaceID 
	INNER JOIN Orders ON Patients.PatientID = Orders.PatientID 
	INNER JOIN Providers ON Orders.ProviderID = Providers.ProviderID 
	INNER JOIN Users ON Orders.ClientID = Users.ClientID
	WHERE Orders.OrderID = '$flag'" ) or die("database error:". sqlsrv_error($conn));
	$result = array();
	$result[] = sqlsrv_fetch_array($query,2);
	while ($row = sqlsrv_fetch_array($query)) {
		// Loop through each result set and add to result array
		$result[] = $row;
	}
	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}
	$testsquery = sqlsrv_query($conn, "SELECT OrderTests.TestID, LEFT(Tests.TestName,35) as TestName, OrderTests.SID FROM OrderTests 
	INNER JOIN Tests ON OrderTests.TestID = Tests.TestID WHERE OrderTests.OrderID = '$flag'	ORDER BY OrderTests.SeqNo" ) or die("database error:". sqlsrv_error($conn));
	$test = array();
	$test[] = sqlsrv_fetch_array($testsquery,2);
	while ($row1 = sqlsrv_fetch_array($testsquery)) {
		// Loop through each result set and add to result array
		$test[] = $row1;
	}
	$data1 = array();
	foreach ($test as $row1) {
		$new = true;
		if ($new == true) {
			$row1['tests'][] = $row1['TestName'];
			$data1[] = $row1;
		}
	}
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
	<script type="text/javascript" src="./assets/js/code39.js"></script>
    <style type="text/css">
		@font-face{
		font-family: 'Free 3 of 9 Regular';
		font-size: 48px;
		text-align: left;
		src:url('./assets/icon-fonts/FREE3OF9.TTF'); 
		src:url('./assets/icon-fonts/FREE3OF9.TTF') format('truetype');	
		}
		.displaybarcode {font-family: Free 3 of 9 Regular; font-size: 48pt; text-align: left;}
		.titletext{
			text-align: left;
			font-weight: bold;
			font-size: 14pt;
			font-family: 'Courier New', Courier, monospace;
		}
		.contenttext{
			text-align: left;
			font-size: 11pt;
			font-family: 'Courier New', Courier, monospace;
		}
		u.dotted{
		border-bottom: 2px dashed #111;
		text-decoration: none; 
		}
	</style>
</head>	

<font family="MyFontName">
	<truetype path="./assets/icon-fonts/FREE3OF9.ttf"/>
</font>
<br><br>
<div class="Section1" style="background-color:white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src = "./assets/img/REQHeader.bmp">
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="inputdata" style="float: left;">
					<label style="font-family: Free 3 of 9 Regular; font-size: 48pt; text-align: left;"><?php if($row!=null){echo '*'.$row['Barcode'].'*';} else{echo '';} ?></label>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
				<label class="titletext">Client Information</label><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Name:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['ClientName'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Portal ID:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['ClientID'];} else{echo '';} ?></label>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<label class="titletext">Order Information</label><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Order Date:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['DateOrdered'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Provider:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['ProviderName'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Collection D/T:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['DateCollected'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Collector:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['CollectedBy'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Specimen Type:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['SpecimenType'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Requisition ID:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['ReqNo'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Golbal ID:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['OrderID'];} else{echo '';} ?></label>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<label class="titletext">Patient Information</label><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Name:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['PatientName'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">MRN/Portal ID:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['MRNPID'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">DOB / Sex:</label>	
			</div>
			<div class="col-sm-10">	
				<label class="contenttext"><?php if($row!=null){echo $row['DOBSex'];} else{echo '';} ?></label>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Race:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['RaceDesc'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Ethnicity:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['Ethnicity'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Street Address:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['StreetAddress'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Zip Code:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['ZipCode'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">City:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['City'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">State:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['State'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">County:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['County'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Telephone:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['Telephone'];} else{echo '';} ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="contenttext">Email:</label>	
			</div>
			<div class="col-sm-10">
				<label class="contenttext"><?php if($row!=null){echo $row['Email'];} else{echo '';} ?></label>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<label class="titletext">Tests Information</label><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-3">
				<label class="contenttext"><u class="dotted">Test ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label>
			</div>	
			<div class="col-md-6">
				<label class="contenttext"><u class="dotted">Test Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label>
			</div>	
			<div class="col-md-3">
				<label class="contenttext"><u class="dotted">Specimen ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></label>
			</div>	
			<?php 
			foreach ($test as $row1){
			?>
			<div class="col-md-3">				
			<label class="contenttext"><?php echo $row1['TestID'] ?></label>	
			</div>
			<div class="col-md-6">				
			<label class="contenttext"><?php echo $row1['TestName'] ?></label>
			</div>
			<div class="col-md-3">				
			<label class="contenttext"><?php echo $row1['SID'] ?></label>	
			</div>
			<?php 
			}
			?>
		</div>
	</div>
</div>
<br><br>
<script type="text/javascript">
function get_object(id) {
	var object = null;
	if (document.layers) {
		object = document.layers[id];
	} else if (document.all) {
		object = document.all[id];
	} else if (document.getElementById) {
		object = document.getElementById(id);
	}
	return object;
}
get_object("inputdata").innerHTML=DrawCode39Barcode(get_object("inputdata").innerHTML,1);

window.oncontextmenu = function () {
    window.print();
    event.preventDefault();
}
</script>
