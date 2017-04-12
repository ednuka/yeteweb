<?php 
include("baglan.php");



	$bransid=$_POST['brans'];

	$tc=$_SESSION['tc']; unset($_SESSION['tc']);

	$sorgu=mysql_query("update basvuru set bransid='$bransid' where tc='$tc'");
	
	if($sorgu)
	{
		
		header("refresh: 1; url=sifreform.php");
	}
	else
	{
		echo "Bir hata oluştu. Tekrar bölüm seçiniz";
		header("refresh: 1; url=bolumform.php");
		
	}$_SESSION['tc']=$tc;
	
	
	
?>