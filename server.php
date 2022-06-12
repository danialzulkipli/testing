<?php

//INITIALISE CONNECTION
session_start();
$errors = array();

$mysqli = new mysqli("localhost", "root", "", "klinikalby");

if ($mysqli -> connect_errno){

    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

//CUSTOMER REGISTER ACCOUNT SETTINGS
if(isset($_POST['Register'])) {

    $name = $mysqli -> real_escape_string($_POST['name']);
    $phoneno = $mysqli -> real_escape_string($_POST['phoneno']);
    $address = $mysqli -> real_escape_string($_POST['address']);
    $username = $mysqli -> real_escape_string($_POST['username']);
    $password = $mysqli -> real_escape_string($_POST['password']);

    /*
    if (empty($name)) {
        array_push($errors,"Nama diperlukan");
    }
    */
}
    /*
    if (empty($phoneno)) {
        array_push($errors,"No telefon diperlukan");
    }
    if (empty($address)) {
        array_push($errors,"Alamat diperlukan");
    }
    if (empty($username)) {
        array_push($errors,"Nama pengguna diperlukan");
    }
    if (empty($password)) {
        array_push($errors,"Kata laluan diperluskan");
    }
    */


    if(count($errors) == 0){

        $password = md5($password);

        if(isset($_POST)){ 

            $sql = "INSERT INTO customer (customer_name, customer_phoneno, customer_address, customer_username, customer_password) VALUES ('$name', '$phoneno', '$address', '$username', '$password');";
        }

        if (!$mysqli -> query($sql)) {
            
            printf("%d Row inserted.\n", $mysqli -> affected_rows);
        }
       
}

// CUSTOMER LOGIN SETTINGS
if (isset($_POST['Login'])) {

    $username 	= $mysqli -> real_escape_string($_POST['username']);
    $password 	= $mysqli -> real_escape_string($_POST['password']);

    if (empty($username) && empty($password)) {
        array_push($errors,"Nama pengguna dan kata laluan diperlukan");
    }
    


    if (count ($errors)== 0) {

        $password=md5($password);
        
        $query = "SELECT * FROM customer WHERE customer_username = ('$username') AND customer_password = ('$password')";
        $result=mysqli_query($mysqli, $query);
        if (mysqli_num_rows($result) == 1 )  {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Berjaya log masuk";
            header('location: dashboard.php');
            }  else{
                array_push($errors,"Nama pengguna atau Kata laluan tidak betul");
                
            }
    }
}


//LOGOUT SETTINGS
if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['username']);
	header('location:index.php');
	}


	if (isset($_GET['My info'])) {
	header('location:login.php');
	}

	$userprofile = isset($_SESSION['username']);
    $query = "SELECT * FROM customer WHERE customer_username = ('$userprofile')";
    $result = mysqli_query($mysqli, $query);
    $col = mysqli_fetch_assoc($result);




//STAFF LOGIN SETTINGS
if (isset($_POST['login_staff'])) {

		$stffusername = $mysqli -> real_escape_string($_POST['staffusername']);
		$stffpassword = $mysqli -> real_escape_string($_POST['staffpassword']);
        
        if (empty($stffusername) && empty($stffpassword)) {
            array_push($errors,"Nama pengguna dan kata laluan diperlukan");
        }


	    if (count ($errors)== 0) {

        $query_stff = "SELECT * FROM staff WHERE staff_username = ('$stffusername') AND staff_password = ('$stffpassword')";
        $result_stff = mysqli_query($mysqli,$query_stff);
        if (mysqli_num_rows($result_stff) ==1 )  {

            $_SESSION['staffusername'] = $stffusername;
            $_SESSION['success'] = "Berjaya log masuk";
            header('location: dashboard_staff.php'); 
        }  else{
                array_push($errors,"Nama pengguna atau Kata laluan tidak betul");
                
            }
        }
}

    $staffProfile=isset($_SESSION['staffusername']);
    $queryStaff="SELECT * FROM staff WHERE staff_username = ('$staffProfile')";
    $resultStaff= mysqli_query($mysqli, $queryStaff);
    $colStaff= mysqli_fetch_assoc($resultStaff);


     if (isset($_GET['logout'])) {

        session_destroy();
        usset($_SESSION['username']);
        header('location: index.php');
    }




//ADMIN LOGIN SETTINGS
if (isset($_POST['login_admin'])) {

    $adminusername = $mysqli -> real_escape_string($_POST['adminusername']);
    $adminpassword = $mysqli -> real_escape_string($_POST['adminpassword']);

    if (empty($adminusername) && empty($adminpassword)) {
        array_push($errors,"Nama pengguna dan kata laluan diperlukan");
    }

    if (count ($errors)== 0) {

        $queryAdmin = "SELECT * FROM `admin` WHERE admin_name = ('$adminusername') AND admin_password = ('$adminpassword')";
        $resultAdmin = mysqli_query($mysqli, $queryAdmin);
        if (mysqli_num_rows($resultAdmin) == 1 )  {

            $_SESSION['adminusername'] = $adminusername;
            $_SESSION['success'] = "Berjaya log masuk";
            header('location: dashboard_admin.php'); 
            }  else{
                array_push($errors,"Nama pengguna / kata laluan tidak betul");
                
            }

    }
}

    
//close connection database
$mysqli -> close();
?>