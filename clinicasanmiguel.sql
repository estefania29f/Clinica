-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2020 a las 18:44:07
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clinicasanmiguel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--
CREATE DATABASE clinicasanmiguel;
USE clinicasanmiguel;

CREATE TABLE IF NOT EXISTS `consultas` (
  `numCon` int(11) NOT NULL,
  `fechaCon` date NOT NULL,
  `idPac` int(11) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `costoEsp` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`numCon`, `fechaCon`, `idPac`, `idDoc`, `costoEsp`) VALUES
(500, '2020-11-01', 2, 500, '800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE IF NOT EXISTS `doctores` (
  `IdDoc` int(11) NOT NULL,
  `nombreDoc` varchar(30) NOT NULL,
  `statusDoc` varchar(1) NOT NULL,
  `idEsp` int(11) NOT NULL,
  PRIMARY KEY (`IdDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`IdDoc`, `nombreDoc`, `statusDoc`, `idEsp`) VALUES
(222, 'guerra', 'B', 103),
(500, 'German Tovar', 'B', 103),
(675, 'Micasela', 'A', 230),
(900, 'Juan Manuel', 'B', 100),
(1000, 'mia lopez', 'B', 100),
(1010, 'juancho', 'B', 103),
(7878, 'mario', 'B', 100),
(9999999, 'dr nuevo ', 'B', 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `idEsp` int(11) NOT NULL,
  `nombreEsp` varchar(20) NOT NULL,
  `costoEsp` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idEsp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`idEsp`, `nombreEsp`, `costoEsp`) VALUES
(1, 'Gediatria', '890'),
(100, 'Oftalmologia', '1000'),
(103, 'pediatria', '400'),
(230, 'Dermatologia', '600'),
(999, 'nueva', '1500'),
(666666, 'ortopedista', '900');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `idPac` int(11) NOT NULL,
  `nombrePac` varchar(25) NOT NULL,
  PRIMARY KEY (`idPac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPac`, `nombrePac`) VALUES
(1, 'Juan Lopez'),
(2, 'Pedro Fuentes'),
(3, 'Javier Paredes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
