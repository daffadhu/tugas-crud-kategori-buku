<?php
require_once 'koneksi.php';

if (isset($_POST['update']) || isset($_POST['id_kategori_buku'])) {
    $id = $_POST['id_kategori_buku'];
    $kategori_buku = mysqli_real_escape_string($conn, trim($_POST['kategori_buku']));

    $sql = "UPDATE tb_kategori_buku
            SET kategori_buku = '$kategori_buku'
            WHERE id_kategori_buku = '$id'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
                alert('Kategori buku berhasil diperbarui!');
                window.location='kategori-buku.php';
              </script>";
    } else {
        echo "<script>
                alert('Kategori buku gagal diperbarui!');
                window.location='kategori-buku.php';
              </script>";
    }
} else {
    header("Location: kategori-buku.php");
    exit;
}
?>
