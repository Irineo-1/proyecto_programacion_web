-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pfprogramacionweb
CREATE DATABASE IF NOT EXISTS `pfprogramacionweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `pfprogramacionweb`;

-- Dumping structure for table pfprogramacionweb.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pfprogramacionweb.categorias: ~5 rows (approximately)
INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
	(1, 'perifericos'),
	(2, 'computadoras'),
	(3, 'celulares'),
	(4, 'audio y video'),
	(5, 'imprecion y copiado');

-- Dumping structure for table pfprogramacionweb.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL DEFAULT '0',
  `precio` float NOT NULL DEFAULT 0,
  `id_categoria` int(11) NOT NULL DEFAULT 0,
  `existencia` int(11) NOT NULL DEFAULT 0,
  `imagen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pfprogramacionweb.productos: ~14 rows (approximately)
INSERT INTO `productos` (`id`, `nombre`, `precio`, `id_categoria`, `existencia`, `imagen`) VALUES
	(1, 'Laptop Lenovo ThinkPad L15 Gen 4 15.6', 19889, 2, 500, 'CP-LENOVO-21H4000TLM-e29065.webp'),
	(2, 'Laptop Lenovo Thinkpad X1 Yoga Gen 8 14', 45979, 2, 700, 'CP-LENOVO-21HRS16H00-fdf408.webp'),
	(3, 'Logitech Audífonos Gamer G332, Alámbrico, 2 Metros, 3.5mm, Negro/Rojo', 879, 1, 400, 'CP-LOGITECH-981-000755-1.jpg'),
	(4, 'Teclado Gamer Ocelot Gaming OGMK02 RGB, Teclado Mecánico, Switch Azul, Alámbrico, Negro (Español)', 375, 1, 900, 'CP-OCELOTGAMING-OGMK02-1.jpg'),
	(5, 'Mouse Gamer TechZone Óptico NASA NS-GM04, Alámbrico, USB, 6000DPI, Blanco/Rojo', 143, 1, 600, 'CP-TECHZONE-NS-GM04-4383e2.jpg'),
	(6, 'Xiaomi POCO M5s 6.43" Dual Sim, 256GB, 8GB RAM, Gris', 3229, 3, 1700, 'CP-XIAOMI-POCOM5S-8+256-GRIS-1.jpg'),
	(7, 'Apple iPhone 12, 256GB, Negro - Renewed by Apple', 7689, 3, 500, 'CP-APPLE-194252027899-RBA-24dc6f.jpg'),
	(8, 'Logitech Bocinas para Computadora Z207, Bluetooth, Inalámbrico, 2.0, 5W RMS, Negro', 1029, 4, 250, 'CP-LOGITECH-980-001294-1.jpg'),
	(9, 'Proyector Portátil Epson PowerLite E20, XGA (1024x768), 3400 Lúmenes, con Bocinas, Blanco', 8259, 4, 800, 'CP-EPSON-V11H981020-1.jpg'),
	(10, 'Ghia Smart TV LED G40ATV22 40", Full HD, Negro', 3219, 4, 500, 'CP-GHIA-G40ATV22-9492e8.jpg'),
	(11, 'Hisense Smart TV LED A6H 55", 4K Ultra HD, Negro', 5659, 4, 400, 'CP-HISENSE-55A6H-1612b6.jpg'),
	(12, 'Multifuncional Epson EcoTank L3250, Color, Inyección, Inalámbrico, Print/Scan/Copy', 3739, 5, 600, 'CP-EPSON-C11CJ67301-cd1814.jpg'),
	(13, 'Multifuncional Kyocera ECOSYS M2635dw, Blanco y Negro, Láser, Inalámbrico, Print/Scan/Copy/Fax', 5899, 5, 400, 'CP-KYOCERA-1102S22US0-1.jpg'),
	(14, 'HP LaserJet M111w, Blanco y Negro, Láser, Inalámbrico, Print', 2039, 5, 800, 'CP-HP-7MD68A-4a2b1e.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
