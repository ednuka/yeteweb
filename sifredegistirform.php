<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
</head>
	
	<body >
	
	<?php include("baglan.php"); 
	$id=$_SESSION['adayid'];
	$s=mysql_query("select * from basvuru where id='$id'");
	$y=mysql_fetch_array($s);
	$durum=$y['onay'];
	
	?>
	
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
	 <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
	
	
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
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
				 <div class="col-lg-6"><h2>Aday Panel Ekranı</h2></div>
				 <div class="col-lg-6" align="right">
					<?php $id=$_SESSION['adayid'];?>
					<div class="row"><b><?php echo $_SESSION['adayisim']." ".$_SESSION['adaysoyisim'];?></b></div>
					<div class="row"><a href="adaylogout.php">Çıkış</a></div>
					
				</div>
				 </div>
				 
				 
				 </div>
			     <div class="panel-body">
				
				
				<div class="container">
                <div class="row">
                <div class="col-md-4">
           
               <div id="sidebar" class="well sidebar-nav">
			
			       <h5><i class="glyphicon glyphicon-user"></i>
                   <small><b>KULLANICI BİLGİLERİ</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="guncelleform.php">Bilgilerimi Güncelle</a></li>
                    <li><a href="sifredegistirform.php">Şifre Değiştir</a></li>
                </ul>
                <h5><i class="glyphicon glyphicon-home"></i>   <small><b>BAŞVURU BİLGİLERİ</b></small></h5>
				
				
               
			   
			   
                 <ul class="nav nav-pills nav-stacked">
                 
                    <li><a href="<?PHP echo "basvurular/".$id.".pdf" ?>">Başvuru Belgesi</a></li>
					
                    <li><?PHP if( $durum=='1') {?><a href="<?PHP if(file_exists("sinavlar/".$id.".pdf"))echo "sinavlar/".$id.".pdf"; else echo"hata.php"; ?>">Sınav Bilgileri</a><?PHP }?></li>
                </ul>
                
            </div>
        </div>
        <div class="col-md-8">
		 <form action="sifredegis.php" method="post">
			
                      <div class="row"><br/>
			          <div class="col-lg-3">Eski Şifre:</div>
				      <div class="col-lg-4"><input type="password" name="eskisifre"  required /></div>
					  <div class="col-lg-5"></div>
			         </div>
			  
			  
			         <div class="row"><br/>
			          <div class="col-lg-3">Yeni Şifre:</div>
				      <div class="col-lg-4"><input type="password" name="yenisifre" id='p1'  pattern=".{8,20}" required title="Şifreniz 8-20 karakter arasında olmalı!"required /></div>
					  <div class="col-lg-5"></div>
			         </div>
					 
			         <div class="row"><br/>
			         <div class="col-lg-3">Tekrar Yeni Şifre:</div>
			         <div class="col-lg-4"><input type="password" name="sifretekrar"  onfocus="validatePass(document.getElementById('p1'), this);" oninput="validatePass(document.getElementById('p1'), this);" required /></div>
					 <div class="col-lg-5"></div>
			         </div>
					 
					  <div class="row"><br/><br/>
					 <div class="col-lg-6"></div>
					 <div class="col-lg-3"><button class="btn btn-primary" type="submit" name="giris">Kaydet </button></div>
					 <div class="col-lg-3"></div>
					 
					 </div>
        </form>       
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
                    