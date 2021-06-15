# PRAKTIKUM 11 - PEMOGRAMAN WEB {PHP Framework (Codeigniter)}
```
Riska Puspa Anggraeni Putri 
311910440
TI19A2
```
## Langkah Praktikum
### Persiapan
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Beberapa ekstensi yang perlu diaktifkan:

-  php-json ekstension untuk bekerja dengan JSON;
-  php-mysqlnd native driver untuk MySQL;
-  php-xml ekstension untuk bekerja dengan XML;
-  php-intl ekstensi untuk membuat aplikasi multibahasa;
-  libcurl (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini
![1](https://user-images.githubusercontent.com/56241285/121994907-53ef1080-cdd0-11eb-86bc-80d5e6468593.png)
Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server
![2](https://user-images.githubusercontent.com/56241285/122007762-7b4ed900-cde2-11eb-9396-f3d9a2ae0f1f.png)
Kemudian buat folder baru dengan nama lab11_php_ci pada folder htdocs
![3](https://user-images.githubusercontent.com/56241285/121995606-6b7ac900-cdd1-11eb-999b-d241326151c4.png)
### Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara 
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara 
manual.
 
- Unduh Codeigniter dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![4](https://user-images.githubusercontent.com/56241285/122007778-830e7d80-cde2-11eb-879e-ee4a84579c7c.png)
### Menjalankan CLI (Command Line Interface)
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)
![5](https://user-images.githubusercontent.com/56241285/122009313-27dd8a80-cde4-11eb-90c3-ef5c99e217d1.png)
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah : (php spark)
![6](https://user-images.githubusercontent.com/56241285/122009337-2d3ad500-cde4-11eb-8fdc-d2da85014e81.png)
Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development.
![7](https://user-images.githubusercontent.com/56241285/122013514-70974280-cde8-11eb-8254-a7d8fbb980cf.png)
![8](https://user-images.githubusercontent.com/56241285/122015353-3af35900-cdea-11eb-80c4-7dff95adb55f.png)


## Langkah 1 - Membuat Route

- Router terletak pada file app/config/Routes.php
![9](https://user-images.githubusercontent.com/56241285/122014171-19de3880-cde9-11eb-9eb5-6a4e4602c046.png)
- Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
```
php spark routes
```
- Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080.
```
php spark serve
```
![10](https://user-images.githubusercontent.com/56241285/122014922-d637fe80-cde9-11eb-9bdf-9e48707f8cdf.png)
- Selanjutnya mencoba akses route yang telah dibuat dengan mengakses http://localhost:8080/contact
- Terjadi error file not found dikarenakan tidak ada file/page untuk halaman contact
![11](https://user-images.githubusercontent.com/56241285/122015578-6b3af780-cdea-11eb-8b0e-457b7446df8f.png)

## Langkah 2 - Membuat Controller
Membuat file page.php di dalam file app/Controllers
