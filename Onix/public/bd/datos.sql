-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-07-2022 a las 07:05:00
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

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`idDoc`, `rut`, `especialidad`) VALUES
(1, '12345678-0', 'Medico General'),
(2, '12345678-1', 'Diabetologia'),
(3, '12345678-2', 'Medico General'),
(4, '12345678-4', 'Kinesiologia');

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`idExa`, `rut`, `tipoExamen`, `fecha`, `idHr`, `descripcion`) VALUES
(1, '12345678-3', 'Sangre', '2022-06-28', 1, 'Prueba contaminada'),
(2, '12345678-3', 'Orina', '2022-04-12', 1, 'El paciente presenta problemas y debe ser atendido por medico general'),
(3, '12345678-3', 'Orina', '2022-07-25', 3, NULL);

--
-- Volcado de datos para la tabla `historialmedico`
--

INSERT INTO `historialmedico` (`idHm`, `rut`, `idDoc`, `fecha`, `descripcion`) VALUES
(3, '12345678-3', 1, '2021-12-16', 'Paciente masculino (de 35 años de edad) sin antecedentes. Ingresa al área de emergencia, acompañado de 2 familiares (madre y pareja) el día 21 de enero 2021, a las 9:00 pm, por un dolor fuerte de abdomen y estomacal.De inicio súbito y carácter cólico (que no cede al uso de medicamentos antiespasmódicos, ingeridos sin receta médica) como la buscapina.'),
(4, '12345678-3', 3, '2020-06-24', 'Paciente portador de una diabetes mellitus, controlada con régimen (que sigue en forma irregular), e hipoglicemiantes orales. Desde hace unos dos a tres meses presenta polidipsia, poliuria y ha bajado de peso. Las veces que se ha controlado la glicemia, ha estado sobre 200 mg/dL. Desde tres días atrás comenzó a notar disuria dolorosa y poliaquiuria. La orina la ha notado más fuerte de olor.');

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idHr`, `hora`) VALUES
(1, '09:00:00'),
(2, '09:15:00'),
(3, '09:30:00'),
(4, '09:45:00'),
(5, '10:00:00'),
(6, '10:15:00'),
(7, '10:30:00'),
(8, '10:45:00'),
(9, '11:00:00'),
(10, '11:15:00'),
(11, '11:30:00'),
(12, '11:45:00'),
(13, '12:00:00'),
(14, '12:15:00'),
(15, '12:30:00'),
(16, '12:45:00'),
(17, '13:00:00'),
(18, '13:15:00'),
(19, '13:30:00'),
(20, '13:45:00'),
(21, '14:00:00'),
(22, '14:15:00'),
(23, '14:30:00'),
(24, '14:45:00'),
(25, '15:00:00'),
(26, '15:15:00'),
(27, '15:30:00'),
(28, '15:45:00'),
(29, '16:00:00'),
(30, '16:15:00'),
(31, '16:30:00'),
(32, '16:45:00'),
(33, '17:00:00'),
(34, '17:15:00'),
(35, '17:30:00'),
(36, '17:45:00'),
(37, '18:00:00');

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`rut`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `correo`, `clave`, `fechaNacimiento`, `role`) VALUES
('12345678-0', 'Marta', 'Vazques', 'Sandler', '+56912345678', 'correo2@gmail.com', '1234', '1995-07-19', 'user'),
('12345678-1', 'Rosauro', 'Donoso', 'Cage', '+56912345678', 'correo4@gmail.com', '1234', '2000-02-04', 'user'),
('12345678-2', 'Catalina', 'Beltran', 'Rosario', '+56912345678', 'correo5@gmail.com', '1234', '1997-04-24', 'user'),
('12345678-3', 'Coloso', 'Santander', 'Premier', '+56912345678', 'correo4@gmail.com', '$2y$10$MxRfjO1G.dDY1e8pzf15Jub.3tXH8BkzImN4ab0evYLfItIaXEXke', '2022-07-23', 'user'),
('12345678-4', 'Carolina', 'Gonzales', 'Vera', '+56912345678', 'correo4@gmail.com', '1234', '2004-03-14', 'user');

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idRec`, `rut`, `idDoc`, `fechaEmision`, `fechaCaducidad`, `descripcion`) VALUES
(1, '12345678-3', 1, '2022-07-18', '2022-08-18', 'Paracetamol 1gr, Naproxeno 550mg, Ketoprofeno 1gr'),
(2, '12345678-3', 2, '2022-06-30', '2022-08-30', 'Kit de Insulina');

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`idReserva`, `rut`, `idDoc`, `fecha`, `idHr`, `confirma`) VALUES
(1, '12345678-3', 1, '2022-06-24', 27, 1),
(2, '12345678-3', 1, '2021-11-12', 31, 1),
(3, '12345678-3', 2, '2022-04-04', 9, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
