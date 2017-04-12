<?php
include("baglan.php");

$sorgu=mysql_query("update modul set durum=true where adi='adaylogin'");

if($sorgu){
	
	echo"<script>alert('Aday Giriş Sayfası Aktif Duruma Başarıyla Geçmiştir.'); </script>";
	header("refresh:1;url=modul.php");
}
else{
	echo"<script>alert('Başarısız İşlem!!!');</script>";
	header("refresh:1;url=modul.php");
}
?>