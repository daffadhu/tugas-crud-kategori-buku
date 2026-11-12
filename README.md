# Tugas CRUD PHP Native - Kategori Buku (Session 5)

Proyek ini dibuat untuk memenuhi **Penugasan 1 - Pemrograman Web PHP (Session 5: CRUD)**.

## Spesifikasi Database
- **Nama Database**: `db_phpdaffa`
- **Nama Tabel**: `tb_kategori_buku`
- **Struktur Kolom**:
  1. `id_kategori_buku` - INT(11) - AUTO_INCREMENT / PRIMARY KEY
  2. `kategori_buku` - VARCHAR(255)
  3. `Created_at` - TIMESTAMP - DEFAULT CURRENT_TIMESTAMP

## Struktur Berkas
- `koneksi.php` : Konfigurasi koneksi database MySQL menggunakan ekstensi `mysqli`
- `kategori-buku.php` : Tampilan tabel data kategori buku (Read)
- `kategori-buku-tambah.php` : Formulir tambah kategori buku (Create Form)
- `kategori-buku-simpan.php` : Skrip pemrosesan simpan kategori buku ke database (Create Action)
- `kategori-buku-edit.php` : Formulir edit kategori buku dengan parameterized query (Update Form)
- `kategori-buku-update.php` : Skrip pemrosesan update data kategori buku (Update Action)
- `kategori-buku-hapus.php` : Skrip pemrosesan hapus data kategori buku (Delete Action)
- `index.php` : Mengarahkan langsung ke `kategori-buku.php`
- `db_phpdaffa.sql` : Skrip export SQL database dan data tabel awal

## Cara Penggunaan
1. Buka **XAMPP Control Panel** dan jalankan modul **Apache** dan **MySQL**.
2. Masuk ke **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Import file `db_phpdaffa.sql` atau buat database `db_phpdaffa` lalu import tabelnya.
4. Salin / buka folder proyek ini di server lokal (misalnya folder `htdocs/belajar-php` atau `htdocs/crud-kategori-buku`).
5. Buka peramban (browser) dan akses:
   ```
   http://localhost/crud-kategori-buku/kategori-buku.php
   ```
