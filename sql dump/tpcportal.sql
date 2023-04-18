-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:29 AM
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
-- Database: `tpcportal`
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `specialization` varchar(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `cpi` float NOT NULL,
  `passout` int(4) NOT NULL,
  `bio` text NOT NULL,
  `verify` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`name`, `dob`, `specialization`, `phone`, `email`, `password`, `gender`, `cpi`, `passout`, `bio`, `verify`) VALUES
('Martin', '2023-04-05', 'CSE', 2147483647, 'mkp@gmail.com', 'Abcd@1234', 'm', 9, 2023, 'sdsd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `alumniwork`
--

CREATE TABLE `alumniwork` (
  `email` varchar(100) NOT NULL,
  `company` text NOT NULL,
  `ctc` int(11) NOT NULL,
  `tenure` text NOT NULL,
  `area` text NOT NULL,
  `position` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumniwork`
--

INSERT INTO `alumniwork` (`email`, `company`, `ctc`, `tenure`, `area`, `position`, `location`) VALUES
('mkp@gmail.com', 'adobe', 55, 'sdds', 'sds', 'ddsd', 'sddsd'),
('mkp@gmail.com', 'adbofo', 878, 'sdad', 'asdsa', 'dasd', 'sdasds');

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
(5, 'admin', '2023-04-17', 'test 5');

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
(34, 4, 'Martin', 2147483647, 'mkp@gmail.com', 'sdsdsdsdds', ' , CSE , MNC , EEE , ME , MME', 1, 1, 'offline', 'Written', 88, '2023-04-15'),
(35, 4, 'Adobe2', 2147483647, 'mkp2@gmail.com', 'dev2', ' , AIDS , MNC', 7, 5, 'offline', 'Written', 99, '2023-04-17'),
(36, 4, 'adobe3', 2147483647, 'mkp3@gmail.com', 'sdsd', ' , CSE', 7, 4, 'offline', 'Written', 5, '2023-04-17');

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
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`jid`, `roll`, `cid`, `ctc`, `date`) VALUES
(34, '2101CS43', 4, 55, '2023-04-17');

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
('2101CS43', 'MartinP', '2023-04-01', 'CSE', 2147483647, 'mkp@gmail.com', '1234', 'm', 10, '                sdsdds                ', '                sdsdds                ', 1),
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
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `alumniwork`
--
ALTER TABLE `alumniwork`
  ADD KEY `email_fk1` (`email`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`);

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
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD KEY `job_ck` (`jid`),
  ADD KEY `stud_fk` (`roll`),
  ADD KEY `company_fk3` (`cid`);

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
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumniwork`
--
ALTER TABLE `alumniwork`
  ADD CONSTRAINT `email_fk1` FOREIGN KEY (`email`) REFERENCES `alumni` (`email`);

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
