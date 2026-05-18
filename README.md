# Portofolio Website

Sebuah website portofolio yang dibangun menggunakan Framework Laravel dan Filament Admin Panel. Website ini berfungsi untuk menampilkan profil, keahlian, proyek-proyek, serta informasi kontak.

## 🗄️ Model Database

Sistem ini memiliki beberapa model yang merepresentasikan struktur data aplikasi:

- **User**: Model bawaan dari Laravel untuk manajemen pengguna/admin.
- **Profile**: Menyimpan informasi data diri atau profil utama (nama, bio, dll).
- **Skill**: Menyimpan daftar keahlian/keterampilan (skills) yang dimiliki.
- **Project**: Mewakili portofolio proyek yang pernah dikerjakan, detail proyek, gambar, dan deskripsi.
- **Contact**: Menyimpan pesan atau informasi dari pengunjung yang menghubungi melalui formulir kontak.

## 🛠️ Filament Admin (Panel)

Bagian *back-office* dikelola secara penuh menggunakan **Filament Admin** untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada model-model di atas.

Sumber daya (Resources) yang tersedia di panel Filament:

- **UserResource**: Manajemen akun admin/pengguna.
- **ProfileResource**: Mengelola data profil yang akan ditampilkan di halaman utama.
- **SkillResource**: Mengelola daftar keahlian.
- **ProjectResource**: Mengatur portofolio atau proyek (menambah proyek baru, mengedit, atau menghapus).
- **ContactResource**: Melihat dan mengelola pesan/kontak yang masuk dari pengunjung.

## 🌐 Tampilan (Views)

Bagian *front-end* yang dilihat oleh pengunjung menggunakan Blade templates Laravel `resources/views`:

- **`home.blade.php`**: Halaman utama (beranda) yang menampilkan profil singkat dan informasi perkenalan.
- **`projects.blade.php`**: Halaman yang menampilkan daftar semua proyek (portofolio) yang telah dibuat.
- **`project-detail.blade.php`**: Halaman yang menampilkan detail dari suatu proyek terpilih secara spesifik.
- **`contact.blade.php`**: Halaman formulir kontak agar pengunjung dapat mengirim pesan.
- **`components/`**: Berisi komponen Blade yang dapat digunakan kembali (reusable components) di berbagai halaman.

## 🚀 Teknologi yang Digunakan

- **Backend**: Laravel 11.x
- **Admin Panel**: Filament v3.x
- **Frontend / Styling**: Tailwind CSS, PostCSS, Vite
- **Docker**: Konfigurasi kontainer untuk lingkungan server (Nginx, PHP, MariaDB/MySQL).

---

🚀 *Aplikasi ini terstruktur dengan rapi untuk memudahkan penyesuaian konten dan desain, menjadikan platform portofolio yang interaktif dan mudah dikelola.*