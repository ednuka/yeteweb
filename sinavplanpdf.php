
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
        // Sayfa ba�l���
        function Header()
        {      //$this->sorgu = $sorgu;
            
            // Logo ayarlan�r
            $this->Image("ytu.png",10,6,20,20);
            
            // Yaz� rengi ayarlan�r
            $this->SetTextColor(0,0,140);
            $this->Ln(5);
            // Sat�r 25 pixel i�eriden ba�las�n
            $this->Cell(33);

            // Sat�ra yaz� yaz�l�r
            $this->Write (2, 'YTU SANAT FAKULTESI SINAV PLAN RAPORU'); 
			
			// 4 pixel a�a��da yeni sat�ra ge�
            $this->Ln(10);
            
           
            
            // X koordinat�
            $x = $this->GetX();
            // Y Koordinat� 
            $y = $this->GetY();
            // D�z �izgi �izilir
            $this->Line( $x, $y, $x + 185, $y ); 
            
            // 5 pixel a�a��da yeni sat�ra ge� 
            $this->Ln(5);
		
        }

        // Sayfa Alt�
        function Footer()
        {
            // 15 p�xel sayfa alt�ndan yukar�da ba�la
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Sayfa Numaras�
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
        
        // Renkli tablo
   function PlanTablo($data,$header)
        {
            
            // Renkler ve y�kseklikler ayarlan�r
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(0);
            $this->SetDrawColor(0);
            $this->SetLineWidth(.3);

            // Sat�r�n X ve Y koordinatlar� al�n�r
            $posX = $this->GetX();
            $posY = $this->GetY();
            
            // Yaz� fontu ayarlan�r
            $this->SetFont('Arial','',12); 
            
            // Tablonun en �st sat�r� (ba�l�k k�sm�)
            // Her kolonun pixel boyutu ayarlan�r
            $w = array(30,30,30,30,30,30,50);
			
            for($i=0;$i<count($header);$i++)
            {          
                $this->MultiCell($w[$i],10,$header[$i],1,'C',true);
				
                // Bir sonraki h�crenin X koordinat� bir �nceki kolonun pixel say�s� eklenerek hesaplan�r
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
            // Sat�r kapat�l�r
            $this->Cell(array_sum($w),0,'','T');
        }
    
    }
	

  $pdfdosyasi="raporlar/sinav_plan_rapor.pdf";
  unlink($pdfdosyasi);
	
    // Pdf nesnesi olu�turulur
    $pdf = new PDF();
    
    // Sayfa alt�nda numaralar� g�stermek i�in kullan�l�r
    $pdf->AliasNbPages();
   
    // font ayarlan�r
    $pdf->SetFont('Arial','',14);
    
    
    // Ba�l�k i�in array olusturulur
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
	 
	 
    // Ba�l�klar ve bilgiler tabloya yollan�r
    $pdf->PlanTablo($data,$header);
    
    

  
    ob_start(); //ekledikkk....
    $pdf->Output("raporlar/sinav_plan_rapor.pdf","F");
	header("refresh:0;url=adayliste.php");

	


?>

</body>
</html>