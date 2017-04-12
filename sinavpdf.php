
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
require('fpdf.php');    
	
	 class PDF extends FPDF
    {
        // Sayfa başlığı
        function Header()
        {
            // Yazı rengi ayarlanır
            $this->SetTextColor(0,0,140);
            
            // Satır 25 pixel içeriden başlasın
            $this->Cell(33);

            // Satıra yazı yazılır
            $this->Write (2, 'YTU SANAT FAKULTESI'); 
			
			// 4 pixel aşağıda yeni satıra geç
            $this->Ln(10);
            
            // Satır 25 pixel içeriden başlasın
            $this->Cell(25);  
            
			 // Satıra yazı yazılır
            $this->Write (2, 'Yetenek Sinavi Giris Belgesi'); 
		
	
            // 10 pixel aşağıda yeni satıra geç
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
       function FancyTable($data,$param,$header)
        {
            
            // Renkler ve yükseklikler ayarlanır
            $this->SetFillColor(255,255,255);
            $this->SetTextColor(255);
            $this->SetDrawColor(0,0,140);
            $this->SetLineWidth(.3);

            // Satırın X ve Y koordinatları alınır
            $posX = $this->GetX();
            $posY = $this->GetY();
            
            // Yazı fontu ayarlanır
            $this->SetFont('Arial','',12); 
            
            // Tablonun en üst satırı (başlık kısmı)
            // Her kolonun pixel boyutu ayarlanır
            $w = array(60,80);
			   
            $this->Ln(12);
            
            $this->SetFillColor(204,204,204);
            $this->SetTextColor(0);

            // Bilgiler
            $fill = false;
			$this->Cell(140,6,$header,'TLR',0,'L',$fill);
			$this->Ln(5);
            $this->Cell($w[0],6,$data[0][0],'TL',0,'L',$fill);
            $this->Cell($w[1],6,$data[0][1],'TR',0,'L',$fill);
			$this->Ln(5);
			for($i=1;$i<$param;++$i)
            {

                $this->Cell($w[0],6,$data[$i][0],'L',0,'L',$fill);
                $this->Cell($w[1],6,$data[$i][1],'R',0,'L',$fill);
               //$this->Cell($w[2],6,$row[2],'TB',0,'L',$fill);
              
					
            
					// 5 pixel aşağıda yeni satıra geç 
					$this->Ln(5);  
            }
            // Satır kapatılır
            $this->Cell(array_sum($w),0,'','LRT');
        }
    }
    
$s=mysql_query("select * from basvuru where onay=true");
while($kayit=mysql_fetch_array($s))
{

	 $isim=$kayit['isim'];
	$soyisim=$kayit['soyisim'];
	 
	 $okul=$kayit['okulad'];
	$ogrencino=$kayit['ogrencino'];
	
	$bransid=$kayit['bransid'];
	$id=$kayit['id']; 
	 $foto=$kayit['fotograf'];

	 $a=mysql_query("select * from branslar where bransid='$bransid'");
	 $kayit=mysql_fetch_array($a);
	 $bransadi=$kayit['bransadi'];
	 
	
	 
	
	
		
	 $sql=mysql_query("select * from sinav where bransid='$bransid'");
	$row=mysql_fetch_array($sql);
	$tarih=$row['tarih'];
	$saat=$row['saat'];
	
	$binaid=$row['binaid'];
	 $a=mysql_query("select * from bina where binaid='$binaid'");
	 $kayit=mysql_fetch_array($a);
	 $binaadi=$kayit['binaadi'];
	
	$salonid=$row['salonid'];
	 $a=mysql_query("select * from salon where salonid='$salonid'");
	 $kayit=mysql_fetch_array($a);
	 $salonadi=$kayit['salonadi'];
	
	 

    // Pdf nesnesi oluşturulur
    $pdf = new PDF();
    
    // Sayfa altında numaraları göstermek için kullanılır
    $pdf->AliasNbPages();
   
    // font ayarlanır
    $pdf->SetFont('Arial','',14);
    
    
    // Başlık için array olusturulur
   $header = array('Sehir ', 'Plaka Numarasi');
    
    // Bilgiler eklenir
    $kisi = array();
	    array_push($kisi, array('Basvuru No: ', $id));
		
    array_push($kisi, array('Ad: ', $isim)); 
	
    array_push($kisi, array('Soyad: ',$soyisim));


	array_push($kisi, array('Okul Adi: ',$okul));

	array_push($kisi, array('Ogrenci No: ',$ogrencino));

	$yer = array();
	array_push($yer, array('Brans: ',$bransadi));
	array_push($yer, array('Tarih: ',$tarih));
	array_push($yer, array('Saat: ',$saat));
	array_push($yer, array('Bina: ',$binaadi));
	array_push($yer, array('Salon: ',$salonadi));
	
	


    // sayfa eklenir
    $pdf->AddPage('P',array(160,150));
	$pdf->Image($foto,10,6,20,20,'jpeg');
    // Başlıklar ve bilgiler tabloya yollanır
    $pdf->FancyTable($kisi,5,"Ogrenci Bilgileri");
	$pdf->Ln(5);
	   $pdf->FancyTable($yer,5,"Sinav Bilgileri");
    
    

  
    ob_start(); //ekledikkk....
    $pdf->Output("sinavlar/".$id.".pdf","F");
	

	
}header("refresh:0;url=adminpanel.php");

?>

</body>
</html>