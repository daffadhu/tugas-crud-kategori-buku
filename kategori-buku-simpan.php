<?php
require_once 'koneksi.php';

if (isset($_POST['simpan']) || isset($_POST['kategori_buku'])) {
    $kategori_buku = mysqli_real_escape_string($conn, trim($_POST['kategori_buku']));

    $sql = "INSERT INTO tb_kategori_buku (kategori_buku) VALUES ('$kategori_buku')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
                alert('Kategori buku berhasil ditambahkan!');
                window.location='kategori-buku.php';
              </script>";
    } else {
        echo "<script>
                alert('Kategori buku gagal ditambahkan!');
                window.location='kategori-buku.php';
              </script>";
    }
} else {
    header("Location: kategori-buku.php");
    exit;
}
?>
