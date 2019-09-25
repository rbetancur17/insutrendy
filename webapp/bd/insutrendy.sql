-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2019 a las 00:38:51
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `id_subcategorie_child` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `outstanding` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `id_categorie` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories_child`
--

CREATE TABLE `subcategories_child` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `id_subcategorie` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `bussinesstype` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `country`, `city`, `bussinesstype`, `company`, `password`, `admin`) VALUES
(1, 'administrador', '', 'director@insutrendy.com', 'China', '', 'Clothes', 'Insutrendy', '$2y$10$euqXFwNkEL6GmI6/ElVuCOBz9CJJRknWAfDJJPZ4ZDq60CDYIb5RW', 1),
(5, 'Byron', '456', 'diseno@insutrendy.com', 'China', 'China', 'Fashion', 'Insutrendy', '$2y$10$DaHw9DqfriXvmJf1h3JKeOVPYRMwRoxRAsu0MUHW/t.tXXVPzraVS', 1),
(6, 'Prueba', '27588902', 'guineo20@gmail.com', 'Colombia', 'Medellin', 'Telas', 'Esta', '$2y$10$XivvtZk5nSBOOPL40PuE4u3fdTBeGKNrJTrQvxABUuEx8lnmD5OAC', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_subcategories_child` (`id_subcategorie_child`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_subcategories_categories` (`id_categorie`);

--
-- Indices de la tabla `subcategories_child`
--
ALTER TABLE `subcategories_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_subcategories_subcategorie` (`id_subcategorie`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategories_child`
--
ALTER TABLE `subcategories_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_subcategories_child` FOREIGN KEY (`id_subcategorie_child`) REFERENCES `subcategories_child` (`id`);

--
-- Filtros para la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `FK_subcategories_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `subcategories_child`
--
ALTER TABLE `subcategories_child`
  ADD CONSTRAINT `FK_subcategories_subcategorie` FOREIGN KEY (`id_subcategorie`) REFERENCES `subcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
