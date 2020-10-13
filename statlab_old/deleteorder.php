<?php
	include('session.php');
    include("dbconfig.php");
    $userid=$_SESSION['login_user'];
	if (!defined( 'SQLSRV_FETCH_ASSOC' ))
    define( 'SQLSRV_FETCH_ASSOC', 2 );
    $type =$_POST['type'];  
    if($type == 0) {	
        $getID = sqlsrv_query($conn, "SELECT * FROM Orders ORDER BY DateIn DESC");
        $row1 = sqlsrv_fetch_array($getID,2);
        $orkey = $row1['OrderID'];   
        $deleteorderdata = sqlsrv_query($conn, "DELETE FROM Orders WHERE OrderID = '$orkey'");
        $deleteordertestdata = sqlsrv_query($conn, "DELETE FROM OrderTests WHERE OrderID = '$orkey'");
        echo $message = "Succeessfully Deleted Order!"; 
    }
    else {		
        $getID = sqlsrv_query($conn, "SELECT * FROM Orders ORDER BY DateIn DESC");
        $row1 = sqlsrv_fetch_array($getID,2);
        $orkey = $row1['OrderID'];   
        $deleteorderdata = sqlsrv_query($conn, "DELETE FROM Orders WHERE OrderID = '$orkey'");
        $deleteordertestdata = sqlsrv_query($conn, "DELETE FROM OrderTests WHERE OrderID = '$orkey'");
        echo $message = "Succeessfully Deleted Order!"; 
    }
?>
