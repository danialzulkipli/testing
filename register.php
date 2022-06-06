<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])){
    header("location: index.php");
}
/*
if(iseet($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $usertype = $_POST['usertype'];

    $select = "SELECT * FROM login WHERE username = '$username' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'Butiran pengguna wujud.';

    } else {

        if($pass != $cpass){
            $error[] = 'password not match!';
        } else {
            $insert = "INSERT INTO login(username, password) VALUES ('$username', '$password', '$usertype')";
            $insert = "INSERT INTO customer(name, phoneno, address) VALUES ('$name', '$phoneno', '$address')";
            mysqli_query($conn, $insert);
            header('location:login.php');
        }
        
    }

};
*/


/*
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phoneno = $_POST['phoneno'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $usertype = $_POST['usertype'];

    if($password == $cpass){
        
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if(!$result->num_rows->0){
            $sql = "INSERT INTO login(username, password) VALUES ('$username', '$password', '$usertype')";
            $sql = "INSERT INTO customer(name, phoneno, address) VALUES ('$name', '$phoneno', '$address')";
            $result = mysqli_query($conn, $sql);

            if($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('User already exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
*/

?>

<html>
    <head>
        <!--Webpage title on browser -->
        <title>Klinik Haiwan Alby</title>

        <!--CSS Bootstrap 5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--JS Bootstrap 5-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <?php include 'header.php';?>
      
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card px-5 py-5" id="loginstaff">
                        <form action="" method="post">
                            <h2>Daftar Akaun</h2><br>

                            <?php
                                if(isset($error)){
                                    foreach($error as $error){
                                        echo '<span class="error-msg">'.$error.'</span>';
                                    };
                                };
                            ?>

                            Nama:       <input type="text" class="form-control" formname="name" required placeholder="Masukkan nama anda"><br><br>    
                            No telefon:     <input type="text" class="form-control" name="phoneno" required placeholder="Masukkan no telefon anda"><br><br>
                            Alamat:     <input type="text" class="form-control" name="address" required placeholder="Masukkan alamat anda"><br><br>
                            Nama Pengguna:       <input type="text" class="form-control" name="username" required placeholder="Masukkan nama pengguna anda"><br><br>
                            Kata Laluan Baru:       <input type="password" class="form-control" ="password" required placeholder="Masukkan kata laluan anda"><br><br>
                            Sahkan Kata Laluan Baru:    <input type="password" class="form-control" name="cpassword" required placeholder="Masukkan kata laluan semula untuk pengesahan"><br><br>    
                            Jenis pengguna:     <select name="usertype" class="form-select">
                                                    <option value="customer">Pelanggan</option>
                                                    <option value="staff">Staf</option>
                                                </select> <br><br>
                            <!-- Submit button -->
                            <div class="col d-flex justify-content-center">
                                <button type="button" name="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
                            </div>
                        </form>
                    </div>            
                </div> 
            </div>
        </div>

        <!-- footer special segment - set position relative --> 
        <div class="footer">
            <footer>
                <div class="text-center p-3 text-white">
                © 2022 Sistem Temu Janji Veterinar Klinik Haiwan Alby
                </div>
            </footer>
        </div>

    </body>
</html>

<style>

    /* background picture & overlay settings */
    html, body {
    background-image: url("media/cat_background.jpeg");
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: 100% 100%;

    }
    
    h2{
        text-align: center;
    }

    .form-container form{
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,.1);
        background: #FFFFFF;
        text-align: center;
        width: 500px;
    }

    .form-container form input,
    .form-container form select {
        width: 50%;
        padding: 10px 15px;
        font-size: 15px;
        margin: 8px 0;
        background: #eee;
    }

    .card{
        background-color: white;
    }

    .form-btn{
        text-align: center;    
    }

    /* footer special segment - set position relative */
    .footer {
    background-color: #0a4275; 
    position: relative; 
    padding: 10px 10px 0px 10px;
    bottom: 0;
    left: 0; 
    right: 100; 
    width: 100%;
    }

</style>