<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="webcam.js"></script>
 
<!-- <script src="js/main.js" type="text/javascript"></script>-->


		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
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
		$sorgu=mysql_query("select * from modul where adi='basvuru'");
		$row=mysql_fetch_array($sorgu);
		if(!$row['durum'])
		{
		   echo" Üzgünüz Başvuru zamanı dolmuştur."; 
		}
		else{
		?>
			     <div class="panel-heading"><h2>ŞİFRE</h2></div>
			     <div class="panel-body">
				 <form action="sifre.php" method="post">
			       
					 <div class="row">
					 <div class="col-lg-1"></div>
					 <div class="col-lg-6">
					 
					 
					  <div class="row"><br/>
			          <div class="col-lg-3">Şifre:</div>
				      <div class="col-lg-4"><input type="password" name="sifre" id='p1' pattern=".{8,20}" required title="Şifreniz 8-20 karakter arasında olmalı!" required /></div>
					  <div class="col-lg-5"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-3">Şifre Tekrar:</div>
			         <div class="col-lg-4"><input type="password" name="sifretekrar"  onfocus="validatePass(document.getElementById('p1'), this);" oninput="validatePass(document.getElementById('p1'), this);" required /></div>
					 <div class="col-lg-5"></div>
			         </div>
			 
           		 			
					 <div class="row"><br/>
					 <div class="col-lg-3"></div>
					 <div class="col-lg-6"></div>
					 <div class="col-lg-3"><button class="btn btn-primary" type="submit" name="giris">Devam Ediniz... </button></div>
				
					 
					 
					 
					 
					 
					 
					 </div> </div>
					  <div class="col-lg-5">
					    
	





					 
					 </div>
					 
					
			         
					 </div>
			         </div>
					 </form>
		<?php } ?></div>
		     </div>
         
        </div>
		<div class="col-lg-1">
		
		
		
		</div>
         </div>
</div>
	</div>
	
  </body>
</html>
                    