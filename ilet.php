<?php
include("baglan.php");


$email=$_POST['email'];
$telefon=$_POST['telefon'];
$adres=$_POST['adres'];

$tc = $_SESSION['tc']; 																											unset($_SESSION['tc']);
$sorgu=mysql_query("update basvuru 
					set email='".$email."',telefon='".$telefon."',adres='".$adres."' 
					where tc='".$tc."'");



if ($sorgu){
	
	
	header("refresh: 1; url=bolumform.php");
	
}
else{
	echo "Kayıt Esnasında Bir Sorun Oluştu!";
	header("refresh: 2; url=iletisimform.php");
}$_SESSION['tc']=$tc;
?>
