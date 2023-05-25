-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 06:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asdrtms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(50) NOT NULL,
  `week` int(10) NOT NULL,
  `mondaydate` date DEFAULT '2023-07-20',
  `monday` varchar(20) NOT NULL DEFAULT 'na',
  `mondathours` float NOT NULL DEFAULT 0,
  `ma2` varchar(10) NOT NULL DEFAULT 'na',
  `mh2` float NOT NULL DEFAULT 0,
  `ma3` varchar(10) NOT NULL DEFAULT 'na',
  `mh3` float NOT NULL DEFAULT 0,
  `ma4` varchar(10) NOT NULL DEFAULT 'na',
  `mh4` float NOT NULL DEFAULT 0,
  `ma5` varchar(10) NOT NULL DEFAULT 'na',
  `mh5` float NOT NULL DEFAULT 0,
  `ma6` varchar(10) NOT NULL DEFAULT 'na',
  `mh6` float NOT NULL DEFAULT 0,
  `ma7` varchar(10) NOT NULL DEFAULT 'na',
  `mh7` float NOT NULL DEFAULT 0,
  `ma8` varchar(10) NOT NULL DEFAULT 'na',
  `mh8` float NOT NULL DEFAULT 0,
  `tuesdaydate` date NOT NULL DEFAULT '2023-07-20',
  `tuesday` varchar(20) NOT NULL DEFAULT 'na',
  `tuesdayhourse` float NOT NULL DEFAULT 0,
  `ta2` varchar(5) NOT NULL DEFAULT 'na',
  `tah2` float NOT NULL DEFAULT 0,
  `ta3` varchar(5) NOT NULL DEFAULT 'na',
  `tah3` float NOT NULL DEFAULT 0,
  `ta4` varchar(5) NOT NULL DEFAULT 'na',
  `tah4` float NOT NULL DEFAULT 0,
  `ta5` varchar(5) NOT NULL DEFAULT 'na',
  `tah5` float NOT NULL DEFAULT 0,
  `ta6` varchar(5) NOT NULL DEFAULT 'na',
  `tah6` float NOT NULL DEFAULT 0,
  `ta7` varchar(5) NOT NULL DEFAULT 'na',
  `tah7` float NOT NULL DEFAULT 0,
  `ta8` varchar(5) NOT NULL DEFAULT 'na',
  `tah8` float NOT NULL DEFAULT 0,
  `wednesdaydate` date NOT NULL DEFAULT '2023-07-20',
  `wednesday` varchar(20) NOT NULL DEFAULT 'na',
  `wednesdayhourse` float NOT NULL DEFAULT 0,
  `w2` varchar(5) NOT NULL DEFAULT 'na',
  `wh2` float NOT NULL DEFAULT 0,
  `w3` varchar(5) NOT NULL DEFAULT 'na',
  `wh3` float NOT NULL DEFAULT 0,
  `w4` varchar(5) NOT NULL DEFAULT 'na',
  `wh4` float NOT NULL DEFAULT 0,
  `w5` varchar(5) NOT NULL DEFAULT 'na',
  `wh5` float NOT NULL DEFAULT 0,
  `w6` varchar(5) NOT NULL DEFAULT 'na',
  `wh6` float NOT NULL DEFAULT 0,
  `w7` varchar(5) NOT NULL DEFAULT 'na',
  `wh7` float NOT NULL DEFAULT 0,
  `w8` varchar(5) NOT NULL DEFAULT 'na',
  `wh8` float NOT NULL DEFAULT 0,
  `thursdaydate` date NOT NULL DEFAULT '2023-07-20',
  `thursday` varchar(20) NOT NULL DEFAULT 'na',
  `thursdaytourse` float NOT NULL DEFAULT 0,
  `th2` varchar(5) NOT NULL DEFAULT 'na',
  `thh2` float NOT NULL DEFAULT 0,
  `th3` varchar(5) NOT NULL DEFAULT 'na',
  `thh3` float NOT NULL DEFAULT 0,
  `th4` varchar(5) NOT NULL DEFAULT 'na',
  `thh4` float NOT NULL DEFAULT 0,
  `th5` varchar(5) NOT NULL DEFAULT 'na',
  `thh5` float NOT NULL DEFAULT 0,
  `th6` varchar(5) NOT NULL DEFAULT 'na',
  `thh6` float NOT NULL DEFAULT 0,
  `th7` varchar(5) NOT NULL DEFAULT 'na',
  `thh7` float NOT NULL DEFAULT 0,
  `th8` varchar(5) NOT NULL DEFAULT 'na',
  `thh8` float NOT NULL DEFAULT 0,
  `fridaydate` date NOT NULL DEFAULT '2023-07-20',
  `friday` varchar(20) NOT NULL DEFAULT 'na',
  `fridayhourse` float NOT NULL DEFAULT 0,
  `f2` varchar(5) NOT NULL DEFAULT 'na',
  `fh2` float NOT NULL DEFAULT 0,
  `f3` varchar(5) NOT NULL DEFAULT 'na',
  `fh3` float NOT NULL DEFAULT 0,
  `f4` varchar(5) NOT NULL DEFAULT 'na',
  `fh4` float NOT NULL DEFAULT 0,
  `f5` varchar(5) NOT NULL DEFAULT 'na',
  `fh5` float NOT NULL DEFAULT 0,
  `f6` varchar(5) NOT NULL DEFAULT 'na',
  `fh6` float NOT NULL DEFAULT 0,
  `f7` varchar(5) NOT NULL DEFAULT 'na',
  `fh7` float NOT NULL DEFAULT 0,
  `f8` varchar(5) NOT NULL DEFAULT 'na',
  `fh8` float NOT NULL DEFAULT 0,
  `status` int(2) NOT NULL DEFAULT 0,
  `accept` int(5) NOT NULL DEFAULT 0,
  `weekcreatedornot` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `week`, `mondaydate`, `monday`, `mondathours`, `ma2`, `mh2`, `ma3`, `mh3`, `ma4`, `mh4`, `ma5`, `mh5`, `ma6`, `mh6`, `ma7`, `mh7`, `ma8`, `mh8`, `tuesdaydate`, `tuesday`, `tuesdayhourse`, `ta2`, `tah2`, `ta3`, `tah3`, `ta4`, `tah4`, `ta5`, `tah5`, `ta6`, `tah6`, `ta7`, `tah7`, `ta8`, `tah8`, `wednesdaydate`, `wednesday`, `wednesdayhourse`, `w2`, `wh2`, `w3`, `wh3`, `w4`, `wh4`, `w5`, `wh5`, `w6`, `wh6`, `w7`, `wh7`, `w8`, `wh8`, `thursdaydate`, `thursday`, `thursdaytourse`, `th2`, `thh2`, `th3`, `thh3`, `th4`, `thh4`, `th5`, `thh5`, `th6`, `thh6`, `th7`, `thh7`, `th8`, `thh8`, `fridaydate`, `friday`, `fridayhourse`, `f2`, `fh2`, `f3`, `fh3`, `f4`, `fh4`, `f5`, `fh5`, `f6`, `fh6`, `f7`, `fh7`, `f8`, `fh8`, `status`, `accept`, `weekcreatedornot`) VALUES
(1002, 1, '2023-01-16', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-17', 'A2', 5, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-18', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-19', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-20', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 0, 0, 0),
(1002, 2, '2023-01-23', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-24', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-25', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-26', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-27', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1002, 3, '2023-01-30', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-31', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-01', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-02', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-03', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1002, 4, '2023-02-06', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-07', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-08', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-09', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-10', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1002, 1, '2023-01-16', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-17', 'A2', 5, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-18', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-19', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-20', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 0, 0, 0),
(1002, 2, '2023-01-23', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-24', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-25', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-26', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-27', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1002, 3, '2023-01-30', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-01-31', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-01', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-02', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-03', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1002, 4, '2023-02-06', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-07', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-08', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-09', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-02-10', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 1, '2023-04-24', 'NA', 4, 'NA', 5, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-25', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-26', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-27', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-28', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 2, '2023-05-01', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2023-05-02', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2023-05-03', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2023-05-04', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2023-05-05', '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 1, 1, 0),
(2001, 3, '2023-05-08', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-09', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-10', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-11', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-12', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 4, '2023-05-15', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-16', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-17', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-18', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-19', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 5, '2023-05-22', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-23', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-24', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-25', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-26', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 6, '2023-05-29', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-30', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-05-31', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-01', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-02', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(2001, 7, '2023-06-05', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-06', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-07', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-08', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-06-09', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 1, 0),
(1031, 1, '2023-04-03', 'NA', 7, 'NA', 6, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-04', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-05', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-06', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, '2023-04-07', 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 'NA', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `activitycodes`
--

CREATE TABLE `activitycodes` (
  `activitycode` varchar(20) NOT NULL,
  `activitytitle` varchar(50) NOT NULL,
  `activitydesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `emp_id` int(4) NOT NULL,
  `date` date NOT NULL,
  `intime` time NOT NULL,
  `outtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`emp_id`, `date`, `intime`, `outtime`) VALUES
(3, '2023-04-12', '12:58:16', '2013-01-06'),
(0, '2023-04-12', '13:01:08', '2013-01-10'),
(3, '2023-04-12', '12:58:16', '2013-01-06'),
(0, '2023-04-12', '13:01:08', '2013-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `empattend`
--

CREATE TABLE `empattend` (
  `empid` int(11) NOT NULL,
  `intime` int(11) NOT NULL DEFAULT current_timestamp(),
  `intime_mannual` int(11) NOT NULL,
  `outtime` int(11) NOT NULL DEFAULT current_timestamp(),
  `outtime_mannual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empintime`
--

CREATE TABLE `empintime` (
  `srno` int(100) NOT NULL,
  `empid` int(100) NOT NULL,
  `intime` timestamp NOT NULL DEFAULT current_timestamp(),
  `manuallyout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empid` int(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `empusername` varchar(100) NOT NULL,
  `emppassword` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `companyemailid` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `emptype` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `addingDateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `empname`, `empusername`, `emppassword`, `usertype`, `emailid`, `contactno`, `department`, `position`, `companyemailid`, `doj`, `emptype`, `gender`, `dob`, `address`, `status`, `addingDateTime`, `code`) VALUES
(1001, 'Shubham Shinde', 'shubham123', 'shubham@123', 'Manager', 'shubhamshinde9530@gmail.com', '7774882080', 'Development', 'Software Developemen', 'shubhamshinde@asdrinfotech.com', '2023-01-10', 'Intern', 'Male', '1999-07-20', 'Pune', 'Active', '2023-04-19 09:42:47', 0),
(1002, 'Komal Jagdale', 'komal123', 'komal@123', 'Employee', 'komaljagdale2028@gmail.com', '708253028', 'Designing', 'UI UX Designer', 'komaljagdale@asdrinfotech.com', '2023-01-11', 'employee', 'female', '1999-10-28', 'Pune', 'active', '2023-04-19 09:47:25', 0),
(1031, 'Rohan Shinde', 'shubham12', 'shubham@12', 'Employee', 'rohan@gmail.com', '77777', 'developer', 'Software Developer', 'rohan@gmail.com', '2023-04-06', 'employee', 'male', '2023-04-06', 'pune', 'active', '2023-04-20 04:36:39', 0),
(2001, 'abc', 'shubham1234', 'shubham@1234', 'Employee', 'abc@gmail.com', '111', 'd', 'po', 's@gmail.com', '2023-04-27', 'intern', 'female', '2023-04-26', 'h', 'active', '2023-04-19 18:27:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empouttime`
--

CREATE TABLE `empouttime` (
  `srno` int(100) NOT NULL,
  `empid` int(100) NOT NULL,
  `outtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `manuallyout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empwork`
--

CREATE TABLE `empwork` (
  `date` date NOT NULL,
  `empid` int(100) NOT NULL,
  `empname` varchar(30) NOT NULL,
  `project` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forecast`
--

CREATE TABLE `forecast` (
  `empidforforecaste` int(150) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `j1` int(5) NOT NULL DEFAULT 0,
  `ja2` int(5) NOT NULL DEFAULT 0,
  `ja3` int(5) NOT NULL DEFAULT 0,
  `ja4` int(5) NOT NULL DEFAULT 0,
  `ja5` int(5) NOT NULL DEFAULT 0,
  `fa1` int(5) NOT NULL DEFAULT 0,
  `fa2` int(5) NOT NULL DEFAULT 0,
  `fa3` int(5) NOT NULL DEFAULT 0,
  `fa4` int(5) NOT NULL DEFAULT 0,
  `ma1` int(5) NOT NULL DEFAULT 0,
  `ma2` int(5) NOT NULL DEFAULT 0,
  `ma3` int(5) NOT NULL DEFAULT 0,
  `ma4` int(5) NOT NULL DEFAULT 0,
  `ap1` int(5) NOT NULL DEFAULT 0,
  `ap2` int(5) NOT NULL DEFAULT 0,
  `ap3` int(5) NOT NULL DEFAULT 0,
  `ap4` int(5) NOT NULL DEFAULT 0,
  `ap5` int(5) NOT NULL DEFAULT 0,
  `my1` int(5) NOT NULL DEFAULT 0,
  `my2` int(5) NOT NULL DEFAULT 0,
  `my3` int(5) NOT NULL DEFAULT 0,
  `my4` int(5) NOT NULL DEFAULT 0,
  `jn1` int(5) NOT NULL DEFAULT 0,
  `jn2` int(5) NOT NULL DEFAULT 0,
  `jn3` int(5) NOT NULL DEFAULT 0,
  `jn4` int(5) NOT NULL DEFAULT 0,
  `jl1` int(5) NOT NULL DEFAULT 0,
  `jl2` int(5) NOT NULL DEFAULT 0,
  `jl3` int(5) NOT NULL DEFAULT 0,
  `jl4` int(5) NOT NULL DEFAULT 0,
  `jl5` int(5) NOT NULL DEFAULT 0,
  `au1` int(5) NOT NULL DEFAULT 0,
  `au2` int(5) NOT NULL DEFAULT 0,
  `au3` int(5) NOT NULL DEFAULT 0,
  `au4` int(5) NOT NULL DEFAULT 0,
  `sp1` int(5) NOT NULL DEFAULT 0,
  `sp2` int(5) NOT NULL DEFAULT 0,
  `sp3` int(5) NOT NULL DEFAULT 0,
  `sp4` int(5) NOT NULL DEFAULT 0,
  `ot1` int(5) NOT NULL DEFAULT 0,
  `ot2` int(5) NOT NULL DEFAULT 0,
  `ot3` int(5) NOT NULL DEFAULT 0,
  `ot4` int(5) NOT NULL DEFAULT 0,
  `ot5` int(5) NOT NULL DEFAULT 0,
  `no1` int(5) NOT NULL DEFAULT 0,
  `no2` int(5) NOT NULL DEFAULT 0,
  `no3` int(5) NOT NULL DEFAULT 0,
  `no4` int(5) NOT NULL DEFAULT 0,
  `dc1` int(5) NOT NULL DEFAULT 0,
  `dc2` int(5) NOT NULL DEFAULT 0,
  `dc3` int(5) NOT NULL DEFAULT 0,
  `dc4` int(5) NOT NULL DEFAULT 0,
  `dc5` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forecast`
--

INSERT INTO `forecast` (`empidforforecaste`, `projectname`, `j1`, `ja2`, `ja3`, `ja4`, `ja5`, `fa1`, `fa2`, `fa3`, `fa4`, `ma1`, `ma2`, `ma3`, `ma4`, `ap1`, `ap2`, `ap3`, `ap4`, `ap5`, `my1`, `my2`, `my3`, `my4`, `jn1`, `jn2`, `jn3`, `jn4`, `jl1`, `jl2`, `jl3`, `jl4`, `jl5`, `au1`, `au2`, `au3`, `au4`, `sp1`, `sp2`, `sp3`, `sp4`, `ot1`, `ot2`, `ot3`, `ot4`, `ot5`, `no1`, `no2`, `no3`, `no4`, `dc1`, `dc2`, `dc3`, `dc4`, `dc5`) VALUES
(1002, 'LMS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `application_id` int(11) NOT NULL,
  `empid` int(100) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `leavetype` varchar(100) NOT NULL,
  `leavereason` varchar(100) NOT NULL,
  `leavefrom` date NOT NULL,
  `leaveupto` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectnames`
--

CREATE TABLE `projectnames` (
  `srno` int(5) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `createddatetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectnames`
--

INSERT INTO `projectnames` (`srno`, `projectname`, `createddatetime`) VALUES
(8, 'LMS', '2023-05-02 10:50:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD KEY `emp_id_fk` (`id`);

--
-- Indexes for table `empintime`
--
ALTER TABLE `empintime`
  ADD PRIMARY KEY (`srno`),
  ADD KEY `fk_intime` (`empid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `empouttime`
--
ALTER TABLE `empouttime`
  ADD PRIMARY KEY (`srno`),
  ADD KEY `fk_outtime` (`empid`);

--
-- Indexes for table `empwork`
--
ALTER TABLE `empwork`
  ADD KEY `emp_work` (`empid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `fk_leaves` (`empid`);

--
-- Indexes for table `projectnames`
--
ALTER TABLE `projectnames`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empintime`
--
ALTER TABLE `empintime`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `empouttime`
--
ALTER TABLE `empouttime`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `projectnames`
--
ALTER TABLE `projectnames`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empintime`
--
ALTER TABLE `empintime`
  ADD CONSTRAINT `fk_intime` FOREIGN KEY (`empid`) REFERENCES `employees` (`empid`);

--
-- Constraints for table `empouttime`
--
ALTER TABLE `empouttime`
  ADD CONSTRAINT `fk_outtime` FOREIGN KEY (`empid`) REFERENCES `employees` (`empid`);

--
-- Constraints for table `empwork`
--
ALTER TABLE `empwork`
  ADD CONSTRAINT `emp_work` FOREIGN KEY (`empid`) REFERENCES `employees` (`empid`);

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `fk_leaves` FOREIGN KEY (`empid`) REFERENCES `employees` (`empid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
