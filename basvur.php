<?php

include("baglan.php");
$tc=$_POST['tc'];
$isim=$_POST['isim'];
$soyisim=$_POST['soyisim'];
$cinsiyet=$_POST['cinsiyet'];
$anne=$_POST['anne'];
$baba=$_POST['baba'];
$okul=$_POST['okul'];

$ogrencino=$_POST['ogrencino'];
$dogum=$_POST['dogum'];
unset($_SESSION['tc']);
$_SESSION['tc']=$tc; 



if($_POST){//Form gönderildi mi?
$table=mysql_query("select * from basvuru");
$i=0;
while($kayit=mysql_fetch_array($table))
{
	
	$sayilar[$i]=$kayit['id'];
	$i=$i+1;
}

$rastgele=rand(1,1000); // 1 ile 1000 arası sayi uretir
while(in_array($rastgele,$sayilar)) // uretilen sayi dizide varmi?
{$rastgele=rand(1,1000);} // varsa yeni bir sayı üret


	if ($_FILES["resim"]["size"]<1024*1024){//Dosya boyutu 1Mb tan az olsun
		if ($_FILES["resim"]["type"]=="image/jpeg"){//dosya tipi jpeg olsun
			
			$dosya_adi=$_FILES["resim"]["name"];
			//Dosyaya isim oluşturuluyor
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=rand(1,10000);
			$yeni_ad="resimler/".$rastgele.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
				
				
				//echo $tc."--".$isim."--".$soyisim."--".$cinsiyet."--".$anne."--".$baba."--".$okul."--".$ogrencino."--".$dogum."--";
				$sorgu=mysql_query("insert into basvuru (id,tc,isim,soyisim,cinsiyet,anadi,babadi,okulad,ogrencino,dtarih,fotograf) values ('$rastgele','$tc','$isim','$soyisim','$cinsiyet','$anne','$baba','$okul','$ogrencino','$dogum','$yeni_ad')");
               if($sorgu){
			   header("refresh:1; url=iletisimform.php");}
			   else{echo"<script >alert('Kayit BAŞARISIZ');</script>";header("refresh:1; url=index.php");}

			}
			else{
				echo 'Dosya Yüklenemedi!';
			}
		}else{
			echo 'Dosya yalnızca jpeg formatında olabilir!';
		}
	}else{			
		echo 'Dosya boyutu 1 Mb ı geçemez!';
	}
}
else{
	echo "Kayıt Esnasında Bir Sorun Oluştu!";
	header("refresh: 1; url=index.php");
}
?>