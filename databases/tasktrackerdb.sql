# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: app.sharpspring.localhost.com (MySQL 5.5.5-10.1.7-MariaDB-1~trusty-log)
# Database: tasktracker
# Generation Time: 2017-11-01 17:37:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taskID` int(11) NOT NULL,
  `dateScheduled` date NOT NULL,
  `isCompleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `taskID` (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table frequencies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `frequencies`;

CREATE TABLE `frequencies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taskID` int(11) NOT NULL,
  `period` smallint(6) NOT NULL,
  `weekday` smallint(6) DEFAULT NULL,
  `position` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taskID` (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `isRepeatable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `emailAddress` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `token` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailAddress` (`emailAddress`),
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
