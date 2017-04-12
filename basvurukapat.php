<?php
  include("baglan.php");
   
   $sorgu=mysql_query("update modul set durum=false where adi='basvuru' ");
   
   if($sorgu){
	   echo"<script>alert('Basvurular Kapatılmıştır.');</script>";
	   header("refresh:1;url=modul.php");
	   
   }
   else {
	   echo"<script>alert('Başarısız İşlem!!!');</script>";
	   header("refresh:1;url=modul.php");
   }
  
  
?>