<?php  
error_reporting(0);
//INITIALISE CONNECTION
$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost", "root", "", "klinikalby");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//MAKE APPOINTMENT SETTINGS
if (isset($_POST['hantar_temujanji'])) {

	$date = $mysqli -> real_escape_string($_POST['date']);
	$time = $mysqli -> real_escape_string($_POST['time']);
    $tujuan = $mysqli -> real_escape_string($_POST['tujuan']);
	
}


if(count($errors)==0){

	if(isset($_POST['hantar_temujanji'])){

		$sql_tj = "INSERT INTO appointment (date, time, tujuan_rawatan) 
		VALUES ('$date','$time','$tujuan')";
	
		if($mysqli -> query($sql_tj)) {
			printf("%d Booked.\n", $mysqli -> affected_rows);
		}
	}	
   
}


 

//CANCEL APPOINTMENT
if (isset($_POST['cancel'])) {

		$appointmentcancel = $mysqli -> real_escape_string($_POST['id_appointment2']);

	if (empty($appointmentcancel)) {
		array_push($errors,"ID Temu Janji diperlukan");
}

if (count($errors)==0) {

	$queryCancel = "DELETE FROM appointment WHERE id_appointment = '$appointmentcancel'";
	if ($mysqli -> query($queryCancel)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"ID Temu Janji tidak betul");
		}
		else {
			echo "<script>alert('Temu Janji Dibatalkan.')</script>";
	}
	  
	}
	
}

}

//BUANG UBAT
if (isset($_POST['delete_ubat'])) {

	$buangubat = $mysqli -> real_escape_string($_POST['id_treatment2']);

if (empty($buangubat)) {
	array_push($errors,"ID Ubat diperlukan");
}

if (count($errors)==0) {

$queryDeleteUbat = "DELETE FROM treatment_list WHERE id_treatment = '$buangubat'";
if ($mysqli -> query($queryDeleteUbat)) {

	if ($mysqli->affected_rows==0) {
		 array_push($errors,"ID Ubat tidak betul");
	}
	else {
		echo "<script>alert('Ubat Berjaya Dibuang.')</script>";
}
  
}

}

}

//BUANG CUSTOMER (ADMIN)
if (isset($_POST['deleteCust'])) {

	$buangCust = $mysqli -> real_escape_string($_POST['id_cust2']);

if (empty($buangCust)) {
	array_push($errors,"ID Pelanggan diperlukan");
}

if (count($errors)==0) {

$queryDeleteCust = "DELETE FROM customer WHERE id_customer = '$buangCust'";
if ($mysqli -> query($queryDeleteCust)) {

	if ($mysqli->affected_rows==0) {
		 array_push($errors,"ID Pelanggan tidak betul");
	}
	else {
		echo "<script>alert('Pelanggan Berjaya Dibuang.')</script>";
}
  
}

}

}


//ADD STAFF SETTINGS
if (isset($_POST['AddStaff'])) {
    
	$addname = $mysqli -> real_escape_string($_POST['addname']);
	$addphoneno	= $mysqli -> real_escape_string($_POST['addphoneno']);
	$addaddress = $mysqli -> real_escape_string($_POST['addaddress']);
	$addusername = $mysqli -> real_escape_string($_POST['addusername']);
	$addpassword = $mysqli -> real_escape_string($_POST['addpassword']);

}

if(count($errors)==0){

	if(isset($_POST['AddStaff'])){

		$sqladd = "INSERT INTO staff (staff_name, staff_phoneno, staff_address, staff_username, staff_password) 
		VALUES ('$addname','$addphoneno','$addaddress','$addusername','$addpassword')";

		if ($mysqli -> query($sqladd)) {
        	printf("%d Row inserted.\n", $mysqli->affected_rows);
    }
	else {
	  
		echo "<script>alert('Staf Berjaya Ditambah.')</script>";
	  
		}
}

}


//TAMBAH UBAT SETTINGS
if (isset($_POST['AddUbat'])) {
    
	$add_namaubat = $mysqli -> real_escape_string($_POST['add_namaubat']);
	$add_hargaubat	= $mysqli -> real_escape_string($_POST['add_hargaubat']);

}

if(count($errors)==0){

	if(isset($_POST['AddUbat'])){

		$sqladd_ubat = "INSERT INTO treatment_list (treatment_name, treatment_price) 
		VALUES ('$add_namaubat','$add_hargaubat')";

	if ($mysqli -> query($sqladd_ubat)) {
        printf("%d Row inserted.\n", $mysqli->affected_rows);
    }
	else {
	  
		echo "<script>alert('Ubat berjaya ditambah.')</script>";
	  
	}
}

}
	



//DELETE STAFF SETTINGS
if (isset($_POST['deleteStaff'])) {

		$deleteStaff = $mysqli -> real_escape_string($_POST['id_staff2']);

        if (empty($deleteStaff)) {
            array_push($errors,"ID Staf diperlukan");
		}

if (count($errors)==0) {
 
	$querydeletestf = "DELETE FROM staff WHERE id_staff = '$deleteStaff'";
	if ($mysqli -> query($querydeletestf)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"ID Staf Salah");
			
		}

	} else {
	  
	  echo "<script>alert('Staf Berjaya Dibuang.')</script>";
	
	  }

	}
}



//SELECTION TUJUAN PERKHIDMATAN appointment.php
if(isset($_POST['tujuan'])){
	$tujuan = $_POST['tujuan'];

	$sqltujuan = "INSERT INTO appointment (tujuan_rawatan) VALUES ('$tujuan')";

	$result_tujuan = mysqli_query($conn, $sqltujuan);
	if (!$result_tujuan) {
		die(mysqli_error($conn));
	}
}

?>