<div align="center">

# 🏠 Sistem Informasi Penjualan Perumahan

<p align="center">
  <img src="https://img.shields.io/badge/PHP-%3E%3D5.3.7-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" />
</p>

<p align="center">
  <b>Aplikasi web berbasis PHP CodeIgniter untuk mengelola data penjualan properti perumahan secara efisien dan terstruktur.</b>
</p>

</div>

---

## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Struktur Proyek](#-struktur-proyek)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Cara Instalasi](#-cara-instalasi)
- [Konfigurasi Database](#-konfigurasi-database)
- [Penggunaan](#-penggunaan)
- [Modul Aplikasi](#-modul-aplikasi)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

---

## 📌 Tentang Aplikasi

**Sistem Informasi Penjualan Perumahan** adalah aplikasi manajemen properti berbasis web yang dirancang untuk mempermudah pengelolaan data rumah, pelanggan, dan transaksi penjualan. Dibangun menggunakan framework **CodeIgniter 3** dengan antarmuka yang ramah pengguna.

Aplikasi ini cocok digunakan oleh developer perumahan, agen properti, maupun unit bisnis yang bergerak di bidang penjualan properti residensial.

---

## ✨ Fitur Utama

| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Autentikasi** | Login & logout admin yang aman |
| 🏡 **Manajemen Rumah** | Tambah, edit, hapus data properti beserta foto |
| 👥 **Manajemen Pelanggan** | Kelola data pelanggan / calon pembeli |
| 💰 **Manajemen Penjualan** | Pencatatan transaksi jual beli dengan cicilan & DP |
| 👨‍💼 **Manajemen Admin** | Pengelolaan akun pengguna sistem |
| 📊 **Tabel Data** | Tampilan data terstruktur dengan operasi CRUD lengkap |
| 🖼️ **Upload Foto** | Upload dan tampilkan foto properti |

---

## 🛠 Teknologi yang Digunakan

- **Backend**: PHP >= 5.3.7 · CodeIgniter 3.x (MVC Framework)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5 · CSS3 · Bootstrap · JavaScript
- **Templating**: CodeIgniter Views
- **Web Server**: Apache / Nginx dengan mod_rewrite

---

## 📁 Struktur Proyek

```
perumahan/
├── application/
│   ├── controllers/        # Logika kontroler
│   │   ├── Admin.php       # Manajemen admin
│   │   ├── Customer.php    # Manajemen pelanggan
│   │   ├── Penjualan.php   # Manajemen penjualan
│   │   ├── Rumah.php       # Manajemen properti
│   │   └── Welcome.php     # Halaman utama & tabel data
│   ├── models/             # Model database
│   │   ├── M_admin.php
│   │   ├── M_cuss.php
│   │   ├── M_login.php
│   │   ├── M_penjualan.php
│   │   └── M_rumah.php
│   ├── views/              # Tampilan halaman
│   │   ├── login.php
│   │   ├── home.php
│   │   ├── tambahrumah.php
│   │   ├── tblrumah.php
│   │   ├── tambahcus.php
│   │   ├── tblcustomer.php
│   │   ├── tambahpenjualan.php
│   │   ├── tblpenjualan.php
│   │   └── ...
│   └── config/
│       ├── database.php    # Konfigurasi database
│       └── routes.php      # Konfigurasi routing
├── assets/                 # Aset statis (CSS, JS, gambar)
├── img/                    # Upload foto properti
├── system/                 # Core CodeIgniter
├── index.php               # Entry point aplikasi
└── composer.json
```

---

## ⚙️ Persyaratan Sistem

Sebelum instalasi, pastikan sistem Anda memenuhi kebutuhan berikut:

- **PHP** versi 5.3.7 atau lebih tinggi
- **MySQL** versi 5.0 atau lebih tinggi
- **Web Server**: Apache (disarankan dengan XAMPP / Laragon) atau Nginx
- **mod_rewrite** aktif (untuk Apache)
- **Composer** (opsional)

---

## 🚀 Cara Instalasi

### 1. Clone Repositori

```bash
git clone https://github.com/nasrulaminmuis/perumahan.git
cd perumahan
```

### 2. Letakkan di Web Server

Salin folder proyek ke direktori web server Anda:

```bash
# Untuk Linux / macOS dengan Apache
cp -r perumahan/ /var/www/html/
```

Untuk **Windows (XAMPP)**: Salin folder `perumahan/` ke `C:\xampp\htdocs\` menggunakan File Explorer atau perintah berikut di Command Prompt:

```cmd
xcopy /E /I perumahan C:\xampp\htdocs\perumahan
```

Untuk **Windows (Laragon)**: Salin folder `perumahan/` ke `C:\laragon\www\`.

### 3. Import Database

Buat database baru dan import file SQL:

```sql
CREATE DATABASE penjualan_perumahan;
USE penjualan_perumahan;
```

Kemudian import schema database. Jika file SQL belum tersedia di repositori, buat tabel secara manual sesuai struktur di bagian [Konfigurasi Database](#-konfigurasi-database).

### 4. Konfigurasi Database

Edit file `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',        // sesuaikan username MySQL Anda
    'password' => '',            // sesuaikan password MySQL Anda
    'database' => 'penjualan_perumahan',
    'dbdriver' => 'mysqli',
    // ...
);
```

### 5. Jalankan Aplikasi

Buka browser dan akses:

```
http://localhost/perumahan
```

---

## 🗄️ Konfigurasi Database

Nama database default yang digunakan:

```
penjualan_perumahan
```

Tabel-tabel utama yang dibutuhkan:

| Tabel | Deskripsi |
|-------|-----------|
| `admin` | Data pengguna/admin sistem |
| `customer` | Data pelanggan/calon pembeli |
| `rumah` | Data properti/rumah |
| `penjualan` | Data transaksi penjualan |

---

## 📖 Penggunaan

1. **Login** — Masuk menggunakan akun admin melalui halaman login
2. **Dashboard** — Lihat ringkasan data keseluruhan
3. **Kelola Rumah** — Tambah/edit/hapus data properti beserta foto dan detail
4. **Kelola Pelanggan** — Daftarkan dan kelola data calon pembeli
5. **Catat Penjualan** — Input transaksi penjualan dengan informasi cicilan, DP, dan bunga
6. **Kelola Admin** — Atur akun pengguna yang dapat mengakses sistem

---

## 📦 Modul Aplikasi

### 🏡 Modul Rumah (Properti)
- Tambah properti baru dengan detail: tipe, harga, alamat, fasilitas, kondisi, dan foto
- Upload foto rumah (format: jpg, png, gif)
- Edit dan hapus data properti

### 👥 Modul Pelanggan
- Registrasi dan pengelolaan data pelanggan
- Edit dan hapus data pelanggan

### 💰 Modul Penjualan
- Pencatatan transaksi lengkap:
  - Tanggal pengambilan & jatuh tempo
  - Total bayar, Down Payment (DP), cicilan, dan bunga
  - Referensi ke data admin, rumah, dan pelanggan
- Edit dan hapus data transaksi

### 👨‍💼 Modul Admin
- Tambah dan kelola akun admin
- Edit username dan password

---

## 🤝 Kontribusi

Kontribusi sangat diterima! Ikuti langkah berikut:

1. **Fork** repositori ini
2. Buat **branch fitur** baru:
   ```bash
   git checkout -b fitur/nama-fitur
   ```
3. **Commit** perubahan Anda:
   ```bash
   git commit -m "Tambah fitur: nama-fitur"
   ```
4. **Push** ke branch Anda:
   ```bash
   git push origin fitur/nama-fitur
   ```
5. Buat **Pull Request**

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **MIT License** — lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

---

<div align="center">

Dibuat dengan ❤️ menggunakan [CodeIgniter](https://codeigniter.com)

⭐ Jangan lupa beri **Star** jika proyek ini bermanfaat!

</div>
