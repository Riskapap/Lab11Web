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
![2](https://user-images.githubusercontent.com/56241285/121995447-2191e300-cdd1-11eb-9adb-769981013561.png)
Kemudian buat folder baru dengan nama lab11_php_ci pada folder htdocs
![3](https://user-images.githubusercontent.com/56241285/121995606-6b7ac900-cdd1-11eb-999b-d241326151c4.png)
