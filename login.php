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

            <div class="col">
                        <h2 style="text-align:center;">Log Masuk Pelanggan</h2>
                        <br>
                        <form>
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="username" class="form-control" />
                                <label class="form-label" for="username">Nama Pengguna</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" />
                                <label class="form-label" for="password">Kata Laluan</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="text-center">
                                <!-- Simple link -->
                                <a href="forgotpassword.php">Lupa kata laluan?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-block mb-4">Log Masuk</button>
                            </div>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Anda pelanggan baru? <a href="register.php">Daftar sini</a></p>
                            </div>
                        </form>
            </div>

        </div>


        




    </body>
</html>