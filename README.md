# Portofolio Website

Nama : Luqman Syahreno

NIM : 20240801016

Sebuah website portofolio yang dibangun menggunakan Framework Laravel dan Filament Admin Panel. Website ini berfungsi untuk menampilkan profil, keahlian, proyek-proyek, serta informasi kontak.

## 🗄️ Model Database

Sistem ini memiliki beberapa model yang merepresentasikan struktur data aplikasi:

- **User**: Model bawaan dari Laravel untuk manajemen pengguna/admin.
- **Profile**: Menyimpan informasi data diri atau profil utama (nama, bio, dll).
- **Skill**: Menyimpan daftar keahlian/keterampilan (skills) yang dimiliki.
- **Project**: Mewakili portofolio proyek yang pernah dikerjakan, detail proyek, gambar, dan deskripsi.
- **Contact**: Menyimpan pesan atau informasi dari pengunjung yang menghubungi melalui formulir kontak.
- **Report**: Menyimpan data laporan (report) spesifik yang terkait dengan portofolio atau proyek.

## 🛠️ Filament Admin (Panel)

Bagian _back-office_ dikelola secara penuh menggunakan **Filament Admin** untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada model-model di atas.

Sumber daya (Resources) yang tersedia di panel Filament:

- **UserResource**: Manajemen akun admin/pengguna.
- **ProfileResource**: Mengelola data profil yang akan ditampilkan di halaman utama.
- **SkillResource**: Mengelola daftar keahlian.
- **ProjectResource**: Mengatur portofolio atau proyek (menambah proyek baru, mengedit, atau menghapus).
- **ContactResource**: Melihat dan mengelola pesan/kontak yang masuk dari pengunjung.
- **ReportResource**: Mengelola laporan yang terdaftar di dalam website.

## 🎮 Controllers

Logika bisnis dan kontrol request pada aplikasi dikelola melalui controller berikut:

- **FrontController**: Mengelola seluruh alur tampilan halaman _front-end_ yang diakses pengunjung (beranda, halaman proyek, detail proyek, detail reports, dan halaman kontak).
- **ContactController, ProfileController, ProjectController, SkillController**: Controller tambahan sebagai delegasi atau cadangan logika API/Web di luar fungsi Filament Admin.

## 🌐 Tampilan (Views)

Bagian _front-end_ yang dilihat oleh pengunjung menggunakan Blade templates Laravel. Struktur tampilannya diorganisir sebagai berikut:

- **`layout/app.blade.php`**: Berkas tata letak (layout) utama/dasar bagi seluruh halaman.
- **`components/`**: Berisi komponen-komponen Blade yang dapat digunakan kembali _(reusable components)_.
- **`page/home.blade.php`**: Halaman utama (beranda) yang menampilkan profil singkat dan informasi perkenalan.
- **`page/projects.blade.php`**: Halaman yang menampilkan daftar semua proyek (portofolio) yang telah dibuat.
- **`page/project-detail.blade.php`**: Halaman yang menampilkan detail dari suatu proyek terpilih secara spesifik.
- **`page/report-detail.blade.php`**: Halaman yang menampilkan detail penjelasan laporan tertentu.
- **`page/contact.blade.php`**: Halaman formulir kontak agar pengunjung dapat mengirim pesan.

## 🚀 Teknologi yang Digunakan

- **Backend**: Laravel 11.x
- **Admin Panel**: Filament v3.x
- **Frontend / Styling**: Tailwind CSS, PostCSS, Vite
- **Docker**: Konfigurasi kontainer untuk lingkungan server (Nginx, PHP, MariaDB/MySQL).

---

🚀 _Aplikasi ini terstruktur dengan rapi untuk memudahkan penyesuaian konten dan desain, menjadikan platform portofolio yang interaktif dan mudah dikelola._
