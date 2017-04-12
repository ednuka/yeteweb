<?php
include("baglan.php");
$email=$_POST["email"];
$telefon=$_POST["telefon"];
$adresd=$_POST["adres"];

$tc=$_SESSION['tc']; unset($_SESSION['tc']);

$sorgu=mysql_query("update basvuru set email='".$email."' , telefon='".$telefon."' , adres='".$adresd."' where tc='".$tc."'");

if($sorgu){
	
	echo "<script>alert('Bilgileriniz başarıyla güncellenmiştir.');</script>";
    header("refresh:2; url=adaypanel.php");
}$_SESSION['tc']=$tc; 
?>