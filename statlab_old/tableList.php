<?php
	include('session.php');
	include("dbconfig.php");
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
	define( 'SQLSRV_FETCH_ASSOC', 2 );
	$startDate = $_POST["firstdate"];
	$beginDate = $startDate." "."00".":"."00".":"."00";
	$endDate = $_POST["lastdate"];
	$lastdate = $endDate." "."23".":"."59".":"."59";
	$type = $_POST['type']; 
	$userid = $_SESSION['login_user'];
	$resultarray = sqlsrv_query($conn, "SELECT * FROM users where clientID = '$userid'") or die("database error:". sqlsrv_error($conn));
	$row = sqlsrv_fetch_array($resultarray);

    if($type == 0) {
		$query = sqlsrv_query($conn, "SELECT * FROM documents WHERE daterun >= '$beginDate' and daterun <= '$lastdate' 
		and '$userid' = documents.clientID") or die("database error:". sqlsrv_error($conn));	
		$result = array();
		while($row = sqlsrv_fetch_array($query,2)) {
			$result[] = $row;
		}
		echo json_encode($result);
    } else if($type == 1) {
		$query = sqlsrv_query($conn, "SELECT * FROM documents WHERE daterun >= '$beginDate' and daterun <= '$lastdate' 
		and '$userid' = documents.patientID") or die("database error:". sqlsrv_error($conn));	
		$result = array();
		while($row = sqlsrv_fetch_array($query,2)) {
			$result[] = $row;
		}
		echo json_encode($result);
	}
	else if($type == 2) {
		$query = sqlsrv_query($conn, "SELECT * FROM documents WHERE daterun >= '$beginDate' and daterun <= '$lastdate' 
		and '$userid' = documents.ProviderID") or die("database error:". sqlsrv_error($conn));	
		$result = array();
		while($row = sqlsrv_fetch_array($query,2)) {
			$result[] = $row;
		}
		echo json_encode($result);
	}
	else if ($type == 3){
		$query = sqlsrv_query($conn, "SELECT DateOrdered, ord.PatientID as PatientID, ord.OrderID as OrderID, NameLast, NameFirst, TestName, OrderStatus FROM Orders ord INNER JOIN 
		Patients pa ON ord.PatientID = pa.PatientID AND ord.clientID = pa.clientID	Left JOIN OrderTests ot ON ord.OrderID = ot.OrderID Left JOIN Tests t ON t.TestID = ot.TestID 
		WHERE DateOrdered >= '$beginDate' and DateOrdered <= '$lastdate' ORDER BY DateOrdered, NameFirst" ) or die("database error:". sqlsrv_error($conn));
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
		echo json_encode($data);
	}
?>
