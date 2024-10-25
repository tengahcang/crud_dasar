<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'school_db');

// Ambil data siswa dari database
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="add_student.php" class="btn">Tambah Siswa</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['age']; ?></td>
            <td><?= $row['class']; ?></td>
            <td>
                <a href="edit_student.php?id=<?= $row['id']; ?>" class="btn">Edit</a>
                <a href="delete_student.php?id=<?= $row['id']; ?>" class="btn">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
