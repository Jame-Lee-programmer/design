<?php
	include('session.php');
    include("dbconfig.php");
    $userid=$_SESSION['login_user'];
	if (!defined( 'SQLSRV_FETCH_ASSOC' ))
    define( 'SQLSRV_FETCH_ASSOC', 2 );
	$p_lname = $_POST["p_lname"];
	$p_fname = $_POST["p_fname"];
    $p_dob = $_POST["p_dob"];
    $p_race = $_POST["p_race"];
    $p_ethn = $_POST["p_ethn"];
    $p_address = $_POST["p_address"];
    $p_city = $_POST['p_city']; 
    $p_state = $_POST['p_state']; 
    $p_zipcode = $_POST['p_zipcode']; 
    $p_county = $_POST['p_county']; 
    $p_phone = $_POST['p_phone']; 
    $p_email = $_POST['p_email']; 
    $p_mrn = $_POST['p_mrn'];
    $t_coltech = $_POST['t_coltech']; 
    $t_spectype = $_POST['t_spectype'];
    $p_address = !empty($p_address) ? "'$p_address'" : 'NULL';
    $p_city = !empty($_POST["p_city"]) ? "'$p_city'" : 'NULL';
    $p_state = !empty($_POST["p_state"]) ? "'$p_state'" : 'NULL';
    $p_zipcode = !empty($_POST["p_zipcode"]) ? "'$p_zipcode'" : 'NULL';
    $p_county = !empty($_POST["p_county"]) ? "'$p_county'" : 'NULL';
    $p_phone = !empty($_POST["p_phone"]) ? "'$p_phone'" : 'NULL';
    $p_email = !empty($_POST["p_email"]) ? "'$p_email'" : 'NULL';
    $t_coltech = !empty($_POST["t_coltech"]) ? "'$t_coltech'" : 'NULL';
    $t_spectype = !empty($_POST["t_spectype"]) ? "'$t_spectype'" : 'NULL';
    $t_orderdate = $_POST['t_orderdate']; 
    $t_provider = $_POST['t_provider']; 
    $t_coldate = $_POST['t_coldate']; 
    $t_test1 = $_POST['t_test1'];
    $t_test2 = $_POST['t_test2'];
    $t_test3 = $_POST['t_test3'];
    $t_test4 = $_POST['t_test4'];
    $t_test5 = $_POST['t_test5'];
    $t_test6 = $_POST['t_test6'];
    $t_test7 = $_POST['t_test7'];
    $t_test = array($t_test1,$t_test2,$t_test3,$t_test4,$t_test5,$t_test6,$t_test7);
    $remove = array();
    for ($i = 0; $i< count($t_test); $i++){
        if ($t_test[$i] !="0"){
        $remove[]=$t_test[$i];
        }  
    }
    $result = implode(",",$remove);
    $type =$_POST['type'];
    if(isset($_POST['id'])) $flag = $_POST['id'];
    if(isset($_POST['id'])) {
        $query = sqlsrv_query($conn, "SELECT Orders.PatientID as PatientID, Orders.ClientID as ClientID, Orders.OrderID as OrderID,* FROM Orders INNER JOIN Patients ON Orders.PatientID = Patients.PatientID AND Orders.ClientID = Patients.ClientID 
        LEFT JOIN SpecimenType ON Orders.SpecimenType = SpecimenType.SpecimenType Left JOIN OrderTests ON Orders.OrderID = OrderTests.OrderID Left JOIN Tests ON Tests.TestID = OrderTests.TestID
        WHERE NameFirst = '$p_fname' and NameLast = '$p_lname' and Orders.OrderID = '$flag'") or die("database error:". sqlsrv_error($conn));	
        $orderrow = sqlsrv_fetch_array($query,2);
    }
    $query1 = sqlsrv_query($conn, "SELECT *	FROM Patients WHERE NameFirst = '$p_fname' and NameLast = '$p_lname'") or die("database error:". sqlsrv_error($conn));
    $patientrow = sqlsrv_fetch_array($query1,2);
    //Check if current patient exists
    if ($patientrow!=null){
        $patientID = $patientrow['PatientID'];
        $clientID = $patientrow['ClientID'];
    } 
    //Check if current orderid exists
    if ($orderrow!=null){
        if($type == 0) {	
            $savepatientdata = sqlsrv_query($conn, "UPDATE Patients SET ClientID='$clientID', NameLast='$p_lname',NameFirst='$p_fname', DOB='$p_dob',
            Sex='M', MRN = '$p_mrn' , RaceID = '$p_race' , EthnicityID = '$p_ethn', StreetAddress = $p_address, ZipCode = $p_zipcode,
            City = $p_city, State = $p_state, County = $p_county, Telephone = $p_phone, Email = $p_email WHERE PatientID = '$patientID'");
            $saveorderdata = sqlsrv_query($conn, "UPDATE Orders SET ProviderID='$t_provider', ClientID='$clientID', PatientID='$patientID', CollectedBy=$t_coltech,
            SpecimenType=$t_spectype, DateOrdered='$t_orderdate', DateCollected='$t_coldate', OrderStatus='0' WHERE OrderID = '$flag'");
            $deletecurrentordertests = sqlsrv_query($conn, "DELETE OrderTests where OrderID = '$flag'");
            foreach($remove as $key=>$val){
                $queryinsert=sqlsrv_query($conn,"INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$flag','$val','$key')");                
            }
            echo $message = "Succeessfully Updated Your Patient and Order Info!"; 
        }
        else {	
            $savepatientdata = sqlsrv_query($conn, "UPDATE Patients SET ClientID='$clientID', NameLast='$p_lname',NameFirst='$p_fname', DOB='$p_dob',
            Sex='M', MRN = '$p_mrn' , RaceID = '$p_race' , EthnicityID = '$p_ethn', StreetAddress = $p_address, ZipCode = $p_zipcode,
            City = $p_city, State = $p_state, County = $p_county, Telephone = $p_phone, Email = $p_email WHERE PatientID = '$patientID'");
            $saveorderdata = sqlsrv_query($conn, "UPDATE Orders SET ProviderID='$userid', ClientID='$clientID', PatientID='$patientID', CollectedBy=$t_coltech,
            SpecimenType=$t_spectype, DateOrdered='$t_orderdate', DateCollected='$t_coldate', OrderStatus='0' WHERE OrderID = '$flag'");
            $deletecurrentordertests = sqlsrv_query($conn, "DELETE OrderTests where OrderID = '$flag'");
            // $idenon = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests ON"); 
            foreach($remove as $key=>$val){
                $queryinsert=sqlsrv_query($conn,"INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$flag','$val','$key')");                
            }
            // $idenoff = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests OFF"); 
            echo $message = "Succeessfully Updated Your Patient and Order Info!";   
        }
    }

    //This is case when the order not exist
    else{
        //Patient exists but not order.
        if ($patientrow!=null){
            if($type == 0) {
                $savepatientdata = sqlsrv_query($conn, "UPDATE Patients SET ClientID='$clientID', NameLast='$p_lname',NameFirst='$p_fname', DOB='$p_dob',
                Sex='M', MRN = '$p_mrn' , RaceID = '$p_race' , EthnicityID = '$p_ethn', StreetAddress = $p_address, ZipCode = $p_zipcode,
                City = $p_city, State = $p_state, County = $p_county, Telephone = $p_phone, Email = $p_email WHERE PatientID = '$patientID'");
                $addneworder = sqlsrv_query($conn, "INSERT INTO Orders(ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus) 
                VALUES ('$t_provider', '$clientID', '$patientID', $t_coltech, $t_spectype, '$t_orderdate', '$t_coldate', '0' )");
                $getOrderID = sqlsrv_query($conn, "SELECT OrderID FROM Orders Order by DateIn DESC");
                $row2 = sqlsrv_fetch_array($getOrderID,2);
                $orkey = $row2['OrderID'];     
                // $idenon = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests ON"); 
                foreach($remove as $key=>$val){
                    $queryinsert=sqlsrv_query($conn,"INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$orkey','$val','$key')");                
                }
                // $idenoff = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests OFF");  
                echo $message = "Succeessfully Updated Your Patient Info and Added new Order!"; 
            }
            else {		
                $savepatientdata = sqlsrv_query($conn, "UPDATE Patients SET ClientID='$clientID',PatientID = '$patientID', NameLast='$p_lname',NameFirst='$p_fname', DOB='$p_dob',
                Sex='M', MRN = '$p_mrn' , RaceID = '$p_race' , EthnicityID = '$p_ethn', StreetAddress = $p_address, ZipCode = $p_zipcode,
                City = $p_city, State = $p_state, County = $p_county, Telephone = $p_phone, Email = $p_email WHERE NameLast = '$p_lname' and NameFirst ='$p_fname'");
                $addneworder = sqlsrv_query($conn, "INSERT INTO Orders(ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus) 
                VALUES ('$t_provider', '$clientID', '$patientID', $t_coltech, $t_spectype, '$t_orderdate', '$t_coldate', '0' )");
                $getOrderID = sqlsrv_query($conn, "SELECT OrderID FROM Orders Order by DateIn DESC");
                $row2 = sqlsrv_fetch_array($getOrderID,2);
                $orkey = $row2['OrderID'];
                // $idenon = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests ON"); 
                foreach($remove as $key=>$val){
                    $queryinsert=sqlsrv_query($conn,"INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$orkey','$val','$key')");                
                }
                // $idenoff = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests OFF");  
                echo $message = "Succeessfully Updated Your Patient Info and Added new Order!"; 
            }   
        }
        //Neither patient nor order exist.
        else {         
            if($type == 0) {  
                $savepatientdata = sqlsrv_query($conn, "INSERT INTO Patients(ClientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email)
                VALUES ('$userid', '$p_lname', '$p_fname', '$p_dob', 'M', '$p_mrn', '$p_race', '$p_ethn', $p_address, $p_zipcode, $p_city, $p_state, $p_county, $p_phone, $p_email)");
                $query = sqlsrv_query($conn, "SELECT PatientID FROM Patients Order by DateIn DESC");
                $row = sqlsrv_fetch_array($query,2);
                $pid = $row['PatientID'];
                // $saveuserdata = sqlsrv_query($conn, "INSERT INTO Users(ClientID, PatientID, DOB, ZipCode, Phone, Email)
                // VALUES ('$userid', '$pid', '$p_dob', $p_zipcode, $p_phone, $p_email)");
                $getPatientID = sqlsrv_query($conn, "SELECT PatientID FROM Patients Order by DateIn DESC");
                $row1 = sqlsrv_fetch_array($getPatientID,2);
                $pkey = $row1['PatientID'];
                $addneworderdata = sqlsrv_query($conn, "INSERT INTO Orders(ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus) 
                VALUES ('$t_provider', '$userid', '$pkey', $t_coltech, $t_spectype, '$t_orderdate', '$t_coldate', '0')");
                $getOrderID = sqlsrv_query($conn, "SELECT OrderID FROM Orders Order by DateIn DESC");
                $row2 = sqlsrv_fetch_array($getOrderID,2);
                $orkey = $row2['OrderID'];
                //$idenon = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests ON"); 
                foreach($remove as $key=>$val){
                    $sql = "INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$orkey','$val','$key')";
                    $queryinsert=sqlsrv_query($conn,$sql);    
                    echo $sql;          
                }
                //$idenoff = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests OFF"); 
                echo $message = "Succeessfully Added Your Patient and Order Info!"; 
            }
            else {	
                $savepatientdata = sqlsrv_query($conn, "INSERT INTO Patients(ClientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email)
                VALUES ('$clientID', '$p_lname', '$p_fname', '$p_dob', 'M', '$p_mrn', '$p_race', '$p_ethn', $p_address, $p_zipcode, $p_city, $p_state, $p_county, $p_phone, $p_email)");
                $getPatientID = sqlsrv_query($conn, "SELECT PatientID FROM Patients Order by DateIn DESC");
                $row1 = sqlsrv_fetch_array($getPatientID,2);
                $pkey = $row1['PatientID'];
                $addneworderdata = sqlsrv_query($conn, "INSERT INTO Orders(ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus) 
                VALUES ('$t_provider', '$clientID', '$pkey', $t_coltech, $t_spectype, '$t_orderdate', '$t_coldate', '0')");
                $getOrderID = sqlsrv_query($conn, "SELECT OrderID FROM Orders Order by DateIn DESC");
                $row2 = sqlsrv_fetch_array($getOrderID,2);
                $orkey = $row2['OrderID'];
                // $idenon = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests ON"); 
                foreach($remove as $key=>$val){
                    $queryinsert=sqlsrv_query($conn,"INSERT INTO OrderTests (OrderID,TestID,SeqNo) VALUES ('$orkey','$val','$key')");                
                }
                // $idenoff = sqlsrv_query($conn,"SET IDENTITY_INSERT OrderTests OFF");  
                echo $message = "Succeessfully Added Your Patient and Order Info!"; 
            }
        }
    }
?>
