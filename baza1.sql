-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 14. apr 2015 ob 15.35
-- Različica strežnika: 5.5.32
-- Različica PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `baza1`
--
CREATE DATABASE IF NOT EXISTS `baza1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `baza1`;

-- --------------------------------------------------------

--
-- Struktura tabele `avtomobil`
--

CREATE TABLE IF NOT EXISTS `avtomobil` (
  `StevSasije` varchar(25) NOT NULL,
  `Znamka` char(20) DEFAULT NULL,
  `Model` char(20) DEFAULT NULL,
  `Tip` char(20) DEFAULT NULL,
  `RegistrskaStev` char(20) DEFAULT NULL,
  `KonstantaVozilaW` char(20) DEFAULT NULL,
  `PnevmatikeZadaj` char(20) DEFAULT NULL,
  `PnevmatikaSpredaj` char(20) DEFAULT NULL,
  `DavStLastnik` int(11) NOT NULL,
  `SerijskaStevTaksimeter` char(20) NOT NULL,
  PRIMARY KEY (`StevSasije`,`DavStLastnik`,`SerijskaStevTaksimeter`),
  UNIQUE KEY `StevSasije` (`StevSasije`),
  UNIQUE KEY `RegistrskaStev` (`RegistrskaStev`),
  KEY `SerijskaStevTaksimeter` (`SerijskaStevTaksimeter`),
  KEY `DavStLastnik` (`DavStLastnik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `avtomobil`
--

INSERT INTO `avtomobil` (`StevSasije`, `Znamka`, `Model`, `Tip`, `RegistrskaStev`, `KonstantaVozilaW`, `PnevmatikeZadaj`, `PnevmatikaSpredaj`, `DavStLastnik`, `SerijskaStevTaksimeter`) VALUES
('W541DFA5AD84A', 'Audi', 'A4', 'Limuzina', 'LJ 2A2-5O', '50', '245 / 40 R18 93 Y', '245 / 40 R18 93 Y', 0, ''),
('89AH88924HFAIRU39', 'Volkswagen', 'Passat', 'Limuzina', 'LJ 25-HRT', '25', '235 / 45 R17 94 H', '235 / 45 R17 94 H', 0, ''),
('WH93JV390JRV49', 'Audi', 'A4', 'Limuzina', 'LJ A5-278', '50', '235 / 45 R17 94 Y', '235 / 45 R17 94 Y', 15454568, '434T3G6Z547UH'),
('FAH8H320K03F0K', 'VOLKSWAGEN', 'PASSAT', 'Limuzina', 'LJ 45-A134', '25', '235 / 45 R17 94 H', '235 / 45 R17 94 H', 15454568, 'JHWEF90J901'),
('AASR3QIFW9FOWCOD', 'MERCEDES', 'C 180', 'Limuzina', 'KP A56-A3', '10', '205 / 55 R16 91 H', '205 / 55 R16 91 H', 66417454, 'FENU8TZ3H90FJI'),
('ASDFED3EW54R34F', 'CITROEN', 'C4', 'Limuzina', 'MB B4U-I8', '20', '205 / 50 R17 89 W', '205 / 50 R17 89 W', 49785321, 'FEWJ9R2J0'),
('232EG3T34F3R2DF2', 'SKODA', 'OCTAVIA', 'Limuzina', 'MB AR5-F4', '20', '225 / 40 R18 92 Y', '225 / 40 R18 92 Y', 49785321, 'JFAD90R392J90'),
('F34TG43ZGERT3D', 'SKODA', 'OCTAVIA', 'Limuzina', 'MB AZ6-A7', '20', '225 / 45 R17 91 V', '225 / 45 R17 91 V', 49785321, 'WE89FJ90WE02'),
('G3FF43FE23F3FSRF', 'MERCEDES', 'S 450', 'Limuzina', 'MB Z76-AB', '50', '275 / 35 R20 102 Y', '255 / 35 R20 97 Y', 49785321, '3R3FN3R922C2B2');

-- --------------------------------------------------------

--
-- Struktura tabele `cenik`
--

CREATE TABLE IF NOT EXISTS `cenik` (
  `IDTarife` int(11) NOT NULL,
  `Startnina` float DEFAULT NULL,
  `Cena_km` float DEFAULT NULL,
  `Cakalna` float DEFAULT NULL,
  `ZamikVkm` char(20) DEFAULT NULL,
  `CasZamika` char(20) DEFAULT NULL,
  `StDodatkov` int(11) DEFAULT NULL,
  `CenaDodatka` float DEFAULT NULL,
  PRIMARY KEY (`IDTarife`),
  UNIQUE KEY `IDTarife` (`IDTarife`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele `delavec`
--

CREATE TABLE IF NOT EXISTS `delavec` (
  `EMSO` bigint(20) NOT NULL,
  `Ime` char(20) DEFAULT NULL,
  `Priimek` char(20) DEFAULT NULL,
  `DavStIzvajalec` int(11) NOT NULL,
  PRIMARY KEY (`EMSO`,`DavStIzvajalec`),
  UNIQUE KEY `EMSO` (`EMSO`),
  KEY `DavStIzvajalec` (`DavStIzvajalec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `delavec`
--

INSERT INTO `delavec` (`EMSO`, `Ime`, `Priimek`, `DavStIzvajalec`) VALUES
(1211985550123, 'Špela', 'Jamnik', 56541515),
(2101975500321, 'Janez', 'Novak', 64894596);

-- --------------------------------------------------------

--
-- Struktura tabele `izvajalec`
--

CREATE TABLE IF NOT EXISTS `izvajalec` (
  `DavStIzvajalec` int(11) NOT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Naziv` char(20) DEFAULT NULL,
  `Naslov` char(35) DEFAULT NULL,
  `Posta` char(20) DEFAULT NULL,
  `Fax` int(11) DEFAULT NULL,
  `GSM` int(11) DEFAULT NULL,
  `SpletnaStran` char(40) DEFAULT NULL,
  `Email` char(45) DEFAULT NULL,
  PRIMARY KEY (`DavStIzvajalec`),
  UNIQUE KEY `DavStIzvajalec` (`DavStIzvajalec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `izvajalec`
--

INSERT INTO `izvajalec` (`DavStIzvajalec`, `Telefon`, `Naziv`, `Naslov`, `Posta`, `Fax`, `GSM`, `SpletnaStran`, `Email`) VALUES
(56541515, 17509685, 'Taksi servis JJ', 'Tržaška cesta 123', '1000 Ljubljana', 17509686, 41256687, 'www.TaksiservisJJ.si', 'info@TaksiservisJJ.si'),
(64894596, 47548591, 'GTK d.o.o.', 'Kranjceva ulica 34', '4000 Kranj', 47548592, 68254798, 'www.GTK.si', 'info@GTKt.si'),
(52616715, 74598632, 'Popravilo Grubar', 'Seidlova cesta 12', '8000 Novo mesto', 74598633, 68953215, 'www.taksimetrigrubar.si', 'info@taksimetrigrubar.si');

-- --------------------------------------------------------

--
-- Struktura tabele `lastnik`
--

CREATE TABLE IF NOT EXISTS `lastnik` (
  `DavStLastnik` int(11) NOT NULL,
  `Telefon` int(11) DEFAULT NULL,
  `Naziv` char(20) DEFAULT NULL,
  `Naslov` char(35) DEFAULT NULL,
  `Posta` char(20) DEFAULT NULL,
  `Fax` int(11) DEFAULT NULL,
  `GSM` int(11) DEFAULT NULL,
  `SpletnaStran` char(40) DEFAULT NULL,
  `Email` char(45) DEFAULT NULL,
  PRIMARY KEY (`DavStLastnik`),
  UNIQUE KEY `DavStLastnik` (`DavStLastnik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `lastnik`
--

INSERT INTO `lastnik` (`DavStLastnik`, `Telefon`, `Naziv`, `Naslov`, `Posta`, `Fax`, `GSM`, `SpletnaStran`, `Email`) VALUES
(15454568, 17988454, 'Metro', 'Dunajska cesta 23', '1000 Ljubljana', 17988455, 68572312, 'www.metrotaksi.si', 'info@metrotaksi.si'),
(49785321, 29877585, 'Taksist', 'Vetrinjska ulica 23', '2000 Maribor', 29877586, 68572658, 'www.taksisti.si', 'info@taksisti.si'),
(66417454, 59929888, 'taksi Portorož', 'Obala 27', '6320 Portorož', 59929889, 40258987, 'www.taksi-portorož.si', 'info@taksi-portorož.si');

-- --------------------------------------------------------

--
-- Struktura tabele `racun`
--

CREATE TABLE IF NOT EXISTS `racun` (
  `Lokacija1` char(20) DEFAULT NULL,
  `SeriskaStev` char(20) NOT NULL,
  `Lokacija2` char(20) DEFAULT NULL,
  `Lokacija3` char(20) DEFAULT NULL,
  `IDTarife` int(11) NOT NULL,
  `StevSasije` int(11) NOT NULL,
  `DavStLastnik` int(11) NOT NULL,
  PRIMARY KEY (`SeriskaStev`,`IDTarife`,`StevSasije`,`DavStLastnik`),
  KEY `IDTarife` (`IDTarife`,`StevSasije`,`DavStLastnik`,`SeriskaStev`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele `taksimeter`
--

CREATE TABLE IF NOT EXISTS `taksimeter` (
  `SerijskaStevTaksimeter` char(20) NOT NULL,
  `Proizvajalec` char(20) DEFAULT NULL,
  `Tip` char(20) DEFAULT NULL,
  `UradnaOznaka` char(20) DEFAULT NULL,
  `ProgramskaVerzija` char(20) DEFAULT NULL,
  `Kontrolnavsota` int(11) DEFAULT NULL,
  `Naprava` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SerijskaStevTaksimeter`),
  UNIQUE KEY `SerijskaStevTaksimeter` (`SerijskaStevTaksimeter`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `taksimeter`
--

INSERT INTO `taksimeter` (`SerijskaStevTaksimeter`, `Proizvajalec`, `Tip`, `UradnaOznaka`, `ProgramskaVerzija`, `Kontrolnavsota`, `Naprava`) VALUES
('JHWEF90J901', NULL, NULL, NULL, NULL, NULL, NULL),
('434T3G6Z547UH', NULL, NULL, NULL, NULL, NULL, NULL),
('FENU8TZ3H90FJI', NULL, NULL, NULL, NULL, NULL, NULL),
('FEWJ9R2J0', NULL, NULL, NULL, NULL, NULL, NULL),
('JFAD90R392J90', NULL, NULL, NULL, NULL, NULL, NULL),
('WE89FJ90WE02', NULL, NULL, NULL, NULL, NULL, NULL),
('3R3FN3R922C2B2', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabele `tarifaavtomobil`
--

CREATE TABLE IF NOT EXISTS `tarifaavtomobil` (
  `IDTarife` int(11) NOT NULL,
  `StevSasije` int(11) NOT NULL,
  `DavStLastnik` int(11) NOT NULL,
  `Tarifa` char(20) DEFAULT NULL,
  `SeriskaStev` char(20) NOT NULL,
  PRIMARY KEY (`IDTarife`,`StevSasije`,`DavStLastnik`,`SeriskaStev`),
  KEY `StevSasije` (`StevSasije`,`DavStLastnik`,`SeriskaStev`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabele `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` char(20) NOT NULL,
  `Password` char(20) NOT NULL,
  `Pravice` char(20) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `user`
--

INSERT INTO `user` (`Username`, `Password`, `Pravice`) VALUES
('admin', 'admin', 'admin'),
('ministr', 'ministr', 'ministri'),
('lastnik', 'lastnik', 'lastnik'),
('izvajalec', 'izvajalec', 'izvajalec');

-- --------------------------------------------------------

--
-- Struktura tabele `vgradnjakontrola`
--

CREATE TABLE IF NOT EXISTS `vgradnjakontrola` (
  `StevSasije` int(11) NOT NULL,
  `SeriskaStev` char(20) NOT NULL,
  `DavStLastnik` int(11) NOT NULL,
  `EMSO` bigint(20) NOT NULL,
  `DavStIzvajalec` int(11) NOT NULL,
  `Vgradnja` tinyint(1) DEFAULT NULL,
  `VrstaPosega` char(20) DEFAULT NULL,
  PRIMARY KEY (`StevSasije`,`SeriskaStev`,`DavStLastnik`,`EMSO`,`DavStIzvajalec`),
  KEY `StevSasije` (`StevSasije`,`DavStLastnik`,`SeriskaStev`),
  KEY `EMSO` (`EMSO`,`DavStIzvajalec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
