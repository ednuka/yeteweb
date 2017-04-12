<html>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<head>
		<script src="js/bootstrap.min.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php include("baglan.php"); ?>
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
		<div class="col-lg-1" align="right"><a href="yetkiliform.php"><h4>Yetkili Giriş</h4></a></div>
		<div class="col-lg-1" ><a href="adayloginform.php"><h4>Aday Giriş</h4></a></div>
		
	  
	   </div>
	  </div>
	  </div>
			<div class="panel-body">
			<div class="container">
				<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
								<h2>Yetkili Paneli Giriş</h2>
							</div>
						<div class="panel-body">
										
							<?php if(!isset($_SESSION["jurilogin"]))
							{?>								
							<form action="yetkilikontrol.php" method="post">
								<div class="form-group">
								<label for="juriname">Kullanıcı Adı: </label>
								<input type="text" name="yetkiliname" class="form-control"  placeholder="kullanıcı adı"  required />
								<br />
								</div>
								<div class="form-group">
								<label for="juripass">Şifre: </label>
								<input type="password" name="yetkilipass" class="form-control" placeholder="şifre" required />
								<br />
								</div>
								<div class="row">
								<div class="col-lg-6"></div>
								<div class="col-lg-6">
									<button type="submit" class="btn btn-info" align="right">Giriş</button>
								</div>
								</div>
							</form>
							<?php }else{echo"Giriş yapılmış";if($_SESSION["yetki"]==0)header("refresh:1; url=juripanel.php"); else if($_SESSION["yetki"]==1) header("refresh:1; url=adminpanel.php");} ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4"></div>
				</div>
			</div>
			</div>
		</div>
	</body>


</html>