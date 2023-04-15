-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 01:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `acad`
--

CREATE TABLE `acad` (
  `roll` varchar(10) NOT NULL,
  `10th` float NOT NULL,
  `11th` float NOT NULL,
  `12th` float NOT NULL,
  `csem` int(11) NOT NULL,
  `sem1` float DEFAULT NULL,
  `sem2` float DEFAULT NULL,
  `sem3` float DEFAULT NULL,
  `sem4` float DEFAULT NULL,
  `sem5` float DEFAULT NULL,
  `sem6` float DEFAULT NULL,
  `sem7` float DEFAULT NULL,
  `sem8` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acad`
--

INSERT INTO `acad` (`roll`, `10th`, `11th`, `12th`, `csem`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('2101CS43', 95, 95, 95, 8, 8, 8, 8, 8, 8, 7, 8, 8),
('2101CS69', 95, 95, 95, 8, 8, 8, 1, 8, 8, 7, 8, 8),
('2101ss44', 9, 9, 9, 8, 9, 9, 9, 9, 9, 9, 9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `aid` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`aid`, `name`, `date`, `msg`) VALUES
(1, 'admin', '2023-04-15', 'test 0'),
(2, 'admin', '2023-04-15', 'test 0'),
(3, 'admin2', '2023-04-07', 'test 1'),
(4, 'admin2', '2023-04-07', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `specialization` varchar(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `ccpi` float NOT NULL,
  `aoi` text NOT NULL,
  `bio` text NOT NULL,
  `verify` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `name`, `dob`, `specialization`, `phone`, `email`, `password`, `gender`, `ccpi`, `aoi`, `bio`, `verify`) VALUES
('2101CS43', 'Martin', '2023-04-01', 'CSE', 2147483647, 'mkp@gmail.com', '1234', 'm', 1, 'sdsdds', '                ada                ', 1),
('2101CS69', 'Sahil', '2023-03-29', 'CSE', 2147483647, 'skasdssk@gmail.com', 'Sahil@1234', 'm', 8, '                                sdsd                                ', '                                sdsd                                ', 1),
('2101ss44', 'asdss', '2023-04-05', 'CSE', 2147483647, 'mjp@gmail.com', 'Admin@1234', 'm', 9, '                                sdsdsdsd                                ', '                                sdsdsdsd                                ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad`
--
ALTER TABLE `acad`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
