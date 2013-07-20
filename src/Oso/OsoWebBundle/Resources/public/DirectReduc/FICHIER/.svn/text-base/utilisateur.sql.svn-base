-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 18 Février 2010 à 14:50
-- Version du serveur: 5.1.30
-- Version de PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `directreduc`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UTIL_TYPE` int(11) NOT NULL COMMENT 'Type d''utilisateur',
  `UTIL_USER` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Identifiant Interne Utilisateur',
  `UTIL_PASSWORD` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Mot de passe',
  `UTIL_DATE` date NOT NULL COMMENT 'Date d''inscription',
  `ID_VILLE` int(11) DEFAULT NULL,
  `UTIL_DATE_LOG` date NOT NULL COMMENT 'Date dernier Log',
  `UTIL_IP` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT 'Adresse IP',
  `UTIL_STATUT` float NOT NULL DEFAULT '0' COMMENT 'Statut (validité)',
  `UTIL_MAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `UTIL_PHONE` varchar(20) COLLATE utf8_bin NOT NULL,
  `ADMIN_LVL` int(11) NOT NULL DEFAULT '0',
  `AUTH_MAIL` tinyint(1) NOT NULL COMMENT 'utilisateur autorise l''envoi d''email',
  PRIMARY KEY (`UTIL_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=84 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`UTIL_ID`, `UTIL_TYPE`, `UTIL_USER`, `UTIL_PASSWORD`, `UTIL_DATE`, `ID_VILLE`, `UTIL_DATE_LOG`, `UTIL_IP`, `UTIL_STATUT`, `UTIL_MAIL`, `UTIL_PHONE`, `ADMIN_LVL`, `AUTH_MAIL`) VALUES
(1, 2, 'Vidati', 'vidati', '2009-12-28', 29037, '2009-12-29', 'NULL', 1, 'dd@dd.kk', '', 0, 0),
(48, 1, 'john', 'john', '2009-12-21', 1622, '2009-12-31', 'NULL', 1, 'mentosoc@yahoo.fr', '0112321123', 1, 1),
(74, 1, 'admindrjmh', '21412141', '2009-12-29', 6243, '2009-12-29', 'NULL', 1, '', '', 0, 0),
(81, 1, 'Basten', 'ddd', '2010-01-28', 18, '2010-01-28', NULL, 0, 'john@mal.com', '', 0, 0),
(80, 1, 'Bastien', 'bastien', '2010-01-28', 7648, '2010-01-28', NULL, 0, 'bastien@vidati.cm', '', 0, 0),
(82, 1, 'Basten', 'dddd', '2010-01-28', 852, '2010-01-28', NULL, 0, 'john@mass.com', '', 0, 0),
(83, 1, 'johnny', 'dddd', '2010-02-04', 67, '2010-02-04', NULL, 1, 'john@com.com', '', 0, 0);
