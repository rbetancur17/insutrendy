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
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.categories: ~3 rows (aproximadamente)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id_categorie`, `code`, `description`, `name`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
	(8, '001', 'Zapatos y Bolsos', 'Zapatos y Bolsos', '2019-08-16', '2019-08-16', NULL, NULL),
	(9, '003', 'Vestuario', 'Vestuario', '2019-08-16', '2019-08-16', NULL, NULL),
	(10, '002', 'Accesorios', 'Accesorios', '2019-08-16', '2019-08-16', NULL, NULL),
	(11, '004', 'cuero', 'Cuero', '2019-08-16', '2019-08-16', NULL, NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.products
CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `id_subcategorie` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `outstanding` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `FK_products_subcategories` (`id_subcategorie`),
  CONSTRAINT `FK_products_subcategories` FOREIGN KEY (`id_subcategorie`) REFERENCES `subcategories` (`id_subcategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.products: ~7 rows (aproximadamente)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id_product`, `code`, `name`, `description`, `price`, `created_at`, `id_subcategorie`, `updated_at`, `deleted_at`, `status`, `outstanding`, `image`, `image2`, `image3`, `image4`) VALUES
	(3, '1', 'Suela de zapato', 'Suela de producto', 10000, '2019-08-16', 1, '2019-08-16', NULL, NULL, NULL, 'product3.jpg', NULL, NULL, NULL),
	(4, '02', 'Suela de zapato', 'suela de zapto', 5000, '2019-08-16', 1, '2019-08-16', NULL, NULL, NULL, 'boton3.jpg', NULL, NULL, NULL),
	(5, '3', 'Herraje de collar', 'Herraje de collar', 1000, '2019-08-16', 2, '2019-08-16', NULL, NULL, NULL, 'boton1.jpg', NULL, NULL, NULL),
	(9, '5', 'Camiseta china', 'Camiseta china', NULL, '2019-08-16', 4, '2019-08-16', NULL, NULL, NULL, '6.jpg', NULL, NULL, NULL),
	(10, '6', 'Jeans chinos', 'Jeans chinos', 5000, '2019-08-16', 5, '2019-08-16', NULL, NULL, NULL, '7.jpg', NULL, NULL, NULL),
	(11, '7', 'Vestido chino largo', 'Vestido chino largo', NULL, '2019-08-16', 6, '2019-08-16', NULL, NULL, NULL, '10.jpg', NULL, NULL, NULL),
	(12, '9', 'Vestido rojo chino', 'Vestido rojo chino', 1000, '2019-08-16', 6, '2019-08-16', NULL, NULL, NULL, '4.jpg', NULL, NULL, NULL),
	(13, '057', 'tela zapato cuero', NULL, 50000, '2019-08-16', 10, '2019-08-16', NULL, NULL, NULL, '3.jpg', NULL, NULL, NULL),
	(14, '10', 'Camiseta china sport', 'f', 20000, '2019-08-17', 4, '2019-08-17', NULL, NULL, NULL, '10-5c4ef04a9c24a-483212-500x500.jpg', NULL, NULL, NULL),
	(15, '11', 'Camiseta china futbol', 'Camiseta', 1000, '2019-08-17', 4, '2019-08-17', NULL, NULL, NULL, '11-5c4ef04a9c24a-483212-500x500.jpg', '11-camiseta-futbol-adidas-primera-equipacion-juventus-hombre-D_NQ_NP_973085-MLA29510380497_022019-Q.jpg', '11-camiseta-hobbies-percha-g.jpg', '11-descarga.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.subcategories
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id_subcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `id_categorie` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id_subcategorie`),
  KEY `FK_subcategories_categories` (`id_categorie`),
  CONSTRAINT `FK_subcategories_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.subcategories: ~8 rows (aproximadamente)
DELETE FROM `subcategories`;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` (`id_subcategorie`, `name`, `description`, `id_categorie`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Suelas', 'Suelas', 8, '001', '2019-08-16', '2019-08-16', NULL),
	(2, 'Herrajes', 'Herrajes', 8, '002', '2019-08-16', '2019-08-16', NULL),
	(3, 'Producto Terminado', 'Producto Terminado', 8, '003', '2019-08-16', '2019-08-16', NULL),
	(4, 'Camiseta', 'Camiseta', 9, '005', '2019-08-16', '2019-08-16', NULL),
	(5, 'Jeans', 'Jeans', 9, '006', '2019-08-16', '2019-08-16', NULL),
	(6, 'Vestido', 'Vestido', 9, '007', '2019-08-16', '2019-08-16', NULL),
	(7, 'Collares', 'collares', 10, '009', '2019-08-16', '2019-08-16', NULL),
	(8, 'Aretes', 'Aretes', 10, '010', '2019-08-16', '2019-08-16', NULL),
	(10, 'cuero de zaapato', 'zapato', 11, '011', '2019-08-16', '2019-08-16', NULL);
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;

-- Volcando estructura para tabla insutrendy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `last_name` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insutrendy.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
