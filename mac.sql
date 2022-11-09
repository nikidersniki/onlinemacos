-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 12:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mac`
--

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

CREATE TABLE `backgrounds` (
  `NAME` text NOT NULL,
  `URL` text NOT NULL,
  `ID` int(11) NOT NULL,
  `function` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`NAME`, `URL`, `ID`, `function`) VALUES
('10.10 Yosemite', '1.jpg', 1, '1()'),
('10.14 Mojave (Night)', '2.jpg', 2, '0'),
('10.14 Mojave (Day)', '3.jpg', 3, '0'),
('10.3 Panther', '4.png', 4, '0'),
('10.5 Leopard', '5.png', 5, ''),
('10.7 Lion', '6.png', 6, ''),
('10.9 Mavericks', '7.jpg', 7, ''),
('10.15 Catalina', '8.jpg', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NAME` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `BG` varchar(20) NOT NULL DEFAULT '1.jpg',
  `PWD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`NAME`, `ID`, `BG`, `PWD`) VALUES
('Niki', 1, '2.jpg', '1606'),
('Kira', 2, '1.jpg', '123'),
('nikidersniki', 3, '1.jpg', '1606'),
('test', 8, '6.png', '123'),
('Julius', 9, '1.jpg', 'Penis123'),
('test2', 10, '2.jpg', '1606');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
