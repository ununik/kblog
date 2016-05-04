-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Stř 04. kvě 2016, 18:27
-- Verze serveru: 5.5.49-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `kblog`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `clanky`
--

CREATE TABLE IF NOT EXISTS `clanky` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `clanky`
--

INSERT INTO `clanky` (`id`, `title`, `description`, `text`, `timestamp`, `active`, `hidden`) VALUES
(1, 'Test1', 'dhadsofhsdi', 'dsfihofaiohioasdhfsdoihfoisad', 1234567, 1, 0),
(2, 'fasdfasfasd', 'fsdafasdfasfas s fs d', ' fasd sdf sdf asd fasdf ', 2147483647, 1, 0),
(3, 'safdasd', 'ffsadf', 'dfsafasd', 4566, 1, 0),
(4, 'fsadfsd', 'fsadfasd', 'fasdfsdf', 7989798, 1, 0),
(5, 'fsdafsaf', 'fasdf', 'fsadfasd', 789789798, 1, 0),
(6, 'fdsafsdas', 'fsafas dfspfpoaspofjs oppasdf \r\nfposdjof aspodjpf oa\r\nsfpoajsfop sdop\r\nf aspdjofa psodfsdpf \r\nasdpfj sadpo\r\nfpasojf as\r\npf jspdoaj fpsdjf s\r\ndjfpajs pfjsado fpoasd\r\nfp jsfpojsd apf\r\nsdpfj apsodfjposd\r\npfjs aopfjps d\r\npofj asdpojf ps\r\nofja spfjdsopf\r\n fpsa', 'afsdfasfasdfa', 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `clanky_category`
--

CREATE TABLE IF NOT EXISTS `clanky_category` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `description` text COLLATE utf8_czech_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `clanky_category`
--

INSERT INTO `clanky_category` (`id`, `title`, `description`, `active`, `hidden`) VALUES
(1, 'Test 1', 'Test1 a dalsi veci', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `clanky_series`
--

CREATE TABLE IF NOT EXISTS `clanky_series` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `sorting` int(12) NOT NULL,
  `category` int(15) NOT NULL,
  `entry` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `home_page`
--

CREATE TABLE IF NOT EXISTS `home_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `home_page`
--

INSERT INTO `home_page` (`id`, `title`, `text`) VALUES
(1, 'Test 1', 'dsjaiodjasiodjsoai oijsdoifajsdoi fiosdjf osdifjosd');

-- --------------------------------------------------------

--
-- Struktura tabulky `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `timestamp` int(20) NOT NULL,
  `mail` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `message` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `message`
--

INSERT INTO `message` (`id`, `timestamp`, `mail`, `subject`, `message`) VALUES
(1, 1462271516, 'ununik@gmail.com', 'Test', 'Test'),
(2, 1462271695, 'ununik@gmail.com', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Struktura tabulky `rss_mailing`
--

CREATE TABLE IF NOT EXISTS `rss_mailing` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `rss_mailing`
--

INSERT INTO `rss_mailing` (`id`, `mail`, `timestamp`, `active`) VALUES
(1, 'ununik@gmail.com', 1462359008, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
