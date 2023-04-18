-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 08:07 PM
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
('1701AI21', 87, 100, 90, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('1701EE71', 88, 88, 96, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('1701MN26', 87, 100, 90, 10, 10, 10, 10, 10, 10, 10, 10, 10),
('1701PH58', 94, 86, 85, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('1801MN53', 89, 100, 99, 10, 10, 10, 10, 10, 10, 10, 10, 10),
('1801MN54', 87, 86, 87, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('1901AI13', 99, 97, 86, 9, 9, 9, 9, 9, 9, 9, 9, 9),
('1901AI29', 85, 93, 86, 9, 9, 9, 9, 9, 9, 9, 9, 9),
('1901ME39', 88, 99, 93, 9, 9, 9, 9, 9, 9, 9, 9, 9),
('1901PH52', 98, 99, 97, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('2001EE75', 86, 87, 98, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('2001ME47', 92, 99, 88, 10, 10, 10, 10, 10, 10, 10, 10, 10),
('2001PH81', 94, 85, 99, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('2101CE13', 87, 93, 87, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('2101CS43', 95, 95, 95, 8, 8, 8, 8, 8, 8, 7, 8, 8),
('2101CS69', 95, 95, 95, 8, 8, 8, 1, 8, 8, 7, 8, 8),
('2101CS82', 96, 89, 88, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('2101MM65', 87, 100, 97, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('2101ss44', 9, 9, 9, 8, 9, 9, 9, 9, 9, 9, 9, 9),
('2201MN15', 97, 96, 89, 7, 7, 7, 7, 7, 7, 7, 7, 7),
('2201PH72', 87, 97, 95, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('2301CS19', 100, 98, 96, 10, 10, 10, 10, 10, 10, 10, 10, 10),
('2301EE64', 94, 86, 89, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('2501CS38', 85, 85, 85, 8, 8, 7.5, 8, 8, 8, 8, 8, 8),
('2501CS55', 95, 95, 95, 8, 9, 9, 7, 9, 9, 9, 9, 9),
('Aryan', 99, 99, 99, 8, 9, 9, 9, 9, 9, 9, 9, 9);

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
('kirtan', '2003-06-06', 'AIDS', 2147483647, 'kj2@gmail.com', 'Abcd@1234', 'm', 8.5, 2019, 'Happy!', 0),
('Martin', '2003-01-24', 'CSE', 2147483647, 'mkp3@gmail.com', 'Abcd@1234', 'm', 8.5, 2020, 'HAppy!', 0),
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
('mkp@gmail.com', 'adbofo', 878, 'sdad', 'asdsa', 'dasd', 'sdasds'),
('mkp3@gmail.com', 'Adobe Int', 55, '3 years', 'Banglore', 'Developer', 'city'),
('mkp3@gmail.com', 'Google', 80, '4 years', 'banglore', 'Senior Developer', 'Banglore'),
('kj2@gmail.com', 'IBm', 90, '4 years', 'Banglore', 'junior developer', 'city'),
('kj2@gmail.com', 'google', 95, '2 years', 'Banglore', 'Senior Developer', 'Banglore');

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
(5, 'admin', '2023-04-17', 'test 5'),
(6, 'admin', '2023-04-18', 'test message'),
(7, 'admin', '2023-04-18', 'test message 2');

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
(34, '2101CS43', '2023-04-18'),
(36, '2101CS43', '2023-04-18'),
(37, '1901AI29', '2024-01-29'),
(38, '1901AI29', '2022-05-02'),
(41, '1901AI29', '2022-11-10'),
(42, '1901PH52', '2021-07-09'),
(44, '2301CS19', '2022-03-09'),
(42, '1701PH58', '2021-08-07'),
(37, '1701AI21', '2024-02-15'),
(38, '1701AI21', '2022-05-15'),
(41, '1701AI21', '2022-12-07'),
(39, '2001ME47', '2022-12-18'),
(43, '2001ME47', '2022-01-13'),
(40, '2101CE13', '2024-02-10'),
(39, '1901ME39', '2022-12-18'),
(43, '1901ME39', '2022-01-18'),
(42, '2201PH72', '2021-06-20'),
(37, '1901AI13', '2024-02-27'),
(38, '1901AI13', '2022-05-22'),
(41, '1901AI13', '2022-12-18'),
(42, '2001PH81', '2021-06-12'),
(44, '2101CS82', '2022-02-13'),
(44, '2101CS43', '2023-04-18'),
(44, '2501CS55', '2023-04-18'),
(45, '2501CS55', '2023-04-18'),
(44, '2501CS38', '2023-04-18'),
(46, '2501CS38', '2023-04-18');

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
(4, 'abcd', 'abcd@gmail.com', 2147483647, 'surat', 'Abcd@1234', 'sdsd', 54, 55, 0),
(5, 'Nguyen PLC', 'williamsmarisa@example.net', 2147483647, 'Nataliemouth', 'Vr@x0WnZ^^', 'None media stage.', 10, 5.72, 1),
(6, 'Merritt Group', 'dgardner@example.org', 2147483647, 'Martinton', 'H)b5Jcviw3', 'End work gas white.', 100, 4.25, 1),
(7, 'Oliver Group', 'randallmary@example.com', 2147483647, 'Guerreromouth', '_XAW9ChXS@', 'Garden goal heavy.', 100, 8.45, 1),
(8, 'Walters, Williams and Jones', 'hodgeslindsay@example.org', 265878330, 'East Joseph', '2e5JUaAw(M', 'Employee every.', 10, 3.7, 1),
(9, 'Brewer-Graves', 'thomasmurray@example.net', 2147483647, 'Cindyport', '%qFG5l!iE7', 'Power society money.', 10, 6.75, 1),
(10, 'Cordova-Shah', 'daniel45@example.com', 66382525, 'North Brendan', '!2NqJ8N1Os', 'Develop film turn.', 10, 3.56, 1),
(11, 'Huffman-Burton', 'nancyhill@example.org', 2147483647, 'North Jill', 'I($2UlO8kC', 'Tend husband.', 100, 7.49, 1),
(12, 'Lewis-Thomas', 'rdelacruz@example.com', 2147483647, 'Lake Zachary', 'M+9Q9MKluy', 'Item during show.', 10, 6.32, 1),
(13, 'Adobe', 'adobe@gmail.com', 2147483647, 'Surat', 'Abcd@1234', 'Great Company', 50, 45, 0),
(14, 'Google', 'google@gmail.com', 2147483647, 'Surat', 'Abcd@1234', 'Google', 75, 50, 0),
(15, 'IBM', 'ibm@gmail.com', 2147483647, 'Surat', 'Abcd@1234', 'IBM', 50, 80, 0);

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
(36, 4, 'adobe3', 2147483647, 'mkp3@gmail.com', 'sdsd', ' , CSE', 7, 4, 'offline', 'Written', 5, '2023-04-17'),
(37, 5, 'Nguyen PLC', 2147483647, 'williamsmarisa@example.net', 'Medical sales representative', '  AIDS  ', 5, 6, 'offline', 'Interview', 44, '2023-12-31'),
(38, 6, 'Merritt Group', 2147483647, 'dgardner@example.org', 'Customer service manager', '  AIDS  ', 5, 6, 'offline', 'Interview', 90, '2022-04-03'),
(39, 7, 'Oliver Group', 2147483647, 'randallmary@example.com', 'Accountant, chartered certified', '  ME  ', 6, 8, 'online', 'Written', 79, '2022-11-20'),
(40, 8, 'Walters, Williams and Jones', 265878330, 'hodgeslindsay@example.org', 'Technical sales engineer', '  CE  ', 6, 6, 'offline', 'Written', 99, '2024-01-14'),
(41, 9, 'Brewer-Graves', 2147483647, 'thomasmurray@example.net', 'Product manager', '  AIDS  ', 5, 5, 'online', 'Interview', 56, '2022-11-04'),
(42, 10, 'Cordova-Shah', 66382525, 'daniel45@example.com', 'Academic librarian', '  PH  ', 5, 6, 'offline', 'Interview', 91, '2021-06-10'),
(43, 11, 'Huffman-Burton', 2147483647, 'nancyhill@example.org', 'Theme park manager', '  ME  ', 6, 7, 'offline', 'Interview', 37, '2021-11-26'),
(44, 12, 'Lewis-Thomas', 2147483647, 'rdelacruz@example.com', 'Retail manager', '  CSE  ', 6, 6, 'offline', 'Interview', 63, '2022-01-28'),
(45, 14, 'Google', 2147483647, 'google@gmail.com', 'Developer', ' , CSE , AIDS', 7, 7, 'online', 'Interview', 55, '2023-04-18'),
(46, 15, 'IBM', 2147483647, 'ibm@gmail.com', 'Developer', ' , CSE , AIDS', 7, 7, 'online', 'Interview', 85, '2023-04-18');

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
(37, '1901AI29', 5, 44, '2024-02-01'),
(42, '1901PH52', 10, 91, '2021-07-18'),
(44, '2301CS19', 12, 63, '2022-02-21'),
(42, '1701PH58', 10, 91, '2021-06-23'),
(37, '1701AI21', 5, 44, '2024-01-27'),
(39, '2001ME47', 7, 79, '2022-12-14'),
(40, '2101CE13', 8, 99, '2024-02-03'),
(39, '1901ME39', 7, 79, '2022-12-11'),
(42, '2201PH72', 10, 91, '2021-06-14'),
(37, '1901AI13', 5, 44, '2024-02-26'),
(42, '2001PH81', 10, 91, '2021-06-14'),
(44, '2101CS82', 12, 63, '2022-03-01'),
(44, '2501CS55', 12, 85, '2023-04-18'),
(46, '2501CS38', 15, 90, '2023-04-18');

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
('1701AI21', 'Suzanne', '1997-11-03', 'CSE', 2147483647, 'vbrown@example.org', '$4q8AfbxXu', 'm', 7, '                Including rather.                ', '                Including rather.                ', 1),
('1701EE71', 'Jerry Davis', '2002-02-01', 'EEE', 1368299976, 'reneeperez@example.net', '%52@2iXdmt', 'F', 8, 'Network manage.', 'Us window dog.', 1),
('1701MN26', 'Joseph Alvarado', '2002-01-03', 'MNC', 2147483647, 'ronaldholden@example.org', 'J*n1bT@tN$', 'F', 10, 'Usually cup need.', 'Market marriage now.', 1),
('1701PH58', 'Matthew Richardson', '2002-12-03', 'PH', 2147483647, 'stephanie84@example.net', '(z2AWNRni+', 'M', 7, 'Put decade determine.', 'Management resource.', 1),
('1801MN53', 'Jake King', '2003-07-23', 'MNC', 2147483647, 'wilkersonpamela@example.org', 'N_5GvGEsLO', 'M', 10, 'End bag.', 'Alone huge myself.', 1),
('1801MN54', 'Kathryn Burton', '1998-03-17', 'MNC', 2147483647, 'iandrews@example.net', '&N69LY#lK#', 'F', 8, 'Role will catch.', 'Discuss including.', 1),
('1901AI13', 'Robert Adams', '2003-04-09', 'AIDS', 2147483647, 'robinhernandez@example.net', '_6nEZe5Ll9', 'F', 9, 'Team recognize despite.', 'Success continue.', 1),
('1901AI29', 'Andrew Hernandez', '2004-01-30', 'AIDS', 491361794, 'karen74@example.net', 'u+$rVkO)_0', 'F', 9, 'Hold federal strong.', 'Kitchen yard law.', 1),
('1901ME39', 'Anthony Cox', '1999-12-24', 'ME', 1534026920, 'parsonsjennifer@example.com', 'a*)MT4Owb*', 'M', 9, 'Article perform air than.', 'Price think imagine.', 1),
('1901PH52', 'Michael Buckley', '2001-01-18', 'PH', 1939085547, 'porterashley@example.net', 'O9UYWuq(+w', 'M', 8, 'Line police her.', 'Run card without.', 1),
('2001EE75', 'Elizabeth Garza', '2002-01-08', 'EEE', 2147483647, 'javierlove@example.org', 'B4&2OA^bTq', 'M', 7, 'Gas rather help.', 'The special race.', 1),
('2001ME47', 'Sarah Park', '2005-01-06', 'ME', 2147483647, 'derek09@example.net', '*9X9YTw5Ss', 'F', 10, 'Describe way model.', 'Respond way help.', 1),
('2001PH81', 'Chloe Armstrong', '2000-02-06', 'PH', 2147483647, 'smithbarbara@example.net', 'r7ITGgr_!8', 'M', 7, 'Present least.', 'Within second if.', 1),
('2101CE13', 'Adrian Clark', '2004-10-16', 'CE', 2147483647, 'matthewwheeler@example.net', '(t2BLPAxLU', 'F', 8, 'Son leg.', 'Loss magazine board.', 1),
('2101CS43', 'MartinP', '2023-04-01', 'CSE', 2147483647, 'mkp@gmail.com', '1234', 'm', 10, '                sdsdds                ', '                sdsdds                ', 1),
('2101CS69', 'Sahil', '2023-03-29', 'CSE', 2147483647, 'skasdssk@gmail.com', 'Sahil@1234', 'm', 8, '                                sdsd                                ', '                                sdsd                                ', 1),
('2101CS82', 'Theresa Saunders', '1997-09-08', 'CSE', 2147483647, 'victoria76@example.org', 'Dr^0S3FjyO', 'M', 8, 'Often performance.', 'Do within.', 1),
('2101MM65', 'Jamie Smith', '2000-04-12', 'MME', 2147483647, 'thomasmary@example.net', 'U2iR*4Nb&z', 'F', 7, 'Positive type.', 'Machine American.', 1),
('2101ss44', 'asdss', '2023-04-05', 'CSE', 2147483647, 'mjp@gmail.com', 'Admin@1234', 'm', 9, '                                sdsdsdsd                                ', '                                sdsdsdsd                                ', 1),
('2201MN15', 'Michelle Johnson', '2004-09-12', 'MNC', 2147483647, 'cardenasdanielle@example.net', 'k9u13IUi(&', 'F', 7, 'Police reflect happy.', 'Whatever pull.', 1),
('2201PH72', 'Elizabeth Cox', '1997-12-31', 'PH', 2147483647, 'katherinehernandez@example.org', 'ok9JEltdN!', 'F', 8, 'And hot effort.', 'Third write either.', 1),
('2301CS19', 'Sheila Conley', '2002-04-05', 'CSE', 1736895315, 'dylanreyes@example.org', '8*5InE3p!#', 'F', 10, 'Technology only.', 'South cover tend.', 1),
('2301EE64', 'Charles Davies', '2000-03-05', 'EEE', 22560664, 'morgancorey@example.net', '84KUk9c9!9', 'M', 8, 'Role step certain.', 'Want right center.', 1),
('2501CS38', 'Kirtan', '2005-05-11', 'CSE', 2147483647, 'kj@gmail.com', 'Abcd@1234', 'm', 8, '                ML and AI                ', '                ML and AI                ', 1),
('2501CS55', 'Martin', '2005-01-13', 'CSE', 2147483647, 'mkp21@gmail.com', 'Abcd@1234', 'm', 9, '                ML  AND AI             ', '                ML                ', 1),
('Aryan', '2501AI26', '2005-01-13', 'CSE', 2147483647, 'akp@gmail.com', 'Abcd@1234', 'm', 9, 'ML', 'Hardworking Student', 0);

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
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  ADD CONSTRAINT `job_post_fk` FOREIGN KEY (`jid`) REFERENCES `jobpost` (`jid`);

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
