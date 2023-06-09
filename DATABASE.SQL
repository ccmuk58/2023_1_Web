CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

/*Table structure for table `burgermenu` */

DROP TABLE IF EXISTS `burgermenu`;

CREATE TABLE `burgermenu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `singlemenu` int(11) NOT NULL,
  `setmenu` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `burgermenu` */

INSERT INTO `burgermenu`(`id`, `name`, `singlemenu`, `setmenu`, `photo`) VALUES 
(1, '불고기버거', 3000, 6000, '불고기버거.jpg'),
(2, '새우버거', 3000, 6000, '새우버거.jpg'),
(3, '치킨버거', 3000, 6000, '치킨버거.jpg'),
(4, '비건버거', 4000, 7000, '비건버거.jpg'),
(5, '대진버거', 5000, 9000, '대진버거.jpg'),
(6, '컴공버거', 6000, 10000, '컴공버거.jpg'),
(7, '군대리아', 5000, 6000, '군대리아.jpg');

/*Table structure for table `beveragemenu` */

DROP TABLE IF EXISTS `beveragemenu`;

CREATE TABLE `beveragemenu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `small` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `beveragemenu` */

INSERT INTO `beveragemenu`(`id`, `name`, `small`, `large`, `photo`) VALUES 
(1, '콜라', 1500, 2500, '콜라.jpg'),
(2, '사이다', 1500, 2500, '사이다.jpg'),
(3, '환타', 1500, 2500, '환타.jpg'),
(4, '바닐라 쉐이크', 2000, 3000, '바닐라쉐이크.jpg'),
(5, '딸기 쉐이크', 2000, 3000, '딸기쉐이크.jpg'),
(6, '아이스 아메리카노', 1800, 2800, '아이스아메리카노.jpg'),
(7, '오렌지 쥬스', 1000, 1500, '오렌지쥬스.jpg');

/*Table structure for table `snackmenu` */

DROP TABLE IF EXISTS `snackmenu`;

CREATE TABLE `snackmenu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `snackmenu` */

INSERT INTO `snackmenu`(`id`, `name`, `price`, `photo`) VALUES 
(1, '감자 튀김 M', 1500, '감튀M.jpg'),
(2, '감자 튀김 L', 2000, '감튀L.jpg'),
(3, '코울슬로', 1700, '코울슬로.jpg'),
(4, '콘슬로우', 1700, '콘슬로우.jpg'),
(5, '치킨텐더', 1800, '치킨텐더.jpg'),
(6, '해쉬브라운', 1600, '해쉬브라운.jpg');

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
  `time` time NOT NULL,
  PRIMARY KEY (`email`,`food`,`size`,`time`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

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

CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

DROP TABLE IF EXISTS `orditem`;

CREATE TABLE `orditem` (
  `ordno` varchar(20) NOT NULL,
  `seq` int(2) NOT NULL,
  `food` varchar(20) NOT NULL,
  `size` char(6) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(11) NOT NULL,
   PRIMARY KEY (`ordno`,`seq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE DATABASE IF NOT EXISTS `burger`;

USE `burger`;

DROP TABLE IF EXISTS `zorder`;


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
