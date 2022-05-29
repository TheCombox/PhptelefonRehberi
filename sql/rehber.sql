-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 May 2022, 20:31:49
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rehber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rehber`
--

CREATE TABLE `rehber` (
  `ID` int(11) NOT NULL,
  `ad` varchar(35) NOT NULL,
  `soyad` varchar(25) NOT NULL,
  `Telefon` varchar(11) NOT NULL,
  `Adres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `rehber`
--

INSERT INTO `rehber` (`ID`, `ad`, `soyad`, `Telefon`, `Adres`) VALUES
(4, 'sdada', 'dsada', 'dsada', 'dsada'),
(5, 'dsada', 'dsada', '0533457895', 'Corum');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `rehber`
--
ALTER TABLE `rehber`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `rehber`
--
ALTER TABLE `rehber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
