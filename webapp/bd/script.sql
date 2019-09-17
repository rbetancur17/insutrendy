-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para insutrendy
CREATE DATABASE IF NOT EXISTS `insutrendy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `insutrendy`;

-- Volcando estructura para tabla insutrendy.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.categories: ~10 rows (aproximadamente)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `code`, `description`, `name`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
	(8, '001', 'Zapatos y Bolsos\r\n                                       asdasdasd asdasdasd as dawd', 'Zapatos y Bolsos modiciado', '2019-08-16', '2019-09-17', NULL, 1),
	(9, '003', 'Vestuario', 'Vestuario', '2019-08-16', '2019-08-16', NULL, 1),
	(10, '002', 'Accesorios', 'Accesorios', '2019-08-16', '2019-08-16', NULL, 1),
	(11, '004', 'cuero', 'Cuero', '2019-08-16', '2019-08-16', NULL, 1),
	(12, '008', 'prueba', 'camilo', '2019-08-20', '2019-08-20', NULL, 1),
	(13, '001', 'Zapatos y Bolsos', 'Zapatos y Bolsos asd', '2019-08-30', '2019-08-30', NULL, 1),
	(14, '10000', 'Descripcitopjas', 'Cambio de ID', '2019-08-30', '2019-08-30', NULL, 1),
	(15, '44342', '42424', '442421', '2019-08-30', '2019-08-30', NULL, 1),
	(16, '057', 'asdasd', 'Categoria 1', '2019-08-30', '2019-08-30', NULL, 1),
	(17, '44342', '42424', 'asdasdasdasdasd', '2019-09-17', '2019-09-17', NULL, NULL),
	(18, '44342', '42424', 'asdasdasdasdfasdfasdfsadf', '2019-09-17', '2019-09-17', NULL, NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla insutrendy.migrations: ~0 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `image4` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_products_subcategories_child` (`id_subcategorie_child`),
  CONSTRAINT `FK_products_subcategories_child` FOREIGN KEY (`id_subcategorie_child`) REFERENCES `subcategories_child` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.products: ~2 rows (aproximadamente)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `code`, `name`, `description`, `price`, `created_at`, `id_subcategorie_child`, `updated_at`, `deleted_at`, `status`, `outstanding`, `image`, `image2`, `image3`, `image4`) VALUES
	(18, '001', 'Producto 1', 'asdasdasd', 100000, '2019-09-17', 2, '2019-09-17', NULL, NULL, NULL, '001-DaringBasicDungbeetle-small.gif', '001-camiseta-hobbies-percha-g.jpg', '001-b09a5f221e61dcaadbd10d16080a1022.jpg', NULL),
	(19, '097', 'Poroducto 2', 'asdasdasd', 500000000, '2019-09-17', 1, '2019-09-17', NULL, NULL, NULL, '097-cercade3.jpg', '097-derecha.jpg', '097-depositphotos_49376035-stock-photo-people-with-european-flags-on.jpg', '097-detrasde3.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.subcategories
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `id_categorie` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_subcategories_categories` (`id_categorie`),
  CONSTRAINT `FK_subcategories_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.subcategories: ~8 rows (aproximadamente)
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`id`, `name`, `description`, `id_categorie`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Suelas', 'Suelas', 8, '001', '2019-08-16', '2019-08-16', NULL),
	(2, 'Herrajes', 'Herrajes', 8, '002', '2019-08-16', '2019-08-16', NULL),
	(3, 'Producto Terminado', 'Producto Terminado', 8, '003', '2019-08-16', '2019-08-16', NULL),
	(4, 'Camiseta', 'Camiseta', 9, '005', '2019-08-16', '2019-08-16', NULL),
	(5, 'Jeans', 'Jeans', 9, '006', '2019-08-16', '2019-08-16', NULL),
	(6, 'Vestido', 'Vestido', 9, '007', '2019-08-16', '2019-08-16', NULL),
	(7, 'Collares', 'collares', 10, '009', '2019-08-16', '2019-08-16', NULL),
	(8, 'Aretes', 'Aretes', 10, '010', '2019-08-16', '2019-08-16', NULL),
	(10, 'cuero de zaapato', 'zapato', 11, '011', '2019-08-16', '2019-08-16', NULL),
	(11, 'sub camilo', 'prueba', 12, '012', '2019-08-20', '2019-08-20', NULL),
	(12, 'Cambio de ID SUB', 'asdasdasd', 14, '20000', '2019-08-30', '2019-08-30', NULL);
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.subcategories_child
CREATE TABLE IF NOT EXISTS `subcategories_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `id_subcategorie` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_subcategories_subcategorie` (`id_subcategorie`),
  CONSTRAINT `FK_subcategories_subcategorie` FOREIGN KEY (`id_subcategorie`) REFERENCES `subcategories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.subcategories_child: ~2 rows (aproximadamente)
DELETE FROM `subcategories_child`;
/*!40000 ALTER TABLE `subcategories_child` DISABLE KEYS */;
INSERT INTO `subcategories_child` (`id`, `name`, `description`, `id_subcategorie`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Subcategoria Nive 2', 'asdasdasdasdad', 7, '00010', '2019-09-17', '2019-09-17', NULL),
	(2, 'Nivel 2', 'deasdasdasd', 12, '45555', '2019-09-17', '2019-09-17', NULL);
/*!40000 ALTER TABLE `subcategories_child` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `bussinesstype` varchar(60) NOT NULL,
  `company` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.users: ~2 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `phone`, `email`, `country`, `city`, `bussinesstype`, `company`, `password`, `admin`) VALUES
	(1, 'administrador', '', 'director@insutrendy.com', 'China', '', 'Clothes', 'Insutrendy', '$2y$10$euqXFwNkEL6GmI6/ElVuCOBz9CJJRknWAfDJJPZ4ZDq60CDYIb5RW', 1),
	(5, 'Byron', '456', 'diseno@insutrendy.com', 'China', 'China', 'Fashion', 'Insutrendy', '$2y$10$DaHw9DqfriXvmJf1h3JKeOVPYRMwRoxRAsu0MUHW/t.tXXVPzraVS', 1),
	(6, 'Prueba', '27588902', 'guineo20@gmail.com', 'Colombia', 'Medellin', 'Telas', 'Esta', '$2y$10$XivvtZk5nSBOOPL40PuE4u3fdTBeGKNrJTrQvxABUuEx8lnmD5OAC', 2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
