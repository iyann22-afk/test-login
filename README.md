# CRUD Mahasiswa - Laravel Breeze

Aplikasi manajemen data mahasiswa menggunakan Laravel dengan autentikasi Laravel Breeze.
Dibuat sebagai tugas mata kuliah Pemrograman Web.

---

## ✅ Checklist Ketentuan Tugas

### 1. Database dan Tabel Mahasiswa
- ✅ **Sudah dibuat** menggunakan Laravel Migration
- 📁 Lokasi file: `database/migrations/xxxx_create_mahasiswas_table.php`
- 🔍 Cara membuktikan: Jalankan `php artisan migrate` maka tabel `mahasiswas` otomatis terbuat di database dengan field:
  - `nim` (unique)
  - `nama_mahasiswa`
  - `tempat_lahir`
  - `tanggal_lahir`
  - `jenis_kelamin`
  - `alamat`
  - `program_studi`
  - `nomor_hp`
  - `email` (unique)

---

### 2. Fitur Create (Tambah Data)
- ✅ **Sudah dibuat**
- 📁 Lokasi file:
  - Controller: `app/Http/Controllers/MahasiswaController.php` → method `create()` dan `store()`
  - View: `resources/views/mahasiswa/create.blade.php`
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → klik tombol **Tambah Mahasiswa** → isi form → klik **Simpan**

---

### 3. Fitur Read (Tampilkan Data)
- ✅ **Sudah dibuat**
- 📁 Lokasi file:
  - Controller: `app/Http/Controllers/MahasiswaController.php` → method `index()` dan `show()`
  - View: `resources/views/mahasiswa/index.blade.php` dan `show.blade.php`
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → seluruh data mahasiswa tampil dalam bentuk tabel dengan pagination

---

### 4. Fitur Update (Edit Data)
- ✅ **Sudah dibuat**
- 📁 Lokasi file:
  - Controller: `app/Http/Controllers/MahasiswaController.php` → method `edit()` dan `update()`
  - View: `resources/views/mahasiswa/edit.blade.php`
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → klik tombol **Edit** pada salah satu data → ubah data → klik **Update**

---

### 5. Fitur Delete (Hapus Data)
- ✅ **Sudah dibuat**
- 📁 Lokasi file:
  - Controller: `app/Http/Controllers/MahasiswaController.php` → method `destroy()`
  - View: `resources/views/mahasiswa/index.blade.php` (tombol Hapus)
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → klik tombol **Hapus** → konfirmasi → data terhapus

---

### 6. Laravel Breeze sebagai Sistem Autentikasi
- ✅ **Sudah diinstall dan digunakan**
- 📁 Lokasi file:
  - Config: `composer.json` (lihat bagian require-dev: laravel/breeze)
  - Route auth: `routes/auth.php`
  - Controller auth: `app/Http/Controllers/Auth/`
- 🔍 Cara membuktikan: Buka `http://localhost:8000/login` dan `http://localhost:8000/register` → halaman autentikasi Breeze tampil

---

### 7. CRUD Hanya Bisa Diakses Setelah Login
- ✅ **Sudah diamankan dengan middleware auth**
- 📁 Lokasi file: `routes/web.php`
- 🔍 Cara membuktikan: Tanpa login, coba buka `http://localhost:8000/mahasiswa` → otomatis diarahkan ke halaman login

---

### 8. Migration, Model, Controller, dan Route
- ✅ **Semua sudah dibuat**
- 📁 Lokasi file:
  - Migration: `database/migrations/xxxx_create_mahasiswas_table.php`
  - Model: `app/Models/Mahasiswa.php`
  - Controller: `app/Http/Controllers/MahasiswaController.php`
  - Route: `routes/web.php`

---

### 9. Tampilan Blade Sesuai Laravel Breeze
- ✅ **Sudah menggunakan layout Breeze (`x-app-layout`)**
- 📁 Lokasi file: `resources/views/mahasiswa/`
  - `index.blade.php` → halaman daftar
  - `create.blade.php` → form tambah
  - `edit.blade.php` → form edit
  - `show.blade.php` → detail data
- 🔍 Cara membuktikan: Semua halaman CRUD menggunakan navbar dan layout yang sama dengan halaman Dashboard Breeze

---

### 10. Validasi Form Input
- ✅ **Sudah ditambahkan validasi di Controller**
- 📁 Lokasi file: `app/Http/Controllers/MahasiswaController.php` → method `store()` dan `update()`
- 🔍 Cara membuktikan: Buka form Tambah Mahasiswa → klik Simpan tanpa mengisi apapun → pesan error validasi muncul di bawah setiap field

---

### 11. Halaman Daftar Mahasiswa dalam Bentuk Tabel
- ✅ **Sudah dibuat dengan pagination**
- 📁 Lokasi file: `resources/views/mahasiswa/index.blade.php`
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → data tampil dalam tabel dengan kolom NIM, Nama, Program Studi, Email, No. HP, dan Aksi

---

### 12. Tombol Tambah, Detail/Edit, dan Hapus
- ✅ **Sudah ada di halaman daftar mahasiswa**
- 📁 Lokasi file: `resources/views/mahasiswa/index.blade.php`
- 🔍 Cara membuktikan: Login → klik menu **Data Mahasiswa** → terlihat tombol:
  - 🔵 **Tambah Mahasiswa** (pojok kanan atas)
  - ⚫ **Detail** (tiap baris data)
  - 🟡 **Edit** (tiap baris data)
  - 🔴 **Hapus** (tiap baris data)

---

### 13. Seluruh Fitur CRUD Berjalan dengan Baik
- ✅ **Sudah diuji dan berjalan dengan baik**
- 🔍 Cara membuktikan: Ikuti langkah cara menjalankan project di bawah, lalu coba semua fitur CRUD

---

## Fitur Aplikasi
- Autentikasi (Login & Register) menggunakan Laravel Breeze
- CRUD Data Mahasiswa (Create, Read, Update, Delete)
- Validasi form input dengan pesan error
- Pagination data mahasiswa (10 data per halaman)
- Proteksi route dengan middleware auth

## Kebutuhan Sistem
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL (XAMPP)
- XAMPP harus dalam keadaan berjalan (Apache & MySQL Running)

 Jalankan XAMPP
- Buka **XAMPP Control Panel**
- Klik **Start** pada **Apache**
- Klik **Start** pada **MySQL**
- Pastikan keduanya berstatus **Running** (hijau)
- Buka **phpMyAdmin** di `http://localhost/phpmyadmin`
- Buat database baru dengan nama: `test-login`

## Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/iyann22-afk/test-login.git
cd test-login
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Install Dependencies JavaScript
```bash
npm install
```

### 4. Salin File .env
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Konfigurasi Database
Buka file `.env` dan sesuaikan bagian berikut:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-login
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan Migrasi Database
```bash
php artisan migrate
```

### 8. Jalankan Development Server
Buka **2 terminal secara bersamaan**:

Terminal 1:
```bash
php artisan serve
```

Terminal 2:
```bash
npm run dev
```

### 9. Buka di Browser
```
http://localhost:8000
```

### 10. Buat Akun
Klik **Register** untuk membuat akun baru, kemudian login.

---

## Struktur URL Aplikasi
| URL | Fitur |
|-----|-------|
| `/register` | Daftar akun baru |
| `/login` | Login |
| `/dashboard` | Halaman utama |
| `/mahasiswa` | Daftar semua mahasiswa |
| `/mahasiswa/create` | Tambah mahasiswa baru |
| `/mahasiswa/{id}` | Detail mahasiswa |
| `/mahasiswa/{id}/edit` | Edit data mahasiswa |

## Teknologi yang Digunakan
- **Laravel 11** - PHP Framework
- **Laravel Breeze** - Starter kit autentikasi
- **MySQL** - Database
- **Tailwind CSS** - CSS Framework
- **Blade** - Template engine Laravel