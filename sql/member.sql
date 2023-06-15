CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;


DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `email` varchar(30) NOT NULL,
  `name` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `telno` char(13) NOT NULL,
  `reddate` date NOT NULL,
   PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
