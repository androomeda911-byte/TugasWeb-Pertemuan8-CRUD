# Tugas Rutin 8 - CRUD Data Mahasiswa (PHP dan MySQL)

Tugas matakuliah Pemrograman Web. Aplikasi CRUD (Create, Read, Update, Delete) untuk mengelola data mahasiswa memakai PHP dan MySQL.

Repository: https://github.com/androomeda911-byte/TugasWeb-Pertemuan8-CRUD

## Fitur

- Menampilkan daftar mahasiswa
- Menambah data mahasiswa
- Mengubah data mahasiswa
- Menghapus data mahasiswa

## Database

- Nama database: `akademik`
- Tabel: `mahasiswa`

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | int(11) | Primary key, auto increment |
| `nama` | varchar(100) | Nama mahasiswa |
| `nim` | varchar(20) | Nomor induk mahasiswa |
| `alamat` | varchar(255) | Alamat, boleh kosong |

Struktur dan data awal ada di file `akademik.sql`.

## Teknologi

- PHP 8
- MySQL / MariaDB
- phpMyAdmin
- XAMPP

## Struktur Folder

```
TugasWeb-Pertemuan8-CRUD/
├── akademik/        (source code aplikasi)
├── akademik.sql     (dump database)
└── README.md
```

## Cara Menjalankan

1. Install XAMPP, lalu jalankan **Apache** dan **MySQL** dari XAMPP Control Panel.
2. Buka phpMyAdmin (`http://localhost/phpmyadmin`), buat database baru bernama `akademik`.
3. Pilih database `akademik`, buka tab **Import**, lalu pilih file `akademik.sql`.
4. Copy folder `akademik/` ke `C:\xampp\htdocs\`.
5. Buka `http://localhost/akademik/` di browser.

Kalau koneksi database gagal, cek pengaturan host, username, password, dan nama database di file koneksi di dalam folder `akademik/`.

## Identitas

- Nama: Andromeda Achmad Nugroho
- Kampus: Universitas Negeri Medan
- Program Studi: Ilmu Komputer
- Matakuliah: Pemrograman Web
