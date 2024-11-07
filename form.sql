-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 May 2024, 22:52:00
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

CREATE TABLE `form` (
  `bilgi_id` int(10) NOT NULL,
  `bilgi_ad` varchar(50) NOT NULL,
  `bilgi_mail` varchar(50) NOT NULL,
  `bilgi_yorum` text NOT NULL,
  `bilgi_saat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `form`
--

INSERT INTO `form` (`bilgi_id`, `bilgi_ad`, `bilgi_mail`, `bilgi_yorum`, `bilgi_saat`) VALUES
(1, 'Ali', 'ali@gmail.com', 'BMW', '0000-00-00 00:00:00'),
(2, 'Ayşe Kara', 'ayse@gmail.com', 'Fena değil.', '2024-05-28 18:12:16'),
(3, 'Ebru', 'ebru@gmail.com', 'Ben pembe araba seviyorum.', '0000-00-00 00:00:00'),
(4, 'Ebru Nur Bulun', 'ebru@gmail.com', 'Ben bu sayfayı beğenmedim. Motorlar daha havalı!', '0000-00-00 00:00:00'),
(5, 'Arda', 'arda@gmail.com', 'Germany.', '0000-00-00 00:00:00'),
(6, 'Alex', 'alex@gmail.com', 'BMW!', '2024-05-29 19:11:37'),
(7, 'Ali', 'ali@gmail.com', 'cgcchch', '2024-05-30 00:29:47');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`bilgi_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `bilgi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
