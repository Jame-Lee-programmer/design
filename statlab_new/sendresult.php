<?php
	include('session.php');
    include("dbconfig.php");
    $userid=$_SESSION['login_user'];
	if (!defined( 'SQLSRV_FETCH_ASSOC' ))
    define( 'SQLSRV_FETCH_ASSOC', 2 );
    $orderid = $_POST['id'];
    $type =$_POST['type'];
    if($type == 0) { 
            $sendorderdata = sqlsrv_query($conn, "UPDATE Orders SET OrderStatus='10' WHERE OrderID = '$orderid'");
            echo $message = "Succeessfully Updated OrderStatus!"; 
        }
    else{		   
            $sendorderdata = sqlsrv_query($conn, "UPDATE Orders SET OrderStatus='10' WHERE OrderID = '$orderid'");
            echo $message = "Succeessfully Updated OrderStatus!"; 
        }
?>
