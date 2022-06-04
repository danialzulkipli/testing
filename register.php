<?php

include 'config.php';

if(iseet($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM login WHERE username = '$username' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'Butiran pengguna wujud.';

    } else {

        $insert = "INSERT INTO login(name, phoneno, username, password) VALUES ('$name', '$phoneno', '$username', '$password')";
        mysqli_query($conn, $insert);
        header('location:index.php');
    }

};
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
      
        <div class="form-container">

            <form action="" method="post">
                <h2>Daftar Akaun</h2>

                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                ?>


                Nama:       <input type="text" name="name" required placeholder="Masukkan nama anda"><br><br>    
                No telefon:     <input type="text" name="phoneno" required placeholder="Masukkan no telefon anda"><br><br>   
                Nama Pengguna:       <input type="text" name="username" required placeholder="Masukkan nama pengguna anda"><br><br>
                Kata Laluan Baru:       <input type="password" name="password" required placeholder="Masukkan kata laluan anda"><br><br>
                <input type="submit" name="submit" value="Daftar" class="form-btn">
            </form>
        </div>

    </body>
</html>

<style>
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
</style>