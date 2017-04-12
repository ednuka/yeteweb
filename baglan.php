<?php
session_start();

$baglanti = mysql_connect('localhost','root', '1234') or die (mysql_error());

$veritabani= mysql_select_db("yetdb", $baglanti) or die (mysql_error());
if($veritabani){
    }
else {
        echo "Veritabanına bağlantı sağlanamadı";
    }
	

      mysql_select_db("yetdb");
      mysql_query("SET NAMES UTF8");

?>

