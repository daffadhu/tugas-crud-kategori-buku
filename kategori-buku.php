<?php
require_once 'koneksi.php';

$sql = "SELECT * FROM tb_kategori_buku ORDER BY id_kategori_buku DESC";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kategori Buku</title>
</head>
<body>
    <h2>Data Kategori Buku</h2>
    <a href="kategori-buku-tambah.php">+ Tambah Kategori Buku</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori Buku</th>
                <th>Created At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            if ($query && mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['kategori_buku']); ?></td>
                <td><?= htmlspecialchars($data['Created_at'] ?? $data['created_at']); ?></td>
                <td>
                    <a href="kategori-buku-edit.php?id=<?= $data['id_kategori_buku']; ?>">Edit</a>
                    |
                    <a href="kategori-buku-hapus.php?id=<?= $data['id_kategori_buku']; ?>"
                       onclick="return confirm('Yakin ingin menghapus kategori buku ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="4">Belum ada data kategori buku.</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
