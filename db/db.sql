-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table cms.post
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `img` varchar(200) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `users` int(11) NOT NULL DEFAULT 2,
  `order` int(11) NOT NULL DEFAULT 99,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms.post: ~0 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table cms.post_tags_rel
CREATE TABLE IF NOT EXISTS `post_tags_rel` (
  `id_post_tags_rel` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) DEFAULT NULL,
  `id_tags` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_post_tags_rel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms.post_tags_rel: ~6 rows (approximately)
/*!40000 ALTER TABLE `post_tags_rel` DISABLE KEYS */;
INSERT INTO `post_tags_rel` (`id_post_tags_rel`, `id_post`, `id_tags`, `priority`) VALUES
	(1, 1, 1, NULL),
	(2, 2, 2, NULL),
	(3, 3, 4, NULL),
	(4, 4, 5, NULL),
	(6, 3, 3, NULL),
	(7, 4, 3, NULL);
/*!40000 ALTER TABLE `post_tags_rel` ENABLE KEYS */;

-- Dumping structure for table cms.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `tags_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tags`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms.tags: ~6 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id_tags`, `tags_name`) VALUES
	(1, 'Blog'),
	(2, 'Project'),
	(3, 'Framework Tricks'),
	(4, 'Codeigniter'),
	(5, 'Laravel');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table cms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_users`, `username`, `password`, `email`) VALUES
	(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table cms.__ci_sessions
CREATE TABLE IF NOT EXISTS `__ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cms.__ci_sessions: ~1 rows (approximately)
/*!40000 ALTER TABLE `__ci_sessions` DISABLE KEYS */;
INSERT INTO `__ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('u2f77ggrhoe1mp903jcdljgd807j75rb', '::1', 1645582773, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353538323737333b),
	('hig676ek7ehofcq5vsqv46chhrupquqv', '::1', 1645582779, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634353538323737333b);
/*!40000 ALTER TABLE `__ci_sessions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
