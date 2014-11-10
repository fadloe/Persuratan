<?php
 
$host = "localhost"; //alamat server mysql
$user = "fadloe"; //username mysql
$pass = "fadloe"; //password mysql
$db   = "persuratan"; //nama database
 
//koneksi ke server mysql
$koneksi = mysql_connect($host,$user,$pass) or die ("Tidak Bisa Konek ke Database");
 
//koneksi ke database
mysql_select_db($db,$koneksi) or die ("Tidak Menemukan Databasenya");
?>