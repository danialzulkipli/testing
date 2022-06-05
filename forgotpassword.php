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
     

        <?php include 'footer.php'; ?>

    </body>
</html>

<style>

    /* background picture & overlay settings */
    html, body {
    background-image: url("media/cat_background.jpeg");
    background-repeat: no-repeat; 
    background-attachment: fixed;
    background-size: 100% 100%;

    margin: 0;
    height: 100%;
    overflow: hidden;
    }

    .color-overlay {
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    opacity: .7;
    position: absolute;
    }

    .card {
        background-color: white;
    }

</style>