<?php
	include('./header.php');
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
    define( 'SQLSRV_FETCH_ASSOC', 2 );
    $userid=$_SESSION['login_user'];
    $fname = $_GET["firstname"];
	$lname = $_GET["lastname"];
    $mrn =$_GET["mrn"];
    $type=$_GET["type"];
    $query = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents ON Patients.PatientID = documents.PatientID WHERE NameLast like '$lname%' and NameFirst like '$fname%' and MRN like '$mrn%' and ProviderID ='$userid'") or die("database error:". sqlsrv_error($conn));			
    $result = array();
    $result[] = sqlsrv_fetch_array($query,2);
    do {
        while ($row = sqlsrv_fetch_array($query)) {
            // Loop through each result set and add to result array
            $result[] = $row;
        }
        } while (sqlsrv_next_result($query)); 
?>
<head>
    <style type="text/css">
    .highlighted {
        background: red;
    }
    .nonhighlighted {
        background: white;
    }
    </style>
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
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
        <a href="menu_provider.php" style="color: #42f5b3;float:right;margin-top:20px; margin-right:2%;font-size: 25px;line-height: 36px;font-weight: bold; font-family: ' Open Sans', sans-serif;"><i class="fa fa-home"></i> Main Menu</a>
    </div>
</header>
<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">	
    <!-- CTA Section end -->
    <u><h2 style="margin-top:50px;">Patient Listing</h2></u>
	<input type="hidden" id="selected_item" value="0">
    <div class="container" >
        <div class="table" >
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered" id="documenttable" >
                    <thead style="background-color:#42f5b3">
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>DOB</th>
                            <th>Sex</th>
                            <th>MRN</th>
                        </tr>
                    </thead>
                    <tbody id="pdftable" style="Overflow-y:scroll;">		
                        <?php
                            foreach($result as $index => $row){
                                echo "<tr>";
                                echo "<td style='text-align: center;'>".$row['NameLast']."</td>";
                                echo "<td style='text-align: center;'>".$row['NameFirst']."</td>";
                                echo "<td style='text-align: center;'>".$row['DOB']->format('m/d/Y')."</td>";
                                echo "<td style='text-align: center;'>".$row['Sex']."</td>";
                                echo "<td style='text-align: center;'>".$row['MRN']."</td>";
                                echo "</tr>";	
                            }
                        ?>
                    </tbody>
                </table>
            </div>	
        </div>
    </div>
    <div class="container" style="padding-bottom: 30px; padding-top: 30px; text-align: center;">
        <div class="row">
			<div class="col-6" style="text-align: right;">
				<button type="button"   class="btn btn-md btn-primary" onclick="returnrow()" id="select" disabled="disabled">Select</button>
			</div>
			<div class="col-6" style="text-align: left;">
				<form>
					<button type="button" onclick="returnpage()" class="btn btn-md btn-primary">Cancel</button>
				</form>				
			</div>
        </div>
	</div>
</section>
<script>
var flag="";
$('#documenttable').find('tr').click( function(){
  var order = $(this).index()+1;
  flag = $(this).find('td').eq(1).text();
  $('#documenttable tr').removeClass('highlighted');
  $(this).toggleClass('highlighted');  
  $('#select').removeAttr('disabled');
});
function returnrow(){
    window.location.href = "create_orders_provider.php?selname="+flag;
}
function returnpage(){
    window.history.back();
}
</script>
<?php include('./footer.php');?>	