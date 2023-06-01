-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 04:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`adminID`, `adminName`, `adminPassword`) VALUES
(410856057, 'TAN SHAN YU', 'abc1234');

-- --------------------------------------------------------

--
-- Table structure for table `booknew`
--

CREATE TABLE `booknew` (
  `ISBN` double NOT NULL,
  `title` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL,
  `cover` text NOT NULL,
  `price` int(10) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booknew`
--

INSERT INTO `booknew` (`ISBN`, `title`, `author`, `cover`, `price`, `genre`, `description`) VALUES
(9781640857827, 'Get Over It!', 'Sally Livingstone', 'book-2.jpg', 449, 'Self-help', 'Are you tired of trying but failing to move past experiences and relationships that have caused hurt or confusion? Are you caught in a cycle of repeating old behaviors that don\'t work? Are you frustrated and ready for something to give? \"Get over it!\" is often perceived as a derogatory way to express frustration or exhaustion. However, this book flips the phrase on its head and offers a positive and encouraging message, making these the nicest mean words you\'ll ever hear or say. Author Sally Livingston uses her psychotherapy and ministry leadership experience to show how it is actually possible to interrupt the Stuck Cycle and work the steps to make substantial change. When you follow this process you will encounter freedom on the other side of your it.'),
(3452143, 'test3', 'me', 'book-2.jpg', 90, 'test2', 'this is a test run');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userID`, `firstName`, `lastName`, `email`, `userName`, `userPassword`) VALUES
(3, 'Shan Yu', 'Tan', 'tanshanyu2004@gmail.com', 'shanyu', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
