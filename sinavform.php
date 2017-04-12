<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Sınav Planı Oluştur</title>
<script src="js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
</head>
<body>
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
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
    </script>
	<script src='def.js'></script></div>
					 <?php
            // include configuration file.
             require 'baglanbol.php';
            
            // connect to db
            mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
            mysql_select_db(DB_NAME);
            
            // get table `country` result resourse
            $r = mysql_query('SELECT * FROM bina'); 
			 $rw = mysql_query('SELECT * FROM bolumler '); 
        ?>

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
        </div>
        <div class="col-md-8">
             <div class="row">
					 <div class="col-lg-1"></div>
					 <div class="col-lg-6">
					 <div class="panel panel-default">
					 <div class="panel-heading"><h4>Sınav Kayıt Ekranı</h4></div>
					 <div class="panel-body">
					 <div class="row">
					 <div class="col-lg-1"></div>
					 <div class="col-lg-6">
					 
					<form name='sinav' action="sinavkaydet.php" method="POST">  
					  <div class="row"><br/><!--Tarih-->
			          <div class="col-lg-5">Tarih:</div>
				      <div class="col-lg-7"><div id="datetimepicker4" class="input-append">
						<input data-format="yyyy-MM-dd" type="text" name="sinavtrh" required></input>
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
					 
			         </div>
			  
			         <div class="row"><br/> <!--Saat-->
			         <div class="col-lg-5">Saat:</div>
			         <div class="col-lg-7"><div id="datetimepicker3" class="input-append">
						<input data-format="hh:mm" type="text" name="sinavsaat"></input>
						<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
						</div>
						
<script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
  });
</script>
</div>
					
			         </div>
<!------------------------------------------------------------------------------------------>
					 <div class="row"><br/><!--Bina-->
			         <div class="col-lg-5">Bolum Seciniz</div>
			         <div class="col-lg-7"> 
		 
        
     
			
            <div id='bolum_kutusu' style="float:center">
                <select name='bolum' onchange="window.bransYukle()">
                    <option value="0">Bölüm Seçiniz</option>
					<?php while($row = mysql_fetch_assoc($rw)): ?>
					
                    <option value="<?php echo $row["bolumid"]?>"><?php echo $row['bolumadi']?></option>
                    <?php endwhile; ?>
                </select>
            </div><br /><br />
			
			</div></div> 
			<div class="row">
			<div class="col-lg-5">Branş:</div>
			<div class="col-lg-7">
			<div id='brans_kutusu' style="float:center"></div>
            <div style="clear: both"></div><br/><br/>
			</div>
			</div>
            
           
     
      
  
       
				
		    
      
				
					 
			       
				  <!--------------------------------------------------------------------------->

			<div class="row"><br/><!--Bina-->
			         <div class="col-lg-5">Bina Seçiniz:</div>
			         <div class="col-lg-7"> 
		 
        
      
            <div id='bina_kutusu' style="float:center">
                <select name='bina' onchange="window.salonYukle()">
                    <option value="0">Bina Seçiniz</option>
					<?php while($row = mysql_fetch_assoc($r)): ?>
                    <option value="<?php echo $row["binaid"]?>"><?php echo $row['binaadi']?></option>
                    <?php endwhile; ?>
                </select>
            </div><br/><br/></div> 
					 
			       </div>
				   <div class="row">
				   <div class="col-lg-5">Salon: </div>
				   <div class="col-lg-7"> <div id='salon_kutusu' style="float:center"></div><br /><br />
            <div style="clear: both"></div><br/><br/><label for="mevcut">
	</label></div>
				   </div>
           
           <button class="btn btn-primary" type="submit" name="btn1">Kaydet </button>
     
        </form>
  
       
				
		    
      
				
			
				</div>

					 <div class="col-lg-5"></div>
					</div>
					</div>
					</div>	
					</div>	
					<div class="col-lg-5"></div>
			</div>					
		</div>
		</div>
		
</div>
</div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
</div>
</div>
</div>

</body>
</html>