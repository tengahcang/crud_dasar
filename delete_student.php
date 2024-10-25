<?php
$conn = mysqli_connect('localhost', 'root', '', 'school_db');
$id = $_GET['id'];

// Query untuk menghapus siswa
mysqli_query($conn, "DELETE FROM students WHERE id = $id");

// Redirect kembali ke halaman utama
header("Location: index.php");
?>
