<?php
error_reporting(0);
include 'server.php';
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
                                include 'errors.php';
                            ?>

                            Nama:       <input type="text" name="name" class="form-control" formname="name" required placeholder="Masukkan nama anda"><br><br>    
                            No telefon:     <input type="text" name="phoneno" class="form-control" name="phoneno" required placeholder="Masukkan no telefon anda"><br><br>
                            Alamat:     <input type="text" name="address" class="form-control" name="address" required placeholder="Masukkan alamat anda"><br><br>
                            Nama Pengguna:       <input type="text" name="username" class="form-control" name="username" required placeholder="Masukkan nama pengguna anda"><br><br>
                            Kata Laluan Baru:       <input type="password" name="password" class="form-control" ="password" required placeholder="Masukkan kata laluan anda"><br><br> 
                            
                            <!-- Submit button -->
                            <div class="col d-flex justify-content-center">
                                <button type="submit" name="Register" class="btn btn-primary btn-block mb-4">Daftar</button>
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