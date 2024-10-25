<?php
$conn = mysqli_connect('localhost', 'root', '', 'school_db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    
    // Query untuk menyimpan data siswa
    $sql = "INSERT INTO students (name, age, class) VALUES ('$name', '$age', '$class')";
    mysqli_query($conn, $sql);
    
    // Redirect kembali ke halaman utama
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Siswa</h1>
    <form action="add_student.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" required><br>
        
        <label for="class">Kelas:</label>
        <input type="text" id="class" name="class" required><br>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
