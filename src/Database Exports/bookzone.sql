-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2023 pada 15.44
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

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
-- Struktur dari tabel `booknew`
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
-- Dumping data untuk tabel `booknew`
--

INSERT INTO `booknew` (`ISBN`, `title`, `author`, `cover`, `price`, `genre`, `description`) VALUES
(9781640857827, 'Get Over It!', 'Sally Livingstone', 'book-2.jpg', 449, 'Self-help', 'Are you tired of trying but failing to move past experiences and relationships that have caused hurt or confusion? Are you caught in a cycle of repeating old behaviors that don\'t work? Are you frustrated and ready for something to give? \"Get over it!\" is often perceived as a derogatory way to express frustration or exhaustion. However, this book flips the phrase on its head and offers a positive and encouraging message, making these the nicest mean words you\'ll ever hear or say. Author Sally Livingston uses her psychotherapy and ministry leadership experience to show how it is actually possible to interrupt the Stuck Cycle and work the steps to make substantial change. When you follow this process you will encounter freedom on the other side of your it.'),
(3452143, 'test3', 'me', 'book-2.jpg', 90, 'test2', 'this is a test run');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_info`
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
-- Dumping data untuk tabel `user_info`
--

INSERT INTO `user_info` (`userID`, `firstName`, `lastName`, `email`, `userName`, `userPassword`) VALUES
(1, 'Peko', 'Marisa', 'peashooteristhebest@gmail.com', 'PekoMarisa', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
