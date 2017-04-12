<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
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
             <div class="col-lg-1"></div>
			 <div class="col-lg-10">
			    <div class="panel panel-info">
			     	 <div class="panel-heading">
				 <div class="row">
				 <div class="col-lg-6"><h2>Admin Panel</h2></div>
				 <div class="col-lg-6" align="right">
					<div class="row"><b><?php echo $_SESSION['juriname']?></b></div>
					<div class="row"><a href="yetkililogout.php">Çıkış</a></div>
					
				</div>
				 </div>
				 
				 
				 </div>
			     <div class="panel-body">
				
				
				<div class="container">
                <div class="row">
      <div class="col-md-4 col-lg-4">
           
               <div id="sidebar" class="well sidebar-nav">
			
			       <h5><i class="glyphicon glyphicon-user"></i>
                   <small><b>İŞLEMLER</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="juriekleform.php">Juri Kaydı</a></li>
					<li><a href="modul.php">Modülleri Düzenle</a></li>
                    <li><a href="binaekleform.php">Bina ve Salon Ekle</a></li>
					  <li><a href="sinavform.php">Sınav Kaydı</a></li>
					   <li><a href="sinavpdf.php">Sınav Giriş Belgelerini yayımla</a></li>
<li><a href="adayliste.php">Listeler ve Raporlar</a></li>
                </ul>
              
                
            </div>
        </div> <br/>
        <div class="col-lg-5 col-md-5">
            <div class="panel panel-default">
			<div class="panel-heading">Juri Kayıt Ekranı</div>
			<div class="panel-body">
				<form method="POST" action="juriekle.php" name="juri">
					
					<div class="row"><br/>
			          <div class="col-lg-3">Juri Adı:</div>
				      <div class="col-lg-4"><input type="text" name="juriadi" required /></div>
					  <div class="col-lg-5"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-3">Şifre :</div>
			         <div class="col-lg-4"><input type="password" name="jsifre" pattern=".{8,20}" required title="Şifre 8-20 karakter arasında olmalı!" required /></div>
					 <div class="col-lg-5"></div>
			         </div>
					  <div class="row"><br/>
			         <div class="col-lg-3">Şifre Tekrar:</div>
			         <div class="col-lg-4"><input type="password" name="jsifretekrar" required /></div>
					 <div class="col-lg-5"></div>
			         </div>
			  
			  
					
					
					 <div class="row"><br/>
					 <div class="col-lg-6"></div>
					 <div class="col-lg-3"><button class="btn btn-primary" type="submit" name="btn1">Giriş </button></div>
					 <div class="col-lg-3"></div>
					</div>
			</form>
		</div>
		</div>
			
    </div><div class="col-lg-3 col-md-3"></div>
</div>
				
				
                 </div>
		     </div>
         
        </div>
		
         </div><div class="col-lg-1"></div>
</div>
	</div></div></div>
	
  </body>
</html>
                    