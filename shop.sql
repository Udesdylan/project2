-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 18 mrt 2021 om 17:15
-- Serverversie: 10.1.48-MariaDB-0+deb9u1
-- PHP-versie: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aventus-flev_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE `bestelling` (
  `bestellingID` int(10) NOT NULL,
  `klantID` int(10) NOT NULL,
  `datum` datetime NOT NULL,
  `verzendwijze` enum('post','afhalen') NOT NULL,
  `betaald` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelregel`
--

CREATE TABLE `bestelregel` (
  `bestelregelID` int(10) NOT NULL,
  `bestellingID` int(10) NOT NULL,
  `productID` int(10) DEFAULT NULL,
  `aantal` int(10) NOT NULL,
  `prijs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `categoryID` int(10) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `omschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `klantID` int(10) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nieuwsbrief` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `categoryID` int(10) DEFAULT NULL,
  `producent` varchar(100) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `land` char(2) NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `voorraad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`bestellingID`),
  ADD KEY `klantnummer` (`klantID`);

--
-- Indexen voor tabel `bestelregel`
--
ALTER TABLE `bestelregel`
  ADD PRIMARY KEY (`bestelregelID`),
  ADD KEY `bestelling` (`bestellingID`),
  ADD KEY `productID` (`productID`);

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantID`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categorie` (`categoryID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `bestellingID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `bestelregel`
--
ALTER TABLE `bestelregel`
  MODIFY `bestelregelID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `categoryID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `klantID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `klant` FOREIGN KEY (`klantID`) REFERENCES `klant` (`klantID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `bestelregel`
--
ALTER TABLE `bestelregel`
  ADD CONSTRAINT `FK_products_productID` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `bestelling` FOREIGN KEY (`bestellingID`) REFERENCES `bestelling` (`bestellingID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `categorie` FOREIGN KEY (`categoryID`) REFERENCES `categorie` (`categoryID`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
