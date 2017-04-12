<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
</head>
	
	<body >
	
	<?php include("baglan.php"); ?>
	



      <div class="panel panel-info">
      <div class="panel-heading">
	  <div class="row">
	   <div class="col-lg-4"></div>
	   <div class="col-lg-4"><h2>YETENEK SINAVI KAYIT SİSTEMİ</h2></div>
	   <div class="col-lg-4"></div>
	   <div class="row">
	   <div class="col-lg-9"></div>
	   <div class="col-lg-1" align="right"><a href="index.php"><h4>Anasayfa</h4></a> </div>
		<div class="col-lg-1" align="right"><a href="yetkililoginform.php"><h4>Yetkili Giriş</h4></a></div>
		<div class="col-lg-1" ><a href="adayloginform.php"><h4>Aday Giriş</h4></a></div>
		
	  
	   </div>
	  </div>
	  </div>
      <div class="panel-body">
         <div class="container">
            <div class="row">
             <div class="col-lg-1"></div>
			 <div class="col-lg-10">
			    <div class="panel panel-info">
							     <?php 
	
	$sorgu=mysql_query("select * from modul where adi='adaylogin'");
	$row=mysql_fetch_array($sorgu);
	if(!$row['durum']){
		echo"<script>alert('Üzgünüz aday girişi kapatılmıştır!!!');</script>";
		
	}
	else{
		
	
		?>
			     <div class="panel-heading"><h2>ADAY GİRİŞ</h2></div>
			     <div class="panel-body">
				 <?php
				 if(!isset($_SESSION['adaylogin']))
				 {
				?>
				 <form action="adaykontrol.php" method="post">
			       
					 <div class="row">
					 <div class="col-lg-1"></div>
					 <div class="col-lg-6">
					 
		
					  <div class="row"><br/>
			          <div class="col-lg-3">TC:</div>
				      <div class="col-lg-4"><input type="text" name="tcno" required /></div>
					  <div class="col-lg-5"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-3">Şifre :</div>
			         <div class="col-lg-4"><input type="password" name="sifre" required /></div>
					 <div class="col-lg-5"></div>
			         </div>
			  
					
					
					 <div class="row"><br/>
					 <div class="col-lg-3"></div>
					 <div class="col-lg-6"></div>
					 <div class="col-lg-3"><button class="btn btn-primary" type="submit" name="btn1">Giriş </button></div>
				
				 <?php } else { echo"Zaten giriş yapılmış...";header("refresh:1; url=adaypanel.php"); }?>
					 
					 
					 
					 
					 
					 </div> </div>
					  <div class="col-lg-5">
					    
	





					 
					 </div>
					 
					
			         
					 </div>
			         </div>
					 </form><?php } ?>
                 </div>
		     </div>
         
        </div>
		<div class="col-lg-1">
		
		
		
		</div>
         </div>
</div>
	</div>
	
  </body>
</html>