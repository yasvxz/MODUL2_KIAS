<?php
require 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $judulName = $_POST["judul"];
    $penulisName = $_POST["penulis"];
    $tahunTerbitName = $_POST["tahun_terbit"];
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO tb_buku (id, judul, penulis, tahun_terbit)
    VALUES ('$id', '$judulName', '$penulisName', '$tahunTerbitName')";


    // ==================3==================
    // Eksekusi query
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>