<html>
<body bgcolor=d5edb3 text="#5C743D">
<?php

include "header.php";
?>
<br><br><br>
1.	Pada sistem pendukung keputusan ini, pada saat pengguna memanggil program dengan mengetikkan “localhost/produksi” pada web browser, <br> maka akan muncul halaman index yang berisi menu login. <br><br>
2.	Pada menu login, terdapat dua pengguna yaitu administrator dan operator program berupa menu pulldown. <br>Username untuk administrator adalah ‘admin’ (case sensitive) dan password administrator adalah ‘admin’(case sensitive). <br>Sedangkan Username untuk operator adalah ‘operator’ (case sensitive) dan password operator adalah ‘operator’ (case sensitive).<br><br>

3.	Menu yang dimiliki oleh administrator dan operator masing-masing berupa link yang jika diklik akan membuka halaman baru sesuai link yang dipilih. <br><br>

<b>a.   Menu Administrator</b><br>
Menu yang dimiliki oleh administrator yaitu: 'Home', ‘olah data’, ‘lihat data’, ‘edit data’, ‘ubah password’, dan ‘logout’. <br><br>

1)	Menu 'Home' adalah menu yang digunakan untuk kembali ke halaman utama administrator (admin.php).<br>

2)	Menu ‘olah data’ adalah menu yang digunakan untuk menghitung jumlah produksi dengan metode Tsukamoto dengan menggunakan data <br> persediaan dan data permintaan. Administrator memerlukan menu ini untuk mengecek apakah program sudah berjalan sesuai dengan metode <br> Tsukamoto atau tidak.<br>
3)	Menu ‘lihat data’ yaitu menu yang digunakan oleh untuk melihat semua data yang ada, data yang ada pada sistem pendukung keputusan ini<br> adalah data selama 30 hari. <br>
4)	Menu ‘edit data’ merupakan menu yang digunakan untuk mengubah data oleh administrator. Data-data pada halaman edit data berupa link, <br>yang jika diklik akan menuju halaman update.php sesuai dengan id data yang dipilih untuk diubah.<br>
5)	Menu ‘ubah password’ adalah menu yang digunakan oleh administrator untuk mengubah password.<br>

6)	Menu ‘logout’ yaitu menu yang digunakan oleh administrator untuk keluar dari sistem pendukung keputusan.<br><br>

<b>b.   Menu operator</b><br>
Sedangkan menu operator yaitu: ‘olah data’, ‘lihat data’, ‘ubah password’ dan ‘logout’. <br><br>Username operator adalah ‘operator’ (case sensitive) dan password operator adalah ‘operator’(case sensitive).<br>
1)	Menu 'Home' adalah menu yang digunakan untuk kembali ke halaman utama operator (user.php).<br>

2)	Menu ‘olah data’ adalah menu yang digunakan untuk menghitung jumlah produksi dengan metode Tsukamoto dengan menggunakan data <br>persediaan dan data permintaan. <br>
3)	Menu ‘lihat data’ yaitu menu yang digunakan oleh operator untuk melihat semua data yang ada, data yang ada pada sistem pendukung <br>keputusan ini adalah data selama 30 hari. <br>
4)	Menu ‘ubah password’ adalah menu yang digunakan oleh operator untuk mengubah password operator.<br>
5)	Menu ‘logout’ yaitu menu yang digunakan oleh operator untuk keluar dari sistem pendukung keputusan.

</body>
</html>
