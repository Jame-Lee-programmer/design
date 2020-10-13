<?php
	include('./header.php');
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
	define( 'SQLSRV_FETCH_ASSOC', 2 );
	$userid=$_SESSION['login_user'];
	$today = new DateTime();
	$firstDate = date_add($today,date_interval_create_from_date_string("-7 days"));
	$endDate = new DateTime();
	$resultarray = sqlsrv_query($conn, "SELECT * FROM users where (clientID = '$userid' or patientID = '$userid')") or die("database error:". sqlsrv_error($conn));
	$row = sqlsrv_fetch_array($resultarray,2);
	$result = sqlsrv_query($conn, "SELECT * FROM documents where daterun >= '".date_format($firstDate,"Y-m-d")."' and  daterun <= '".date_format($endDate,"Y-m-d")."' and clientID = '$userid'") or die("database error:". sqlsrv_error($conn));
	// var_dump($result,2);
?>	
<head>
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
<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">	
	<!-- CTA Section end -->
	<div class="container" style="padding-bottom: 30px; padding-top: 30px; text-align: center;">
		<div class="row">
			<div class="col-xl-6">
				<div class="input-group">
					<label class="label" style="font-size:22px;">Date Run Start:</label>
					<input class="input--style-1" type="date" name="check-in" id="d1" value="<?php echo date_format($firstDate,"Y-m-d");?>"/>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="input-group">
					<label class="label" style="font-size:22px;">Date Run End:</label>
					<input class="input--style-1" type="date" name="check-out" id="d2" value="<?php echo date_format($endDate,"Y-m-d");?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-3" style="text-align: start;">
				<button type="button" id="add2" class="btn btn-md btn-primary" onclick="showresults()">Find Results</button>
			</div>
			<div class="col-3" style="text-align: right;">
				<button type="button" class="btn btn-md btn-primary" id="select-all">Select All</button>
			</div>
			<div class="col-6" style="text-align: right;">
				<form>
					<button type="button" id="downloadall" onclick="downloadselectedPages()" class="btn btn-md btn-primary">Download Selected</button>
				</form>				
			</div>
		</div>
	</div>
	<input type="hidden" id="selected_item" value="0">
		<div class="container">
			<div class="table" >
				<div class="row">
					<table class="table table-bordered" id="documenttable" style="margin: 0 1% 0 1%">
						<thead style="background-color:#42f5b3">
							<tr>
								<th>Date Run</th>
								<th>Patient Name</th>
								<th>PDF</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody id="pdftable">							
							<?php
							if (sqlsrv_num_fields($result) > 0) {
								$i=0;
								// var_dump(sqlsrv_fetch_array($result,2));
								while($row = sqlsrv_fetch_array($result,2)) {							
									echo "<tr>";
									echo "<td style='text-align: center;'>".$row['daterun']->format('m/d/Y')."</td>";
									echo "<td style='text-align: center;'>".$row['patientname']."</td>";
									echo "<td style='text-align: center;'><a target='_blank' href='".$row['documentname']."'><img style='width:10%;height:10%;' src='assets/img/pdflogo.png'>&nbsp; &nbsp; Click to View</a></td>";
									echo "<td style='text-align: center;'><input id='check_".$i."' value='".$row['documentname']."' name='foo' type='checkbox'></td>";
									echo "</tr>";	
									$i++;
								}
							}
							?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>
</section>

<form action="downloadall.php" id="downloadselectedform">
	<input type="hidden" id="pdfurl" name="pdfurl">
</form>

<script>

document.getElementById('select-all').onclick = function() {

  var checkboxes = document.getElementsByName('foo');
  for (var checkbox of checkboxes) {
    checkbox.checked = !this.checked;
  }
}

function downloadselectedPages(){

	let tcheckboxes = $("#pdftable").find("input[type='checkbox']");
	let data_files = new Array();
	for (i = 0; i < tcheckboxes.length; i++) {
		if (tcheckboxes[i].checked == false) continue;
		
		let trow = tcheckboxes.eq(i).parents('tr').eq(0);
		data_files.push(trow.find('a').eq(0).attr('href'));
	}
	downloadAll(data_files);

}

function downloadAll(urls) {
  var link = document.createElement('a');

  link.setAttribute('download', '');
  link.style.display = 'none';

  document.body.appendChild(link);

  for (var i = 0; i < urls.length; i++) {
    link.setAttribute('href', urls[i]);
    link.click();
  }

  document.body.removeChild(link);
}

function showresults(){
	document.getElementById('pdftable').innerHTML= "";
	$("#pdftable").remove();
	$.post("tableList.php",{firstdate: $("#d1").val(), lastdate: $("#d2").val(), type: 0}, function(data, status){
		if(status == "success"){
			tableDatas = JSON.parse(data);		
			var tbody1='<tbody id ="pdftable"></tbody>'			
				$("#documenttable").append(tbody1);
				for(var i=0;i<tableDatas.length;i++){
					var dpt1='<tr id="rowid" data-row='+i+'><td style="text-align: center;">'+tableDatas[i].daterun.date.slice(5,7)+"/"+tableDatas[i].daterun.date.slice(8,10)+"/"
					+tableDatas[i].daterun.date.slice(0,4)+'</td><td style="text-align: center;">'+tableDatas[i].patientname+'</td><td style="text-align: center;"><a target="_blank" href='+tableDatas[i].documentname+'><img  style="width:10%;height:10%;" src="assets/img/pdflogo.png">&nbsp; &nbsp; Click to View</a></td> <td style="text-align: center;"> <input id="check_"'+i+'value='+tableDatas[i].documentname+' name="foo" type="checkbox"></td></tr>';
					$("#pdftable").append(dpt1);
				console.log(tableDatas[i].daterun);
		}
		}
	});
}

</script>

<?php include('./footer.php');?>	