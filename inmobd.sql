-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2021 a las 19:08:43
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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
  `propiedad_titulo` varchar(150) DEFAULT NULL,
  `tipo_anunciante` varchar(150) DEFAULT NULL,
  `nombre_anunciante` varchar(200) DEFAULT NULL,
  `tipo_inmueble` varchar(150) DEFAULT NULL,
  `operacion` varchar(150) DEFAULT NULL,
  `metros_cuadrados` int(5) DEFAULT NULL,
  `ambientes` int(5) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `expensas` float DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `propiedad_img` varchar(200) DEFAULT NULL,
  `otros_detalles` text DEFAULT NULL,
  `cochera` varchar(255) NOT NULL,
  `balcon` varchar(255) NOT NULL,
  `ninos` varchar(255) NOT NULL,
  `mascotas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`propiedad_id`, `propiedad_titulo`, `tipo_anunciante`, `nombre_anunciante`, `tipo_inmueble`, `operacion`, `metros_cuadrados`, `ambientes`, `precio`, `expensas`, `direccion`, `propiedad_img`, `otros_detalles`, `cochera`, `balcon`, `ninos`, `mascotas`) VALUES
(2, '', 'Anunciante', '', 'Tipo de Inmueble', 'Operación', 0, 0, 0, 0, '', NULL, 'cochera,mascotas', 'Escribe aquí otros detalles', '', '', ''),
(3, 'Casad', '1', 'Carolina', '3', '1', 12, 2, 12, 12, 'A Guacurari 340', NULL, 'Escribe aquí otros detalles', '', '', '', ''),
(4, 'Casa', 'Dueño directo', 'Carolina', 'Casa', 'Alquiler', 12, 2, 12, 12, 'A Guacurari 340', NULL, 'Escribe aquí otros detallesdasdasd', '', '', '', ''),
(5, 'Casa', 'Dueño directo', 'Carolina', 'Casa', 'Alquiler', 12, 2, 12, 1, 'A Guacurari 340', NULL, 'Escribe aquí otros detalles', '', '', '', 'Se permiten mascotas'),
(6, 'Casa', 'Dueño directo', 'Carolina', 'Casa', 'Alquiler', 50, 0, 12, 1, 'A Guacurari 340', NULL, 'Escribe aquí otros detalles', 'No tiene cochera', 'No tiene balcón', 'Se permiten niños', 'No se permiten mascotas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`propiedad_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `propiedad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
