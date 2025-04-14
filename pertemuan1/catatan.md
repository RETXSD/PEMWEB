file .env berisi

1.compose name yang berisi nama kita atau yang lain
2.repository name berisi repository yang ada di github
3.image tag berisi nambahin versi lastest berarti versi terbaru


docker compose berisi:

1.version 3 yang merupakan versi terbaru dari docker
2.service yang berisi web 
3.web juga berisi image yang sesuai dengan image tag di file .env dalam folder nginx
4.port adalah dimana web akan berjalan seperti 80(port yang di os):80(port docker),mengikuti setingan server di file nginx.conf
5.volume berisi file yang digunakan  


file nginx.conf berisi 

1.server yang berisi listen : 80 yang merupakan dimana web akan berjalan dan juga server_name = localhost 
2.location berisi lokasi file berada dimana

folder src berisi index.html dan lain lain yang dapat dgunakan sebagai dasar untuk pembuatan web

pada index.html digunakan h1 yang berfungsi seperti heading 1 yang memiliki ukuran tersendiri,ada juga div yang berfungsi sebagai kontainer untuk pengelompokan
sehingga lebih mudah di style pada css dan lebih mudah menambahkan logika pada js,penggunaan "class" juga sering untuk menambahkan style atau logika ke elemen html seperti contoh <h1 class = "psn1">hello wordl<h1>,dengan menggunakan .psn1{} pada css element h1 dapat diubha stylenya.

saya juga membuat beberapa file terpisah untuk tag tag html dasar pada jam 13.00 sampai 15.30,file file tersebut terdapat pada folder src

untuk jam 15.30 sampai jam 18.00 saya membuat latihan untuk membuat 2 file html yaitu home.html dan profile.html

apa itu nginx?
=> nginx adalah sebuah web server yang digunakan sebagai load balancer dan lain lain,ini dipilih dibanding dengan xampp karena lebih gampang digunakan dan dikonfigurasikan untuk banyak platform dan os

apa itu docker? 
=> docker adalah sebuah platform yang digunakan untuk menjalankan aplikasi dalam kontainer,letaknya berada di atas sistem operasi sehingga aplikasi dapat berjalan dibanyak sistem operasi tanpa banyak konfigurasi

apa itu html?
=> html(hypertext markup language) adalah sebuah bahasa sederhana dalam web development,sebagai dasar dalam pembelajaran saat membuat web,musah digunakan dan juga fleksible,dalam html juga terdapat banyak tag,seperti <h1>,<h2>,<image>,<table>,<div>,<li> dan lain lain untuk membuat struktur web dan juga html dapat dihubungkan dengan bootstrap untuk styling jika kita mau lebih mudah.

kenapa memakai html?
=> html sering dipakai karena mudah dipahami untuk pemula dalam pembelajaran web dan juga dapat di kombinasikan dengan css dan juga js,dengan php juga html dapat digunakan untuk pengembangan lebih dalam 

kenapa menggunakan nginx dan docker?
=> pada pertemuan 1 ini saya belajar untuk menggunakan nginx dan docker,sebagai dasar dalam pembuatan web server,dengan nginx yang terhubung dengan docker,web server dapat di maintanance dimana saja,mau di laptop pengembang atau pun di cloud tanpa perlu perbedaan konfigurasi 

kenapa menggunakan wsl ubuntu untuk belajar pemweb?
=> ini karena sebagian besar server berbasis linux,sehingga dapat belajar mengenal lingkungan server dengan baik dan juga bersifat open source,dan juga 
dukungan terhadap berbagai tools seperti node js,nginx,docker dan git

bagaiman cara menghubungkan nginx dan docker
=> dengan membuat file nginx yang berisi port untuk server yaitu 80 dan juga  root /usr/share/nginx/html; untuk mengatur direktori root ke kontainer ,setelah 
itu buat juga file docker-compose.yml,untuk mengatur kontainer seperti port 80:80 yaitu port nginx dan juga port lokal,ada juga service yang berisi web,image 
dan volume,volume berfungsi memetakan file konfigurasi nginx dan file html agar dapat digunakan di kontainer