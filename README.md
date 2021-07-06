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
- Buat folder baru dengan nama artikel pada folder app/views, kemudian buat file baru dengan nama index.php

![6](https://user-images.githubusercontent.com/56241285/122761299-481ab700-d2c6-11eb-8f6f-18a6e3b1bc6d.png)

- Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![7](https://user-images.githubusercontent.com/56241285/122861582-d7b57980-d349-11eb-99cd-ecb3473a0694.png)

- Kemudian tambahkan beberapa data pada database agar dapat ditampilkan datanya

![8](https://user-images.githubusercontent.com/56241285/122862141-e05a7f80-d34a-11eb-8718-450611efadc0.png)

- Refresh kembali browser, sehingga akan ditampilkan hasilnya

![9](https://user-images.githubusercontent.com/56241285/122862285-1697ff00-d34b-11eb-8272-c2c75493ae08.png)

## Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artike dengan nama view()

![10](https://user-images.githubusercontent.com/56241285/122862655-ab9af800-d34b-11eb-8c18-ac373389922a.png)
## Langkah 6 - Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php

![12](https://user-images.githubusercontent.com/56241285/122863107-6cb97200-d34c-11eb-8542-7070e48bdf9a.png)

##  Langkah 7 - Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail

![13](https://user-images.githubusercontent.com/56241285/122863432-ed786e00-d34c-11eb-899f-18bf398269ad.png)
![14](https://user-images.githubusercontent.com/56241285/122865172-1ea66d80-d350-11eb-83c1-d1f6d9e7428b.png)

## Langkah 8 - Membuat Menu Admin
- Buat method baru pada Controller Artikel dengan nama admin_index()

![15](https://user-images.githubusercontent.com/56241285/122865584-d50a5280-d350-11eb-82c8-665e8aa1694e.png)
- Kemudian buat view untuk tampilan admin dengan nama admin_index.php

![16](https://user-images.githubusercontent.com/56241285/122866073-95903600-d351-11eb-8a23-365b926cc03a.png)
![17](https://user-images.githubusercontent.com/56241285/122866086-99bc5380-d351-11eb-881f-30f8af01e977.png)

- Tambahkan routing untuk menu admin seperti berikut:

![18](https://user-images.githubusercontent.com/56241285/122866265-d9833b00-d351-11eb-887a-4cbceed73f38.png)

- Setelah itu buat template header dan footer baru untuk Halaman Admin. Buat file baru dengan nama admin_header.php pada direktori app/view/template

![19](https://user-images.githubusercontent.com/56241285/122866572-629a7200-d352-11eb-8b94-3bf825cdf483.png)

- Dan Buat file baru lagi dengan nama admin_footer.php pada direktori app/view/template

![20](https://user-images.githubusercontent.com/56241285/122866773-bad17400-d352-11eb-9e32-3a0733af7292.png)

- Kemudian buat file baru lagi dengan nama admin.css pada direktori ci4/public untuk mempercantik tampilan Halaman Admin

![21](https://user-images.githubusercontent.com/56241285/122867285-71355900-d353-11eb-9750-466e998c7acc.png)
![22](https://user-images.githubusercontent.com/56241285/122867302-785c6700-d353-11eb-87f2-913e8aece8d8.png)

- Akses menu admin dengan url http://localhost:8080/admin/artikel

![23](https://user-images.githubusercontent.com/56241285/122867496-cbceb500-d353-11eb-8ccb-96292eacad8b.png)
## Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add()

![24](https://user-images.githubusercontent.com/56241285/122867840-56afaf80-d354-11eb-9478-975c9bbbec3d.png)

- Kemudian buat view untuk form tambah dengan nama form_add.php

![25](https://user-images.githubusercontent.com/56241285/122868197-d8074200-d354-11eb-84a1-3bddbcee4848.png)

- Klik menu Tambah Artikel dan inilah hasilnya
 
![26](https://user-images.githubusercontent.com/56241285/122869487-8d86c500-d356-11eb-973c-5ecab87e422a.png)

## Langkah 10 - Mengubah Data
- Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit()

![27](https://user-images.githubusercontent.com/56241285/122869816-fff7a500-d356-11eb-8301-8b9fedea1646.png)

- Kemudian buat view untuk form tambah dengan nama form_edit.php

![28](https://user-images.githubusercontent.com/56241285/122870076-6a104a00-d357-11eb-9196-2d568a907f30.png)

- Klik ubah pada salah satu artikel dan inilah hasilnya

![29](https://user-images.githubusercontent.com/56241285/122870363-c2dfe280-d357-11eb-8c9f-7965c02528ca.png)

## Langkah 11 - Menghapus Data
- Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete()

![30](https://user-images.githubusercontent.com/56241285/122870562-05a1ba80-d358-11eb-8835-b67b2ae83f3b.png)

# Praktikum 13 - Lanjutan Codeigniter - Pemrograman Web
```
Riska Paspa Anggraeni Putri
311910440
TI.19.A.2
Universitas Pelita Bangsa
```
## Persiapan
Buat Tabel User pada Database lab_ci4
```
CREATE TABLE user (
id INT(11) auto_increment,
username VARCHAR(200) NOT NULL,
useremail VARCHAR(200),
userpassword VARCHAR(200),
PRIMARY KEY(id)
);
```
![1](https://user-images.githubusercontent.com/56241285/123577471-15108000-d7fe-11eb-8c95-4d777c93769f.png)
## Langkah 1 - Membuat Model User
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada folder app/Models dengan nama UserModel.php

![2](https://user-images.githubusercontent.com/56241285/123577842-c4e5ed80-d7fe-11eb-8f64-f306cfb1f636.png)
## Langkah 2 - Membuat Controller User
Buat Controller baru dengan nama User.php pada folder app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login

![3](https://user-images.githubusercontent.com/56241285/123578225-8ef53900-d7ff-11eb-92bb-6885c9bb3f84.png)
![4](https://user-images.githubusercontent.com/56241285/123578233-9288c000-d7ff-11eb-9e82-21fa8be08e66.png)
## Langkah 3 - Membuat View Login
Buat folder baru dengan nama user pada folder app/views, kemudian buat file baru dengan nama login.php

![5](https://user-images.githubusercontent.com/56241285/123578378-e693a480-d7ff-11eb-9a1c-1e19db47d012.png)
## Langkah 4 - Membuat Database Seeder
- Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:
```
php spark make:seeder UserSeeder
```
![6](https://user-images.githubusercontent.com/56241285/123578573-5a35b180-d800-11eb-9243-a1cacb53cd56.png)

- Selanjutnya, buka file UserSeeder.php yang berada di folder /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![7](https://user-images.githubusercontent.com/56241285/123578778-bd274880-d800-11eb-85f5-237cb50c710f.png)

- Selanjutnya buka kembali CLI dan ketik perintah berikut:
```
php spark db:seed UserSeeder 
```
![8](https://user-images.githubusercontent.com/56241285/123579312-dda3d280-d801-11eb-8860-c515fd14ad43.png)

- Jangan lupa jalankan perintah ini untuk menjalankan ci4 di port 8080. Buka kembali CLI dan ketik perintah berikut:
```
php spark serve
```
- Tambahkan CSS untuk mempercantikan tampilan login. Buka file style.css pada direktori ci4\public\style.css

![9](https://user-images.githubusercontent.com/56241285/123579354-f14f3900-d801-11eb-80e6-534fef8a6fa3.png)
![10](https://user-images.githubusercontent.com/56241285/123579370-f7ddb080-d801-11eb-899f-bff45783da93.png)

- Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![11](https://user-images.githubusercontent.com/56241285/123579595-6884cd00-d802-11eb-9e54-71b02372d3e0.png)
## Langkah 5 - Menambahkan Auth Filter
- Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada folder app/Filters

![12](https://user-images.githubusercontent.com/56241285/123579837-dc26da00-d802-11eb-8e54-6ab839204ae8.png)

- Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![13](https://user-images.githubusercontent.com/56241285/123580036-3162eb80-d803-11eb-89f2-7fe83914c22f.png)

- Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![14](https://user-images.githubusercontent.com/56241285/123580260-a20a0800-d803-11eb-96e3-d5ce4e035f59.png)
## Langkah 6 - Fungsi Logout
- Tambahkan method logout pada Controller User seperti berikut:

![15](https://user-images.githubusercontent.com/56241285/123580341-d978b480-d803-11eb-9d4c-74c5ef277cc2.png)

- Tambahkan menu logout di header admin. Ke folder app\view\template lalu buka file admin_header.php tambahkan kode berikut

![16](https://user-images.githubusercontent.com/56241285/123580545-49873a80-d804-11eb-9cfc-5faf61904028.png)

- Tambahkan route logout dengan cara ke folder app\Config\Routes.php lalu tambahkan kode berikut

![17](https://user-images.githubusercontent.com/56241285/123580750-a2ef6980-d804-11eb-8039-794913f8f275.png)
## Langkah 7 - Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login
- Tampilan Login

![11](https://user-images.githubusercontent.com/56241285/123580898-eea21300-d804-11eb-911d-dc7086cbf2c5.png)

- Tampilan setelah akses login

![18](https://user-images.githubusercontent.com/56241285/123581888-04b0d300-d807-11eb-9618-e6c0d0bcbd6e.png)
# Praktikum 14 - Lanjutan Codeigniter - Pemrograman Web
```
Riska Puspa Anggraeni Putri
311910440
TI19A2
```
## Langkah 1 - Membuat Pagination
- Untuk membuat pagination, buka Kembali Controller Artikel.php di folder htdocs\lab11_php_ci\ci4\Controllers, kemudian modifikasi kode pada method admin_index seperti berikut

![1](https://user-images.githubusercontent.com/56241285/124558911-4c69d700-de65-11eb-8488-f061e62e0bd8.png)

- Kemudian buka file admin_index.php di folder views/artikel dan tambahkan kode berikut dibawah deklarasi tabel data.

![2](https://user-images.githubusercontent.com/56241285/124559888-635cf900-de66-11eb-8f51-6bab2948c27b.png)

- Kemudian buka file admin.css di folder public lalu tambahkan kode berikut untuk mempercantik tampilan pagination

![3](https://user-images.githubusercontent.com/56241285/124561193-d024c300-de67-11eb-85be-463c69f5c9da.png)

- Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.

![4](https://user-images.githubusercontent.com/56241285/124562399-2e05da80-de69-11eb-86b3-1c4f04ab2a6d.png)
## Langkah 2 - Membuat Pencarian
- Untuk membuat pencarian data, buka kembali Controller Artikel.php di folder htdocs\lab11_php_ci\ci4\Controllers, pada method admin_index ubah kodenya seperti berikut

![5](https://user-images.githubusercontent.com/56241285/124562846-b2f0f400-de69-11eb-8e94-fe5f6e9d8483.png)

- Kemudian buka kembali file admin_index.php pada folder views/artikel dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:

![6](https://user-images.githubusercontent.com/56241285/124564095-e84a1180-de6a-11eb-8325-1c68cfeb5d52.png)

- Dan pada link pager ubah seperti berikut

![7](https://user-images.githubusercontent.com/56241285/124564321-247d7200-de6b-11eb-877d-752d445eb8af.png)

- Kemudian buka file admin.css di folder public lalu tambahkan kode berikut untuk mempercantik tampilan pencarian

![8](https://user-images.githubusercontent.com/56241285/124564570-65758680-de6b-11eb-9427-6e4de19610be.png)

- Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.

![9](https://user-images.githubusercontent.com/56241285/124564774-981f7f00-de6b-11eb-9e2c-ef15e55688bc.png)
## Langkah 3 - Upload Gambar
- Buka kembali Controller Artikel (htdocs\lab11_php_ci\ci4\Controllers\Artikel.php), sesuaikan kode pada method add seperti berikut:

![10](https://user-images.githubusercontent.com/56241285/124565371-298ef100-de6c-11eb-9b62-fedf7752f533.png)

- Kemudian pada file views/artikel/form_add.php tambahkan field input file Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

![11](https://user-images.githubusercontent.com/56241285/124565806-9d30fe00-de6c-11eb-8c2a-750302ca2795.png)

- Kemudian buka file public/admin.css tambahkan kode berikut untuk mempercantik tampilan tomboll upload gambar

![12](https://user-images.githubusercontent.com/56241285/124565974-cea9c980-de6c-11eb-8edf-67c88225abdc.png)

- Ujicoba file upload dengan mengakses menu tambah artikel

![13](https://user-images.githubusercontent.com/56241285/124566660-7626fc00-de6d-11eb-8f8a-d3154959725a.png)
