# Aplikasi PPDB

Aplikasi Penerimaan Peserta Didik Baru (PPDB) ini dikembangkan menggunakan Laravel 11 dan Vite untuk asset bundling. Aplikasi ini dirancang untuk memudahkan proses pendaftaran siswa baru secara online.

## Fitur

- Pendaftaran siswa baru secara online
- Manajemen data siswa
- Verifikasi dan validasi berkas pendaftaran
- Pengelolaan informasi sekolah
- Dashboard admin untuk monitoring dan pengelolaan

## Prasyarat

Sebelum Anda menginstal aplikasi ini, pastikan Anda telah menginstal:

- [PHP](https://www.php.net/downloads.php) >= 8.0
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) >= 16.x
- [NPM](https://www.npmjs.com/get-npm) atau [Yarn](https://yarnpkg.com/)

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal aplikasi:

1. Clone repository ini:

    ```sh
    git clone https://github.com/username/repository.git
    cd repository
    ```

2. Instal dependensi PHP dengan Composer:

    ```sh
    composer install
    ```

3. Instal dependensi JavaScript dengan NPM atau Yarn:

    ```sh
    npm install
    ```

    atau

    ```sh
    yarn install
    ```

4. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi yang diperlukan, seperti database dan email:

    ```sh
    cp .env.example .env
    ```

5. Generate application key:

    ```sh
    php artisan key:generate
    ```

6. Migrasi database:

    ```sh
    php artisan migrate
    ```

7. Build aset dengan Vite:

    ```sh
    npm run build
    ```

    atau

    ```sh
    yarn build
    ```

8. Jalankan server pengembangan:

    ```sh
    php artisan serve
    ```

Aplikasi sekarang dapat diakses di `http://localhost:8000`.

## Penggunaan

Setelah instalasi, Anda dapat mengakses aplikasi melalui browser dan mulai menggunakan fitur-fiturnya untuk mengelola proses penerimaan siswa baru.

## Kontribusi

Kami menerima kontribusi dari siapa saja. Jika Anda ingin berkontribusi, harap buat pull request atau buka isu untuk diskusi lebih lanjut.

## Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).
