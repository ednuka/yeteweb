<?php
    require 'baglanbol.php';
	ini_set('display_errors', 1);
  
    if(isset($_GET['blm'])) 
    {
        //connect to database
        mysql_connect(DB_HOST, DB_UNAME, DB_PWD) or die('Database error!!');
        mysql_select_db(DB_NAME);
        
        $c = $_GET['blm'];
        $branslar = '';
        
        $r = mysql_query("SELECT bransid, bransadi FROM branslar WHERE bolumid='$c'");
        
        while($row = mysql_fetch_assoc($r))
        {
            $branslar .= '<option value="'.$row['bransid'].'">'.$row['bransadi'].'</option>';
        }
        
       if($branslar == '')
         echo'';
        else 
            echo '<form action="bransupdate.php" method="post">
            Branş: <select name="brans">'.$branslar.'</select>
           
            
        </form>';
		
		  }

?>
