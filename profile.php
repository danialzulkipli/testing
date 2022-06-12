<?php
error_reporting(0);
include 'booking_server.php';
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
        
        <?php include 'header_dashboard.php';?>

        <div>
            <div class="d-flex flex-row">

                <!-- LEFT SIDEBAR SETTINGS -->
                <div class="col-md-3">
                    <div class="card card1 p-3">
                    
                        <!-- navbar dashboard --> 
                        <a href="dashboard.php" class="btn btn-primary">Dashboard</a><br>
                        <a href="appointment.php" class="btn btn-primary">Buat Temu Janji</a><br>
                        <a href="appointment_status.php" class="btn btn-primary">Status Temu Janji</a><br>
                        <a href="deleteappointment.php" class="btn btn-primary">Buang Temu Janji</a><br>
                        <hr class="hline">
                        <a href="profile.php" class="btn btn-primary">Profil Pelanggan</a><br>
                        <a href="animallist.php" class="btn btn-primary">Senarai Haiwan Berdaftar</a><br>
                    </div>
                </div>

                <!-- MAIN CONTENT SETTINGS -->

                
                <div class="col-md-9">
                    <!--header kecil di bawah header utama -->
                    <div class="card card2 p-3">
                        <div class="hello d-flex justify-content-end align-items-center mt-3">Selamat Sejahtera, <?php echo $_SESSION["username"]; ?> </div>
                    </div>

                    <form method="post" action="profile.php">
                    <div class="container mt-3">

                        <h2>Profil Pelanggan</h2>
                        <br>
                        <label> Nama: <?php echo $col['customer_name']; ?></label>
                         <br>
                        <br>
                        <label> No Telefon: <?php echo $col['customer_phoneno']; ?></label>
                        <br>
                        <br>
                        <label> Alamat: <?php echo $col['customer_address']; ?></label>
                        <br>
                        <br> 
                        
                    </div>
                    </form>
                </div>


            </div>
        </div>


    <?php include 'footer.php'; ?>

    </body>
</html>

<style>

    /* left sidebar settings */
    .card1 {
        background-color: #0a4275;
        border-radius: 0px;
    }

    /* header kecil di bawah header utama settings */
    .card2 {
        background-color: 646FD4;
        border-radius: 0px;
    }

    /* setting statistik */
    .cardchild {
        height: 150px;
        width: 350px;
        border: 0px;
        position: relative;
        border-radius: 20px;
        background-color: #9BA3EB;
    }

    /* setting tulisan untuk greeting user */
    .hello {
        font-size: 25px;
        color: white;
        font-family: Helvetica;
        font-weight: bold;
    }

    /* setting untuk column sebelah left sidebar (main content) */
    .col-md-9{
        padding: 10px 15px 10px 15px;
    }

    /* setting tulisan untuk statistik */
    .type{
        font-family: Helvetica;
        font-size: 18px; 
        font-weight: 500;   
    }

    .number{
        font-size: 20px;
        font-weight: 700;
    }

    .mb-0 {
        font-family: Helvetica;
        font-weight: 800;
    }

    .text-muted {
        font-weight: 500;
    }


</style>