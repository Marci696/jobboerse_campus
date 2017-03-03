
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 03. Mrz 2017 um 08:01
-- Server Version: 10.1.21-MariaDB
-- PHP-Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `u755768106_jobb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(200) NOT NULL,
  `vacancy` varchar(200) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` char(36) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edited` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Trigger `jobs`
--
DROP TRIGGER IF EXISTS `before_insert_jobs`;
DELIMITER //
CREATE TRIGGER `before_insert_jobs` BEFORE INSERT ON `jobs`
 FOR EACH ROW SET new.token = uuid()
//
DELIMITER ;
DROP TRIGGER IF EXISTS `before_update_jobs`;
DELIMITER //
CREATE TRIGGER `before_update_jobs` BEFORE UPDATE ON `jobs`
 FOR EACH ROW SET NEW.edited = CURRENT_TIMESTAMP
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
