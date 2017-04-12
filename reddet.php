<?php

include("baglan.php");
$secilenler=$_POST['coklu'];

$error = 0;

foreach($secilenler as $kid){

	$sorgu=mysql_query("update basvuru SET onay=false WHERE id='$kid'");
	if(!$sorgu){
		$error++;
	}
}

if($error == 0){
	
	$_SESSION['mesaj'] = "ok";
	header("refresh: 1; url=onaylaform.php");
}else{
	$_SESSION['mesaj'] = "error";
	header("refresh: 1; url=onaylaform.php");
	
}

?>
