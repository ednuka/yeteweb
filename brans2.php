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
        
        $r = mysql_query("SELECT bransid, bransadi  FROM branslar WHERE bolumid='$c'");
        
        while($row = mysql_fetch_assoc($r))
        {
			$bransid=$row["bransid"];
			$sq=mysql_query("select * from basvuru where bransid='$bransid'");
			$i=0;
			while($sql = mysql_fetch_assoc($sq)) {$i++;}
			
            $branslar .= '<option value="'.$row['bransid'].'">'.$row['bransadi'].'('.$i.' öğrenci başvurdu)'.'</option>';
        }
        
       if($branslar == '')
         echo'';
        else 
            echo '<form action="sinavkaydet.php" method="post">
            <select name="brans"  >'.$branslar.'</select>
           
            
        </form>';
		
		  }

?>