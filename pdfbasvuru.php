
<?php 

	session_start();
	$hostname = "localhost";
$username = "root";
$password = "1234";
$database = "yetdb";
$tc=$_SESSION['tc'];
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
            $this->Write (2, 'Yetenek Sinavi Basvuru Belgesi'); 
			$this->Cell(33);
            // 20 pixel aşağıda yeni satıra geç
            $this->Ln(20);
            // X koordinatı
            $x = $this->GetX();
            // Y Koordinatı 
            $y = $this->GetY();
            // Düz çizgi çizilir
            $this->Line( $x, $y, $x + 185, $y ); 
            // 15 pixel aşağıda yeni satıra geç 
            $this->Ln(15);
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
     function Tablo($data,$param,$header)
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
                $this->Ln(5);  
            }
            // Satır kapatılır
            $this->Cell(array_sum($w),0,'','LRT');
        }
    }
    
	
	$yurut=mysql_query("select * from basvuru where tc='$tc'");
	
	$c=0;
	while($kayit=mysql_fetch_array($yurut) )
	{
	 $isim=$kayit['isim'];
	 $soyisim=$kayit['soyisim'];
	 $cinsiyet=$kayit['cinsiyet'];
	 $id=$kayit['id'];
	 $anne=$kayit['anadi'];
	 $baba=$kayit['babadi'];
	 $email=$kayit['email'];
	 $telefon=$kayit['telefon'];
	 $adres=$kayit['adres'];
	 $ogrno=$kayit['ogrencino'];
	 $okul=$kayit['okulad'];
	 
	 $bransid=$kayit['bransid'];
	 $a=mysql_query("select * from branslar where bransid='$bransid'");
	 $kyt=mysql_fetch_array($a);
	 $bransadi=$kyt['bransadi'];
	 
	 $bolumid=$kyt['bolumid'];
	 $a=mysql_query("select * from bolumler where bolumid='$bolumid'");
	 $kyt=mysql_fetch_array($a);
	 $bolumadi=$kyt['bolumadi'];
	 
	 $foto=$kayit['fotograf'];
	 // Pdf nesnesi oluşturulur
    $pdf = new PDF();
    
    // Sayfa altında numaraları göstermek için kullanılır
    $pdf->AliasNbPages();
   
    // font ayarlanır
    $pdf->SetFont('Arial','',14);
    
    
    // Başlık için array olusturulur
   //$header = array('Sehir ', 'Plaka Numarasi');
    
    // Bilgiler eklenir
    $kisisel = array();
	array_push($kisisel, array('Basvuru No: ', $id));	
    array_push($kisisel, array('Ad: ', $isim)); 
	array_push($kisisel, array('Soyad: ',$soyisim));
	array_push($kisisel, array('Cinsiyet: ',$cinsiyet));  
	array_push($kisisel, array('Ana adi: ',$anne));  
	array_push($kisisel, array('Baba adi ',$baba));  
	
	$iletisim = array();
	array_push($iletisim, array('e-mail: ', $email));	
    array_push($iletisim, array('telefon', $telefon)); 
	array_push($iletisim, array('adres: ',$adres));
	
	$egitim = array();
	array_push($egitim, array('Ogrenci no: ', $ogrno));	
    array_push($egitim, array('Okul:', $okul)); 
	array_push($egitim, array('Bolum Tercihi: ',$bolumadi));
	array_push($egitim, array('Brans Tercihi: ',$bransadi));
	


    // sayfa eklenir
    $pdf->AddPage('P',ARRAY(200,250));
	//$pdf->Cell(25,50,$pdf->Image($foto,10,6,20,20,'jpeg').$id,1);
	$pdf->Image($foto,10,6,20,20,'jpeg');
	           
    // Başlıklar ve bilgiler tabloya yollanır
	
    $pdf->Tablo($kisisel,6,"Kisisel Bilgiler");
	$pdf->Ln(5);
	$pdf->Tablo($iletisim,3,"Iletisim Bilgileri");
	$pdf->Ln(5);
	$pdf->Tablo($egitim,4,"Egitim Bilgileri");
    

  
    ob_start(); //ekledikkk....
    $pdf->Output("basvurular/".$id.".pdf","F");
	 
	
		$c++;
	
 	}

    header("refresh:0; url=adayloginform.php");


	


?>

