# 🎓 Sistem Manajemen Data Akademik

Proyek simpel ini adalah sistem manajemen data akademik yang dibangun menggunakan **PHP** dan **MySQL**. Sistem ini memungkinkan pengelolaan data kelas, jurusan, dan siswa di sebuah institusi pendidikan.

## 🗂️ Struktur Proyek

- **`config.php`**: Menghubungkan aplikasi dengan database MySQL.
- **`index.php`**: Halaman utama untuk menampilkan dan mengelola data kelas.
- **`edit.php`**: Mengedit informasi kelas yang ada.
- **`delete.php`**: Menghapus data kelas dari database.
- **`profile.php`**: Menampilkan profil kelas berdasarkan ID.
- **`siswa.php`**: Menampilkan data siswa dalam format tabel.
- **`update.php`**: Memperbarui data pengguna dalam tabel `user`.

## ✨ Fitur Utama

1. **Manajemen Kelas**: 
   - Tambah, edit, dan hapus data kelas.
   - Kelas terhubung dengan jurusan melalui foreign key.

2. **Manajemen Siswa**:
   - Tampilkan data siswa dengan informasi kelas yang terstruktur.
   - Data mencakup nama, jenis kelamin, dan kelas (tingkat, kode jurusan, kode kelas).

3. **Integrasi Database**:
   - Menggunakan MySQL untuk penyimpanan data.
   - Tabel `kelas` dan `jurusan` terhubung untuk menjaga integritas data.

## 🚀 Instalasi

1. **Kloning Repository**:
   ```bash
   git clone https://github.com/username/repo.git
   ```

2. **Konfigurasi Database**:
   - Impor `stmik_ids.sql` ke database MySQL.
   - Sesuaikan `config.php` dengan kredensial Anda.

3. **Menjalankan Aplikasi**:
   - Pastikan server web (Apache) dan MySQL berjalan.
   - Akses aplikasi melalui browser.

## 🔒 Catatan

- Amankan koneksi database dan validasi input untuk mencegah SQL Injection.
- Gunakan versi PHP dan MySQL yang kompatibel.

## 🤝 Kontribusi

Kontribusi sangat diterima! Fork repository ini dan buat pull request untuk perbaikan atau fitur baru.

## 📜 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
