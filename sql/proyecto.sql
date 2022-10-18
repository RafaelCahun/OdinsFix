-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2021 a las 21:14:28
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `administrador` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`administrador`, `password`) VALUES
('root', 'root'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` int(10) NOT NULL,
  `reparacion` varchar(30) NOT NULL,
  `problema` varchar(100) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`nombre`, `correo`, `telefono`, `reparacion`, `problema`, `ruta`, `id`) VALUES
('Rafael', 'pepecahun_10@hotmail.com', 2147483647, 'Display', 'Se me rompió el display', 'C:/xampp/htdocs/proyecto/fotos/2021-12-15-09-58-11-Imagen1.jpg', 13),
('Grecia Basto', 'grecia@hotmail.com', 2147483647, 'Mantenimiento', 'Sobrecalentamiento en el telefono', 'C:/xampp/htdocs/proyecto/fotos/2021-12-15-10-39-20-imagen2.jpg', 14),
('prueba usuario', 'prueba@hotmail.com', 0, 'Mantenimiento', 'Se calienta', 'C:/xampp/htdocs/proyecto/fotos/2021-12-16-06-38-26-trabajo5.jpg', 18),
('Rafael Martin', 'rafaelcahun_28@hotmail.com', 2147483647, 'Display', 'Se rompió la pantalla', 'C:/xampp/htdocs/proyecto/fotos/2021-12-16-07-38-52-descarga.jfif', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreusuario` varchar(20) NOT NULL,
  `apellidousuario` varchar(20) NOT NULL,
  `emailusuario` varchar(50) NOT NULL,
  `passwordusuario` varchar(30) NOT NULL,
  `telefonousuario` int(10) NOT NULL,
  `edadusuario` int(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreusuario`, `apellidousuario`, `emailusuario`, `passwordusuario`, `telefonousuario`, `edadusuario`, `direccion`, `id`) VALUES
('Rafael', 'Cahun', 'pepecahun_10@hotmail.com', '123', 2147483647, 21, '', 6),
('Grecia', 'Basto', 'grecia@hotmail.com', '321', 2147483647, 21, 'Calle 47 #781B x 98 y 100', 9),
('Sebastian', 'Cardenas', 'sebas@gmai.com', '123', 0, 22, '', 10),
('prueba', 'usuario', 'prueba@hotmail.com', '123', 0, 0, '', 11),
('Rafael', 'Martin', 'rafaelcahun_28@hotmail.com', '54321', 2147483647, 21, 'Calle 47 781B x 98 y 100 Sol Caucel 3', 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
