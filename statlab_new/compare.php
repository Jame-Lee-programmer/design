<?php
include("dbconfig.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form   
    if(isset($_POST['username'])){
        $myusername = $_POST['username'];
    }      	
    if(isset($_POST['password'])){
        $mypassword = $_POST['password'];
        $hashpassword = md5($mypassword);
    }    	
    if(isset($_POST['pinfo'])){
        $myinfo = $_POST['pinfo'];
    }
    if(isset($_POST['dob'])){
        $mydob = $_POST['dob'];
    }

    if(isset($_POST['address'])){
        $myzip = $_POST['address'];
    }
    
    $type = $_POST['type']; 
    $flag = 0;
    if($type == 0) {
        $sql = "SELECT clientID FROM users WHERE username ='$myusername' and password ='$hashpassword'";
        $result = sqlsrv_query($conn, $sql);
        $row = sqlsrv_fetch_array($result); 
        if ($row['clientID']) {
            $flag = 1;
        }
    } else if($type == 1) {
        $sql = "SELECT patientID FROM users WHERE (phone = '$myinfo' or SSN = '$myinfo' or email = '$myinfo' )and DOB = '$mydob' and zipcode='$myzip'";        
        $result = sqlsrv_query($conn,$sql);
        $row = sqlsrv_fetch_array($result);   
        if ($row['patientID']) {
            $flag = 1;
        }      
    }
    // If result matched $myusername and $mypassword, table row must be 1 row
        
    if($flag == 1) {
        echo "1";
    }else {
        echo "0";
    }
}

?>