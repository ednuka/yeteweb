<?php
include("baglan.php");

$juriadi=$_POST["juriadi"];
$jsifre=$_POST["jsifre"];
$jsifretekrar=$_POST["jsifretekrar"];


$yetkililer=mysql_query("select * from yetkililer");
$i=0;
while($kayit=mysql_fetch_array($yetkililer))
{
	
	$yetkili[$i]=$kayit['kullaniciadi'];
	$i=$i+1;
}

if(in_array($juriadi,$yetkili)) 
{ 
	echo "<script>alert('Bu isimde bir kullanıcı bulunmaktadır');</script>";
	header("refresh:1; url=juriekleform.php");
}
else{
	if($jsifre==$jsifretekrar)
	{

		$sorgu=mysql_query("insert into yetkililer (kullaniciadi,sifre) values('$juriadi','$jsifre')");

		if($sorgu){
			echo'<script>alert("Juri Kayıt İşleminiz Başarıyla Gerçekleşmiştir.");</script>';
			header("refresh:2;url=adminpanel.php");
	
		}
		else {
			echo'Başarısız İşlem';
		}
	}
	else
	{
		echo"<script>alert('Şifreler uyuşmuyor!');</script>";
		header("refresh:1; url=juriekleform.php");
	}
}
?>