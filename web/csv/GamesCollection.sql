-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 28 Mars 2014 à 09:06
-- Version du serveur: 5.5.35-0ubuntu0.13.10.2
-- Version de PHP: 5.5.3-1ubuntu2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `GamesCollection`
--

-- --------------------------------------------------------

--
-- Structure de la table `Accessory`
--

CREATE TABLE IF NOT EXISTS `Accessory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `console_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additionalLocalisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work` tinyint(1) NOT NULL,
  `generalCondition` int(11) NOT NULL,
  `box` tinyint(1) NOT NULL,
  `boxCondition` int(11) NOT NULL,
  `notice` tinyint(1) NOT NULL,
  `noticeCondition` int(11) NOT NULL,
  `additionalInformations` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cotation` double NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `masterPicture_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2340A7BF72F9DD9F` (`console_id`),
  KEY `IDX_2340A7BF44F5D008` (`brand_id`),
  KEY `IDX_2340A7BFC68BE09C` (`localisation_id`),
  KEY `IDX_2340A7BF9F1BBC3F` (`masterPicture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `AccessoryPicture`
--

CREATE TABLE IF NOT EXISTS `AccessoryPicture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accessory_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E136309327E8CC78` (`accessory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Brand`
--

CREATE TABLE IF NOT EXISTS `Brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masterPicture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Brand`
--

INSERT INTO `Brand` (`id`, `name`, `wikiLink`, `masterPicture`) VALUES
(1, 'Sega', 'http://fr.wikipedia.org/wiki/Sega', 'sega.jpg'),
(2, 'Nintendo', 'http://fr.wikipedia.org/wiki/Nintendo', '220px-Nintendo.svg.png'),
(3, 'Sony Computer Entertainment', 'http://fr.wikipedia.org/wiki/Sony_Imagesoft', '220px-Sony_Computer_Entertainment_Logo.svg.png'),
(4, 'Amstrad', 'http://fr.wikipedia.org/wiki/Amstrad', 'amstrad.jpeg'),
(5, 'Atari', 'http://fr.wikipedia.org/wiki/Atari', '220px-Atari-Logo.svg.png'),
(6, 'SNK', 'http://fr.wikipedia.org/wiki/SNK', 'SNK_logo.gif'),
(7, 'Mattel', 'http://fr.wikipedia.org/wiki/Mattel', '220px-Mattel-brand.svg.png'),
(8, 'Microsoft', 'http://fr.wikipedia.org/wiki/Microsoft', 'Microsoft_logo_and_wordmark.svg.png'),
(9, 'NEC', 'http://fr.wikipedia.org/wiki/NEC', '220px-Nec-logo.png'),
(10, 'MB', 'http://fr.wikipedia.org/wiki/Milton_Bradley_Company', '220px-Milton_Bradley_Company_logo.svg.png');

-- --------------------------------------------------------

--
-- Structure de la table `Console`
--

CREATE TABLE IF NOT EXISTS `Console` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `generation` int(11) NOT NULL,
  `additionalLocalisation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `work` tinyint(1) NOT NULL,
  `generalCondition` int(11) NOT NULL,
  `box` tinyint(1) NOT NULL,
  `boxCondition` int(11) NOT NULL,
  `notice` tinyint(1) NOT NULL,
  `noticeCondtion` int(11) NOT NULL,
  `controllersNumber` int(11) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `additionalInformations` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cotation` double NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `masterPicture_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F9BEF62A44F5D008` (`brand_id`),
  KEY `IDX_F9BEF62AC68BE09C` (`localisation_id`),
  KEY `IDX_F9BEF62A9F1BBC3F` (`masterPicture_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Contenu de la table `Console`
--

INSERT INTO `Console` (`id`, `brand_id`, `localisation_id`, `name`, `version`, `generation`, `additionalLocalisation`, `work`, `generalCondition`, `box`, `boxCondition`, `notice`, `noticeCondtion`, `controllersNumber`, `complete`, `additionalInformations`, `cotation`, `wikiLink`, `online`, `masterPicture_id`) VALUES
(1, 1, 1, 'Game Gear', '1', 4, '', 1, 7, 0, 0, 0, 0, 0, 0, '', 0, 'http://fr.wikipedia.org/wiki/Game_Gear', 1, 1),
(2, 1, 1, 'Game Gear', '1', 4, '', 1, 7, 0, 0, 0, 0, 0, 0, '', 0, 'http://fr.wikipedia.org/wiki/Game_Gear', 1, 1),
(3, 1, 1, 'Master System', '1', 3, '', 1, 8, 1, 3, 1, 6, 1, 1, 'Alex kid intégré', 0, 'http://fr.wikipedia.org/wiki/Master_System', 1, 1),
(4, 1, 1, 'Master System', '2', 3, '', 1, 8, 1, 8, 1, 8, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Master_System', 1, 1),
(5, 1, 1, 'Megadrive', '1', 4, '', 1, 8, 1, 6, 1, 7, 2, 1, '', 0, 'http://fr.wikipedia.org/wiki/Megadrive', 1, 1),
(6, 1, 1, 'Megadrive', '2', 4, '', 1, 8, 1, 9, 1, 9, 2, 1, '', 0, 'http://fr.wikipedia.org/wiki/Megadrive', 1, 1),
(7, 1, 1, 'Megacd', '2', 4, '', 1, 7, 0, 0, 0, 0, 0, 0, '', 0, 'http://fr.wikipedia.org/wiki/Mega-CD', 1, 1),
(8, 1, 1, '32x', '1', 4, '', 1, 8, 0, 0, 0, 0, 0, 0, '', 0, 'http://fr.wikipedia.org/wiki/32X', 1, 1),
(9, 1, 1, 'Saturn', '1', 5, '', 1, 7, 0, 0, 0, 0, 2, 0, '', 0, 'http://fr.wikipedia.org/wiki/Saturn_%28console_de_jeux_vid%C3%A9o%29', 1, 1),
(10, 1, 1, 'Saturn', '1', 5, '', 1, 9, 1, 8, 0, 0, 2, 0, '', 0, 'http://fr.wikipedia.org/wiki/Saturn_%28console_de_jeux_vid%C3%A9o%29', 1, 1),
(11, 1, 1, 'Dreamcast', '1', 6, '', 1, 4, 0, 0, 0, 0, 1, 0, 'très jaunie', 0, 'http://fr.wikipedia.org/wiki/Dreamcast', 1, 1),
(12, 1, 1, 'Dreamcast', '1', 6, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Dreamcast', 1, 1),
(13, 2, 1, 'Game Boy', '1', 4, '', 1, 4, 0, 0, 0, 0, 0, 0, 'pixels morts', 0, 'http://fr.wikipedia.org/wiki/Game_Boy', 1, 1),
(14, 2, 1, 'Game Boy Color', '1', 5, '', 1, 8, 1, 8, 1, 8, 0, 1, 'jaune', 0, 'http://fr.wikipedia.org/wiki/Game_Boy_Color', 1, 1),
(15, 2, 1, 'Game Boy Advance', '1', 6, '', 1, 5, 0, 0, 0, 0, 0, 0, 'violette', 0, 'http://fr.wikipedia.org/wiki/Game_Boy_Advance', 1, 1),
(16, 2, 1, 'NES', '1', 3, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/NES', 1, 1),
(17, 2, 1, 'NES', '1', 3, '', 1, 4, 0, 0, 0, 0, 1, 0, '', 0, 'http://fr.wikipedia.org/wiki/NES', 1, 1),
(18, 2, 1, 'NES', '1', 3, '', 0, 5, 0, 0, 0, 0, 1, 0, '', 0, 'http://fr.wikipedia.org/wiki/NES', 1, 1),
(19, 2, 1, 'Virtual Boy', '1', 4, '', 1, 9, 1, 8, 1, 8, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Virtual_Boy', 1, 1),
(20, 2, 1, 'Super Nintendo', '1', 4, '', 1, 6, 0, 0, 0, 0, 1, 0, 'jaunie', 0, 'http://fr.wikipedia.org/wiki/Super_Nintendo', 1, 1),
(21, 2, 1, 'Super Nintendo', '1', 4, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Super_Nintendo', 1, 1),
(22, 2, 1, 'Nintendo64', '1', 5, '', 1, 9, 1, 9, 1, 9, 2, 1, 'Version violette', 0, 'http://fr.wikipedia.org/wiki/Nintendo_64', 1, 1),
(23, 2, 1, 'GameCube', '1', 6, '', 1, 8, 0, 0, 0, 0, 4, 0, 'version noire', 0, 'http://fr.wikipedia.org/wiki/GameCube', 1, 1),
(24, 2, 1, 'GameCube', '1', 6, '', 1, 8, 1, 9, 1, 9, 4, 1, 'version noire', 0, 'http://fr.wikipedia.org/wiki/GameCube', 1, 1),
(25, 2, 1, 'DS light', '1', 7, '', 1, 9, 1, 9, 1, 9, 0, 1, 'version blanche', 0, 'http://fr.wikipedia.org/wiki/Nintendo_DS', 1, 1),
(26, 3, 1, 'PS1', '1', 5, '', 1, 9, 1, 9, 0, 0, 4, 0, '', 0, 'http://fr.wikipedia.org/wiki/PlayStation', 1, 1),
(27, 3, 3, 'PS1', '1', 5, '', 1, 7, 0, 0, 0, 0, 4, 0, '', 0, 'http://fr.wikipedia.org/wiki/PlayStation', 1, 1),
(28, 3, 3, 'PS2', '1', 6, '', 1, 8, 0, 0, 0, 0, 4, 0, '', 0, 'http://fr.wikipedia.org/wiki/PlayStation_2', 1, 1),
(29, 3, 1, 'Pstwo', '1', 6, '', 1, 8, 1, 9, 1, 9, 4, 1, 'version grise', 0, 'http://fr.wikipedia.org/wiki/PlayStation_2', 1, 1),
(30, 3, 1, 'PS3', '2', 7, '', 1, 10, 1, 10, 1, 10, 3, 1, 'Version 60Go', 0, 'http://fr.wikipedia.org/wiki/PlayStation_3', 1, 1),
(31, 3, 1, 'PS3 slim', '1', 7, '', 1, 10, 1, 10, 1, 10, 3, 1, 'Version 320Go', 0, 'http://fr.wikipedia.org/wiki/PlayStation_3', 1, 1),
(32, 3, 1, 'PSP light', '1', 7, '', 1, 9, 1, 9, 1, 9, 0, 1, 'édition spécial FF7 crisis core', 0, 'http://fr.wikipedia.org/wiki/PlayStation_Portable', 1, 1),
(33, 4, 1, 'GX-4000', '1', 3, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/GX-4000', 1, 1),
(34, 5, 1, '2600', '1', 2, '', 1, 8, 1, 7, 1, 7, 2, 1, 'version  bois', 0, 'http://fr.wikipedia.org/wiki/Atari_2600', 1, 1),
(35, 5, 1, '7800', '1', 3, '', 1, 8, 1, 8, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Atari_7800', 1, 1),
(36, 5, 1, 'Lynx', '2', 4, '', 1, 9, 1, 9, 1, 9, 0, 1, '', 0, 'http://fr.wikipedia.org/wiki/Atari_Lynx', 1, 1),
(37, 5, 1, 'Jaguar', '1', 5, 'UK', 1, 8, 0, 0, 0, 0, 2, 0, 'version RF', 0, 'http://fr.wikipedia.org/wiki/Atari_Jaguar', 1, 1),
(38, 5, 1, 'Jaguar', '1', 5, '', 1, 8, 0, 0, 0, 0, 1, 0, '', 0, 'http://fr.wikipedia.org/wiki/Atari_Jaguar', 1, 1),
(39, 5, 1, 'Jaguar', '1', 5, '', 1, 9, 1, 8, 1, 8, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Atari_Jaguar', 1, 1),
(40, 5, 1, 'Jaguar', '1', 5, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Atari_Jaguar', 1, 1),
(41, 5, 1, 'Jaguar CD', '1', 5, '', 1, 8, 0, 0, 0, 0, 0, 0, '', 0, 'http://fr.wikipedia.org/wiki/Jaguar_CD', 1, 1),
(42, 5, 1, 'Jaguar CD', '1', 5, '', 1, 9, 1, 8, 1, 9, 0, 1, '', 0, 'http://fr.wikipedia.org/wiki/Jaguar_CD', 1, 1),
(43, 6, 3, 'NeoGeo', 'AES', 4, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Neo-Geo_AES', 1, 1),
(44, 6, 3, 'NeoGeo', 'CD', 4, '', 1, 9, 1, 9, 1, 9, 2, 1, '', 0, 'http://fr.wikipedia.org/wiki/Neo-Geo_CD', 1, 1),
(45, 7, 1, 'Intellivision', '1', 2, 'FR', 1, 8, 1, 8, 1, 8, 2, 1, '', 0, 'http://fr.wikipedia.org/wiki/Intellivision', 1, 1),
(46, 8, 1, 'Xbox', '1', 6, 'FR', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/Xbox', 1, 1),
(47, 8, 1, 'Xbox 360', '1', 7, 'FR', 1, 8, 1, 8, 1, 9, 2, 1, '', 0, 'http://fr.wikipedia.org/wiki/Xbox_360', 1, 1),
(48, 9, 1, 'Turbografx 16', '1', 3, '', 1, 9, 1, 9, 1, 9, 1, 1, '', 0, 'http://fr.wikipedia.org/wiki/TurboGrafx-16', 1, 1),
(49, 10, 1, 'Microvision', '1', 1, '', 1, 8, 1, 8, 1, 8, 0, 1, '', 0, 'http://fr.wikipedia.org/wiki/Microvision', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ConsolePicture`
--

CREATE TABLE IF NOT EXISTS `ConsolePicture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `console_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_25F9059B72F9DD9F` (`console_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Developer`
--

CREATE TABLE IF NOT EXISTS `Developer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masterPicture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Editor`
--

CREATE TABLE IF NOT EXISTS `Editor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `masterPicture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Contenu de la table `Editor`
--

INSERT INTO `Editor` (`id`, `name`, `wikiLink`, `masterPicture`) VALUES
(1, 'Palace Software', 'http://fr.wikipedia.org/wiki/Palace_Software', 'noImage.png'),
(2, 'Ocean Software', 'http://fr.wikipedia.org/wiki/Ocean_Software', '220px-Ocean-software-logo.png'),
(3, 'Titus Interactive', 'http://fr.wikipedia.org/wiki/Titus_Interactive', '220px-Titus.svg.png'),
(4, 'Atari', 'http://fr.wikipedia.org/wiki/Atari', '220px-Atari-Logo.svg.png'),
(5, 'Sega', 'http://fr.wikipedia.org/wiki/Sega', '220px-SEGA_logo.svg.png'),
(6, 'Namco', 'http://fr.wikipedia.org/wiki/Namco', '220px-Namco_Logo.svg.png'),
(7, 'Nintendo', 'http://fr.wikipedia.org/wiki/Nintendo', '220px-Nintendo.svg.png'),
(8, 'Williams Electronics', 'http://fr.wikipedia.org/wiki/Williams_Electronics', '220px-Williams-electronics-logo.gif'),
(9, 'Taito', 'http://fr.wikipedia.org/wiki/Taito_%28entreprise%29', 'Taito_logo.gif'),
(10, 'Midway', 'http://fr.wikipedia.org/wiki/Midway_Games', '220px-Midway_logo.png'),
(11, 'SNK', 'http://fr.wikipedia.org/wiki/SNK', 'SNK_logo.gif'),
(12, 'Virgin Interactive', 'http://fr.wikipedia.org/wiki/Virgin_Interactive', '220px-Virgin_interactive.jpg'),
(13, 'Ubisoft', 'http://fr.wikipedia.org/wiki/Ubisoft', '220px-Logo_Ubisoft.svg.png'),
(14, 'Fabtek', '', 'noImage.png'),
(15, 'U.S. Gold', 'http://fr.wikipedia.org/wiki/U.S._Gold', 'us_gold.jpeg'),
(16, 'Millennium Interactive', 'http://fr.wikipedia.org/wiki/Millennium_Interactive', 'Millennium-logo.png'),
(17, '21st Century', '', 'noImage.png'),
(18, 'Readysoft', '', 'noImage.png'),
(19, 'Electronic Arts', 'http://fr.wikipedia.org/wiki/Electronic_Arts', '220px-Electronic_Arts_logo.svg.png'),
(20, 'Microsoft Games Studios', 'http://fr.wikipedia.org/wiki/Microsoft_Games_Studios', 'Microsoft_Studios_Logo.png'),
(21, 'Activision', 'http://fr.wikipedia.org/wiki/Activision', '220px-Activision.svg.png'),
(22, 'SquareEnix', 'http://fr.wikipedia.org/wiki/SquareEnix', '220px-Square_Enix_logo.svg.png'),
(23, 'Hudson Soft', 'http://fr.wikipedia.org/wiki/Hudson_Soft', '220px-Hudson_logo.gif'),
(24, 'Enlight Software', '', 'enlight_software.jpeg'),
(25, 'Sunflower Interactives', 'http://fr.wikipedia.org/wiki/Sunflowers', 'Sunflowers_logo.jpg'),
(26, '369 Interactive', 'http://fr.wikipedia.org/wiki/369_Interactive#369_Interactive', 'noImage.png'),
(27, 'Capcom', 'http://fr.wikipedia.org/wiki/Capcom', '220px-Capcom_logo.svg.png'),
(28, 'Mitchell Corporation', 'http://fr.wikipedia.org/wiki/Mitchell_%28entreprise%29', 'Mit_logo.gif'),
(29, 'Atlus', 'http://fr.wikipedia.org/wiki/Atlus', '220px-Atlus_logo.png'),
(30, 'THQ', 'http://fr.wikipedia.org/wiki/THQ', '220px-Logo_THQ.svg.png'),
(31, 'Square', 'http://fr.wikipedia.org/wiki/Squaresoft', '220px-Square_logo.png'),
(32, 'Infogrames', 'http://fr.wikipedia.org/wiki/Infogrames', '220px-Infogrames_logo.jpg'),
(33, 'Konami', 'http://fr.wikipedia.org/wiki/Konami', '220px-Konami.svg.png'),
(34, 'Technos Japan', 'http://fr.wikipedia.org/wiki/Technos_Japan', 'technos.jpeg'),
(35, 'Bandai', 'http://fr.wikipedia.org/wiki/Bandai', '220px-BANDAI_logo.png'),
(36, 'Sunsoft', 'http://fr.wikipedia.org/wiki/Sunsoft', '220px-Sunsoft_logo.svg.png'),
(37, 'LucasArts', 'http://fr.wikipedia.org/wiki/Lucasfilm_Games', '220px-LucasArts.svg.png'),
(38, 'JVC', 'http://fr.wikipedia.org/wiki/JVC', '220px-Logojvc.png'),
(39, 'Bothtec', '', '449179.jpeg'),
(40, 'Enix', 'http://fr.wikipedia.org/wiki/Enix_%28maison_d%27%C3%A9dition%29', '220px-Enix_logo.png'),
(41, 'Aklaim', '', 'Aklaim.jpeg'),
(42, 'Bullet-Proof Software', 'noImage.png', ''),
(43, '2K Sports', 'http://fr.wikipedia.org/wiki/2K_Sports', '220px-2K_Sports_Logo.png'),
(44, 'Sony Computer Entertainment', 'http://fr.wikipedia.org/wiki/Sony_Imagesoft', '220px-Sony_Computer_Entertainment_Logo.svg.png'),
(45, 'Origin Systems', 'http://fr.wikipedia.org/wiki/Origin_Systems', 'origin_systems.jpeg'),
(46, 'Wolfteam', 'http://fr.wikipedia.org/wiki/Wolfteam', '220px-Wolfteam.png'),
(47, 'Disney Interactive', 'http://fr.wikipedia.org/wiki/Disney_Interactive', '220px-Disney_Interactive_logo.svg.png'),
(48, 'LJN', 'http://fr.wikipedia.org/wiki/LJN', 'noImage.png'),
(49, 'Westwood Studios', 'http://fr.wikipedia.org/wiki/Westwood_Studios', 'Westwood_logo.gif'),
(50, 'Playmates Interactive', '', 'noImage.png'),
(51, 'Eidos Interactive', 'http://fr.wikipedia.org/wiki/Eidos_Interactive', '220px-Eidos_logo.svg.png'),
(52, 'Blizzard Entertainment', 'http://fr.wikipedia.org/wiki/Blizzard_Entertainment', 'Blizzard_Entertainment_Logo.svg.png'),
(53, 'GT Interactive', 'http://fr.wikipedia.org/wiki/GT_Interactive', 'Logo_GT_Interactive.png'),
(54, '989 Studios', 'http://fr.wikipedia.org/wiki/989_Studios', '989_studios.jpeg'),
(55, 'RedOctane', 'http://fr.wikipedia.org/wiki/RedOctane', '220px-RedOctane_logo.svg.png'),
(56, 'Activision Blizzard', 'http://fr.wikipedia.org/wiki/Activision_Blizzard', '220px-Activisionblizzard.jpg'),
(57, 'Bandai Namco Games', 'http://fr.wikipedia.org/wiki/Bandai_Namco_Games', '220px-NBGLogo.png'),
(58, 'Buena Vista Games', 'http://fr.wikipedia.org/wiki/Buena_Vista_Games', '220px-Logo_Disney_Interactive_Studios.png'),
(59, 'Rockstar Games', 'http://fr.wikipedia.org/wiki/Rockstar_Games', '220px-Rockstar_Games.svg.png'),
(60, 'Milton Bradley Company', 'http://fr.wikipedia.org/wiki/Milton_Bradley_Company', '220px-Milton_Bradley_Company_logo.svg.png');

-- --------------------------------------------------------

--
-- Structure de la table `Game`
--

CREATE TABLE IF NOT EXISTS `Game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `console_id` int(11) NOT NULL,
  `editor_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL,
  `localisation_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additionalLocalisation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `work` tinyint(1) NOT NULL,
  `generalCondition` int(11) NOT NULL,
  `box` tinyint(1) NOT NULL,
  `boxCondition` int(11) NOT NULL,
  `notice` tinyint(1) NOT NULL,
  `noticeCondition` int(11) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `additionalInformations` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cotation` double NOT NULL,
  `wikiLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `masterPicture_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_83199EB24296D31F` (`genre_id`),
  KEY `IDX_83199EB272F9DD9F` (`console_id`),
  KEY `IDX_83199EB26995AC4C` (`editor_id`),
  KEY `IDX_83199EB264DD9267` (`developer_id`),
  KEY `IDX_83199EB2C68BE09C` (`localisation_id`),
  KEY `IDX_83199EB29F1BBC3F` (`masterPicture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `GamePicture`
--

CREATE TABLE IF NOT EXISTS `GamePicture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DBFCB389E48FD905` (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE IF NOT EXISTS `Genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `masterGenre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42911CFC138FBD5C` (`masterGenre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Contenu de la table `Genre`
--

INSERT INTO `Genre` (`id`, `name`, `masterGenre_id`) VALUES
(1, 'Beat-Them-All', 1),
(2, 'Beat-Them-up', 1),
(3, 'Jeux de rythme', 1),
(4, 'Mini-jeux', 1),
(5, 'Point & Click', 2),
(6, 'Survival – Horror', 2),
(7, 'Jeu d’aventure textuel', 2),
(8, 'RPG', 3),
(9, 'RPG tactique', 3),
(10, 'MMORPG', 3),
(11, 'Plateforme 2D', 4),
(12, 'Plateforme 3D', 4),
(13, 'Jeux de stratégie', 5),
(14, 'Puzzle games', 5),
(15, 'Simulation mécanique', 6),
(16, 'Simulation sportive', 6),
(17, 'Jeux de gestion', 7),
(18, 'Gun Shooting', 8),
(19, 'FPS', 8),
(20, 'Shoot-Them-Up', 8);

-- --------------------------------------------------------

--
-- Structure de la table `Localisation`
--

CREATE TABLE IF NOT EXISTS `Localisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Localisation`
--

INSERT INTO `Localisation` (`id`, `name`) VALUES
(1, 'EU'),
(2, 'US'),
(3, 'JP');

-- --------------------------------------------------------

--
-- Structure de la table `MasterGenre`
--

CREATE TABLE IF NOT EXISTS `MasterGenre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `MasterGenre`
--

INSERT INTO `MasterGenre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Rôle'),
(4, 'Plateforme'),
(5, 'Stratégie-Réflexion'),
(6, 'Simulation'),
(7, 'Gestion'),
(8, 'Tir');

-- --------------------------------------------------------

--
-- Structure de la table `Picture`
--

CREATE TABLE IF NOT EXISTS `Picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `Picture`
--

INSERT INTO `Picture` (`id`, `url`, `online`) VALUES
(1, 'noImage.png', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Accessory`
--
ALTER TABLE `Accessory`
  ADD CONSTRAINT `FK_2340A7BF44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `Brand` (`id`),
  ADD CONSTRAINT `FK_2340A7BF72F9DD9F` FOREIGN KEY (`console_id`) REFERENCES `Console` (`id`),
  ADD CONSTRAINT `FK_2340A7BF9F1BBC3F` FOREIGN KEY (`masterPicture_id`) REFERENCES `Picture` (`id`),
  ADD CONSTRAINT `FK_2340A7BFC68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `Localisation` (`id`);

--
-- Contraintes pour la table `AccessoryPicture`
--
ALTER TABLE `AccessoryPicture`
  ADD CONSTRAINT `FK_E136309327E8CC78` FOREIGN KEY (`accessory_id`) REFERENCES `Accessory` (`id`);

--
-- Contraintes pour la table `Console`
--
ALTER TABLE `Console`
  ADD CONSTRAINT `FK_F9BEF62A44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `Brand` (`id`),
  ADD CONSTRAINT `FK_F9BEF62A9F1BBC3F` FOREIGN KEY (`masterPicture_id`) REFERENCES `Picture` (`id`),
  ADD CONSTRAINT `FK_F9BEF62AC68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `Localisation` (`id`);

--
-- Contraintes pour la table `ConsolePicture`
--
ALTER TABLE `ConsolePicture`
  ADD CONSTRAINT `FK_25F9059B72F9DD9F` FOREIGN KEY (`console_id`) REFERENCES `Console` (`id`);

--
-- Contraintes pour la table `Game`
--
ALTER TABLE `Game`
  ADD CONSTRAINT `FK_83199EB24296D31F` FOREIGN KEY (`genre_id`) REFERENCES `Genre` (`id`),
  ADD CONSTRAINT `FK_83199EB264DD9267` FOREIGN KEY (`developer_id`) REFERENCES `Developer` (`id`),
  ADD CONSTRAINT `FK_83199EB26995AC4C` FOREIGN KEY (`editor_id`) REFERENCES `Editor` (`id`),
  ADD CONSTRAINT `FK_83199EB272F9DD9F` FOREIGN KEY (`console_id`) REFERENCES `Console` (`id`),
  ADD CONSTRAINT `FK_83199EB29F1BBC3F` FOREIGN KEY (`masterPicture_id`) REFERENCES `Picture` (`id`),
  ADD CONSTRAINT `FK_83199EB2C68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `Localisation` (`id`);

--
-- Contraintes pour la table `GamePicture`
--
ALTER TABLE `GamePicture`
  ADD CONSTRAINT `FK_DBFCB389E48FD905` FOREIGN KEY (`game_id`) REFERENCES `Game` (`id`);

--
-- Contraintes pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD CONSTRAINT `FK_42911CFC138FBD5C` FOREIGN KEY (`masterGenre_id`) REFERENCES `MasterGenre` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
