<html>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<head>
		<script src="js/bootstrap.min.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta charset="UTF-8"/>
		<SCRIPT LANGUAGE="JavaScript">
  <!--
	function formla(gelen)
	{
	document.benim_formum.action=gelen;
	document.benim_formum.submit();
	}
  //-->
  </SCRIPT>
	</head>
	<body>
	<?php include("baglan.php");
	$sql=mysql_query("select * from basvuru where onay='-1'"); 
	?>
		<script type="text/javascript" src="js/jquery-2.1.4.m,n.js"></script>
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
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
					<div class="panel panel-default">
						
							 <div class="panel-heading">
				 <div class="row">
				 <div class="col-lg-6"><h2>Juri Panel Ekranı</h2></div>
				 <div class="col-lg-6 " align="right">
					<div class="row"><b><?php echo $_SESSION['juriname']?></b></div>
					<div class="row"><a href="yetkililogout.php">Çıkış</a></div>
					
				</div>
				 </div>
				 
				 
				 </div>
							
						
						<div class="panel-body">
												<div class="container">
                <div class="row">
                <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
           
               <div id="sidebar" class="well sidebar-nav">
			
			       <h5><i class="glyphicon glyphicon-user"></i>
                   <small><b>İŞLEMLER</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="onaylaform.php">Basvuruları Degerlendir</a></li>
                   
					 
                </ul>
              
                
            </div>
        </div>
        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
            	<div class="row">
				<div class="panel panel-default"><div class="panel-heading"><h4>Başvurular</h4></div>
				<div class="panel-body">
					<form action="onayla.php" method="post" name="benim_formum">
								
								<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
								<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
								
								<input type="submit" name="button" id="button" value="Onayla" />
								
								<input type="button" value="Reddet" onclick="formla('reddet.php');">
								
								</div>
								</div>	
								
									<?php							
								while($kayit=mysql_fetch_array($sql)){
									
									?>
									
									
								<div class="row">
								<br />
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><input type="checkbox" name="coklu[]" value="<?php echo $kayit['id']; ?>" id="checkbox" />
								
									<?php echo $kayit['id'];?>
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9col-xs-9"><a href="<?php echo "basvurular/".$kayit['id'].".pdf";?>" target="_blank"><?php echo $kayit['isim']."  ".$kayit['soyisim']?></a></div>
									
									
									
									<br/>
								</div>
									<?php } ?>
								
										
										
								</form>
				</div>
				</div>
						
							
							</div>
        </div><div class="col-lg-3 col md-3 col-sm-3 col-xs-3"></div>
    </div>
</div>
					
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				</div>
			</div>
			</div>
		</div>
	</body>


</html>