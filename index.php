<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
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
     src="bootstrap-datetimepicker.min.js">
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
             <div class="col-lg-3"></div>
			 <div class="col-lg-6">
	
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
			<!--Başvuru form paneli bu alanda --> 
	

			<div class="panel-heading"><h2>Kişisel Bilgiler</h2></div>
			     <div class="panel-body">
				 <form action="basvur.php" method="post" name="form1" enctype="multipart/form-data" >
			       
					 <div class="row">
					 <div class="col-lg-1"></div>
					 <div class="col-lg-11">
					 
					 
					  <div class="row"><br/>
			          <div class="col-lg-2">Tc No:</div>
				      <div class="col-lg-4"><input type="text" name="tc" pattern=".{11,11}" required title="Tc kimlik numaranız 11 haneli olmalıdır" required /></div>
					  <div class="col-lg-6"></div>
			         </div>
					 

			  
			         <div class="row"><br/>
			         <div class="col-lg-2">İsim:</div>
			         <div class="col-lg-4"><input type="text" name="isim" required /></div>
					 <div class="col-lg-6"></div>
			         </div>
			  
			         <div class="row"><br/>
			         <div class="col-lg-2">Soyisim:</div>
			         <div class="col-lg-4"><input type="text" name="soyisim" required /></div>
					 <div class="col-lg-6"></div>
			         </div>

			         <div class="row"><br/>
			         <div class="col-lg-2">Cinsiyet:</div>
			         <div class="col-lg-6">
							<input type="radio" name="cinsiyet"  value="kiz" checked />Kız 
							<input type="radio" name="cinsiyet" value="erkek" />Erkek
					</div>
			         <div class="col-lg-7"></div>
					 </div>
					 
					 <div class="row"><br/>
			         <div class="col-lg-2">Ana Adı:</div>
			         <div class="col-lg-4"><input type="text" name="anne" required /></div>
					 <div class="col-lg-6"></div>
					 </div>
					 
					  <div class="row"><br/>
			         <div class="col-lg-2">Baba Adı:</div>
			         <div class="col-lg-4"><input type="text" name="baba" required /></div>
					 <div class="col-lg-6"></div>
					 </div>
					 
					<div class="row"><br/>
			         <div class="col-lg-2">Doğum Tarihi:</div>
			         <div class="col-lg-4">
						
						
						<div id="datetimepicker4" class="input-append">
						<input data-format="yyyy-MM-dd" type="text" name="dogum" required></input>
						<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
						</div>

						<script type="text/javascript">
							$(function() {
							$('#datetimepicker4').datetimepicker({
							pickTime: false
							});
							});
						</script>
						
					 </div>
					 <div class="col-lg-6"></div>
					 </div>
					 
					
					 
					 <div class="row"><br/>
					 <div class="col-lg-2">Okul Adı:</div>
					 <div class="col-lg-4"><input type="text" name="okul" required /></div>
					 <div class="col-lg-6"></div>
					 </div>
					 
					 <div class="row"><br/>
					 <div class="col-lg-2">Öğrenci No:</div>
					 <div class="col-lg-4">
						<input type="text" name="ogrencino" required />
					</div>
					<div class="col-lg-6"></div>
					 </div>
					 
					 
		
					 
					  <div class="row"><br/>
					 <div class="col-lg-2">Resim :</div>
					 <div class="col-lg-4"><input type="file" name="resim"/><br/>
						
						
						
					</div>
					<div class="col-lg-6"></div>
					 </div>
					
					 
					 <div class="row"><br/>
					 <div class="col-lg-6"></div>
	<div class="col-lg-6">  <input type="submit" class="btn btn-primary"name="gonder" value="İleri >"/></div> </div>
  



					 
				
					 
					 
					 
					 
					 
					 
					 </div>
					 
					 
					
			         
					 </div>
			         </div>
				 </form>
		<?php }  ?>
                 </div>
		     </div>
         
        </div>
		<div class="col-lg-3">
		
		
		
		</div>
         </div>
</div>
	</div>
	
	
  </body>
</html>
                    