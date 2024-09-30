<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="position-absolute w-100 h-100" style="z-index: -1;">
        <img class="img-fluid w-100 h-100" src="./bggreen.jpg" alt="BgGREEN">
    </div>
    <div class="d-inline-block bg-success rounded-lg m-2 p-4 text-light shadow-lg">
        <h1 class="p-1 bg-light text-success rounded-lg">Identitas sudah <strong>berhasil</strong> dikirim.</h1>
        <p>Terima Kasih Sudah Mengisi.</p>
        <p>Berikut ini detail anda:</p>
        <div class="bg-light text-dark d-inline-block rounded-lg">
            <div class="m-1">
                <?php
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                $hobby1 = $_POST['text1'];
                $hobby2 = $_POST['text2'];
                $hobby3 = $_POST['text3'];

                echo 'Nama: '.$nama;
                echo '<br>Email: '.$email;
                echo '<br>Gender: '.$gender;
                echo '<br>Hobby: '.$hobby1;
                if (!empty($hobby2)) {
                    echo ", ".$hobby2;
                }
                if (!empty($hobby3)) {
                    echo ", ".$hobby3;
                }
                ?>
            </div>
        </div>
    </div>    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script> 
</body>
</html>
