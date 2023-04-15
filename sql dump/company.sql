-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 01:32 AM
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
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `jid` int(11) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`jid`, `roll`, `date`) VALUES
(34, '2101CS43', '2023-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(10) NOT NULL,
  `location` text NOT NULL,
  `password` text NOT NULL,
  `cbio` text NOT NULL,
  `size` int(11) NOT NULL,
  `ctc` float NOT NULL,
  `verify` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `email`, `phone`, `location`, `password`, `cbio`, `size`, `ctc`, `verify`) VALUES
(4, 'abcd', 'abcd@gmail.com', 2147483647, 'surat', 'Abcd@1234', 'sdsd', 54, 55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `position` text NOT NULL,
  `branch` text NOT NULL,
  `minq` int(11) NOT NULL,
  `minm` float NOT NULL,
  `moi` varchar(10) NOT NULL,
  `toi` varchar(10) NOT NULL,
  `ctc` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jid`, `cid`, `name`, `phone`, `email`, `position`, `branch`, `minq`, `minm`, `moi`, `toi`, `ctc`, `date`) VALUES
(34, 4, 'Martin', 2147483647, 'mkp@gmail.com', 'sdsdsdsdds', ' , CSE , MNC , EEE , ME , MME', 1, 1, 'offline', 'Written', 88, '2023-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD KEY `student_fk1` (`roll`),
  ADD KEY `job_post_fk` (`jid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `company_fk` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `job_post_fk` FOREIGN KEY (`jid`) REFERENCES `jobpost` (`jid`),
  ADD CONSTRAINT `student_fk1` FOREIGN KEY (`roll`) REFERENCES `student`.`student` (`roll`);

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
