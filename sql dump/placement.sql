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
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `jid` int(11) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `ctc` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD KEY `job_ck` (`jid`),
  ADD KEY `stud_fk` (`roll`),
  ADD KEY `company_fk3` (`cid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `company_fk3` FOREIGN KEY (`cid`) REFERENCES `company`.`company` (`cid`),
  ADD CONSTRAINT `job_ck` FOREIGN KEY (`jid`) REFERENCES `company`.`jobpost` (`jid`),
  ADD CONSTRAINT `stud_fk` FOREIGN KEY (`roll`) REFERENCES `student`.`student` (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
