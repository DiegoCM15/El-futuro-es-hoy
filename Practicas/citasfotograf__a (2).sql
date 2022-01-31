-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 03:33:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citasfotografía`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscita`
--

CREATE TABLE `datoscita` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `Correo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `Paquete` int(2) DEFAULT NULL,
  `Fecha` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Hora` varchar(6) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `datoscita`
--

INSERT INTO `datoscita` (`ID`, `Nombre`, `Correo`, `Telefono`, `Paquete`, `Fecha`, `Hora`) VALUES
(2, '  Adrián Rosario  ', 'alamadrianr@gmail.com', '5578160800  ', 5, '2021-12-21', '18:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datoscita`
--
ALTER TABLE `datoscita`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datoscita`
--
ALTER TABLE `datoscita`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
