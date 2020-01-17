-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:52 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`username`, `password`) VALUES
('', 'bini'),
('bini', 'bini');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `facleave`
--

CREATE TABLE `facleave` (
  `name` varchar(20) NOT NULL,
  `leavereason` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facleave`
--

INSERT INTO `facleave` (`name`, `leavereason`, `fromdate`, `todate`) VALUES
('', '', '0000-00-00', '0000-00-00'),
('amitha', 'fever', '2020-01-18', '2020-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`username`, `password`) VALUES
('amitha', 'amitha');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `assignedbatch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `adress`, `dob`, `gender`, `qualification`, `mobile`, `username`, `password`, `assignedbatch`) VALUES
(0, '', '', '0000-00-00', '', 'qualificat', 0, '', '', 'assigned b'),
(1, 'amitha', 'orisys', '2020-01-09', 'female', 'btech cs', 987654321, 'amitha@gmail.com', 'amitha123', 'JSD2'),
(5, 'ananthu', 'orysis', '2020-01-11', 'male', 'bca', 123456789, 'anandhu', 'anandhu', 'ED'),
(10, 'john', 'orisys', '2020-01-08', 'male', 'btech cs', 8765432, 'john', 'john', 'FS');

-- --------------------------------------------------------

--
-- Table structure for table `stdmark`
--

CREATE TABLE `stdmark` (
  `stdid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `assno` int(11) NOT NULL,
  `sub1mark` int(11) NOT NULL,
  `sub2mark` int(11) NOT NULL,
  `sub3mark` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdmark`
--

INSERT INTO `stdmark` (`stdid`, `name`, `assno`, `sub1mark`, `sub2mark`, `sub3mark`, `percentage`) VALUES
(0, '', 0, 0, 0, 0, 0),
(10, 'bini', 0, 50, 48, 47, 50);

-- --------------------------------------------------------

--
-- Table structure for table `studapplyleave`
--

CREATE TABLE `studapplyleave` (
  `name` varchar(20) NOT NULL,
  `toadmin` varchar(20) NOT NULL,
  `leavereason` varchar(20) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studapplyleave`
--

INSERT INTO `studapplyleave` (`name`, `toadmin`, `leavereason`, `fromdate`, `todate`) VALUES
('', '', '', '0000-00-00', '0000-00-00'),
('athulya', 'amitha', 'fever', '2020-01-07', '2020-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `studattd`
--

CREATE TABLE `studattd` (
  `date` date NOT NULL,
  `stdid` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `hr1status` varchar(10) NOT NULL,
  `hr2status` varchar(10) NOT NULL,
  `hr3status` varchar(10) NOT NULL,
  `hr4status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studattd`
--

INSERT INTO `studattd` (`date`, `stdid`, `name`, `hr1status`, `hr2status`, `hr3status`, `hr4status`) VALUES
('0000-00-00', 0, '', '', '', '', 'hr4status'),
('2020-01-08', 10, 'bini', 'present', 'present', 'present', 'hr4status'),
('2020-01-14', 9, 'athulya', 'present', 'present', 'present', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `stdid` int(11) NOT NULL,
  `admno` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `admdate` date NOT NULL,
  `guardian` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`stdid`, `admno`, `name`, `address`, `dob`, `gender`, `mobile`, `admdate`, `guardian`, `batch`, `username`, `password`) VALUES
(0, 0, '', 'orysis', '2020-01-15', 'female', 123456789, '0000-00-00', '', '', 'anju', 'anju'),
(10, 10, 'bini', 'poovakunni', '2020-01-16', 'female', 2147483647, '0000-00-00', 'Babu', 'jss2', 'bini@gmail.com', 'bini'),
(0, 0, '', 'orysis', '2020-01-15', 'female', 123456789, '0000-00-00', '', '', 'anju', 'anju'),
(9, 9, 'athulya', 'orysis', '2020-01-21', 'female', 987654321, '2020-01-08', 'job', 'jsd2', 'rasha97', 'athulya'),
(0, 0, '', 'orysis', '2020-01-15', 'female', 123456789, '0000-00-00', '', '', 'anju', 'anju'),
(5, 5, 'anju', 'orysis', '2020-01-15', 'female', 123456789, '2020-01-10', 'kuryan', 'jsd', 'anju', 'anju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
