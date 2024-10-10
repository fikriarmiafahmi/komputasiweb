<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN PHP WITH SQL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
</head>
<body>
    <div>
        <h3>Instruksi Penggunaan</h3>
        <p>-Command SQL tugas ini bisa pakai 2 cara, yaitu metode POST lewat <b>inputan.php</b> dan metode GET dari file <b>perintah.php</b></p>
        <p>-Settingan URL untuk perintah SQL di file <b>perintah.php</b> yaitu sebagai berikut:</p>
        <p>INSERT DATA: <code>/perintah.php?insert=true&id=1&nama=tes&nim=2023071018&angkatan=2023</code></p>
        <p>DELETE DATA: <code>/perintah.php?delete=true&where_id=1</code></p>
        <p>UPDATE DATA: <code>/perintah.php?update=true&set_nama=fikri&where{id=1}</code></p>
    </div>
    
    <div class="container d-flex mt-5 w-100">
        <form class="d-flex flex-column flex-fill mx-4" action="./perintah.php" method="post">
            <input type="text" name="id" placeholder="id (int)" class="mb-3" required>
            <input type="text" name="nama" placeholder="nama (var)" class="mb-3" required>
            <input type="text" name="nim" placeholder="nim (var)" class="mb-3" required>
            <input type="text" name="angkatan" placeholder="angkatan (int)" class="mb-3" required>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
        
        <form class="d-flex flex-column flex-fill mx-4" action="./perintah.php" method="get">
            <input type="hidden" name="delete" value="true">
            <input type="text" name="where_id" placeholder="where id (int)" class="mb-3" >
            <input type="text" name="where_nama" placeholder="where nama (var)" class="mb-3" >
            <input type="text" name="where_nim" placeholder="where nim (var)" class="mb-3" >
            <input type="text" name="where_angkatan" placeholder="where angkatan (int)" class="mb-3" >
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
        <form class="d-flex flex-column flex-fill mx-4" action="./perintah.php" method="get">
            <input type="hidden" name="update" value="true">
            <input type="text" name="set_id" placeholder="set id (int)" class="mb-3" >
            <input type="text" name="set_nama" placeholder="set nama (var)" class="mb-3" >
            <input type="text" name="set_nim" placeholder="set nim (var)" class="mb-3" >
            <input type="text" name="set_angkatan" placeholder="set angkatan (int)" class="mb-3" ><br>
            <input type="text" name="where_id" placeholder="where id (int)" class="mb-3" required>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
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
