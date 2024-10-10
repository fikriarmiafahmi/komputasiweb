<?php

$host = "127.0.0.1";
$username = "root";
$password = "fikri";
$koneksi = new mysqli($host, $username, $password);


# Membuat Database
$namaDatabase = "kbwp5";
$membuat_database = $koneksi->query("CREATE DATABASE IF NOT EXISTS $namaDatabase");
if ($membuat_database === TRUE) {
    echo "Pembuatan database berhasil atau sudah ada";
} else {
    echo "Gagal membuat database: " . $koneksi->error;
}


# Hubungkan ke database
$koneksi = new mysqli($host, $username, $password, $namaDatabase);
if ($koneksi->connect_error) {
    die("<br>Koneksi ke database gagal: " . $koneksi->connect_error);
}


# Membuat Table
$namaTabel = "biodata";
$membuat_table = $koneksi->query("CREATE TABLE IF NOT EXISTS $namaTabel(id INT, nama varchar(50), nim varchar(50), angkatan INT)");
if ($membuat_table == TRUE) {
    echo "<br>Membuat table berhasil atau sudah ada";
} else {
    echo "Gagal membuat database: " . $koneksi->error;
}


# Insert Database
$id = 18;
$nama = "Fikri Armia Fahmi";
$nim = "2023071018";
$angkatan = 2023;
$menginsertIsi = $koneksi->prepare("INSERT INTO $namaTabel (id, nama, nim, angkatan) VALUES (?, ?, ?, ?)");
$menginsertIsi->bind_param("issi", $id, $nama, $nim, $angkatan);
if ($menginsertIsi->execute()) {
    tampilkan();
} else {
    echo "";
}


# Select Tabel
function tampilkan() {
    GLOBAL $koneksi, $namaTabel;
    $selectTable = $koneksi->query("SELECT * FROM $namaTabel");
    if ($selectTable->num_rows > 0) {
        // Menampilkan data setiap baris
        echo "<br>-------------------------------<br>";
        echo "         Data Terbaru<br>";
        while($row = $selectTable->fetch_assoc()) {
            echo "ID: " . $row["id"] . "<br>";
            echo "Nama: " . $row["nama"] . "<br>";
            echo "NIM: " . $row["nim"] . "<br>";
            echo "Angkatan: " . $row["angkatan"] . "<br>";
            echo "-------------------------------<br>";
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
}
tampilkan();


# Delete Data
$reqDelete = 19;
$deleteData = $koneksi->query("DELETE FROM $namaTabel WHERE id=$reqDelete");
if ($deleteData == TRUE) {
    echo "<br><h1>Berhasil Delete</h1>";
} else {
    echo "";
}

tampilkan();


# Update Data
$kondisiUpdate = 19;
$reqUpdate = 'Fahmi';
$updateData = $koneksi->query("UPDATE $namaTabel SET nama='$reqUpdate' WHERE id='$kondisiUpdate'");
if ($updateData == TRUE) {
    echo "<br><h1>Berhasil Update</h1>";
} else {
    echo "";
}

tampilkan();