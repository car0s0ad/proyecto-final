-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 06:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmobd`

-- Table structure for table `propiedades`
CREATE TABLE `propiedades` (
  `propiedad_id` int(10) NOT NULL,
  `propiedad_titulo` varchar(150) DEFAULT NULL,
  `tipo_anunciante` varchar(150) DEFAULT NULL,
  `tipo_inmueble` varchar(150) DEFAULT NULL,
  `operacion` varchar(150) DEFAULT NULL,
  `metros_cuadrados` int(5) DEFAULT NULL,
  `ambientes` int(5) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `expensas` float DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `propiedad_img` varchar(200) DEFAULT NULL,
  `cochera` varchar(20) DEFAULT NULL,
  `balcon` varchar(20) DEFAULT NULL,
  `mascotas` varchar(20) DEFAULT NULL,
  `niños` varchar(20) DEFAULT NULL,
  `otros_detalles` text,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propiedades`
--

INSERT INTO `propiedades` (`propiedad_id`, `propiedad_titulo`, `tipo_anunciante`, `tipo_inmueble`, `operacion`, `metros_cuadrados`, `ambientes`, `precio`, `expensas`, `direccion`, `propiedad_img`, `cochera`,`balcon`, `mascotas`, `niños`, `otros_detalles`) VALUES
(1, 'Departamento cerca de la costanera', 'Dueño directo', 'Departamento', 'Alquiler', 30, 1, 15000, 1000, 'AV. Roca 1233', './recursos/DEPARTAMENTOS/depto-1-1.jpg', 'si', 'no', 'si', 'si', 'Muy luminoso',


-- --------------------------------------------------------

--
-- Table structure for table `property_image`

CREATE TABLE `propiedades_imagenes` (
  `propiedades_imagenes` varchar(200) DEFAULT NULL,
  `propiedad_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_image`
--

INSERT INTO `propiedades_imagenes` (`propiedades_imagenes`, `propiedad_id`) VALUES
('./recursos/DEPARTAMENTOS/depto-1-1.jpg', 1),
('./recursos/DEPARTAMENTOS/depto-1-2.jpg', 1),
('./recursos/DEPARTAMENTOS/depto-1-3.jpg', 1),
('./recursos/DEPARTAMENTOS/depto-1-4.jpg', 1),
('./recursos/DEPARTAMENTOS/depto-1-5.jpg', 1),

--
-- Indexes for dumped tables
--

-- Indexes for table `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`propiedad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `propiedad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
