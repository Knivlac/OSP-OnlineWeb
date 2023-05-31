
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `booknew` (
  `ISBN` int(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL,
  `cover` text NOT NULL,
  `price` int(10) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `booknew`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;


