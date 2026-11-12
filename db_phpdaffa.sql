-- phpMyAdmin SQL Dump
-- Host: 127.0.0.1
-- Generation Time: 2026-11-12
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

--
-- Database: `db_phpdaffa`
--
CREATE DATABASE IF NOT EXISTS `db_phpdaffa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_phpdaffa`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_buku`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_buku` (
  `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_buku` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_kategori_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori_buku`
--

INSERT INTO `tb_kategori_buku` (`id_kategori_buku`, `kategori_buku`, `Created_at`) VALUES
(1, 'Pemrograman Web', current_timestamp()),
(2, 'Basis Data & SQL', current_timestamp()),
(3, 'Desain Antarmuka (UI/UX)', current_timestamp()),
(4, 'Jaringan Komputer', current_timestamp()),
(5, 'Kecerdasan Buatan', current_timestamp());

COMMIT;
