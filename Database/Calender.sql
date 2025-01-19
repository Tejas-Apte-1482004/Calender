-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `colab`
--

CREATE TABLE `colab` (
  `ID` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `groupname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colab`
--

INSERT INTO `colab` (`ID`, `username`, `groupname`) VALUES
(1, 'yash', 'test'),
(2, 'Tejas', 'test'),
(3, 'sample', 'test'),
(4, 'pratham', 'test'),
(5, 'pbl', 'test'),
(6, 'pratham', 'chandal chaukdi'),
(11, 'test', 'txt'),
(12, 'txt', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(1, 'abc', '123'),
(8, 'MANTAYE', 'manish99'),
(5, 'pbl', '123'),
(4, 'pratham', '123'),
(6, 'sahil', '123'),
(2, 'Tejas', 'Tejas@1234'),
(9, 'txt', '123'),
(3, 'yash', 'khope');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `ID` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`ID`, `username`, `date`, `description`) VALUES
(1, 'abc', '2024-04-17', 'This is a test'),
(2, 'yash', '2024-04-10', 'Is it'),
(3, 'yash', '2024-04-18', 'alert'),
(5, 'Tejas', '2024-08-14', 'Birthday'),
(16, 'Tejas', '2024-04-17', 'colab test'),
(17, 'sample', '2024-04-17', 'colab test'),
(18, 'Tejas', '2024-04-11', 'id reset'),
(19, 'yash', '2024-04-25', 'complete manual'),
(20, 'Tejas', '2024-04-19', 'alert'),
(21, 'yash', '2024-04-17', 'colab test'),
(22, 'Tejas', '2024-04-17', 'colab test'),
(23, 'sample', '2024-04-17', 'colab test'),
(24, 'pratham', '2024-04-21', 'hello'),
(25, 'yash', '2024-04-17', 'colab test'),
(26, 'Tejas', '2024-04-17', 'colab test'),
(27, 'sample', '2024-04-17', 'colab test'),
(28, 'yash', '2024-04-17', 'colab test'),
(29, 'Tejas', '2024-04-17', 'colab test'),
(30, 'sample', '2024-04-17', 'colab test'),
(31, 'pratham', '2024-04-17', 'colab test'),
(32, 'pbl', '2024-04-20', 'test'),
(33, 'yash', '2024-04-17', 'colab test'),
(34, 'Tejas', '2024-04-17', 'colab test'),
(35, 'sample', '2024-04-17', 'colab test'),
(36, 'pratham', '2024-04-17', 'colab test'),
(37, 'pbl', '2024-04-17', 'colab test'),
(38, 'sahil', '2024-04-21', 'birthday'),
(39, 'yash', '2024-04-24', 'Group HTML'),
(40, 'Tejas', '2024-04-24', 'Group HTML'),
(41, 'sample', '2024-04-24', 'Group HTML'),
(42, 'pratham', '2024-04-24', 'Group HTML'),
(43, 'pbl', '2024-04-24', 'Group HTML'),
(44, 'MANTAYE', '2024-04-13', 'semis'),
(45, 'MANTAYE', '2026-06-17', 'engineer'),
(46, 'txt', '2024-04-18', 'test'),
(47, 'yash', '2024-04-18', 'group test'),
(48, 'Tejas', '2024-04-18', 'group test'),
(49, 'sample', '2024-04-18', 'group test'),
(50, 'pratham', '2024-04-18', 'group test'),
(51, 'pbl', '2024-04-18', 'group test'),
(52, 'yash', '2024-04-18', 'tejas'),
(53, 'Tejas', '2024-04-18', 'tejas'),
(54, 'sample', '2024-04-18', 'tejas'),
(55, 'pratham', '2024-04-18', 'tejas'),
(56, 'pbl', '2024-04-18', 'tejas'),
(57, 'txt', '2024-04-18', 'tejas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colab`
--
ALTER TABLE `colab`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colab`
--
ALTER TABLE `colab`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
