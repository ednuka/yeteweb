<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="webcam.js"></script>
		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	</head>
	
	<body >
	
	<?php include("baglan.php"); ?>
	
		<script src="js/jquery-2.1.4.min.js"></script>
	  
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
   
    

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
				 <div class="col-lg-6"><h2>Admin Panel Ekranı</h2></div>
				 <div class="col-lg-6" align="right">
					<div class="row"><b><?php echo $_SESSION['juriname']?></b></div>
					<div class="row"><a href="yetkililogout.php">Çıkış</a></div>
					
				</div>
				 </div>
				 
				 
				 </div>
			     <div class="panel-body">
				
				
				<div class="container">
                <div class="row">
                <div class="col-md-4">
           
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
        <div class="col-md-8">
            <a  href="basvurukapat.php"><input type="button" name="basvurukapat" value="Başvuruları Kapat"/></a><br/> <br/>
			
			 <a  href="basvuruac.php"><input type="button" name="basvuruac" value="Başvuruları Aç"/></a><br/> <br/>
			 
			<a href="adaygirisikapat.php"><input type="button" name="adayakapat" value="Aday Giriş Ekranını Kapat"/></a><br/> <br/>
			
			<a href="adaygirisiac.php"><input type="button" name="adayaac" value="Aday Giriş Ekranını Aç"/></a>
        </div>
    </div>
</div>
				
				
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
                    