CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

DROP TABLE IF EXISTS `orditem`;

CREATE TABLE `orditem` (
  `ordno` varchar(20) NOT NULL,
  `seq` int(2) NOT NULL,
  `food` varchar(20) NOT NULL,
  `size` char(1) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(11) NOT NULL,
   PRIMARY KEY (`ordno`,`seq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
