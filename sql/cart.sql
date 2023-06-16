CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `email` varchar(30) NOT NULL,
  `food` varchar(20) NOT NULL,
  `size` char(6) DEFAULT NULL,
  `qty` int(2) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
