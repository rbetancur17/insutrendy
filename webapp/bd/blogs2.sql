-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-09-2019 a las 00:28:16
-- Versión del servidor: 5.7.27
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ihfqyemy_insutrendy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(60) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `fecha`, `content`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Post Septiembre', '2019-09-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil culpa, pariatur porro eum. Consequatur quia molestias eligendi eveniet perferendis porro sed ratione amet earum autem, consectetur nisi quisquam, in quos.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil culpa, pariatur porro eum. Consequatur quia molestias eligendi eveniet perferendis porro sed ratione amet earum autem, consectetur nisi quisquam, in quos.', '-Warrior.png', '2019-09-04', '2019-09-04', NULL),
(2, 'MAISON MESA DEJA BOQUIABIERTO A SU PÚBLICO EN LA MBFW', '2019-09-04', 'La Edición pasa de MBFWM tuve la oportunidad de acudir al desfile de la nueva colección del diseñador Maison Mesa  en el Teatro Circo Price gracias a la Escuela de moda Elle.\r\n\r\nNo hay palabras para describir la creatividad de Juan Carlos Mesa, que nunca deja de sorprender a un público cada vez más extenso.El evento no dejo indiferente a nadie gracias a la interpretación de la actriz Mariola Fuentes. El modista se basó en Las Cuatro Estaciones de del Fénix para presentar las prendas de primavera, verano, otoño e invierno. Creo un auténtico espectáculo en el que la protagonista se entremezclaba con las demás modelos para contar una historia.\r\n\r\n\r\n\r\nEn la primera parte los tonos blancos y claros fueron los protagonistas representando la pureza. En la segunda parte, nos traslada a los años 30, para presentarnos prendas de baño llenas de color y alegría. Con la llegada del otoño, Maison Mesa presenta a una mujer fuerte y con determinación con prendas masculinas con estampados y color, y que se rebelan contra un mundo de hombres.\r\n\r\nEl desfile finalizó con las prendas de invierno, que las modelos presentaron con una elegancia particular, prendas de fiesta y de cóctel con grandes volúmenes y repletas de lentejuelas y otros tejidos que dotaban de una personalidad propia a la marca.\r\n\r\n\r\n\r\nTodos aplaudían a la propuesta del diseñador que decidió arriesgar y huir de lo neutral mezclando el arte con la moda y haciendo de ellas una auténtica joya.\r\n\r\nElegante, conceptual y único, así describiría no solo al desfile, sino también al espíritu de la marca, al diseñador y a las mujeres que visten las prendas de Maison Mesa.\r\n\r\nLucía López Castro\r\n\r\nMáster de Marketing de Moda', '-01.jpg', '2019-09-04', '2019-09-04', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
