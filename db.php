<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa_p7");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>