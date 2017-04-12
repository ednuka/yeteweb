<?php
session_start();
ob_start();
unset($_SESSION["jurilogin"]);
unset($_SESSION["juriname"]);
unset($_SESSION["juripass"]);
unset($_SESSION["yetki"]);
echo "Çıkış Yaptınız... Ana Sayfaya yönlendiriliyorsunuz...";

header("Refresh: 2; url=yetkililoginform.php");
ob_end_flush();

?>