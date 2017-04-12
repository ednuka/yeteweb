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
		<?php
            // include configuration file.
             require 'baglanbol.php';
            
            // connect to db
            mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
            mysql_select_db(DB_NAME);
            
            // get table `country` result resourse
            $r = mysql_query('SELECT * FROM bolumler'); 
        ?>
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
			     <div class="panel-heading"><h2>Bölüm Seçimi</h2></div>
			     <div class="panel-body">
             
        
        <form name='get_brans' action="bransupdate.php" method="POST" >
            <div id='bolum_kutusu' style="float:center">
                Bölüm: <select name='bolum' onchange="window.yukleBranslar()">
                   <option value="0">Bölüm Seçiniz</option>
				   <?php while($row = mysql_fetch_assoc($r)): ?>
                    <option value="<?php echo $row["bolumid"]?>"><?php echo $row['bolumadi']?></option>
                    <?php endwhile; ?>
                </select>
            </div><br/><br/>
            <div id='brans_kutusu' style="float:center"></div>
            <div style="clear: both"></div><br/><br/>
           <br /><br /><button class="btn btn-primary" type="submit" name="btn1">Bitti </button> 
        </form>
        
        <!-- SCRIPTS -->
        <script src='default.js'></script>
				
		     </div>
		   <?php }?>   </div>
        
        </div>
		<div class="col-lg-3"></div>
         </div>
</div>
	</div></div>

	
					
  </body>
</html>
                    