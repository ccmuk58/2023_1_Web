SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE 'board' (
    'no' int(11) NOT NULL,
    'email' varchar(30) NOT NULL,
    'wdate' date NOT NULL,
    'title' varchar(60) NOT NULL,
    'content' text NOT NULL,
    'attachment' varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE 'board'
    ADD PRIMARY KEY ('no');

ALTER TABLE 'board'
    MODIFY 'no' int(11) NOT NULL AUTO_INCREMENT;
COMMIT;