-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-07-2022 a las 07:05:21
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `onixbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

DROP TABLE IF EXISTS `doctores`;
CREATE TABLE IF NOT EXISTS `doctores` (
  `idDoc` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  PRIMARY KEY (`idDoc`),
  KEY `FK_docArea_espc` (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

DROP TABLE IF EXISTS `examenes`;
CREATE TABLE IF NOT EXISTS `examenes` (
  `idExa` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) NOT NULL,
  `tipoExamen` varchar(24) NOT NULL,
  `fecha` date NOT NULL,
  `idHr` int(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idExa`),
  KEY `FK_examenes_paciente` (`rut`),
  KEY `FK_examenes_horario` (`idHr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialmedico`
--

DROP TABLE IF EXISTS `historialmedico`;
CREATE TABLE IF NOT EXISTS `historialmedico` (
  `idHm` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`idHm`),
  KEY `FK_Hm_paciente` (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `idHr` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL,
  PRIMARY KEY (`idHr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `rut` varchar(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidoP` varchar(30) NOT NULL,
  `apellidoM` varchar(30) NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `role` varchar(5) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

DROP TABLE IF EXISTS `receta`;
CREATE TABLE IF NOT EXISTS `receta` (
  `idRec` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `fechaEmision` date NOT NULL,
  `fechaCaducidad` date NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`idRec`),
  KEY `FK_receta_paciente` (`rut`),
  KEY `FK_receta_doctor` (`idDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(10) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idHr` int(11) NOT NULL,
  `confirma` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `FK_reserva_paciente` (`rut`),
  KEY `FK_reserva_horario` (`idHr`),
  KEY `FK_reserva_doctores` (`idDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD CONSTRAINT `FK_docArea_espc` FOREIGN KEY (`rut`) REFERENCES `paciente` (`rut`);

--
-- Filtros para la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD CONSTRAINT `FK_examenes_horario` FOREIGN KEY (`idHr`) REFERENCES `horario` (`idHr`),
  ADD CONSTRAINT `FK_examenes_paciente` FOREIGN KEY (`rut`) REFERENCES `paciente` (`rut`);

--
-- Filtros para la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  ADD CONSTRAINT `FK_Hm_paciente` FOREIGN KEY (`rut`) REFERENCES `paciente` (`rut`);

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `FK_receta_doctor` FOREIGN KEY (`idDoc`) REFERENCES `doctores` (`idDoc`),
  ADD CONSTRAINT `FK_receta_paciente` FOREIGN KEY (`rut`) REFERENCES `paciente` (`rut`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_reserva_doctores` FOREIGN KEY (`idDoc`) REFERENCES `doctores` (`idDoc`),
  ADD CONSTRAINT `FK_reserva_horario` FOREIGN KEY (`idHr`) REFERENCES `horario` (`idHr`),
  ADD CONSTRAINT `FK_reserva_paciente` FOREIGN KEY (`rut`) REFERENCES `paciente` (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
