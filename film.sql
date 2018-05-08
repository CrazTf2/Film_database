-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08. Mai, 2018 12:05 p.m.
-- Server-versjon: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `sjanger` varchar(64) COLLATE utf8_danish_ci NOT NULL,
  `tittel` varchar(64) COLLATE utf8_danish_ci NOT NULL,
  `utgivelsesaar` year(4) NOT NULL,
  `terningkast` varchar(1) COLLATE utf8_danish_ci NOT NULL,
  `spilletid` time(6) NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `film`
--

INSERT INTO `film` (`film_id`, `sjanger`, `tittel`, `utgivelsesaar`, `terningkast`, `spilletid`) VALUES
(1, 'action', 'jason bourne identity', 2002, '5', '01:45:00.000000'),
(2, 'action', 'jason bourne supremacy', 2004, '4', '01:50:00.000000');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `kommentar`
--

CREATE TABLE IF NOT EXISTS `kommentar` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `kommentar` text COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=3 ;

--
-- Dataark for tabell `kommentar`
--

INSERT INTO `kommentar` (`film_id`, `kommentar`) VALUES
(1, 'this movie very good yes'),
(2, 'this movie also very good yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
