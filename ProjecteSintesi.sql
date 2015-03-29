-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-03-2015 a las 14:13:26
-- Versión del servidor: 5.5.41
-- Versión de PHP: 5.3.10-1ubuntu3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ProjecteSintesi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Assajs`
--

CREATE TABLE IF NOT EXISTS `Assajs` (
  `id_assajs` int(11) NOT NULL AUTO_INCREMENT,
  `Assajs` varchar(20) DEFAULT NULL,
  `DiaHora` varchar(20) DEFAULT NULL,
  `Lloc` varchar(20) DEFAULT NULL,
  `ProxActuacio` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_assajs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `Assajs`
--

INSERT INTO `Assajs` (`id_assajs`, `Assajs`, `DiaHora`, `Lloc`, `ProxActuacio`) VALUES
(20, 'Divendres', '00:30 14/05/2014', 'escola', 'Festes de Jesus'),
(21, 'asd', '21:10 12/02/2015', 'asd', 'asd'),
(22, 'Divendres', '22:00 13/02/2015', 'Jesus', 'Fira de l''oli');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Concert`
--

CREATE TABLE IF NOT EXISTS `Concert` (
  `id_concert` int(11) NOT NULL AUTO_INCREMENT,
  `Concert` varchar(20) DEFAULT NULL,
  `DiaHora` varchar(20) DEFAULT NULL,
  `Lloc` varchar(20) DEFAULT NULL,
  `Roba` varchar(50) DEFAULT NULL,
  `Passcalles` enum('Si','No') DEFAULT NULL,
  `LlistaPartitures` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_concert`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `Concert`
--

INSERT INTO `Concert` (`id_concert`, `Concert`, `DiaHora`, `Lloc`, `Roba`, `Passcalles`, `LlistaPartitures`) VALUES
(16, 'Festes Barcelona', '19:00 09/06/2014', 'Escola', '78978', 'Si', NULL),
(17, 'asdasd', '19:20 23/10/2014', 'asdasd', 'asdasd', 'Si', NULL),
(18, 'wer', '21:00 11/02/2015', 'wer', 'wer', 'Si', NULL),
(19, 'Nova Plantilla', '20:50 12/02/2015', 'Jesus', 'Traje Complet', 'Si', NULL),
(20, 'asda', 'http://localhost/kad', 'asdas', 'Cañelles_Albert_DocumentacioPart1.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Membres`
--

CREATE TABLE IF NOT EXISTS `Membres` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `usuari` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `cognom` varchar(100) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `rol` enum('Administrador','Membre') DEFAULT NULL,
  `noua` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Membres`
--

INSERT INTO `Membres` (`id_membre`, `usuari`, `nom`, `cognom`, `contraseña`, `rol`, `noua`) VALUES
(5, 'Administrador', NULL, NULL, '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', NULL),
(6, 'Albert', 'Albert', 'Cañelles', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', NULL),
(7, 'Josep', NULL, NULL, 'f688ae26e9cfa3ba6235477831d5122e', 'Membre', NULL),
(9, 'Joan', 'Joan', 'Lombarte', '81dc9bdb52d04dc20036dbd8313ed055', 'Membre', NULL),
(10, 'Manuelblanch', 'Manuel', 'Blanch', '81dc9bdb52d04dc20036dbd8313ed055', 'Membre', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partitures`
--

CREATE TABLE IF NOT EXISTS `Partitures` (
  `id_partitura` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Partitura` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_partitura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Videos`
--

CREATE TABLE IF NOT EXISTS `Videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `Nomvideo` varchar(50) DEFAULT NULL,
  `Descripcio` varchar(500) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `Videos`
--

INSERT INTO `Videos` (`id_video`, `Nomvideo`, `Descripcio`, `link`) VALUES
(12, 'Magallanes', '', 'https://www.youtube.com/watch?v=W7PA8PbFvIc'),
(17, 'VideoProva', '', 'https://www.youtube.com/watch?v=obL44Ljv2VQ'),
(19, 'Macarenas', 'Aquest es un video para el solista de trompeta seria interesant que escoltes com toca els accens i es mires la partitura', 'https://www.youtube.com/watch?v=6M7l1xb-20o'),
(20, 'asd', 'asdasdasdasd', 'https://www.youtube.com/watch?v=6M7l1xb-20o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vista`
--

CREATE TABLE IF NOT EXISTS `Vista` (
  `id_vista` int(11) NOT NULL AUTO_INCREMENT,
  `titul` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `info` varchar(10000) DEFAULT NULL,
  `pdfimg` varchar(10000) DEFAULT NULL,
  `imgnom` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_vista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
