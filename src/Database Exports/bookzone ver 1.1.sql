-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 02:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknew`
--

INSERT INTO `booknew` (`ISBN`, `title`, `author`, `cover`, `price`, `genre`, `description`) VALUES
(9781640857827, 'Get Over It!', 'Sally Livingstone', 'book-2.jpg', 449, 'Self-help', 'Are you tired of trying but failing to move past experiences and relationships that have caused hurt or confusion? Are you caught in a cycle of repeating old behaviors that don\'t work? Are you frustrated and ready for something to give? \"Get over it!\" is often perceived as a derogatory way to express frustration or exhaustion. However, this book flips the phrase on its head and offers a positive and encouraging message, making these the nicest mean words you\'ll ever hear or say. Author Sally Livingston uses her psychotherapy and ministry leadership experience to show how it is actually possible to interrupt the Stuck Cycle and work the steps to make substantial change. When you follow this process you will encounter freedom on the other side of your it.'),
(9798648699731, 'You Deserve This Sh!t', 'Jordan Tarver', 'book-1.jpg', 549, 'Self-help', 'Are you feeling lost, stuck, or confused? You may need a roadmap for the journey from where you are now to becoming the best version of yourself. In this authentic self-help book, Jordan Tarver, an introspective author and world traveler, guides you on a journey of self-discovery. A close call with death at the age of 19 and a soul-searching solo backpacking trip at 21 taught Jordan how to live. Since then, he\'\'s dedicated himself to living a life infused with meaning and empowering others to do the same.'),
(9798556440029, 'Get It Together', 'Kaitlyn Davis', 'book-3.jpg', 499, 'Self-help', 'Sometimes being human can be rough. Sometimes we make our human lives harder than they need to be. Welcome to the wonderful thing we all like to call life. I\'\'m not here to give you some huge scientific secret to life, but I am here to give you a little bit of my own insight on how to make your life be and feel a lot more satisfying. We, humans, go through a lot of shit, that’s inevitable but how we handle that shit is what gets us from one point to another. If you think about it, the actions you’ve taken so far are exactly what\'\'s lead you to this moment. If you feel like you’re stuck and want to be somewhere or something greater, here are some simple and straight to the point tips for you. Our whole lives we will work on getting it together and that’s entirely okay. Why not be open to some pointers and guidance to make that process easier.'),
(9798622218545, 'Speaking of God', 'David B. Ramsey', 'book-4.jpg', 199, 'Spirituality', 'An honest and penetrating examination of religious practices and beliefs, including belief in God, from former minister turned iconoclast D.B. Ramsey. After spending nearly ten years studying religion at prestigious academic institutions including Duke and Princeton and a decade as a Baptist minister, D.B. Ramsey experienced a crisis of faith and walked away from the ministry. In this candid, witty and stimulating book, Ramsey invokes biblical scholarship, human psychology, classic philosophy and modern literature — as well as common sense and his own personal experience — to critically examine religion. He traces the journey of his own doubt, from the foundation of Christianity to the very existence of God.');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userID`, `firstName`, `lastName`, `email`, `userName`, `userPassword`) VALUES
(1, 'Shan Yu', 'Tan', 'tanshanyu2004@gmail.com', 'shanyu', 'abc');

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
