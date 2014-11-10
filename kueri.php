<?php
 
include "koneksi.php";
 
$perintah= "SELECT * FROM username";
$query = mysql_query($perintah);
 
//tampilkan data
while($data=mysql_fetch_array($query))
{
echo "nama :".$data['username']." - alamat: ".$data['password'];
}
?>