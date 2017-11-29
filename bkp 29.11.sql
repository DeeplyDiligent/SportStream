-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.18-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sportstream
CREATE DATABASE IF NOT EXISTS `sportstream` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sportstream`;

-- Dumping structure for table sportstream.countrylist
CREATE TABLE IF NOT EXISTS `countrylist` (
  `Country` varchar(50) NOT NULL,
  `Flag` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Country`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sportstream.countrylist: ~4 rows (approximately)
/*!40000 ALTER TABLE `countrylist` DISABLE KEYS */;
INSERT INTO `countrylist` (`Country`, `Flag`) VALUES
	('Australia', NULL),
	('Brazil', NULL),
	('Canada', NULL),
	('USA', NULL);
/*!40000 ALTER TABLE `countrylist` ENABLE KEYS */;

-- Dumping structure for table sportstream.googleusers
CREATE TABLE IF NOT EXISTS `googleusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table sportstream.googleusers: ~0 rows (approximately)
/*!40000 ALTER TABLE `googleusers` DISABLE KEYS */;
/*!40000 ALTER TABLE `googleusers` ENABLE KEYS */;

-- Dumping structure for table sportstream.sportsurls
CREATE TABLE IF NOT EXISTS `sportsurls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Country` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Sport` varchar(50) DEFAULT NULL,
  `Start` datetime DEFAULT NULL,
  `End` datetime DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dumping data for table sportstream.sportsurls: ~14 rows (approximately)
/*!40000 ALTER TABLE `sportsurls` DISABLE KEYS */;
INSERT INTO `sportsurls` (`id`, `Country`, `State`, `Sport`, `Start`, `End`, `Description`, `url`, `thumbnail`) VALUES
	(11, 'Australia', 'VIC', 'AFL', '2017-10-18 19:09:30', '2017-10-18 19:09:31', 'Swans vs. Bombers', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(12, 'USA', 'NY', 'NBA', '2017-10-18 19:10:15', '2017-10-18 19:10:15', 'Lakers vs. Golden State Warriors', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(13, 'Canada', 'Qubec', 'Hockey', '2017-10-18 19:11:26', '2017-10-18 19:11:27', 'Hurricanes vs. Oilers', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(14, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: x vs Y', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(15, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: b vs c', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(16, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: c vs d', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(17, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: e vs f', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(18, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: g vs h', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(19, 'Australia', 'VIC\r\n', 'Tennis', '2017-11-29 10:54:33', '2017-11-29 10:54:34', 'Australian Open: h vs i', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(35, 'Australia', 'VIC', 'AFL', '2017-10-18 19:09:30', '2017-10-18 19:09:31', 'team A vs. Team B', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(36, 'Australia', 'VIC', 'AFL', '2017-10-18 19:09:30', '2017-10-18 19:09:31', 'Team B vs. Team C', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(40, 'Canada', 'Qubec', 'Hockey', '2017-10-18 19:11:26', '2017-10-18 19:11:27', 'CanA vs CanB', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(41, 'Canada', 'Qubec', 'Hockey', '2017-10-18 19:11:26', '2017-10-18 19:11:27', 'CanC vs. CanA', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg'),
	(42, 'Canada', 'Qubec', 'Hockey', '2017-10-18 19:11:26', '2017-10-18 19:11:27', 'CanD vs. CanB', 'https://samples.mplayerhq.hu/V-codecs/h264/NeroAVC.mp4', 'http://www.sportbizforum.com/images/slajdy/baner-STARTUP.jpg');
/*!40000 ALTER TABLE `sportsurls` ENABLE KEYS */;

-- Dumping structure for table sportstream.states
CREATE TABLE IF NOT EXISTS `states` (
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`State`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sportstream.states: ~0 rows (approximately)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Dumping structure for table sportstream.users
CREATE TABLE IF NOT EXISTS `users` (
  `emailaddress` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  UNIQUE KEY `emailaddress` (`emailaddress`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sportstream.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`emailaddress`, `password`) VALUES
	('deep@live.com.au', 'mypass123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
