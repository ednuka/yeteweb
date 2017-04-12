<html>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<head>
		<script src="js/bootstrap.min.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php include("baglan.php")?>
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
				<div class="col-lg-1 col-md-1 col-xs-1 col-sm-1"></div>
				<div class="col-lg-10 col md-10 col-xs-10 col-sm-10">
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="row">
						
						<h2>Juri Panel</h2></div>
						
						<div class="row" align="right"><?php if($_SESSION["jurilogin"]==true)echo $_SESSION["juriname"];?> </div>
						
							
						<div class="row" align="right"><a href="yetkililogout.php">ÇIKIŞ YAP</a></div>
						</div>
						
							
						
						<div class="panel-body">
								<div class="container">
                <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
           
               <div id="sidebar" class="well sidebar-nav">
			
			       <h5><i class="glyphicon glyphicon-user"></i>
                   <small><b>İŞLEMLER</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="onaylaform.php">Basvuruları Degerlendir</a></li>
                   
					 
                </ul>
              
                
            </div>
        </div> <br/><br/><br/>
        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
            Yıldız Teknik Üniversitesi Juri Panel Ekranı
        </div>
    </div>
</div>
							
						</div>
					</div>
				</div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				
				</div>
			</div>
			</div>
		</div>
	</body>


</html>