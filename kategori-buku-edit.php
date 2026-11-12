<?php
require_once "koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: kategori-buku.php");
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_kategori_buku WHERE id_kategori_buku = ?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>
            alert('Data kategori buku tidak ditemukan!');
            window.location='kategori-buku.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori Buku</title>
</head>
<body>
    <h2>Edit Kategori Buku</h2>

    <form method="POST" action="kategori-buku-update.php">

        <input type="hidden" name="id_kategori_buku" value="<?= $data['id_kategori_buku']; ?>">

        <label>Kategori Buku</label>
        <br>
        <input type="text" name="kategori_buku"
               value="<?= htmlspecialchars($data['kategori_buku']); ?>" required>

        <br><br>

        <button type="submit" name="update">Update</button>
        <a href="kategori-buku.php">Kembali</a>

    </form>

</body>
</html>
