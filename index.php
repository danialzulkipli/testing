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


        <div class="container mt-5 p-4">
            <div class="row">

                <div class="col">
                    <div class="card">
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Log Masuk Pelanggan</h5>
                            <p class="card-text">Log masuk akaun untuk pelanggan Klinik Haiwan Alby</p>
                            <a href="login.php" class="btn btn-primary">Log Masuk Pelanggan</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Log Masuk Staf</h5>
                            <p class="card-text">Log masuk akaun untuk staf Klinik Haiwan Alby</p>
                            <a href="login_staff.php" class="btn btn-primary">Log Masuk Staf</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Log Masuk Pentadbir</h5>
                            <p class="card-text">Log masuk akaun untuk pentadbir Klinik Haiwan Alby</p>
                            <a href="login_admin.php" class="btn btn-primary">Log Masuk Pentadbir</a>
                        </div>
                    </div>
                </div>
        </div>

    </body>

    <br>
    

</html>

<?php include 'footer.php'; ?>

<style>

    /* background picture settings */
    html, body {
    background-image: url("media/cat_background.jpeg");
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: 100% 100%;

    /* no scroll, fixed one page */
    margin: 0;
    height: 100%;
    overflow: hidden
    }

    /* background overlay settings 
    .color-overlay {
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    opacity: .7;
    position: absolute;
    }
    */

    
</style>