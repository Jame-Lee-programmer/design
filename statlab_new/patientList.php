<?php
	include('session.php');
	include("dbconfig.php");
	$userid=$_SESSION['login_user'];
	if ( !defined( 'SQLSRV_FETCH_ASSOC' ) )
	define( 'SQLSRV_FETCH_ASSOC', 2 );
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$mrn = $_POST["mrn"];
	$type = $_POST['type']; 
	if ($fname!=""||$lname!=""||$mrn!=""){
		if ($fname!=""&&$lname=""&&$mrn=""){
			if($type == 0 ) {	

				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameFirst LIKE '$fname%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {

				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.patientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameFirst LIKE '$fname%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		if ($lname!=""&&$fname=""&&$mrn=""){
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameLast LIKE '$lname%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {	

				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.patientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameLast LIKE '$lname%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		if ($mrn!=""&&$fname=""&&$lname=""){
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE MRN LIKE '$4%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {		
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.PatientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE MRN LIKE '$mrn%'and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		if ($fname!=""&&$lname!=""&&$mrn=""){
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameFirst LIKE '$fname%' and NameLast LIKE '$lname%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {		
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.PatientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameFirst LIKE '$fname%' and NameLast LIKE '$lname%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		if ($fname!=""&&$mrn!=""&&$lname=""){
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameFirst LIKE '$fname%' and MRN LIKE '$mrn%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {		
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.PatientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameFirst LIKE '$fname%' and MRN LIKE '$mrn%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		if ($lname!=""&&$mrn!=""&&$fname=""){
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameLast LIKE '$lname%' and MRN LIKE '$mrn%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {		
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.PatientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameLast LIKE '$lname%' and MRN LIKE '$mrn%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}
		else {
			if($type == 0 ) {	
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN Race On Patients.RaceID = Race.RaceID WHERE NameLast LIKE '$lname%' and NameFirst LIKE '$fname%' and MRN LIKE '$mrn%' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
			if($type == 1) {		
				$query1 = sqlsrv_query($conn, "SELECT * FROM Patients INNER JOIN documents On documents.PatientID = Patients.PatientID INNER JOIN Race On Patients.RaceID = Race.RaceID 
				WHERE NameLast LIKE '$lname%' and NameFirst LIKE '$fname%' and MRN LIKE '$mrn%' and ProviderID = '$userid' ORDER BY NameLast, NameFirst") or die("database error:". sqlsrv_error($conn));	
				$result1 = array();
				$result1[] = sqlsrv_fetch_array($query1,2);
				do {
					while ($row = sqlsrv_fetch_array($query1)) {
						// Loop through each result set and add to result array
						$result1[] = $row;
					}
				} while (sqlsrv_next_result($query1));
				$query2 = sqlsrv_query($conn, "SELECT * FROM Race" ) or die("database error:". sqlsrv_error($conn));	
				$result2 = array();
				$result2[] = sqlsrv_fetch_array($query2,2);
				$query3 = sqlsrv_query($conn, "SELECT * FROM Ethnicity" ) or die("database error:". sqlsrv_error($conn));	
				$result3 = array();
				$result3[] = sqlsrv_fetch_array($query3,2);
				$result = array();
				$result[] = $result1;
				$result[] = $result2;
				$result[] = $result3;
				echo json_encode($result);
			}
		}

}
else{
	echo "You need to add at least one field to find!";
}
?>
