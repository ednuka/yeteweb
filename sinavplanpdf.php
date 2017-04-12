
<html>
<head>

</head>
<body>
<?php 

session_start();
	$hostname = "localhost";
$username = "root";
$password = "1234";
$database = "yetdb";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);

	
	
	$yurut=mysql_query("select * from sinav ");
	
	$c=0;
	while($kayit=mysql_fetch_array($yurut) )
	{
		$tarih[$c]=$kayit['tarih'];
		$saat[$c]=$kayit['saat'];
	
		$salonid[$c]=$kayit['salonid'];
		$s=mysql_query("select * from salon where salonid='$salonid[$c]' ");
		$row=mysql_fetch_array($s); 
		$salonadi[$c]=$row['salonadi'];
		
		$binaid[$c]=$kayit['binaid'];
		$s=mysql_query("select * from bina where binaid='$binaid[$c]' ");
		$row=mysql_fetch_array($s); 
		$binaadi[$c]=$row['binaadi'];
	 
		$bransid[$c]=$kayit['bransid'];
		$r=mysql_query("select * from branslar where bransid='$bransid[$c]'");
		$row=mysql_fetch_array($r);
		$sinavadi[$c]=$row['bransadi'];
		$c++;
	
 	}$length=$c;

	for($i=0;$i<$length;$i++)
	{ 
		$sorgu=mysql_query("select * from salon where salonadi='$salonadi[$i]'");
		while($sor=mysql_fetch_array($sorgu)){
		
			$kontenjan[$i]=$sor['kontenjan'];
			}
			$kisisayisi[$i]=0;
			$doluluk=mysql_query("select * from basvuru where onay=true and bransid='$bransid[$i]'");
			while($dol=mysql_fetch_array($doluluk)){
			$kisisayisi[$i]++;
			}
	}
	
require('fpdf.php');    
	
	 class PDF extends FPDF
    {
        // Sayfa baþlýðý
        function Header()
        {      //$this->sorgu = $sorgu;
            
            // Logo ayarlanýr
            $this->Image("ytu.png",10,6,20,20);
            
            // Yazý rengi ayarlanýr
            $this->SetTextColor(0,0,140);
            $this->Ln(5);
            // Satýr 25 pixel içeriden baþlasýn
            $this->Cell(33);

            // Satýra yazý yazýlýr
            $this->Write (2, 'YTU SANAT FAKULTESI SINAV PLAN RAPORU'); 
			
			// 4 pixel aþaðýda yeni satýra geç
            $this->Ln(10);
            
           
            
            // X koordinatý
            $x = $this->GetX();
            // Y Koordinatý 
            $y = $this->GetY();
            // Düz çizgi çizilir
            $this->Line( $x, $y, $x + 185, $y ); 
            
            // 5 pixel aþaðýda yeni satýra geç 
            $this->Ln(5);
		
        }

        // Sayfa Altý
        function Footer()
        {
            // 15 pýxel sayfa altýndan yukarýda baþla
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Sayfa Numarasý
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
        
        // Renkli tablo
   function PlanTablo($data,$header)
        {
            
            // Renkler ve yükseklikler ayarlanýr
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(0);
            $this->SetDrawColor(0);
            $this->SetLineWidth(.3);

            // Satýrýn X ve Y koordinatlarý alýnýr
            $posX = $this->GetX();
            $posY = $this->GetY();
            
            // Yazý fontu ayarlanýr
            $this->SetFont('Arial','',12); 
            
            // Tablonun en üst satýrý (baþlýk kýsmý)
            // Her kolonun pixel boyutu ayarlanýr
            $w = array(30,30,30,30,30,30,50);
			
            for($i=0;$i<count($header);$i++)
            {          
                $this->MultiCell($w[$i],10,$header[$i],1,'C',true);
				
                // Bir sonraki hücrenin X koordinatý bir önceki kolonun pixel sayýsý eklenerek hesaplanýr
                $posX +=  $w[$i];
                
                $this->SetXY($posX, $posY);
            }
                
            $this->Ln();
            
            //$this->SetFillColor(204,204,204);
            $this->SetTextColor(0);

            // Bilgiler
            $fill = false;
            foreach($data as $row)
            {

                $this->Cell($w[0],10,$row[0],'LR',0,'L',$fill);
                $this->Cell($w[1],10,$row[1],'LR',0,'L',$fill);
               $this->Cell($w[2],10,$row[2],'LR',0,'L',$fill);
			   $this->Cell($w[3],10,$row[3],'LR',0,'L',$fill);
                $this->Cell($w[4],10,$row[4],'LR',0,'L',$fill);
               $this->Cell($w[5],10,$row[5],'LR',0,'L',$fill);
			   $this->Cell($w[6],10,$row[6],'LR',0,'L',$fill);
                $this->Ln();
				    
            }
            // Satýr kapatýlýr
            $this->Cell(array_sum($w),0,'','T');
        }
    
    }
	

  $pdfdosyasi="raporlar/sinav_plan_rapor.pdf";
  unlink($pdfdosyasi);
	
    // Pdf nesnesi oluþturulur
    $pdf = new PDF();
    
    // Sayfa altýnda numaralarý göstermek için kullanýlýr
    $pdf->AliasNbPages();
   
    // font ayarlanýr
    $pdf->SetFont('Arial','',14);
    
    
    // Baþlýk için array olusturulur
   $header = array('Sinav Tarihi ', 'Sinav Saati' ,'Bina',' Sinav Salonu',
				   'Kontenjan','Doluluk Orani','Sinav Adi');
    
    // Bilgiler eklenir
    $data = array();
	for($i=0;$i<$length;$i++)
	{
		array_push($data, 
					array($tarih[$i],$saat[$i],$binaadi[$i],$salonadi[$i],
					      $kontenjan[$i],$kisisayisi[$i],$sinavadi[$i])); 
	}
	//$length++;
    
	
	


    // sayfa eklenir
      $pdf->AddPage('P',ARRAY(250,150));
	 
	 
    // Baþlýklar ve bilgiler tabloya yollanýr
    $pdf->PlanTablo($data,$header);
    
    

  
    ob_start(); //ekledikkk....
    $pdf->Output("raporlar/sinav_plan_rapor.pdf","F");
	header("refresh:0;url=adayliste.php");

	


?>

</body>
</html>