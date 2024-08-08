<?php
// Detail koneksi database
$servername = "localhost"; // Ganti dengan hostname server Anda jika perlu
$username = "root";        // Ganti dengan username database Anda
$password = "";            // Ganti dengan password database Anda
$dbname = "contact_formdb";    // Nama database yang baru

// Membuat koneksi
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
