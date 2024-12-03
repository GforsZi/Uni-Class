Project Uni-Class<br>
BY GforsZi<br>

Structure file<br>
|-app--* <br>
|      |config-* <br>
|      |       |-Berisi pengaturan untuk port server, dan koneksi mysql <br>
|      |-controlers-* <br>
|      |            |-Berisi fungsi tampilan dan metode penghubung ke fungsi database <br>
|      |-core-* <br>
|      |      |-Berisi logika inti untuk menjalankan aplikasi <br>
|      |-models-* <br>
|      |        |-Berisi fungsi fungsi database dan koneksi ke tabel tertentu <br>
|      |-views-* <br>
|      |       |-Berisi tampilan GUI <br>
|      |-.htaccess-* <br>
|      |           |-Pengaturan agar directory app tidak dapat di akses publik <br>
|      |-init.php-* <br>
|      |          |-File untuk menggabungkan directory app ke index <br>
*-Resource-* <br>
|          |-css-* <br>
|          |     |-Berisi styling script <br>
|          |-externalCode-* <br>
|          |              |-Bootstrap <br>
|          |              |-Berisi code eksternal <br>
|          |-IMG-* <br>
|          |     |-Berisi gambar <br>
|          |-js-* <br>
|          |    |-Berisi script fungsi js <br>
|          |-postDir-* <br>
|          |         |-Berisi poto postingan dari user <br>
|          |-profile_IMG-* <br>
|          |             |-Berisi profile dari user <br>
*-.htaccess-* <br>
|           |-Pengaturan website <br>
*-index.php-* <br>
            |-file utama yang akses user <br>
<br>
Uni-Class getstarted local
- Sebelum anda menjalankan project uni-Class di lokal anda anda harus memenuhi beberapa persaratan di antaranya
  1. Memahami cara kerja dari konsep OOP dan MVC pada php
  2. Memiliki LDE seperti xampp atau laragon
  3. Menggunakan IDE
  4. Paham pengoprasian server lokal seperti apache atau nginx
  5. Dapat bekerja dengan database sql
 
-setup
  1. Setting post Uni_class dan edit variable BSCURL di file config
  2. Buat database dengan menjalankan perintah sql di bawah

CREATE DATABASE uni_class;

CREATE TABLE main_model(id int primary key auto_increment, user_name varchar(255), password varchar(255), info varchar(255), bio varchar(255), foto_profile varchar(255));

CREATE TABLE table_post(id int primary key auto_increment, user_name varchar(255), imgPost varchar(255), caption varchar(255), likes int(10), fotoProfile varchar(255));

CREATE TABLE global_chat(id int primary key auto_increment, user_name varchar(255), chat_value varchar(255), foto_profile varchar(255));

  3. Ubah setting koneksi database di file config sesuaikan dengan variabelnya
  4. Jalankan web server dan lakukan uji test

  
