-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2021 a las 03:07:03
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `propiedad_id` int(10) NOT NULL,
  `propiedad_titulo` varchar(150) NOT NULL,
  `tipo_anunciante` varchar(150) NOT NULL,
  `nombre_anunciante` varchar(200) NOT NULL,
  `tipo_inmueble` varchar(150) NOT NULL,
  `operacion` varchar(150) NOT NULL,
  `metros_cuadrados` int(5) NOT NULL,
  `ambientes` int(5) NOT NULL,
  `precio` float NOT NULL,
  `expensas` float NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `propiedad_img` varchar(200) NOT NULL,
  `cochera` tinyint(1) NOT NULL,
  `balcon` tinyint(1) NOT NULL,
  `mascotas` tinyint(1) NOT NULL,
  `niños` tinyint(1) NOT NULL,
  `otros_detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades_imagen`
--

CREATE TABLE `propiedades_imagen` (
  `image_url` text DEFAULT NULL,
  `propiedad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades_imagen`
--

INSERT INTO `propiedades_imagen` (`image_url`, `propiedad_id`) VALUES
('IMG-60504773c17d43.44342082.png', 1),
('IMG-605048d1759fb3.32242225.png', 2),
('IMG-6050491243ae51.59776758.png', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`propiedad_id`);

--
-- Indices de la tabla `propiedades_imagen`
--
ALTER TABLE `propiedades_imagen`
  ADD PRIMARY KEY (`propiedad_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `propiedad_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propiedades_imagen`
--
ALTER TABLE `propiedades_imagen`
  MODIFY `propiedad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
