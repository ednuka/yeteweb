<?php
//include("juriler.php");
include("baglan.php");

ob_start();
$sql=mysql_query("select * from yetkililer");


$i=0;
$j=0;
while($giris=mysql_fetch_array($sql))
{
$i=$i+1;
if(($_POST["yetkiliname"]==$giris["kullaniciadi"]) and ($_POST["yetkilipass"]==$giris["sifre"]))
	{
		if($giris["yetki"]==false)
		{
		$_SESSION["jurilogin"]="true";
		$_SESSION["juriname"]=$giris["kullaniciadi"];
		$_SESSION["juripass"]=$giris["sifre"];
		$_SESSION["yetki"]=0;
		header("Location:juripanel.php");
		}
		else
		{
		$_SESSION["jurilogin"]="true";
		$_SESSION["juriname"]=$giris["kullaniciadi"];
		$_SESSION["juripass"]=$giris["sifre"];
		$_SESSION["yetki"]=1;
		header("Location:adminpanel.php");
		}
	}
	else
	{	$j=$j+1;
	}
	
}
if($i==$j)
	
{
	unset($_SESSION["jurilogin"]);
	unset($_SESSION["juriname"]);
	unset($_SESSION["juripass"]);
	echo "Kullanıcı adı veya şifre hatalı<br />";
	echo "Giriş sayfasına yönlendiriliyorsunuz.";
	header("refresh:2; url=yetkililoginform.php");

}


?>