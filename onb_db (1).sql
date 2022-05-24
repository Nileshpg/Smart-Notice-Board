-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 11:08 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `SrNo` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `DateTime` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SrNo`, `Name`, `EMail`, `Subject`, `Message`, `DateTime`) VALUES
(1, '', 'rcpit23@gmail.com', '7030820545', 'dsdsdssdsdsdsd', '2021-07-02 19:46:08'),
(2, '', 'rcpit23@gmail.com', 'ramesh123', 'sdadsadsasd', '2021-07-02 19:46:55'),
(4, '', 'rcpit23@gmail.com', 'ramesh123', 'sdadsadsasd', '2021-07-02 19:48:39'),
(5, 'Satish Shah', 'satish@gmail.com', 'About Admission', 'I want details about Engineering admission', '2021-07-14 17:24:55'),
(6, 'Satish Shah', 'satish@gmail.com', 'About Admission', 'I want details about Engineering admission', '2021-07-14 17:25:36'),
(7, 'Satish Shah', 'satish@gmail.com', 'About Admission', 'I want details about Engineering admission', '2021-07-14 17:26:11'),
(8, 'Ramesh Shah', 'ramesh@gmail.com', 'About fees structure', 'want to know the fees structure for BCA', '2021-07-14 17:28:06'),
(9, 'Ramesh Shah', 'ramesh@gmail.com', 'About fees structure', 'want to know the fees structure for BCA', '2021-07-14 18:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `gen_notice`
--

CREATE TABLE IF NOT EXISTS `gen_notice` (
  `notice_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gen_notice`
--

INSERT INTO `gen_notice` (`notice_id`, `subject`, `Description`, `Date`, `file`) VALUES
(16, 'General Notice 1', 'General Notice for College New', '2021-07-02 17:14:23', 'target-1.png'),
(18, 'General Notice 2', 'This is Important for all students', '2021-07-02 18:24:06', 'book.png'),
(19, 'General Notice 3', 'This is fees notice', '2021-07-02 18:24:24', 'target.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `file` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `branch`, `sem`, `subject`, `Description`, `Date`, `file`, `category`) VALUES
(27, 'BCA', 'Sixth', 'Result for BCA 6th Sem', 'Result Declared for BCA last Sem', '2021-07-14 19:01:35', 'contract.png', 'Result'),
(28, 'MCA', 'Third', 'Result for MCA', 'Result Declared for MCA last Sem', '2021-07-14 19:02:11', 'credit-card.png', 'Holiday'),
(29, 'BCA', 'Sixth', 'Result for BCA 6th Sem', 'Result Declared for BCA last Sem', '2021-07-14 19:03:05', 'contract.png', 'Result');

-- --------------------------------------------------------

--
-- Table structure for table `stud_feedback`
--

CREATE TABLE IF NOT EXISTS `stud_feedback` (
  `SrNo` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `DateTime` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `branch` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_feedback`
--

INSERT INTO `stud_feedback` (`SrNo`, `Name`, `EMail`, `Subject`, `Message`, `DateTime`, `pic`, `branch`) VALUES
(5, 'Raman Shah', 'raman@gmail.com', 'Syllabus', 'I want syllabus for BCA', '2021-07-14 17:34:39', 'medicine-1.png', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobno` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `img` varchar(200) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `mobno`, `email`, `branch`, `password`, `img`, `datetime`, `status`) VALUES
(3, 'Sandesh Marathe', '9988005544', 'sandy@gmail.com', 'MCA', 'sandy', 'toursplaces.png', '2021-07-11 15:28:59', 'approved'),
(5, 'Rohan Sharma', '9988009988', 'rohan@gmail.com', 'BCA', 'rohan123', 'favourite.png', '2021-07-12 22:26:56', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_notice`
--

CREATE TABLE IF NOT EXISTS `teacher_notice` (
  `notice_id` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `tmail` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pic` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_notice`
--

INSERT INTO `teacher_notice` (`notice_id`, `tname`, `tmail`, `branch`, `sem`, `subject`, `Description`, `Date`, `file`, `type`, `pic`) VALUES
(9, '', '', 'MCA', 'Sixth', 'Notice for Annual Function', 'asdadsadasd', '2021-07-02 10:57:43', 'railway.sql', '', ''),
(10, '', '', 'MCA', 'Sixth', 'Notice for Annual Function', 'dasadasd', '2021-07-02 10:58:34', 'railway.sql', '', ''),
(11, '', '', 'MCA', 'Sixth', 'Notice for Annual Function', 'asdasdad', '2021-07-02 11:00:21', 'railway.sql', '', ''),
(13, '', '', 'MCA', 'Sixth', 'Notice for Annual Function', 'sdasdasdads', '2021-07-02 11:02:16', 'railway.sql', '', ''),
(14, '', '', 'MCA', 'Sixth', 'Notice for Annual Function', 'sdfsadfasdf', '2021-07-02 11:04:02', 'railway.sql', '', ''),
(15, '', '', 'BCA', 'First', 'Notice for Annual Function', 'Annual function is organised college', '2021-07-02 11:08:46', 'locations.png', '', ''),
(16, 'sandy@gmail.com', 'Raman Shah', 'MCA', 'Fourth', 'Compiler Design PPT', 'I want syllabus for BCA', '2021-07-14 18:01:00', 'bitcoin-1.png', 'Notes', 'toursplaces.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `regid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `branch`, `sem`, `email`, `pass`, `mobile`, `gender`, `image`, `dob`, `regid`, `status`) VALUES
(21, 'Pratik Hajare', 'MCA', 'Sixth', 'pratik@gmail.com', 'f3add7844edc45f645a9f948970bf0c6', 7030820545, 'Male', 'hotel.png', '2000-02-01 00:00:00', 2147483647, 'approved'),
(22, 'Raman Shah', 'BCA', 'Second', 'raman@gmail.com', 'raman123', 1122334455, 'Male', 'medicine-1.png', '2000-10-10 00:00:00', 2147483647, 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `gen_notice`
--
ALTER TABLE `gen_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `stud_feedback`
--
ALTER TABLE `stud_feedback`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_notice`
--
ALTER TABLE `teacher_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gen_notice`
--
ALTER TABLE `gen_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `stud_feedback`
--
ALTER TABLE `stud_feedback`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teacher_notice`
--
ALTER TABLE `teacher_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
