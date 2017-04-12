
<?php 
include("baglan.php");
$binaadi=$_SESSION["binaadi"]; unset($_SESSION['binaadi']);					
$salonadet=$_SESSION['salonadet']; unset($_SESSION['salonadet']);
$s1=mysql_query("insert into bina (binaadi) values ('$binaadi') ");
$goster=mysql_query("select * from bina where binaadi='$binaadi'");
while($bina=mysql_fetch_array($goster))
{
	$binaid=$bina['binaid'];
}
if($s1)
{

	for($i=1;$i<=$salonadet;$i++)
	{
	
		$salonadi="salonadi".$i;
		$salonadi=$_POST[$salonadi];
		$kont="kont".$i;
		$kont=$_POST[$kont];
		$sql=mysql_query("insert into salon (salonadi,binaid,kontenjan) values('$salonadi','$binaid','$kont')");
		if(!$sql)	{echo"<script>alert('Kayıt gerçekleşemedi!');</script>"; header("refresh:1; url=binaekleform.php");}
		$salonadi="";
	}echo"<script>alert('Kayıt başarılı!');</script>";header("refresh:1; url=adminpanel.php");
}
else 
{
	echo "<script>alert('kayıt gerçekleşemedi');</script>"; header("refresh:1; url=binaekleform.php");
}

?>