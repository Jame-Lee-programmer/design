<?php
	include('dbconfig.php');
	$status = session_status();
	if($status == PHP_SESSION_NONE){
	    //There is no active session
	    session_start();
	}
	$user_check = $_SESSION['login_user'];

	// $ses_sql = sqlsrv_query($conn,"select id from users where id = '$user_check' ");

	// $row = sqlsrv_fetch_array($ses_sql);

	// $login_session = $row['id'];

	if(!isset($_SESSION['login_user'])){
		header("location:start.php");
		die();
	}
?>