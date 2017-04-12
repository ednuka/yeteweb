<?php

    require 'baglanbol.php';
	ini_set('display_errors', 1);
  
    if(isset($_GET['sln'])) 
    {
        //connect to database
        mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
        mysql_select_db(DB_NAME);
        
        $c = $_GET['sln'];
        $salonlar = '';
        
        $r = mysql_query("SELECT salonid, salonadi, kontenjan FROM salon WHERE binaid='$c'");
        
        while($row = mysql_fetch_assoc($r))
        {
            $salonlar .= '<option value="'.$row['salonid'].'">'.$row['salonadi'].'('.$row['kontenjan'].' kişilik kapasite)'.'</option>';
        }
        
       if($salonlar == '')
         echo'';
        else 
            echo '<form action="sinavkaydet.php" method="post"> 
            <select name="salon">'.$salonlar.'</select>
           
            
        </form>';
		
		  }

?>