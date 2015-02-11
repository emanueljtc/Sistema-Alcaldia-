-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2015 a las 15:30:54
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `basealcaldia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 62),
(2, 1, NULL, NULL, 'Documentos', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Groups', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Instituciones', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Pages', 38, 41),
(21, 20, NULL, NULL, 'display', 39, 40),
(22, 1, NULL, NULL, 'Users', 42, 59),
(23, 22, NULL, NULL, 'login', 43, 44),
(24, 22, NULL, NULL, 'logout', 45, 46),
(25, 22, NULL, NULL, 'index', 47, 48),
(26, 22, NULL, NULL, 'view', 49, 50),
(27, 22, NULL, NULL, 'add', 51, 52),
(28, 22, NULL, NULL, 'edit', 53, 54),
(29, 22, NULL, NULL, 'delete', 55, 56),
(30, 22, NULL, NULL, 'initDB', 57, 58),
(31, 1, NULL, NULL, 'AclExtras', 60, 61);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 8),
(2, NULL, 'Group', 2, NULL, 9, 12),
(3, 1, 'User', 7, NULL, 2, 3),
(4, 2, 'User', 8, NULL, 10, 11),
(6, 1, 'User', 10, NULL, 4, 5),
(8, 1, 'User', 17, NULL, 6, 7),
(9, NULL, 'Group', 3, NULL, 13, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 24, '1', '1', '1', '1'),
(4, 2, 14, '1', '1', '1', '1'),
(5, 2, 2, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solvencia_id` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `copiacedula` varchar(50) NOT NULL,
  `constancia_r` varchar(50) NOT NULL,
  `carta_m` varchar(50) NOT NULL,
  `presupuesto` varchar(50) NOT NULL,
  `carpeta` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `solvencia_id`, `nombre`, `apellidos`, `municipio`, `parroquia`, `telefono`, `direccion`, `copiacedula`, `constancia_r`, `carta_m`, `presupuesto`, `carpeta`, `created`, `modified`) VALUES
(1, 21, 'Emanuel', 'Torres', '', '', '04165616973', 'La Morita', 'consignado', 'consignado', 'consignado', 'consignado', 'consignado', '2015-01-28 10:31:24', '2015-01-28 10:31:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admin', '2014-12-26 15:17:56', '2014-12-26 15:17:56'),
(2, 'operador', '2014-12-26 15:30:41', '2014-12-26 15:30:41'),
(3, 'admin', '2015-01-18 10:13:50', '2015-01-18 10:13:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `encargado` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`id`, `nombre`, `encargado`, `created`, `modified`) VALUES
(2, 'Fondemi', 'Luis Tovar', '2015-01-14', '2015-01-18'),
(6, 'IAVEG', 'Luis Rondon', '2015-01-18', '2015-01-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solvencias`
--

CREATE TABLE IF NOT EXISTS `solvencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instituciones_id` int(11) NOT NULL,
  `cedula` int(20) NOT NULL,
  `estado` varchar(12) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `solvencias`
--

INSERT INTO `solvencias` (`id`, `instituciones_id`, `cedula`, `estado`, `created`, `modified`) VALUES
(20, 2, 16756478, 'Solvente', '2015-01-20 13:08:02', '2015-01-20 13:08:02'),
(21, 2, 18971787, 'Solvente', '2015-01-28 10:30:11', '2015-01-28 10:30:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `apellido`, `dni`, `email`, `group_id`, `created`, `modified`) VALUES
(7, 'emanueljtc', 'cbebaeab5707aa3dd18ff60c4cdd2a27f2012148', 'Emanuel', 'Torres', 123456, 'emanueljtc@gmail.com', 1, '2014-12-26 15:33:44', '2015-01-18 09:27:50'),
(8, 'Diana', '802d7834983cb8722d1b42366fed593199f828b7', 'Diana', 'Tovar', 19876787, 'dianatovar@gmail.com', 2, '2014-12-26 18:10:46', '2014-12-26 18:10:46'),
(10, 'Yeli', 'fd0a853365a3d62ec4a8c2b93779e73295082029', 'Yeli', 'Ache', 1552638, 'yeli@gmail.com', 1, '2015-01-14 10:03:23', '2015-01-14 10:03:23'),
(17, 'admin', '4c6aeb7a72bc24dc078e48347b3aef088015be18', 'admin', 'admin', 123456, 'admin@gmail.com', 1, '2015-01-18 09:29:04', '2015-01-18 09:29:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
