
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
	$s=mysql_query("select * from salon where salonid='$salonid[$c]' ");//bak...
	$ss=mysql_fetch_array($s); 
	$salonadi[$c]=$ss['salonadi'];
	 
	 $bransid[$c]=$kayit['bransid'];
	 $r=mysql_query("select * from branslar where bransid='$bransid[$c]'");
	 $rr=mysql_fetch_array($r);
	 $sinavadi[$c]=$rr['bransadi'];
	 
	 
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
        // Sayfa başlığı
        function Header()
        {      //$this->sorgu = $sorgu;
            
            // Logo ayarlanır
            $this->Image("ytu.png",10,6,20,20);
            
            // Yazı rengi ayarlanır
            $this->SetTextColor(0,0,140);
            $this->Ln(5);
            // Satır 25 pixel içeriden başlasın
            $this->Cell(33);

            // Satıra yazı yazılır
            $this->Write (2, 'YTU SANAT FAKULTESI SINAV PLAN RAPORU'); 
			
			// 4 pixel aşağıda yeni satıra geç
            $this->Ln(10);
            
           
            
            // X koordinatı
            $x = $this->GetX();
            // Y Koordinatı 
            $y = $this->GetY();
            // Düz çizgi çizilir
            $this->Line( $x, $y, $x + 185, $y ); 
            
            // 5 pixel aşağıda yeni satıra geç 
            $this->Ln(5);
		
        }

        // Sayfa Altı
        function Footer()
        {
            // 15 pıxel sayfa altından yukarıda başla
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Sayfa Numarası
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
        
        // Renkli tablo
   function PlanTablo($data,$header)
        {
            
            // Renkler ve yükseklikler ayarlanır
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(0);
            $this->SetDrawColor(0);
            $this->SetLineWidth(.3);

            // Satırın X ve Y koordinatları alınır
            $posX = $this->GetX();
            $posY = $this->GetY();
            
            // Yazı fontu ayarlanır
            $this->SetFont('Arial','',12); 
            
            // Tablonun en üst satırı (başlık kısmı)
            // Her kolonun pixel boyutu ayarlanır
            $w = array(30,30,30,30,30,50);
			
            for($i=0;$i<count($header);$i++)
            {          
                $this->MultiCell($w[$i],10,$header[$i],1,'C',true);
				
                // Bir sonraki hücrenin X koordinatı bir önceki kolonun pixel sayısı eklenerek hesaplanır
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
                $this->Ln();
				    
            }
            // Satır kapatılır
            $this->Cell(array_sum($w),0,'','T');
        }
    
    }
	

  $pdfdosyasi="sinav_plan_raporu.pdf";
 unlink($pdfosyasi);
	
    // Pdf nesnesi oluşturulur
    $pdf = new PDF();
    
    // Sayfa altında numaraları göstermek için kullanılır
    $pdf->AliasNbPages();
   
    // font ayarlanır
    $pdf->SetFont('Arial','',14);
    
    
    // Başlık için array olusturulur
   $header = array('Sinav Tarihi ', 'Sinav Saati' ,' Sinav Salonu','Kontenjan','Doluluk Orani','Sinav Adi');
    
    // Bilgiler eklenir
    $data = array();
	
	for($i=0;$i<$length;$i++)
	{ 	
  
   array_push($data, array($tarih[$i],$saat[$i],$salonadi[$i],$kontenjan[$i],$kisisayisi[$i],$sinavadi[$i])); 
	}
	//$length++;
    
	
	


    // sayfa eklenir
      $pdf->AddPage('P',ARRAY(220,150));
	 
	 
    // Başlıklar ve bilgiler tabloya yollanır
    $pdf->PlanTablo($data,$header);
    
    

  
    ob_start(); //ekledikkk....
    $pdf->Output("raporlar/".sinav_plan_rapor.".pdf","F");
	header("refresh:0;url=adayliste.php");

	


?>

</body>
</html>