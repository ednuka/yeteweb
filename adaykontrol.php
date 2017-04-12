<?php
include("baglan.php");
$tc=$_POST['tcno'];
$sifre=$_POST['sifre'];


$sorgu=mysql_query("select * from basvuru where tc='".$tc."'");
if($sorgu)
{
while($aday=mysql_fetch_array($sorgu)){  //fetch array de sorguda yıldız kullanıyoruz.
	
	if($aday['onay']=='-1'){echo"<script type='text/javascript'>alert('Üzgünüz başvurunuz henüz değerlendirilmemiştir!');</script>"; 
		}
	else if($aday['onay']==0){echo"<script type='text/javascript'>alert('Üzgünüz başvurunuz reddedilmiştir!');</script>"; 
		}
	else if($aday['onay']==1){echo"<script type='text/javascript'>alert('Başvurunuz onaylanmıştır.Sınav bilgilerinizi menüden görebilirsiniz!');</script>"; 
		}
	
	
		if($sifre==$aday['sifre']) 	
		{
			$_SESSION['adaylogin']=true;
			$_SESSION['adayisim']=$aday['isim'];
			$_SESSION['adaysoyisim']=$aday['soyisim'];
			$_SESSION['tc']=$aday['tc'];
			$_SESSION['adayid']=$aday['id'];
			header("refresh:1; url=adaypanel.php");

		}
		else 
		{
			echo"<script type='text/javascript'>alert('Hatalı şifre!');</script>"; 
			header("refresh:2; url=adayloginform.php");
		}
	
	
		
	
}
}
else{
	echo "<script>alert('Bu tc ile kayıtlı bir kullanıcı bulunmamaktadır');</script>"; 
header("refresh:1; url=adayloginform.php");
}
   

?>