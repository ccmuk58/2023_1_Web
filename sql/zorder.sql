CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

DROP TABLE IF EXISTS `cart`;


CREATE TABLE `zorder` (
  `ordno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `orddate` date NOT NULL,
  `address` varchar(80) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `delamt` int(11) NOT NULL,
  `total` int(11) NOT NULL,
 PRIMARY KEY(`ordno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
