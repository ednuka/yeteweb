<?php
session_start();
ob_start();
unset($_SESSION['adaylogin']);
unset($_SESSION['adayisim']);
unset($_SESSION['adaysoyisim']);
unset($_SESSION['tc']);
unset($_SESSION['adayid']);
echo "Çıkış Yaptınız... Ana Sayfaya yönlendiriliyorsunuz...";

header("Refresh: 2; url=adayloginform.php");
ob_end_flush();

?>