-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.36 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.2.0.4682
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for test_laravel
DROP DATABASE IF EXISTS `test_laravel`;
CREATE DATABASE IF NOT EXISTS `test_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test_laravel`;


-- Dumping structure for table test_laravel.laravels
DROP TABLE IF EXISTS `laravels`;
CREATE TABLE IF NOT EXISTS `laravels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table test_laravel.laravels: ~0 rows (approximately)
/*!40000 ALTER TABLE `laravels` DISABLE KEYS */;
INSERT INTO `laravels` (`id`, `f_name`, `l_name`, `phone`, `email`, `updated_at`, `created_at`) VALUES
	(21, 'utpalkant', 'kumar', '8898264396', 'utpalkantkumar3@gmail.com', '2017-04-21 06:32:19', '2017-04-21 06:32:19'),
	(22, 'sdasd', 'asd', '1234567890', 'utpalkantsingh2@gmail.com', '2017-04-21 06:32:57', '2017-04-21 06:32:57');
/*!40000 ALTER TABLE `laravels` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
