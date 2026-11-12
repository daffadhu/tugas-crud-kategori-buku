# CRUD PHP Native - Kategori Buku (Session 5)

Project untuk **Penugasan 1 - Pemrograman Web PHP (Session 5: CRUD)**.

## Database
- **Database**: `db_phpdaffa`
- **Tabel**: `tb_kategori_buku`
- **Kolom**:
  1. `id_kategori_buku` — `INT(11)` (Primary Key, Auto Increment)
  2. `kategori_buku` — `VARCHAR(255)`
  3. `Created_at` — `TIMESTAMP` (Default: `CURRENT_TIMESTAMP`)

## Daftar File
- `koneksi.php` — Koneksi ke database MySQL (`mysqli`)
- `index.php` — Redirect otomatis ke `kategori-buku.php`
- `kategori-buku.php` — Halaman daftar kategori buku (Read)
- `kategori-buku-tambah.php` — Form tambah data (Create)
- `kategori-buku-simpan.php` — Proses simpan data baru
- `kategori-buku-edit.php` — Form edit data (Update)
- `kategori-buku-update.php` — Proses simpan perubahan data
- `kategori-buku-hapus.php` — Proses hapus data (Delete)
- `db_phpdaffa.sql` — File SQL database & tabel
