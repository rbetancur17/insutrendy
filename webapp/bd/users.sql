-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2019 a las 06:03:32
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `insutrendy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `phone` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '0',
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `bussinesstype` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `phone`, `email`, `country`, `city`, `bussinesstype`, `company`, `password`) VALUES
(1, 'Camilo', '', 'director@insutrendy.com', '', '', '', '', 'd40a9374446a25b6debc0920b04b6165'),
(2, 'Richard', '325414', 'rbetancur@misena.edu.co', 'Colombia', 'Medellin', 'Technology', 'Quarks', '123456789'),
(3, 'Richard', '325414', 'richard.betancur@gmail.com', 'Colombia', 'Medellin', 'Technology', 'Quarks', '123456789'),
(4, 'Stiven Betancur', '456132132', 'stiven.betancur@gmail.com', 'Colombia', 'Medellin', 'Technology', 'Reditos', '987654321'),
(5, 'Ana', '4532156', 'ana@gmail.com', 'Colombia', 'Medellin', 'Education', 'Mechas', '123456'),
(6, 'Ana', '4532156', 'ana2@gmail.com', 'Colombia', 'Medellin', 'Education', 'Mechas', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
