-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `student` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `ip` char(15) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

TRUNCATE `topics`;
INSERT INTO `topics` (`id`, `name`, `student`, `time`, `ip`) VALUES
(1,	'Téma',	NULL,	NULL,	NULL);

-- 2016-02-21 15:57:03
