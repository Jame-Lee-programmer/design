<?php
	include('session.php');
    include("dbconfig.php");
    $userid=$_SESSION['login_user'];
	if (!defined( 'SQLSRV_FETCH_ASSOC' ))
    define( 'SQLSRV_FETCH_ASSOC', 2 );
    $orderid = $_POST['id'];
    $type =$_POST['type'];
    if($type == 0) {	
            $deleteorderdata = sqlsrv_query($conn, "DELETE FROM Orders WHERE OrderID = '$orderid'");
            $deleteordertestdata = sqlsrv_query($conn, "DELETE FROM OrderTests WHERE OrderID = '$orderid'");
            echo $message = "Succeessfully Deleted Order!"; 
        }
        else {		
            $deleteorderdata = sqlsrv_query($conn, "DELETE FROM Orders WHERE OrderID = '$orderid");
            $deleteordertestdata = sqlsrv_query($conn, "DELETE FROM OrderTests WHERE OrderID = '$orderid'");
            echo $message = "Succeessfully Deleted Order!"; 
        }
?>

