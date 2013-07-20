-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 09 Janvier 2010 à 10:17
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
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `AVIS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UTIL_ID` int(11) NOT NULL,
  `OFFRE_ID` int(11) NOT NULL,
  `AVIS_DATE` date NOT NULL,
  `AVIS_TEXTE` text NOT NULL,
  PRIMARY KEY (`AVIS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `avis`
--

INSERT INTO `avis` (`AVIS_ID`, `UTIL_ID`, `OFFRE_ID`, `AVIS_DATE`, `AVIS_TEXTE`) VALUES
(4, 11, 2, '2010-01-04', 'bon etat');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE IF NOT EXISTS `localisation` (
  `LOCAL_REGION` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'region',
  `LOCAL_ID` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0' COMMENT 'Code departement',
  `DEPART` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'departement',
  UNIQUE KEY `DEPART` (`DEPART`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`LOCAL_REGION`, `LOCAL_ID`, `DEPART`) VALUES
('ALSACE', '67', 'bas-rhin'),
('ALSACE', '68', 'haut-rhin'),
('AQUITAINE', '24', 'dordogne'),
('AQUITAINE', '33', 'gironde'),
('AQUITAINE', '40', 'landes'),
('AQUITAINE', '64', 'pyrénées-atlantiques'),
('AQUITAINE', '47', 'lot-et-garonne'),
('AUVERGNE', '03', 'allier'),
('AUVERGNE', '43', 'haute-loire'),
('AUVERGNE', '15', 'cantal'),
('AUVERGNE', '63', 'puy-de-dome'),
('BASSE_NORMANDIE', '50', 'manche'),
('BASSE_NORMANDIE', '14', 'calvados'),
('BASSE_NORMANDIE', '61', 'orne'),
('BOURGOGNE', '21', 'cote-d''or'),
('BOURGOGNE', '58', 'nièvre'),
('BOURGOGNE', '71', 'saone-et-loire'),
('BOURGOGNE', '89', 'yonne'),
('BRETAGNE', '29', 'finistère'),
('BRETAGNE', '22', 'cotes-d''armor'),
('BRETAGNE', '35', 'ille-et-vilaine'),
('BRETAGNE', '56', 'morbihan'),
('CENTRE', '18', 'cher'),
('CENTRE', '28', 'eure-et-loir'),
('CENTRE', '36', 'indre'),
('CENTRE', '37', 'indre-et-loire'),
('CENTRE', '41', 'loir-et-cher'),
('CENTRE', '45', 'loiret'),
('CHAMPAGNE_ARDENNES', '08', 'ardennes'),
('CHAMPAGNE_ARDENNES', '51', 'marne'),
('CHAMPAGNE_ARDENNES', '52', 'haute-marne'),
('CHAMPAGNE_ARDENNES', '10', 'aube'),
('FRANCHE-COMTÉ', '39', 'jura'),
('FRANCHE-COMTÉ', '25', 'doubs'),
('FRANCHE-COMTÉ', '70', 'haute-saone'),
('FRANCHE-COMTÉ', '90', 'territoire de belfort'),
('HAUTE_NORMANDIE', '27', 'eure'),
('HAUTE_NORMANDIE', '76', 'seine maritime'),
('ILE DE FRANCE', '75', 'paris'),
('ILE DE FRANCE', '77', 'seine et marne'),
('ILE DE FRANCE', '91', 'essonne'),
('ILE DE FRANCE', '78', 'yvelines'),
('ILE DE FRANCE', '93', 'seine-saint-denis'),
('ILE DE FRANCE', '94', 'val-de-marne'),
('ILE DE FRANCE', '95', 'val-d''oise'),
('ILE DE FRANCE', '92', 'hauts-de-seine'),
('LANGUEDOC_ROUSSILLON', '66', 'pyrénées-orientales'),
('LANGUEDOC_ROUSSILLON', '11', 'aude'),
('LANGUEDOC_ROUSSILLON', '34', 'hérault'),
('LANGUEDOC_ROUSSILLON', '30', 'gard'),
('LANGUEDOC_ROUSSILLON', '48', 'lozère'),
('LIMOUSIN', '19', 'corrèze'),
('LIMOUSIN', '23', 'creuse'),
('LIMOUSIN', '87', 'haute-vienne'),
('LORRAINE', '54', 'meurthe-et-moselle'),
('LORRAINE', '55', 'meuse'),
('LORRAINE', '57', 'moselle'),
('LORRAINE', '88', 'vosges'),
('MIDI_PYRENEES', '09', 'ariège'),
('MIDI_PYRENEES', '65', 'hautes-pyrénées'),
('MIDI_PYRENEES', '32', 'gers'),
('MIDI_PYRENEES', '31', 'haute-garonne'),
('MIDI_PYRENEES', '81', 'tarn'),
('MIDI_PYRENEES', '82', 'tarn-et-garonne'),
('MIDI_PYRENEES', '46', 'lot'),
('MIDI_PYRENEES', '12', 'aveyron'),
('NORD_PAS_DE_CALAIS', '62', 'pas-de-calais'),
('NORD_PAS_DE_CALAIS', '59', 'nord'),
('PAYS DE LA LOIRE', '44', 'loire-atlantique'),
('PAYS DE LA LOIRE', '53', 'mayenne'),
('PAYS DE LA LOIRE', '49', 'maine-et-loire'),
('PAYS DE LA LOIRE', '72', 'sarthe'),
('PAYS DE LA LOIRE', '85', 'vendée'),
('PICARDIE', '02', 'aisne'),
('PICARDIE', '80', 'somme'),
('PICARDIE', '60', 'oise'),
('POITOU_CHARENTES', '16', 'charente'),
('POITOU_CHARENTES', '17', 'charente-maritime'),
('POITOU_CHARENTES', '79', 'deux-sèvres'),
('POITOU_CHARENTES', '86', 'vienne'),
('PROVENCE-ALPES-COTE D''AZUR', '13', 'bouches-du-rhone'),
('PROVENCE-ALPES-COTE D''AZUR', '05', 'hautes-alpes'),
('PROVENCE_ALPES_COTE_D_AZUR', '04', 'alpes-de-haute-provence'),
('PROVENCE_ALPES_COTE_D_AZUR', '06', 'alpes-maritimes'),
('PROVENCE_ALPES_COTE_D_AZUR', '83', 'var'),
('RHONE_ALPES', '07', 'ardèche'),
('RHONE_ALPES', '26', 'drome'),
('RHONE_ALPES', '38', 'isère'),
('RHONE_ALPES', '73', 'savoie'),
('RHONE_ALPES', '74', 'haute savoie'),
('RHONE_ALPES', '01', 'ain'),
('RHONE_ALPES', '69', 'rhone'),
('RHONE_ALPES', '42', 'loire'),
('PROVENCE_ALPES_COTE_D_AZUR', '84', 'vaucluse'),
('DOM_TOM', '971', 'guadeloupe'),
('CORSE', '1000', 'corse du sud'),
('DOM_TOM', '972', 'martinique'),
('DOM_TOM', '973', 'guyane'),
('DOM_TOM', '974', 'reunion'),
('DOM_TOM', '975', 'saint pierre et miquelon'),
('DOM_TOM', '976', 'mayotte'),
('CORSE', '2000', 'haute corse'),
('USA', '3000', 'Etats-Unis');

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE IF NOT EXISTS `offres` (
  `OFFRE_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant Interne',
  `UTIL_ID` int(11) NOT NULL COMMENT 'Identifiant Interne Utilisateur',
  `LOCAL_ID` int(11) NOT NULL COMMENT 'Identifiant Interne Localisation',
  `OFFRE_TITRE` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Titre offre (par défaut <CATEGORIE>)',
  `OFFRE_DATE` date NOT NULL COMMENT 'Date d''enregistrement (<DATE_OFFRE>)',
  `OFFRE_DATE_MODIF` date NOT NULL COMMENT 'Date de modification',
  `OFFRE_PRIX` int(30) NOT NULL,
  `OFFRE_TEXTE` text COLLATE utf8_bin NOT NULL COMMENT 'Descriptif annonce (<TEXTE_FR>)',
  `OFFRE_STATUT` int(11) NOT NULL DEFAULT '0' COMMENT 'Statut (validité)',
  `OFFRE_PHOTO` varchar(50) COLLATE utf8_bin NOT NULL,
  `OFFRE_PHOTO1` varchar(20) COLLATE utf8_bin NOT NULL,
  `OFFRE_PHOTO2` varchar(20) COLLATE utf8_bin NOT NULL,
  `OFFRE_TYPE` varchar(30) COLLATE utf8_bin NOT NULL,
  `OFFRE_DEMANDE` int(2) NOT NULL,
  PRIMARY KEY (`OFFRE_ID`),
  KEY `FK_POSSEDE` (`UTIL_ID`),
  KEY `FK_SE_TROUVE` (`LOCAL_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=51 ;

--
-- Contenu de la table `offres`
--

INSERT INTO `offres` (`OFFRE_ID`, `UTIL_ID`, `LOCAL_ID`, `OFFRE_TITRE`, `OFFRE_DATE`, `OFFRE_DATE_MODIF`, `OFFRE_PRIX`, `OFFRE_TEXTE`, `OFFRE_STATUT`, `OFFRE_PHOTO`, `OFFRE_PHOTO1`, `OFFRE_PHOTO2`, `OFFRE_TYPE`, `OFFRE_DEMANDE`) VALUES
(12, 3, 0, 'rferefr', '2010-01-05', '2010-01-05', 0, '', 1, '', '', '', '', 2),
(11, 12, 93, 'vend psp', '2010-01-04', '2010-01-04', 0, 'bon etat', 1, '', '', '', 'particulier', 2),
(13, 3, 0, 'rferefr', '2010-01-05', '2010-01-05', 0, '', 1, '', '', '', '', 2),
(14, 3, 0, 'rferefr', '2010-01-05', '2010-01-05', 0, '', 1, '', '', '', '', 2),
(15, 3, 0, 'rferefr', '2010-01-05', '2010-01-05', 0, '', 1, '', '', '', '', 2),
(16, 3, 0, 'rferefr', '2010-01-05', '2010-01-05', 0, '', 1, '', '', '', '', 2),
(33, 48, 93, 'desd', '2010-01-07', '2010-01-07', 123, 'dewdee', 1, '', '', '', '4', 1),
(34, 48, 93, 'desd', '2010-01-07', '2010-01-07', 123, 'dewdee', 1, 'image_offre/john-annonces.txt', '', '', '4', 1),
(35, 48, 93, 'desd', '2010-01-07', '2010-01-07', 123, 'dewdee', 1, '', '', '', '4', 1),
(36, 48, 93, 'desd', '2010-01-07', '2010-01-07', 123, 'dewdee', 1, 'image_offre/-annonces.txt', 'photo1', 'photo2', '4', 1),
(37, 48, 93, 'desde', '2010-01-07', '2010-01-07', 123, 'deefsf', 1, 'image_offre/-annonces.txt', 'photo1', 'photo2', '3', 1),
(38, 48, 93, 'dseed', '2010-01-07', '2010-01-07', 123, 'esdsde', 1, 'image_offre/-annonces.txt', '', '', '1', 1),
(39, 48, 93, 'desd', '2010-01-07', '2010-01-07', 123, 'dsede', 1, 'image_offre/-annonces.txt', 'photo1', 'photo2', '4', 1),
(40, 48, 93, 'des', '2010-01-07', '2010-01-07', 123, 'dsedse', 1, 'image_offre/john-annonces.txt', 'photo1', 'photo2', '4', 1),
(41, 48, 93, 'desd', '2010-01-08', '2010-01-08', 123, 'sedfse', 1, '', '', '', '5', 1),
(42, 48, 93, 'desd', '2010-01-08', '2010-01-08', 123, 'sedfse', 1, '', '', '', '5', 1),
(43, 48, 93, 'desde', '2010-01-08', '2010-01-08', 123, 'vs', 1, '', '', '', '3', 1),
(44, 48, 93, 'desde', '2010-01-08', '2010-01-08', 123, 'vs', 1, '', '', '', '3', 1),
(45, 48, 93, 'desde', '2010-01-08', '2010-01-08', 123, 'vs', 1, '', '', '', '3', 1),
(46, 48, 93, 'desde', '2010-01-08', '2010-01-08', 123, 'vs', 1, '', '', '', '3', 1),
(47, 48, 93, 'desde', '2010-01-08', '2010-01-08', 123, 'vs', 1, '', '', '', '3', 1),
(48, 48, 93, 'actu 1', '2010-01-08', '2010-01-08', 111, 'edesd', 1, '', '', '', '3', 1),
(49, 48, 93, 'actu 2', '2010-01-08', '2010-01-08', 1111, 'dedes', 1, 'image_offre/john-actu 2-fichier.png', '', '', '4', 1),
(50, 48, 93, 'deds', '2010-01-08', '2010-01-08', 1111, 'sd', 1, 'content/image_offre/john-deds-fichier.png', '', '', '16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `PANIER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UTIL_ID` int(11) NOT NULL,
  `OFFRE_ID` int(11) NOT NULL,
  `PANIER_DATE` date NOT NULL,
  `PANIER_STATUT` int(10) NOT NULL,
  `OFFRE_TITRE` varchar(50) NOT NULL,
  PRIMARY KEY (`PANIER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `panier`
--


-- --------------------------------------------------------

--
-- Structure de la table `type_offre`
--

CREATE TABLE IF NOT EXISTS `type_offre` (
  `TYPE_OFFRE_ID` int(10) NOT NULL,
  `TYPE_OFFRE_LIBELLE` varchar(50) NOT NULL,
  PRIMARY KEY (`TYPE_OFFRE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_offre`
--

INSERT INTO `type_offre` (`TYPE_OFFRE_ID`, `TYPE_OFFRE_LIBELLE`) VALUES
(0, 'Toutes cat&eacute;gories'),
(1, 'MULTIMEDIA '),
(6, 'LOISIRS '),
(16, 'VEHICULES '),
(24, 'IMMOBILIER '),
(30, 'MAISON '),
(41, 'EMPLOI et SERVICES '),
(48, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `type_ss_offre`
--

CREATE TABLE IF NOT EXISTS `type_ss_offre` (
  `TYPE_SS_OFFRE_ID` int(11) NOT NULL,
  `TYPE_SS_OFFRE_LIBELLE` varchar(50) NOT NULL,
  `TYPE_OFFRE_ID` int(11) NOT NULL,
  PRIMARY KEY (`TYPE_SS_OFFRE_ID`),
  KEY `TYPE_OFFRE_ID` (`TYPE_OFFRE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_ss_offre`
--

INSERT INTO `type_ss_offre` (`TYPE_SS_OFFRE_ID`, `TYPE_SS_OFFRE_LIBELLE`, `TYPE_OFFRE_ID`) VALUES
(2, 'Informatique', 1),
(3, 'Consoles et Jeux vid&eacute;o', 1),
(4, 'Image et Son', 1),
(5, 'T&eacute;l&eacute;phonie', 1),
(7, 'DVD / Films', 6),
(8, 'CD / Musique', 6),
(9, 'Livres', 6),
(10, 'Animaux', 6),
(11, 'Sports et Hobbies', 6),
(12, 'Instruments de musique', 6),
(13, 'Collection', 6),
(14, 'Jeux et Jouets', 6),
(15, 'Vins et Gastronomie', 6),
(17, 'Voitures', 16),
(18, 'Motos', 16),
(19, 'Caravanes', 16),
(20, 'Utilitaires', 16),
(21, 'Equipement Auto', 16),
(22, 'Equipement Moto', 16),
(23, 'Bateaux', 16),
(25, 'Ventes', 24),
(26, 'Locations', 24),
(27, 'Colocations', 24),
(28, 'Locations de vacances', 24),
(29, 'Bureaux et Commerces', 24),
(31, 'Ameublement', 30),
(32, 'Electrom&eacute;nager', 30),
(33, 'Arts de la table', 30),
(34, 'D&eacute;coration', 30),
(35, 'Linge de maison', 30),
(36, 'Bricolage / Jardinage', 30),
(37, 'V&ecirc;tements', 30),
(38, 'Accessoires et Bagagerie', 30),
(39, 'Montres et Bijoux', 30),
(40, 'Equipement b&eacute;b&eacute;', 30),
(42, 'Mat&eacute;riel professionnel', 41),
(43, 'Emploi', 41),
(44, 'Services', 41),
(45, 'Billetterie', 41),
(46, 'Ev&eacute;nements', 41),
(47, 'Cours particuliers', 41);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant Interne',
  `UTIL_TYPE` int(11) NOT NULL COMMENT 'Type d''utilisateur',
  `UTIL_USER` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Identifiant Interne Utilisateur',
  `UTIL_PASSWORD` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'Mot de passe',
  `UTIL_DATE` date NOT NULL COMMENT 'Date d''inscription',
  `UTIL_DATE_LOG` date NOT NULL COMMENT 'Date dernier Log',
  `UTIL_IP` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT 'Adresse IP',
  `UTIL_STATUT` int(11) NOT NULL DEFAULT '0' COMMENT 'Statut (validité)',
  `UTIL_MAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `UTIL_CP` int(10) NOT NULL,
  `LOCAL_ID` int(20) NOT NULL,
  `UTIL_PHONE` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`UTIL_ID`),
  KEY `LOCAL_ID` (`LOCAL_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=75 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`UTIL_ID`, `UTIL_TYPE`, `UTIL_USER`, `UTIL_PASSWORD`, `UTIL_DATE`, `UTIL_DATE_LOG`, `UTIL_IP`, `UTIL_STATUT`, `UTIL_MAIL`, `UTIL_CP`, `LOCAL_ID`, `UTIL_PHONE`) VALUES
(50, 2, 'Vidati', 'vidati', '2009-12-28', '2009-12-29', 'NULL', 1, '', 0, 0, ''),
(48, 1, 'john', 'john', '2009-12-21', '2009-12-31', 'NULL', 1, '', 0, 93, ''),
(74, 1, 'admindrjmh', '21412141', '2009-12-29', '2009-12-29', 'NULL', 1, '', 0, 0, '');
