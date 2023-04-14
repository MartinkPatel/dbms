-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 09:03 PM
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
('2101CS43', 95, 95, 95, 8, 8, 8, 8, 8, 8, 7, 8, 8);

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
('2101CS43', 'Martin', '2023-04-01', 'CSE', 2147483647, 'mkp@gmail.com', '1234', 'm', 8, 'ada', 'sdssd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad`
--
ALTER TABLE `acad`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
