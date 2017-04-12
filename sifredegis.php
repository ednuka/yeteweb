<?php
include("baglan.php");

$eskisifre=$_POST["eskisifre"];
$yenisifre=$_POST["yenisifre"];
$sifretekrar=$_POST["sifretekrar"];

$tc=$_SESSION['tc']; unset($_SESSION['tc']);

	
//$sorgu=mysql_query("update basvuru set sifre='".$yenisifre."' where tc='".$tc."' and sifre='".$eskisifre."' ");
$sorgu=mysql_query("select * from basvuru where tc='$tc'");

while($sql=mysql_fetch_array($sorgu))
{
	if($sql['sifre']==$eskisifre)
	{
		if($yenisifre==$sifretekrar)
		{
			$sorgu=mysql_query("update basvuru set sifre='".$yenisifre."' where tc='".$tc."' ");
			echo "<script>alert('Sifreniz Başarıyla Değiştirilmiştir.');</script>";
			header("refresh:2; url=adaypanel.php");

		}
		else
		{
			echo "<script>alert('Sifreler uyumlu degil');</script>";
			header("refresh:2; url=sifredegistirform.php");
		}
		
	}
	else
	{ 
		echo "<script>alert('Eski şifre hatalı');</script>";
		header("refresh:2; url=sifredegistirform.php");
	}
}

unset($_SESSION['tc']);
$_SESSION['tc']=$tc;

?>