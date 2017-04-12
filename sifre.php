<?php
include("baglan.php");

$sifredegisken=$_POST['sifre'];
$sifretekrar=$_POST['sifretekrar'];
if($sifretekrar==$sifredegisken)
{
	$tc=$_SESSION['tc']; unset($_SESSION['tc']);

	$sorgu=mysql_query("update basvuru set sifre='".$sifredegisken."' where tc='".$tc."'");
	$sql=mysql_query("select * from basvuru where tc='".$tc."'");
	while($kisi=mysql_fetch_array($sql)){$basvuruid=$kisi['id'];}
	if($sorgu){
		echo "<script>alert('".$basvuruid." numaralı başvurunuz kaydınız alınmıştır.');</script>";
		header("refresh:2; url=pdfbasvuru.php");
		//header("refresh:2; url=adayloginform.php");
	
	
	}
	$_SESSION['tc']=$tc;
}
else
{
	echo "<script>alert('Şifreler birbiriyle uyuşmuyor...')</script>";
	header("refresh:1; url=sifreform.php");
}

?>