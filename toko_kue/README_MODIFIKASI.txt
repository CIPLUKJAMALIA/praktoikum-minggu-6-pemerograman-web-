TOKO_KUE - VERSI MODIFIKASI LAVENDER
=====================================

Versi ini dibuat dari proyek toko_kue yang diberikan, bukan proyek baru dari nol.

YANG DIPERTAHANKAN
- Nama database: toko_kue
- Tabel: admin dan produk
- Login admin berbasis session
- Dashboard admin
- CRUD produk (tambah, edit, hapus)
- Upload gambar produk
- Pencarian produk
- Filter kategori
- Pagination
- Halaman detail produk
- Halaman tentang
- File SQL dan gambar produk

YANG DIMODIFIKASI
- Tema warna menjadi ungu muda/lavender
- Navbar dibuat sticky dan lebih modern
- Hero section diperbarui
- Card, tombol, form, tabel, alert, dan pagination diberi desain baru
- Layout dibuat lebih responsif untuk HP/tablet
- Beberapa judul/teks navigasi dan struktur HTML dirapikan agar berbeda dari versi awal
- CSS ditulis ulang dengan sistem variable warna dan komponen yang lebih konsisten

CARA MENJALANKAN
1. Extract folder toko_kue ke folder Laragon/www.
2. Buat/import database dari toko_kue/toko_kue.sql melalui phpMyAdmin.
3. Pastikan Apache dan MySQL Laragon aktif.
4. Buka: http://localhost/toko_kue/
5. Halaman admin: http://localhost/toko_kue/auth/login.php

Catatan:
Kredensial login mengikuti data admin yang ada di toko_kue.sql. Jika password tidak diketahui,
buat/reset akun admin melalui database sesuai kebutuhan praktikum.
