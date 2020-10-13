<?php
//$connectioninfo = array("Database"=>"statlab", "UID"=>"", "PWD"=>"");
$hostname = "DESKTOP-8RCPDVL\SQLEXPRESS";
$connectionInfo = array( "Database"=>"statlab", "UID"=>"", "PWD"=>""); 
$conn = sqlsrv_connect($hostname,$connectionInfo);
if($conn)
	{
		//echo 'yes';
	}
else{
		die( print_r("Connection failed:" . sqlsrv_errors(), true));
	}
?>