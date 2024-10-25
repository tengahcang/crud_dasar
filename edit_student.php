<?php
$conn = mysqli_connect('localhost', 'root', '', 'school_db');
$id = $_GET['id'];

// Ambil data siswa berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM students WHERE id = $id");
$student = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    // Query untuk mengupdate data siswa
    $sql = "UPDATE students SET name='$name', age='$age', class='$class' WHERE id = $id";
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
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="edit_student.php?id=<?= $id; ?>" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= $student['name']; ?>" required><br>
        
        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" value="<?= $student['age']; ?>" required><br>
        
        <label for="class">Kelas:</label>
        <input type="text" id="class" name="class" value="<?= $student['class']; ?>" required><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
