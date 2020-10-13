<?php
	include('./header.php');
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
	define( 'SQLSRV_FETCH_ASSOC', 2 );
	$userid=$_SESSION['login_user'];
	$today = new DateTime();
	$firstDate = date_add($today, date_interval_create_from_date_string("-1 month"));
	$endDate = new DateTime();
	$fdate = isset($_GET['fdate']) ? $_GET['fdate'] : '';
	$edate = isset($_GET['edate']) ? $_GET['edate'] : '';
	$saved = isset($_GET['saved']) ? $_GET['saved'] : '';
	$sended = isset($_GET['sended']) ? $_GET['sended'] : '';
	$atlab = isset($_GET['atlab']) ? $_GET['atlab'] : '';
	$ready = isset($_GET['ready']) ? $_GET['ready'] : '';
	$start = isset($_GET['start']) ? 1 : 0;
	$date = array();
	$joindate = "1=1";
	if (isset($_GET['fdate'])){
		$date1 = "DateOrdered >= '$fdate'";
		$date[] = $date1;
	}
	if (isset($_GET['edate'])){
		$date2 = "DateOrdered <= '$edate'";
		$date[] = $date2;
	}
	if (isset($fdate)||isset($edate)) $joindate = implode(' and ', $date);
	$array = array();
	if (isset($_GET['saved'])&& ($saved=='1')){
		$string1 = "OrderStatus = 0";
		$array[] = $string1;
	}
	else{
		$string1 = '';
	}
	if (isset($_GET['sended'])&& ($sended=='1')){
		$string2 =  "OrderStatus = 10";
		$array[] = $string2;
	}
	else{
		$string2 = '';
	}
	if (isset($_GET['atlab'])&& ($atlab=='1')){
		$string3 =  "OrderStatus = 20";
		$array[] = $string3;
	}
	else{
		$string3 = '';
	}
	if (isset($_GET['ready'])&& ($ready=='1')){
		$string4 =  "OrderStatus = 30";
		$array[] = $string4;
	}
	else{
		$string4 = '';
	}
	if ($start == 1){
		$string = "1=1";
	}
	else {
		$string = "1=0";
	}
	
	if ($start == 1){
		$new = "1=1";
	}
	else {
		$new = "1=0";
	}

	if (count($array) > 0) $string = implode(' or ', $array);
	if (count($array) >0 ) $new = "(".$string.")"." and ".$joindate;
	if (isset($_GET)){
		$sql = "SELECT DateOrdered, ord.PatientID as PatientID, ord.OrderID as OrderID, NameLast, NameFirst, TestName, OrderStatus FROM Orders ord INNER JOIN 
		Patients pa ON ord.PatientID = pa.PatientID AND ord.clientID = pa.clientID	Left JOIN OrderTests ot ON ord.OrderID = ot.OrderID Left JOIN Tests t ON t.TestID = ot.TestID 
		WHERE $new ORDER BY DateOrdered, NameFirst";
		$query = sqlsrv_query($conn, $sql ) or die("database error:". sqlsrv_error($conn));
		$result = array();
		while ($row = sqlsrv_fetch_array($query, 2)) {
			// Loop through each result set and add to result array
			if ($row == null) continue;
			$result[] = $row;
		}
		$data = array();
		foreach ($result as $row) {
			$new = true;
			foreach ($data as $key => $record) {
				if ($record['OrderID'] == $row['OrderID']) {
					$data[$key]['tests'][] = $row['TestName'];
					$new = false;
					break;
				}
			}
			if ($new == true) {
				$row['tests'][] = $row['TestName'];
				$data[] = $row;
			}
		}
		
	} else {
		$query = sqlsrv_query($conn, "SELECT DateOrdered, ord.PatientID as PatientID, ord.OrderID as OrderID, NameLast, NameFirst, TestName, OrderStatus FROM Orders ord INNER JOIN 
		Patients pa ON ord.PatientID = pa.PatientID AND ord.clientID = pa.clientID	Left JOIN OrderTests ot ON ord.OrderID = ot.OrderID Left JOIN Tests t ON t.TestID = ot.TestID ORDER BY DateOrdered, NameFirst" ) or die("database error:". sqlsrv_error($conn));
		$result = array();
		while ($row = sqlsrv_fetch_array($query, 2)) {
			// Loop through each result set and add to result array
			if ($row == null) continue;
			$result[] = $row;
		}
		$data = array();
		foreach ($result as $row) {
			$new = true;
			foreach ($data as $key => $record) {
				if ($record['OrderID'] == $row['OrderID']) {
					$data[$key]['tests'][] = $row['TestName'];
					$new = false;
					break;
				}
			}
			if ($new == true) {
				$row['tests'][] = $row['TestName'];
				$data[] = $row;
			}
		}
	}
?>
<head>
	<style>
		.buttonlink {
			color: #887beb;;
			outline: none;
			cursor: pointer;
			font-size: 17px;
		}
		.buttonlink:hover {
			color: #a23456;
			border-bottom: 1px solid;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
	<link rel="icon" href="./assets/img/testnav.png">
	<link rel="icon" href="./assets/img/testnav.png">
	<link rel="stylesheet" href="./assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="./assets/js/browser.js"></script>
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

<div id="Patient" class="tabcontent">
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">	
		<!-- CTA Section end -->
		<div class="container" >
			<div class="row">
				<div class="col-md-6">	
					<br>	
						<div class="form-group row">
							<label for="fdate" class="col-sm-4 col-form-label" style="text-align: right;">Start Date</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="d1" maxlength="10" placeholder="Input your StartDate" name="fromdate" value="<?php if (isset($fdate)&&$fdate!="") { echo $fdate;} else {echo date_format($firstDate,"Y-m-d");}?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
							</div>
						</div>
						<br>	
						<div class="form-group row">
							<label for="edate" class="col-sm-4 col-form-label" style="text-align: right;">End Date</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" id="d2" maxlength="10" placeholder="Input your EndDate" name="enddate" value="<?php if (isset($edate)&&$edate!="") { echo $edate;} else {echo date_format($endDate,"Y-m-d");}?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
							
							</div>						
						</div>
				
				</div>
				<div class="col-md-6">
					<div class="form-group row">
						<label for="status" class="col-sm-4 col-form-label" style="text-align: right;">Order Status</label>
						<div class="col-sm-2">
							<form action="#" method="post" id="statusform" style="text-align: right;">
								<div id="toppings">
									<div class="checkbox">
										<label><input type="checkbox" id="saved" name="saved" <?php if(!isset($_GET['saved']) || (isset($_GET['saved']) && $_GET['saved']==1)){ ?>checked<?php } ?> onclick="myfunction(this)" >&nbsp;&nbsp;&nbsp;&nbsp;</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" id="sended" name="sended" <?php if(!isset($_GET['sended']) || (isset($_GET['sended']) && $_GET['sended']==1)){ ?>checked<?php } ?> onclick="myfunction(this)" >&nbsp;&nbsp;&nbsp;&nbsp;</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" id="atlab" name="atlab" <?php if(!isset($_GET['atlab']) || (isset($_GET['atlab']) && $_GET['atlab']==1)){ ?>checked<?php } ?>  onclick="myfunction(this)" >&nbsp;&nbsp;&nbsp;&nbsp;</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" id="ready" name="ready" <?php if(!isset($_GET['ready']) || (isset($_GET['ready']) && $_GET['ready']==1)){ ?>checked<?php } ?> onclick="myfunction(this)" >&nbsp;&nbsp;&nbsp;&nbsp;</label>
									</div>	
								</div>					
							</form>			
						</div>
						<div class="col-sm-6" style="text-align: left;">
							<div class="row">
								<label for="saved"> Saved</label>
							</div>		
							<br>
							<div class="row">
								<label for="sended">Send to Laboratory</label>
							</div>	
							<br>
							<div class="row">
								<label for="atlab">At Laboratory</label>
							</div>	
							<br>						
							<div class="row">
								<label for="ready">Results Ready</label>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="selected_item" value="0">
		<div class="container">		
			<div class="table">
				<div class="table-wrapper-scroll-y my-custom-scrollbar">
					<table class="table table-bordered" id="documenttable">
						<thead style="background-color:#42f5b3; text-align:center;">
							<tr>
								<th>Order Date</th>
								<th>Patient Name</th>
								<th>Tests</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody id="pdftable" style="Overflow-y:scroll; ">	
							<?php if (isset($_GET)){?>
								<?php foreach($data as $row){ ?>
									<?php foreach ($row['tests'] as $index => $testName) { ?>
										<tr>
										<?php if ($index == 0) { ?>
										<td style='text-align: center; vertical-align:middle; display:none;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['OrderID']?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['DateOrdered']->format('m/d/Y') ?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['NameLast'].",".$row['NameFirst'] ?></td>
										<td style='text-align: center; vertical-align:middle;'><?php echo $testName ?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><button class="buttonlink" onclick="returnrow()"><?php if ($row['OrderStatus'] == 0 ){?><?php echo 'Saved / Edit';}?>
										<?php if ($row['OrderStatus'] == 10 ){?><?php echo 'Send to Laboratory';}?><?php if ($row['OrderStatus'] == 20 ){?><?php echo 'At Laboratory';}?><?php if ($row['OrderStatus'] == 30 ){?><?php echo 'Results Ready';}?></button></td>
										<?php } else { ?>
										<td><?php echo $testName ?></td>
										<?php } ?>
										</tr>
									<?php } ?>
								<?php } ?>
							<?php } else {?>
								<?php foreach($data as $row){ ?>
									<?php foreach ($row['tests'] as $index => $testName) { ?>
										<tr>
										<?php if ($index == 0) { ?>
										<td style='text-align: center; vertical-align:middle; display:none;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['OrderID']?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['DateOrdered']->format('m/d/Y') ?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><?php echo $row['NameLast'].",".$row['NameFirst'] ?></td>
										<td style='text-align: center; vertical-align:middle;'><?php echo $testName ?></td>
										<td style='text-align: center; vertical-align:middle;' rowspan="<?php echo count($row['tests']) ?>"><button class="buttonlink" onclick="returnrow()"><?php if ($row['OrderStatus'] == 0 ){?><?php echo 'Saved / Edit';}?>
										<?php if ($row['OrderStatus'] == 10 ){?><?php echo 'Send to Laboratory';}?><?php if ($row['OrderStatus'] == 20 ){?><?php echo 'At Laboratory';}?><?php if ($row['OrderStatus'] == 30 ){?><?php echo 'Results Ready';}?></button></td>
										<?php } else { ?>
										<td><?php echo $testName ?></td>
										<?php } ?>
										</tr>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</section>
</div>

<script>
var id ="";
function returnrow(){
	$('#documenttable').find('tr').click( function(){
	var order = $(this).index()+1;
	id = $(this).find('td').eq(0).text();
	window.location.href = "create_order.php?orderid="+id;
});
}
</script>
<script>
var params = "";
function myfunction(el) {
	params = "";
	params += document.getElementById('saved').checked ? "saved=1" : "saved=0";
	params += document.getElementById('sended').checked ? "&sended=1" : "&sended=0";
	params += document.getElementById('atlab').checked ? "&atlab=1" : "&atlab=0";
	params += document.getElementById('ready').checked ? "&ready=1" : "&ready=0";
	var fdate = document.getElementById('d1').value;
	var edate = document.getElementById('d2').value;
	params += "&fdate="+fdate;
	params += "&edate="+edate;
	window.location.href = "order_status.php?"+params;		
}
var date_input = document.getElementById('d1');
//  date_input.valueAsDate = new Date();
date_input.onchange = function(){
	var fdate = this.value;
	var edate = document.getElementById('d2').value;
	var start = 1;
	params ="";
	params += document.getElementById('saved').checked ? "saved=1" : "saved=0";
	params += document.getElementById('sended').checked ? "&sended=1" : "&sended=0";
	params += document.getElementById('atlab').checked ? "&atlab=1" : "&atlab=0";
	params += document.getElementById('ready').checked ? "&ready=1" : "&ready=0";
	params += "&fdate="+fdate;
	params += "&edate="+edate;
	window.location.href = "order_status.php?"+params;		
	// window.location.href = "order_status.php?fdate="+fdate+"&edate="+edate+"&start="+1;;
}
var date_input = document.getElementById('d2');
//  date_input.valueAsDate = new Date();
date_input.onchange = function(){
	var fdate = document.getElementById('d1').value;
	var edate = this.value;
	var start = 1;
	params = "";
	params += document.getElementById('saved').checked ? "saved=1" : "saved=0";
	params += document.getElementById('sended').checked ? "&sended=1" : "&sended=0";
	params += document.getElementById('atlab').checked ? "&atlab=1" : "&atlab=0";
	params += document.getElementById('ready').checked ? "&ready=1" : "&ready=0";
	params += "&fdate="+fdate;
	params += "&edate="+edate;
	window.location.href = "order_status.php?"+params;	
	// window.location.href = "order_status.php?fdate="+fdate+"&edate="+edate+"&start="+1;
}
</script>
<?php include('./footer.php');?>	