-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2017 a las 03:04:16
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `selloseguridad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `kit` int(11) NOT NULL AUTO_INCREMENT,
  `Container` varchar(100) NOT NULL,
  `Etiqueta1` varchar(100) NOT NULL,
  `Etiqueta2` varchar(100) NOT NULL,
  `Etiqueta3` varchar(100) NOT NULL,
  `Etiqueta4` varchar(100) NOT NULL,
  `Etiqueta5` varchar(100) NOT NULL,
  PRIMARY KEY (`kit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`kit`, `Container`, `Etiqueta1`, `Etiqueta2`, `Etiqueta3`, `Etiqueta4`, `Etiqueta5`) VALUES
(1, 'ABC101CDE', 'A400CD', 'A400CD', 'A500CD', 'A400CD', 'A200CD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto2`
--

CREATE TABLE IF NOT EXISTS `producto2` (
  `KIT` int(100) NOT NULL AUTO_INCREMENT,
  `Container` varchar(100) NOT NULL,
  `Etiqueta1` varchar(100) NOT NULL,
  `Etiqueta2` varchar(100) NOT NULL,
  `Etiqueta3` varchar(100) NOT NULL,
  `Etiqueta4` varchar(100) NOT NULL,
  `Etiqueta5` varchar(100) NOT NULL,
  `Etiqueta6` varchar(100) NOT NULL,
  `Etiqueta7` varchar(100) NOT NULL,
  `Etiqueta8` varchar(100) NOT NULL,
  `Etiqueta9` varchar(100) NOT NULL,
  `Etiqueta10` varchar(100) NOT NULL,
  `Etiqueta11` varchar(100) NOT NULL,
  `Etiqueta12` varchar(100) NOT NULL,
  PRIMARY KEY (`KIT`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `producto2`
--

INSERT INTO `producto2` (`KIT`, `Container`, `Etiqueta1`, `Etiqueta2`, `Etiqueta3`, `Etiqueta4`, `Etiqueta5`, `Etiqueta6`, `Etiqueta7`, `Etiqueta8`, `Etiqueta9`, `Etiqueta10`, `Etiqueta11`, `Etiqueta12`) VALUES
(1, 'ABC101CDE', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD', 'A400CD'),
(2, 'ABC150CDE', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD', 'A500CD');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
