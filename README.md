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

![10](https://user-images.githubusercontent.com/56241285/122060682-fed6ed00-ce17-11eb-8ea7-e0d522b237b9.png)

- Selanjutnya mencoba akses route yang telah dibuat dengan mengakses http://localhost:8080/contact

- Terjadi error file not found dikarenakan tidak ada file/page untuk halaman contact

![11](https://user-images.githubusercontent.com/56241285/122015578-6b3af780-cdea-11eb-8b0e-457b7446df8f.png)

## Langkah 2 - Membuat Controller

- Membuat file page.php di dalam file app/Controllers

![12](https://user-images.githubusercontent.com/56241285/122061243-86bcf700-ce18-11eb-9856-018744a7a61e.png)

- Kemudian refresh browser maka halaman sudah dapat diakses dan menampilkan hasilnya

![13](https://user-images.githubusercontent.com/56241285/122061298-91778c00-ce18-11eb-88d5-059c5366cb02.png)

- Menambahkan method baru pada controller page

- Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos

![14](https://user-images.githubusercontent.com/56241285/122061797-0b0f7a00-ce19-11eb-9c15-cd3c1a0f46ca.png)

![15](https://user-images.githubusercontent.com/56241285/122061835-14004b80-ce19-11eb-8b5b-5433c97575f8.png)

## Langkah 3 - Membuat View
- Membuat file about.php di dalam folder app/view/about.php

![16](https://user-images.githubusercontent.com/56241285/122063767-c258c080-ce1a-11eb-8f74-a890327c70c4.png)

- Mengubah method about dalam controller page

![17](https://user-images.githubusercontent.com/56241285/122063984-f2a05f00-ce1a-11eb-8a1a-5a1e43be7f53.png)

- Maka akan tampil seperti ini

![18](https://user-images.githubusercontent.com/56241285/122064047-03e96b80-ce1b-11eb-94cb-0008417f67e4.png)

## Langkah 4 - Membuat Layout Web dengan CSS
- Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout)

![19](https://user-images.githubusercontent.com/56241285/122067763-0ac5ad80-ce1e-11eb-90fa-0e4ad3d7ee4f.png)

- Kemudian buat folder template di dalam Folder view, lalu buat file header.php dan footer.php

![20](https://user-images.githubusercontent.com/56241285/122068590-ba9b1b00-ce1e-11eb-99ee-968652314b58.png)
![21](https://user-images.githubusercontent.com/56241285/122068611-c090fc00-ce1e-11eb-9120-62119eb16262.png)

- Kemudian ubah file about.php seperti berikut

![22](https://user-images.githubusercontent.com/56241285/122069455-68a6c500-ce1f-11eb-9f27-16dacdf76dd0.png)
- Kemudian refresh browser atau akses alamat http://localhost:8080/about

![23](https://user-images.githubusercontent.com/56241285/122069489-6f353c80-ce1f-11eb-8b31-6bcddb643650.png)

# Pertanyaan dan Tugas
## Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama
# Hasil tugas
- Tampilan about

![24](https://user-images.githubusercontent.com/56241285/122071627-1797d080-ce21-11eb-93cf-6e41adf971d1.png)

- Tampilan artikel

![25](https://user-images.githubusercontent.com/56241285/122071649-1e264800-ce21-11eb-9557-828b285e07f3.png)

- Tampilan Kontak

![26](https://user-images.githubusercontent.com/56241285/122071675-23839280-ce21-11eb-83ac-0836435d288e.png)

# Praktikum 12 - Lanjutan Codeigniter - Pemrograman Web
```
Riska Puspa Anggraeni Putri
311910440
TI.19.A.2
Universitas Pelita Bangsa
```

## Persiapan
### Buat Database
```
CREATE DATABASE lab_ci4;
```
### Buat Tabel
```
CREATE TABLE artikel (
 id INT(11) auto_increment,
 judul VARCHAR(200) NOT NULL,
 isi TEXT,
 gambar VARCHAR(200),
 status TINYINT(1) DEFAULT 0,
 slug VARCHAR(200),
 PRIMARY KEY(id)
);
```
![1](https://user-images.githubusercontent.com/56241285/122758596-2e2ba500-d2c3-11eb-986c-75c26c2f496e.png)
![2](https://user-images.githubusercontent.com/56241285/122758603-31269580-d2c3-11eb-9c72-7b499ac51c6b.png)
## Langkah 1 - Konfigurasi Koneksi Database
### Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file htdocs\lab11_php_ci\ci4\.env.

- Cari pada line DATABASE
- Ubah seperti berikut ini
```
# database.default.hostname = localhost
# database.default.database = lab_ci4
# database.default.username = root
# database.default.password = 
# database.default.DBDriver = MySQLi
# database.default.DBPrefix =
```
- Hilangkan tanda pagar # didepan. Maka jadi seperti dibawah ini.
```
database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
```
![3](https://user-images.githubusercontent.com/56241285/122759157-d3467d80-d2c3-11eb-9527-6ac74d2f2041.png)
## Langkah 2 - Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada folder app/Models dengan nama ArtikelModel.php

![4](https://user-images.githubusercontent.com/56241285/122760400-46042880-d2c5-11eb-81b0-f2675ab3388f.png)
## Langkah 3 - Membuat Controller
Buat Controller baru dengan nama Artikel.php pada folder app/Controllers

![5](https://user-images.githubusercontent.com/56241285/122760857-ca56ab80-d2c5-11eb-9636-cb899f8969c6.png)
## Langkah 4 - Membuat View
Buat folder baru dengan nama artikel pada folder app/views, kemudian buat file baru dengan nama index.php

![6](https://user-images.githubusercontent.com/56241285/122761299-481ab700-d2c6-11eb-8f6f-18a6e3b1bc6d.png)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![7](https://user-images.githubusercontent.com/56241285/122762592-adbb7300-d2c7-11eb-8479-0dc9c5b2ceb2.png)

Kemudian tambahkan beberapa data pada database agar dapat ditampilkan datanya

