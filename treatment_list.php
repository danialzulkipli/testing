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

        <!--parking for designation -->
        <!-- Welcome, --> <?php //echo $_POST["name"]; ?>

        <div>
            <div class="d-flex flex-row">

                <!-- LEFT SIDEBAR SETTINGS -->
                <div class="col-md-3">
                    <div class="card card1 p-3">
                    
                        <!-- navbar dashboard --> 
                        <a href="dashboard_admin.php" class="btn btn-primary">Dashboard</a><br>
                        <a href="appointment_admin.php" class="btn btn-primary">Buat Temu Janji</a><br>
                        <a href="appointment_status_admin.php" class="btn btn-primary">Status Temu Janji</a><br>
                        <hr class="hline">
                        <a href="customer_list.php" class="btn btn-primary">Senarai Pelanggan</a><br>
                        <a href="staff_list.php" class="btn btn-primary">Senarai Staf</a><br>
                        <a href="treatment_list.php" class="btn btn-primary">Senarai Ubat Haiwan</a><br>
                    </div>
                </div>

                <!-- MAIN CONTENT SETTINGS -->

                
                <div class="col-md-9">
                    <!--header kecil di bawah header utama -->
                    <div class="card card2 p-3">
                        <div class="hello d-flex justify-content-end align-items-center mt-3">Selamat Sejahtera, Pentadbir</div>
                    </div>


                    <div class="container mt-3">
                        <h2>Senarai Ubat Haiwan Berdaftar</h2>
                        <br>            
                        
                        <a href="tambahubat.php" class="btn btn-primary">Tambah Ubat</a>
                        <a href="edit_ubat.php" class="btn btn-primary">Buang Ubat</a><br><br>
                        
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Ubat</th>
                                <th>Harga Ubat</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php $sql_ubat="SELECT * FROM treatment_list";
                                    $result_ubat = $mysqli->query($sql_ubat);
                                    if(mysqli_num_rows($result_ubat)>=1){
                                        while ($row3 = $result_ubat->fetch_assoc()) {

                                            echo "<tr><td>".$row3["id_treatment"]."</td><td>".$row3["treatment_name"]."</td><td>".$row3["treatment_price"]."</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                ?>
                            </tbody>
                        </table>
                                                
                    </div>


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


</style>