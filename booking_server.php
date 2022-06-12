<?php  
//INITIALISE CONNECTION
$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost", "root", "", "klinikalby");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//MAKE APPOINTMENT SETTINGS
if (isset($_POST['Book'])) {

	$date = $mysqli -> real_escape_string($_POST['date']);
	$time = $mysqli -> real_escape_string($_POST['time']);
    $tujuan = $mysqli -> real_escape_string($_POST['tujuan']);
    $custid = $mysqli -> real_escape_string($_POST['customer_id']);
    $staffid = $mysqli -> real_escape_string($_POST['sraff_id']);
	
    /*
	if (empty($AppoID)) {
	    array_push($errors,"Appointment ID is required");
    }*/
}

if (empty($date)) {
	array_push($errors,"Date is required");
}


if (empty($time)) {
	array_push($errors,"Time is required");
}


if(count($errors)==0){


    $staff_name = $_REQUEST['staff_name'];
	$sql = "INSERT INTO  appointment (date, time, customer_id , staff_id) VALUES ('$date','$time','$customer_id','$staff_id') ";
	$result99 = $mysqli ->query($sql);

		if ($result99) {
            
            printf("%d Booked .\n", $mysqli -> affected_rows);
        }

}
	elseif (!$mysqli -> query($sql)) {
        printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 

	    $_SESSION['AppoID']=$AppoID;
        $_SESSION['success']="you are now logged in";
        header('location:appointment_status.php');


 


if (isset($_POST['cancel'])) {

		$appointmentcancel =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Appointment ID is required");
}
 if (count($errors)==0) {

	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID=('$userprofile') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Appointment ID");
		
		}
	}
	  else {
	     echo 'Book is Canceled';
	}
	
}

}

//ADD STAFF SETTINGS
if (isset($_POST['Add'])) {
    
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);

	if (empty($addID)) {
	array_push($errors,"Doctor ID is required");

}

if (empty($addname)) {
	array_push($errors,"Doctor Name is required");
	
}


if (empty($addAddress)) {
	array_push($errors,"Address is required");
	
}

if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	
}


if (empty($addEmail)) {
	array_push($errors,"Email is required");
	
}

if (empty($addPassword)) {
	array_push($errors,"Password is required");
	
}


if(count($errors)==0){

	$addcategory = $_REQUEST['addcategory'];

	$sqladd = "INSERT INTO  doctor (DoctorID, Doctorname, email, Address, ContactNumber, password,categorey) VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";

	if ($mysqli -> query($sqladd)) {
        printf("%d Row inserted.\n", $mysqli->affected_rows);
    }

    $_SESSION['addID']=$addID;
    $_SESSION['success']="you are now logged in";
    header('location:index3.php');
}
	
}


//DELETE STAFF SETTINGS
if (isset($_POST['Delete'])) {

		$deleteStaff = $mysqli -> real_escape_string($_POST['deleteStaff']);

        if (empty($deleteStaff)) {
            array_push($errors,"ID Staf diperlukan");
}

if (count($errors)==0) {
 
	$querydelete = "DELETE FROM staff WHERE id_staff = '$deleteStaff'";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Doctor ID");
			
		}

	} else {
	  
	  echo 'Book is Canceled';
	
	  }

	}
}

?>