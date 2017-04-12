<?php
include("baglan.php");
$trh=$_POST['sinavtrh'];
$saat=$_POST['sinavsaat'];
//$bransid=$_POST['brans'];

//$r=mysql_query("select * from branslar where bransid='$bransid' ");
//$row=mysql_fetch_array($r);
//$bolumid=$row['bolumid'];


$bolumid=$_POST['bolum'];
$bransid=$_POST['brans'];

$binaid=$_POST['bina'];
$salonid=$_POST['salon'];



$sql=mysql_query("insert into sinav (tarih,saat,bransid,binaid,salonid,bolumid) values('$trh','$saat','$bransid','$binaid','$salonid','$bolumid')");

if($sql)
{
	echo "<script>alert('sinav kaydınız oluşturuldu');</script>";
	header("refresh:2; url=sinavform.php");
}
else
{
	echo "<script>alert('kayit gerçekleşemedi');</script>";
	header("refresh:2; url=sinavform.php");
	
}



?>