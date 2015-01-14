CREATE DATABASE `bullcit1_racecal` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `bullcit1_racecal`;

CREATE TABLE IF NOT EXISTS `calendar` (
	`date` date DEFAULT NULL,
	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
