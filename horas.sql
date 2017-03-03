-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-02-2017 a las 16:57:06
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `fecha` date NOT NULL,
  `hora` datetime(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `rut` varchar(30) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`fecha`, `hora`, `nombre`, `direccion`, `telefono`, `correo`, `rut`, `motivo`, `id`) VALUES
('2017-02-02', '2017-02-13 05:09:00.00', 'sdsad', 'sad', 'asd', 'asdsa', 'asddsad', 'asdad', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD UNIQUE KEY `id_4` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
