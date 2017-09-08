-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 06:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

CREATE TABLE `facultyinfo` (
  `ID` int(11) NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` text COLLATE utf8_unicode_ci NOT NULL,
  `DEPARTMENT` text COLLATE utf8_unicode_ci NOT NULL,
  `HOD` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `SEM1` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM2` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM3` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM4` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM5` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM6` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM7` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SEM8` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SCORE` double DEFAULT NULL,
  `SCORE2` double NOT NULL,
  `SCORE3` double NOT NULL,
  `FINALSCORE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`ID`, `PASSWORD`, `NAME`, `DEPARTMENT`, `HOD`, `SEM1`, `SEM2`, `SEM3`, `SEM4`, `SEM5`, `SEM6`, `SEM7`, `SEM8`, `SCORE`, `SCORE2`, `SCORE3`, `FINALSCORE`) VALUES
(100, 'hvb', 'Rakesh', 'cse', 'NO', '1', '0', '0', '0', '0', '0', '0', '0', 0, 7.1428571428571, 7, 0),
(101, 'nva', 'Rupesh', 'ece', 'NO', '1', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0),
(102, 'ijnv', 'Gagan', 'ece', 'NO', '0', '0', '1', '0', '0', '0', '0', '0', 0.83333333333333, 0, 0, 0),
(103, 'hbf', 'Ram', 'cse', 'NO', '0', '1', '0', '0', '0', '0', '0', '0', 0, 0, 5, 0),
(104, 'ovn', 'Shekhar', 'me', 'NO', '0', '1', '0', '0', '0', '0', '0', '0', 0, 0, 3, 0),
(105, 'perb', 'Raghu', 'ece', 'NO', '0', '0', '1', '0', '0', '0', '0', '0', 0.75, 0, 0, 0),
(106, 'jhuy', 'Suresh', 'cse', 'NO', '0', '0', '0', '1', '0', '0', '0', '0', 0, 0, 0, 0),
(107, 'jnfa', 'Manoj', 'cse', 'NO', '0', '0', '0', '1', '0', '0', '0', '0', 0, 0, 0, 0),
(108, 'unve', 'Suraj', 'ece', 'NO', '0', '0', '0', '0', '1', '0', '0', '0', 2.8333333333333, 0, 0, 0),
(109, 'kmne', 'Prakash', 'me', 'NO', '0', '0', '0', '0', '1', '0', '0', '0', 1.1666666666667, 0, 0, 0),
(110, 'iuni', 'Lokesh', 'cse', 'NO', '0', '0', '0', '0', '0', '1', '0', '0', 0, 0, 0, 0),
(111, 'jne', 'Suresh', 'me', 'NO', '0', '0', '0', '0', '0', '1', '0', '0', 0, 0, 0, 0),
(112, 'inec', 'Akash', 'me', 'NO', '0', '0', '0', '0', '0', '0', '1', '0', 0, 0, 0, 0),
(113, 'iuh', 'Abhishek', 'cse', 'NO', '0', '0', '0', '0', '0', '0', '1', '0', 0, 0, 7, 0),
(114, 'heg', 'Rohit', 'me', 'NO', '0', '0', '0', '0', '0', '0', '0', '1', 0, 7.1428571428571, 1, 0),
(115, 'eryt', 'Alok', 'me', 'NO', '0', '0', '0', '0', '0', '0', '0', '1', 0, 0, 0, 0),
(116, 'pra', 'Pramod', 'cse', 'YES', '0', '0', '0', '0', '0', '0', '0', '1', 1.3333333333333, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `ID` int(11) NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` text COLLATE utf8_unicode_ci NOT NULL,
  `BRANCH` text COLLATE utf8_unicode_ci NOT NULL,
  `SEMESTER` int(2) NOT NULL,
  `ROLL_NO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`ID`, `PASSWORD`, `NAME`, `BRANCH`, `SEMESTER`, `ROLL_NO`) VALUES
(1001, 'abc', 'Prabhat', 'Cse', 5, 1533),
(1002, 'qwe', 'amit', 'Cse', 5, 1512),
(1003, 'ljh', 'sudhir', 'me', 1, 1401),
(1004, 'jvf', 'sumit', 'cse', 5, 1542),
(1005, 'hgd', 'sumer', 'ece', 1, 1402),
(1006, 'nsd', 'kishore', 'ece', 1, 1639),
(1007, 'hsd', 'ranjit', 'ece', 2, 1450),
(1008, 'jcnk', 'pahur', 'cse', 2, 1234),
(1009, 'anc', 'prabhjot', 'cse', 2, 1394),
(1010, 'jac', 'mohit', 'me', 3, 1334),
(1011, 'acc', 'rohit', 'me', 3, 1255),
(1012, 'jhj', 'mitesh', 'cse', 3, 1864),
(1013, 'ijvnq', 'shikhar', 'cse', 4, 1095),
(1015, 'anci', 'jasbeer', 'me', 4, 1934),
(1016, 'aoinv', 'jasdeep', 'cse', 6, 1209),
(1017, 'jhad', 'pramod', 'me', 4, 3412),
(1018, 'kmf', 'praveen', 'ece', 6, 1239),
(1019, 'kjvoq', 'ram', 'ece', 6, 1235),
(1020, 'kjb', 'sham', 'me', 7, 2345),
(1021, 'bvba', 'shubham', 'ece', 7, 3312),
(1022, 'oaio', 'gagan', 'cse', 7, 2312),
(1023, 'uva', 'abhishek', 'me', 8, 8723),
(1024, 'hbjf', 'akash', 'me', 8, 8371),
(1025, 'jnad', 'ankur', 'ece', 8, 2345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
