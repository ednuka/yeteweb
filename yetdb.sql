-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Eki 2016, 01:21:43
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `yetdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvuru`
--

CREATE TABLE IF NOT EXISTS `basvuru` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `anadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `babadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dtarih` date NOT NULL,
  `okulad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ogrencino` int(9) NOT NULL,
  `fotograf` text COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `bransid` int(11) NOT NULL,
  `onay` tinyint(1) NOT NULL DEFAULT '-1',
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `basvuru`
--

INSERT INTO `basvuru` (`no`, `id`, `tc`, `isim`, `soyisim`, `cinsiyet`, `anadi`, `babadi`, `dtarih`, `okulad`, `ogrencino`, `fotograf`, `email`, `telefon`, `adres`, `bransid`, `onay`, `sifre`) VALUES
(30, 160, '241105', 'zeynep', 'korkmaz', 'kiz', 'ayşegül', 'yaşar', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/160.jpg', 'zeykorke@ytu.com', '5498705940', 'ihlas marmara evleri', 1, 1, '12345678'),
(31, 203, '25454', 'elif', 'kaya', 'kiz', 'kübra', 'emre', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/203.jpg', 'elif1@gmail.com', '5321456982', 'ihlas marmara evleri', 1, 1, '12345678'),
(32, 142, '321058', 'Müberra', 'şeker', 'kiz', 'şerife', 'abdullah', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/142.jpg', 'mubo14@hotmail.com', '5379532253', 'ihlas marmara evleri', 2, 1, '12345678'),
(37, 455, '411', 'betül', 'aslan', 'kiz', 'hayrunisa', 'murat', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/455.jpg', 'tetu12@hotmail.com', '5351362010', 'ihlas marmara evleri', 2, 1, '12345678'),
(38, 136, '4353', 'safiye', 'yorulmaz', 'kiz', 'gülfem', 'kerem', '2016-08-08', 'anadolu lisesi', 12345, 'resimler/136.jpg', 'safiyesss@mail.com', '5361572816', 'ihlas marmara evleri', 2, 1, '12345678'),
(40, 141, '45621', 'şamil', 'karayel', 'erkek', 'sezen', 'hasan', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/141.jpg', 'samil1903@gmail.com', '5389371944', 'ihlas marmara evleri', 3, 1, '12345678'),
(43, 158, '55555555', 'ayşe şanda', 'karayel', 'kiz', 'hatice', 'mehmet', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/158.jpg', 'aysaka@gmail.com', '5355133885', 'ihlas marmara evleri', 3, 1, '12345678'),
(44, 133, '5656', 'ömer', 'birpınar', 'erkek', 'emine', 'suphi', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/133.jpg', 'omern@msn.com', '5054769821', 'adres', 3, -1, '12345678'),
(46, 139, '785', 'meryem', 'canpolat', 'kiz', 'fadime', 'osman', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/139.jpg', 'mero@hotmail.com', '5841236985', 'ihlas marmara evleri', 4, -1, '12345678'),
(48, 234, '87895', 'merve', 'özkaya', 'kiz', 'gülay', 'ali', '2016-08-08', 'anadolu lisesi', 12345, 'resimler/234.jpg', 'delas@anlikmail.com', '5321361032', 'ihlas marmara evleri', 4, -1, '12345678'),
(52, 809, '54654', 'hasan', 'seyithanoğlu', 'erkek', 'nilüfer', 'arda', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/809.jpg', 'hasanseyithanoglu@mail.com', '5331445236', 'ihlas marmara evleri', 4, 1, '12345678'),
(55, 786, '3242', 'gönül', 'akkaş', 'kiz', 'fahriye', 'zülfikar', '2016-08-08', 'anadolu lisesi', 12345, 'resimler/786.jpg', 'papatya21@gmail.com', '5498705940', 'ihlas marmara evleri', 5, -1, '12345678'),
(57, 280, '6562', 'derin', 'akça', 'kiz', 'nisan', 'şubat', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/280.jpg', 'nisan@hotmail.com', '5498701240', 'ihlas marmara evleri', 6, 1, '12345678'),
(58, 370, '32102', 'poyraz', 'karayel', 'erkek', 'hayriye', 'adil', '2016-08-01', 'ümraniye anadolu', 12345, 'resimler/370.jpg', 'begonnya@hotmail.com', '5498705940', 'asd', 6, 0, '12345678'),
(59, 677, '12657', 'sefer', 'kılıçarslan', 'erkek', 'fatma', 'zafer', '2016-08-01', 'anadolu lisesi', 12345, 'resimler/677.jpg', 'edibe@hotmail.com', 'fhjkl', 'asd', 7, 1, '12345678'),
(64, 140, '212145', 'ela', 'arslan', 'kiz', 'zehra', 'sinan', '2011-08-01', 'ihlas anadolu', 4588, 'resimler/140.jpg', 'asd@gmail.com', '985654', 'halkalı', 7, 1, '12345678'),
(70, 528, '12567800901', 'zeynep', 'kara', 'kiz', 'hatice', 'erol', '2011-08-01', 'ihlas anadolu', 12345, 'resimler/528.jpg', 'edibe@hotmail.com', 'fhjkljhkhj', 'hürriyet bulvarı', 7, -1, ''),
(71, 775, '12851285128', 'deliha', 'özay', 'kiz', 'gupse', 'kerem', '2015-12-14', 'sanat koleji', 123, 'resimler/775.jpg', 'deliha@asd.com', '5412369854', 'deliha sokak no:6', 3, 1, '12345678');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bina`
--

CREATE TABLE IF NOT EXISTS `bina` (
  `binaid` int(11) NOT NULL,
  `binaadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bina`
--

INSERT INTO `bina` (`binaid`, `binaadi`) VALUES
(1, 'A blok'),
(2, 'B blok'),
(3, 'C blok'),
(4, 'D blok'),
(5, 'E blok'),
(6, 'F blok'),
(7, 'G blok'),
(8, 'H blok');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolumler`
--

CREATE TABLE IF NOT EXISTS `bolumler` (
  `bolumid` int(11) NOT NULL,
  `bolumadi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bolumler`
--

INSERT INTO `bolumler` (`bolumid`, `bolumadi`) VALUES
(1, 'Muzik ve Sahne Sanatları'),
(2, 'İletişim Tasarımı'),
(3, 'Sanat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `branslar`
--

CREATE TABLE IF NOT EXISTS `branslar` (
  `bransid` int(11) NOT NULL,
  `bolumid` int(11) NOT NULL,
  `bransadi` varchar(50) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `branslar`
--

INSERT INTO `branslar` (`bransid`, `bolumid`, `bransadi`) VALUES
(1, 1, 'Duyusal Sanat Tasarimi'),
(2, 1, 'Muzik Topluluklari'),
(3, 1, 'Dans'),
(4, 2, 'Iletisim Tasarimi'),
(5, 3, 'Bilesik Sanatlar'),
(6, 3, 'Sanat Yonetimi'),
(7, 3, 'Fotograf ve Video');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `modul`
--

INSERT INTO `modul` (`id`, `adi`, `durum`) VALUES
(1, 'basvuru', 1),
(2, 'adaylogin', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `salonid` int(11) NOT NULL,
  `salonadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `binaid` int(11) NOT NULL,
  `kontenjan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `salon`
--

INSERT INTO `salon` (`salonid`, `salonadi`, `binaid`, `kontenjan`) VALUES
(1, 'a1', 1, 20),
(2, 'a2', 1, 10),
(3, 'a3', 1, 15),
(4, 'b1', 2, 15),
(5, 'b2', 2, 40),
(6, 'c1', 3, 30),
(7, 'c2', 3, 15),
(8, 'c3', 3, 20),
(9, 'c4', 3, 30),
(10, 'd1', 4, 50),
(11, 'd2', 4, 24),
(12, 'e1', 5, 18),
(13, 'e2', 5, 15),
(14, 'e3', 5, 10),
(15, 'f1', 6, 14),
(16, 'f2', 6, 20),
(17, 'g1', 7, 12),
(18, 'g2', 7, 14),
(19, 'g3', 7, 19),
(20, 'h1', 8, 15),
(21, 'h2', 8, 25);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sinav`
--

CREATE TABLE IF NOT EXISTS `sinav` (
  `sinavid` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL,
  `bransid` int(11) NOT NULL,
  `bolumid` int(11) NOT NULL,
  `binaid` int(11) NOT NULL,
  `salonid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sinav`
--

INSERT INTO `sinav` (`sinavid`, `tarih`, `saat`, `bransid`, `bolumid`, `binaid`, `salonid`) VALUES
(1, '2015-08-22', '10:06:33', 1, 1, 1, 3),
(2, '2015-04-30', '10:07:37', 2, 1, 3, 7),
(3, '2014-12-14', '10:08:44', 3, 1, 5, 12),
(4, '2016-05-17', '10:10:39', 4, 2, 7, 17),
(7, '2014-12-08', '12:07:19', 5, 3, 2, 4),
(8, '2015-08-21', '12:22:52', 6, 3, 4, 10),
(9, '2015-08-22', '12:23:33', 7, 3, 6, 16);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkililer`
--

CREATE TABLE IF NOT EXISTS `yetkililer` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` tinyint(1) NOT NULL DEFAULT '0',
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkililer`
--

INSERT INTO `yetkililer` (`id`, `kullaniciadi`, `yetki`, `sifre`) VALUES
(1, 'admin', 1, 'ytu12345'),
(2, 'juri1', 0, '11111111'),
(3, 'juri2', 0, '22222222'),
(4, 'juri3', 0, '33333333'),
(5, 'juri4', 0, '44444444'),
(6, 'juri5', 0, '55555555'),
(7, 'juri6', 0, '66666666'),
(8, 'juri7', 0, '77777777');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `basvuru`
--
ALTER TABLE `basvuru`
  ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `tc` (`tc`) USING BTREE, ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Tablo için indeksler `bina`
--
ALTER TABLE `bina`
  ADD PRIMARY KEY (`binaid`);

--
-- Tablo için indeksler `bolumler`
--
ALTER TABLE `bolumler`
  ADD PRIMARY KEY (`bolumid`), ADD KEY `bid` (`bolumid`);

--
-- Tablo için indeksler `branslar`
--
ALTER TABLE `branslar`
  ADD PRIMARY KEY (`bransid`), ADD KEY `bid` (`bolumid`);

--
-- Tablo için indeksler `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`salonid`);

--
-- Tablo için indeksler `sinav`
--
ALTER TABLE `sinav`
  ADD PRIMARY KEY (`sinavid`);

--
-- Tablo için indeksler `yetkililer`
--
ALTER TABLE `yetkililer`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kullaniciadi` (`kullaniciadi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `basvuru`
--
ALTER TABLE `basvuru`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- Tablo için AUTO_INCREMENT değeri `bina`
--
ALTER TABLE `bina`
  MODIFY `binaid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- Tablo için AUTO_INCREMENT değeri `bolumler`
--
ALTER TABLE `bolumler`
  MODIFY `bolumid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `branslar`
--
ALTER TABLE `branslar`
  MODIFY `bransid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `salon`
--
ALTER TABLE `salon`
  MODIFY `salonid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- Tablo için AUTO_INCREMENT değeri `sinav`
--
ALTER TABLE `sinav`
  MODIFY `sinavid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `yetkililer`
--
ALTER TABLE `yetkililer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
