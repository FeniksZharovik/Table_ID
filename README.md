# Sistem Manajemen Data Akademik

Proyek simpel sistem manajemen data akademik yang dibangun menggunakan PHP dan MySQL. Sistem ini memungkinkan pengelolaan data kelas, jurusan, dan siswa di sebuah institusi pendidikan.

## Struktur Proyek

- **config.php**: File konfigurasi untuk menghubungkan aplikasi dengan database MySQL.
- **index.php**: Halaman utama yang menampilkan data kelas dan menyediakan fitur untuk menambah, mengedit, dan menghapus data kelas.
- **edit.php**: Halaman untuk mengedit informasi kelas yang sudah ada.
- **delete.php**: Skrip untuk menghapus data kelas dari database.
- **profile.php**: Menampilkan profil kelas berdasarkan ID kelas yang dipilih.
- **siswa.php**: Menampilkan data siswa dalam format tabel, termasuk nama, kelas, dan jenis kelamin.
- **update.php**: Skrip untuk memperbarui data pengguna dalam tabel `user`.

## Fitur Utama

1. **Manajemen Kelas**: 
   - Tambah, edit, dan hapus data kelas.
   - Setiap kelas terhubung dengan jurusan tertentu melalui foreign key.

2. **Manajemen Siswa**:
   - Tampilkan data siswa dengan informasi kelas yang terstruktur.
   - Data siswa mencakup nama, jenis kelamin, dan kelas yang terdiri dari tingkat, kode jurusan, dan kode kelas.

3. **Integrasi Database**:
   - Menggunakan MySQL untuk menyimpan dan mengelola data.
   - Tabel `kelas` dan `jurusan` terhubung melalui foreign key untuk memastikan integritas data.

## Instalasi

1. **Kloning Repository**:
   ```bash
   git clone https://github.com/username/repo.git
   ```

2. **Konfigurasi Database**:
   - Impor file `stmik_ids.sql` ke dalam database MySQL Anda.
   - Sesuaikan pengaturan database di `config.php` dengan kredensial Anda.

3. **Menjalankan Aplikasi**:
   - Pastikan server web (seperti Apache) dan MySQL berjalan.
   - Akses aplikasi melalui browser dengan URL yang sesuai.

## Catatan

- Pastikan untuk mengamankan koneksi database dan memvalidasi input pengguna untuk mencegah SQL Injection.
- Gunakan versi PHP dan MySQL yang kompatibel untuk memastikan semua fitur berfungsi dengan baik.

## Kontribusi

Kontribusi sangat diterima! Silakan fork repository ini dan buat pull request untuk perbaikan atau fitur baru.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
