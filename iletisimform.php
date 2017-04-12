<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
		<meta charset="UTF-8"/>
	</head>
	
	<body >
	<?php include("baglan.php"); ?>
	
		<script src="js/jquery-2.1.4.min.js"></script>
	
    

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
             <div class="col-lg-3"></div>
			 <div class="col-lg-6">
			
			<!--Başvuru form paneli bu alanda --> 
	
			    <div class="panel panel-default"> 
				<?php 
		$sorgu=mysql_query("select * from modul where adi='basvuru'");
		$row=mysql_fetch_array($sorgu);
		if(!$row['durum'])
		{
		   echo" Üzgünüz Başvuru zamanı dolmuştur."; 
		}
		else{
		?>
			     <div class="panel-heading"><h2>İletişim Bilgileri</h2></div>
			     <div class="panel-body">
				 <form action="ilet.php" method="post">
			         <div class="container">
			          <div class="row"><br/>
			          <div class="col-lg-1">E-mail:</div>
				      <div class="col-lg-4"><input type="text" name="email"required /></div>
					  <div class="col-lg-7"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-1">Telefon:</div>
			         <div class="col-lg-4">
					 <input type="text" name="telefon" pattern=".{10,10}" required title="Telefon no başında 0 olmadan 10 hane girilmeli!" required /></div>
					 <div class="col-lg-7"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-1">Adres:</div>
			         <div class="col-lg-4"><input type="textarea" name="adres" required /></div>
					 <div class="col-lg-7"></div>
			         </div>

			        
					 <div class="row"><br/>
					 <div class="col-lg-3"></div>
					 <div class="col-lg-6"><button class="btn btn-primary" type="submit"  name="btn2">İleri ><span class="badge"></span></button></div>
					 <div class="col-lg-3"></div>
					 
					 
					 
				


					 </div>
			         </div>
					 </form>
                 </div>
		   <?php } ?>   </div>
        
        </div>
		<div class="col-lg-3"></div>
         </div>
</div>
	</div>
	
  </body>
</html>
                    