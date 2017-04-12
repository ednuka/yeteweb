<html>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<head>
	<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<script src="js/bootstrap.min.js"></script>
		
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<?php include("baglan.php"); require_once('maxChart.class.php');?>
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
        </div> <br/><br/><br/>
        <div class="col-md-8">
              
      <div id="main">
         <?php
	 $branslar=mysql_query("select * from branslar");
	 $i=0;
while($row=mysql_fetch_array($branslar))
{
	
	$bran=mysql_query("select * from basvuru where bransid='".$row['bransid']."' and onay=true"); $bsayi=0;
	while($br=mysql_fetch_array($bran))
{
	$bsayi++;
	$data[$row['bransadi']] = $bsayi;
}	
}	
            $mc = new maxChart($data);
            $mc->displayChart('BRANŞ',1,500,150,true);
            echo "<br/><br/>";
           echo "<br/><br/>";
$erkek=mysql_query("select * from basvuru where cinsiyet='erkek' and onay=true");  $e=0;
while($erk=mysql_fetch_array($erkek))
{
	$e++;
}	

$kiz=mysql_query("select * from basvuru where cinsiyet='kiz' and onay=true");  $k=0;
while($ki=mysql_fetch_array($kiz))
{
	$k++;
}	
			$data2['Erkek'] = $e ;
            $data2['Kız'] = $k;
            $mc2 = new maxChart($data2);
            echo '<div style="float:center; margin-left:125px; width:220px;">';
            $mc2->displayChart('CİNSİYET',1,200,150,true);
            echo '</div>';

         ?>
         
      </div>
   </div>
   
   
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
                    